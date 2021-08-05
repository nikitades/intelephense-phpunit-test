<?php

declare(strict_types=1);

namespace App\Test;

use App\AnotherClass;
use App\SomeClass;
use PHPUnit\Framework\TestCase;

class SomeClassTest extends TestCase
{
    public function testOk(): void
    {
        $someClass = new SomeClass(
            anotherClass: $this->createMock(AnotherClass::class)
        );
        
        static::assertEquals('ok', $someClass->ok());
    }
}