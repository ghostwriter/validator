<?php

declare(strict_types=1);

namespace Ghostwriter\Validator\Container;

use Ghostwriter\Container\Interface\BuilderInterface;
use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Override;
use Throwable;

/**
 * @see ValidatorProviderTest
 */
final readonly class ValidatorProvider extends AbstractProvider
{
    /**
     * @throws Throwable
     */
    #[Override]
    public function boot(ContainerInterface $container): void
    {
    }
    /**
     * @throws Throwable
     */
    #[Override]
    public function register(BuilderInterface $builder): void
    {
    }
}
