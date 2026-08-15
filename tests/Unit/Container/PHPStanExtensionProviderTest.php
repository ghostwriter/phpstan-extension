<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Container\Interface\Service\ProviderInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Ghostwriter\PHPStanExtension\Container\PHPStanExtensionProvider;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;
use Throwable;

#[CoversClass(PHPStanExtensionProvider::class)]
final class PHPStanExtensionProviderTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testExtendsGhostwriterContainerServiceProviderAbstractProvider(): void
    {
        self::assertClassExtendsClass(PHPStanExtensionProvider::class, AbstractProvider::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterContainerInterfaceServiceProviderInterface(): void
    {
        self::assertClassImplementsInterface(PHPStanExtensionProvider::class, ProviderInterface::class);
    }
}
