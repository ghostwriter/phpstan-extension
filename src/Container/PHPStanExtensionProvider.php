<?php

declare(strict_types=1);

namespace Ghostwriter\PHPStanExtension\Container;

use Ghostwriter\Container\Interface\Service\ExtensionInterface;
use Ghostwriter\Container\Interface\Service\FactoryInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;

/**
 * @see PHPStanExtensionProviderTest
 */
final class PHPStanExtensionProvider extends AbstractProvider
{
    /**
     * [alias => service].
     *
     * @var array<class-string,class-string>
     */
    public const array ALIAS = [];

    /**
     * [concrete => [abstract => implementation]].
     *
     * @var array<class-string,array<class-string,class-string>>
     */
    public const array BIND = [];

    /**
     * [service => [extension, ...]].
     *
     * @var array<class-string,list<class-string<ExtensionInterface>>>
     */
    public const array EXTEND = [];

    /**
     * [service => factory].
     *
     * @var array<class-string,class-string<FactoryInterface>>
     */
    public const array FACTORY = [];
}
