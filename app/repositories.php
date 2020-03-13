<?php
declare(strict_types=1);

use App\Domain\User\UserRepository;
use App\Infrastructure\Persistence\User\InMemoryUserRepository;
use App\Domain\Jobdating\JobdatingRepository;
use App\Infrastructure\Persistence\Jobdating\InMemoryJobdatingRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        UserRepository::class => \DI\autowire(InMemoryUserRepository::class),
        JobdatingRepository::class => \DI\autowire(InMemoryJobdatingRepository::class),
    ]);
};
