<?php
/**
 * Copyright (c) 2014 Michael Dowling, https://github.com/mtdowling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace LT\eBaySDK\JmesPath;

/**
 * Provides CLI debugging information for the AST and Compiler runtimes.
 */
class DebugRuntime
{
    private $runtime;
    private $out;
    private $lexer;
    private $parser;

    public function __construct(callable $runtime, $output = null)
    {
        $this->runtime = $runtime;
        $this->out = $output ?: STDOUT;
        $this->lexer = new Lexer();
        $this->parser = new Parser($this->lexer);
    }

    public function __invoke($expression, $data)
    {
        if ($this->runtime instanceof CompilerRuntime) {
            return $this->debugCompiled($expression, $data);
        }

        return $this->debugInterpreted($expression, $data);
    }

    private function debugInterpreted($expression, $data)
    {
        return $this->debugCallback(
            function () use ($expression, $data) {
                $runtime = $this->runtime;
                return $runtime($expression, $data);
            },
            $expression,
            $data
        );
    }

    private function debugCompiled($expression, $data)
    {
        $result = $this->debugCallback(
            function () use ($expression, $data) {
                $runtime = $this->runtime;
                return $runtime($expression, $data);
            },
            $expression,
            $data
        );
        $this->dumpCompiledCode($expression);

        return $result;
    }

    private function dumpTokens($expression)
    {
        $lexer = new Lexer();
        fwrite($this->out, "Tokens\n======\n\n");
        $tokens = $lexer->tokenize($expression);

        foreach ($tokens as $t) {
            fprintf(
                $this->out,
                "%3d  %-13s  %s\n", $t['pos'], $t['type'],
                json_encode($t['value'])
            );
        }

        fwrite($this->out, "\n");
    }

    private function dumpAst($expression)
    {
        $parser = new Parser();
        $ast = $parser->parse($expression);
        fwrite($this->out, "AST\n========\n\n");
        fwrite($this->out, json_encode($ast, JSON_PRETTY_PRINT) . "\n");
    }

    private function dumpCompiledCode($expression)
    {
        fwrite($this->out, "Code\n========\n\n");
        $dir = sys_get_temp_dir();
        $hash = md5($expression);
        $functionName = "jmespath_{$hash}";
        $filename = "{$dir}/{$functionName}.php";
        fwrite($this->out, "File: {$filename}\n\n");
        fprintf($this->out, file_get_contents($filename));
    }

    private function debugCallback(callable $debugFn, $expression, $data)
    {
        fprintf($this->out, "Expression\n==========\n\n%s\n\n", $expression);
        $this->dumpTokens($expression);
        $this->dumpAst($expression);
        fprintf($this->out, "\nData\n====\n\n%s\n\n", json_encode($data, JSON_PRETTY_PRINT));
        $startTime = microtime(true);
        $result = $debugFn();
        $total = microtime(true) - $startTime;
        fprintf($this->out, "\nResult\n======\n\n%s\n\n", json_encode($result, JSON_PRETTY_PRINT));
        fwrite($this->out, "Time\n====\n\n");
        fprintf($this->out, "Total time:     %f ms\n\n", $total);

        return $result;
    }
}
