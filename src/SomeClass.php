<?php

declare(strict_types=1);

namespace App;

class SomeClass
{
    public function __construct(
        private AnotherClass $anotherClass
    ) {
    }

    public function ok(): string
    {
        return $this->anotherClass->ok();
    }
}
