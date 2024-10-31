<?php
/**
 * @license GPL-2.0-only
 *
 * Modified by kadencewp on 29-May-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace KadenceWP\KadenceStarterTemplates\StellarWP\ProphecyMonorepo\Log\Handlers;

use KadenceWP\KadenceStarterTemplates\Monolog\Handler\AbstractHandler;

/**
 * Black hole.
 *
 * Any record it can handle will be thrown away.
 */
final class NullHandler extends AbstractHandler
{
	public function handle(array $record): bool {
		return $record['level'] >= $this->level;
	}
}
