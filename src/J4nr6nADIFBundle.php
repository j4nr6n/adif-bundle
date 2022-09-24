<?php

namespace j4nr6n\ADIFBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class J4nr6nADIFBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
