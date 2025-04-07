<?php

namespace Src;
final class mytest
{
    public string $var = "";
    public function __construct()
    {
        $this->var = "Hello world";
    }
    public function speak()
    {
        echo $this->var;
    }
}
