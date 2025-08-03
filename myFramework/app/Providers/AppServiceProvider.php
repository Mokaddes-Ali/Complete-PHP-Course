<?php 

namespace App\Providers;

use Spatie\Ignition\Ignition;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;
use App\Core\Example;

class AppServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    public function boot(): void
    {
        // @todo only do this when debug is enabled
        Ignition::make()->register();
    }

    public function register(): void
    {

        // $this->getContainer()->add('logger', function(){
        //     return 'Hello App Test';
        // });
        // $this->getContainer()->add(Example::class, function(){
        //     return 'Example::class Test';
        // });


        // Auto Register by AutoWiring

    }

    public function provides(string $id): bool
    {
        $services = [
            // 'logger'
            // Example::class
        ];

        return in_array($id, $services);

    }
}

