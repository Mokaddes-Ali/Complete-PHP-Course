<?php 

namespace App\Providers;

use Spatie\Ignition\Ignition;
use Illuminate\Support\Facades\Config;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

class ConfigServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    public function boot(): void
    {
        // @todo only do this when debug is enabled
        Ignition::make()->register();
    }

    public function register(): void
    {
        $this->getContainer()->add(Config::class, function () {
            return Config::getFacadeRoot(); 
        });
    }

    public function provides(string $id): bool
    {
        $services = [
            Config::class
        ];

        return in_array($id, $services, true);
    }
}

