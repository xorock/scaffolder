<?php
/**
 * Spiral Framework. Scaffolder
 *
 * @license MIT
 * @author  Valentin V (vvval)
 */
declare(strict_types=1);

use Spiral\Scaffolder\Command;

return [
    'commands' => [
        Command\Database\EntityCommand::class,
        Command\Database\RepositoryCommand::class,
        Command\CommandCommand::class,
        Command\ControllerCommand::class,
        Command\FilterCommand::class,
        Command\MiddlewareCommand::class,
        Command\MigrationCommand::class,
    ]
];