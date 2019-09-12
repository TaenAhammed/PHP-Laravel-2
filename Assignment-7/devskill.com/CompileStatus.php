<?php

interface ICompileStatus
{
    public function getCompileStatus();
}


class CompileStatus implements ICompileStatus
{
    public function __construct(ICompiler $compiler)
    { }

    public function getCompileStatus()
    { }
}
