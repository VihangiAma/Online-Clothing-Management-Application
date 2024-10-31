<?php
/**
 * @license GPL-2.0-only
 *
 * Modified by kadencewp on 29-May-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace KadenceWP\KadenceStarterTemplates\StellarWP\ProphecyMonorepo\Storage\Exceptions;

use Exception;

final class NotFoundException extends StorageException
{
	public static function pathNotFound(string $path, ?Exception $previous = null): NotFoundException {
		return new self(sprintf('The path "%s" does not exist', $path), 0, $previous);
	}
}
