<?php 

namespace App\Providers;

use Spatie\Ignition\Ignition;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

class AppServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    public function boot(): void
    {
        // @todo only do this when debug is enabled
        Ignition::make()->register();
    }

    public function register(): void
    {

        $this->getContainer()->add('logger', function(){
            return 'App';
        });
    }

    public function provides(string $id): bool
    {
        $services = [
            'logger'
        ];

        return in_array($id, $services);

    }
}

