<?php

declare(strict_types=1);

namespace Tests\Unit\Exception;

use Exception;
use Ghostwriter\PHPStanExtension\Exception\ShouldNotHappenException;
use Ghostwriter\PHPStanExtension\Interface\PHPStanExtensionExceptionInterface;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use LogicException;
use PHPUnit\Framework\Attributes\CoversClass;
use Stringable;
use Tests\Unit\AbstractTestCase;
use Throwable;

#[CoversClass(ShouldNotHappenException::class)]
final class ShouldNotHappenExceptionTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testExtendsException(): void
    {
        self::assertClassExtendsClass(ShouldNotHappenException::class, Exception::class);
    }

    /** @throws Throwable */
    public function testExtendsLogicException(): void
    {
        self::assertClassExtendsClass(ShouldNotHappenException::class, LogicException::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterPHPStanExtensionInterfacePHPStanExtensionExceptionInterface(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, PHPStanExtensionExceptionInterface::class);
    }

    /** @throws Throwable */
    public function testImplementsStringable(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, Stringable::class);
    }

    /** @throws Throwable */
    public function testImplementsThrowable(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, Throwable::class);
    }
}
