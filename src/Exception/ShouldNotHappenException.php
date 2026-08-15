<?php

declare(strict_types=1);

namespace Ghostwriter\PHPStanExtension\Exception;

use Ghostwriter\PHPStanExtension\Interface\PHPStanExtensionExceptionInterface;
use LogicException;

final class ShouldNotHappenException extends LogicException implements PHPStanExtensionExceptionInterface {}
