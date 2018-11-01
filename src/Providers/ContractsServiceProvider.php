<?php

namespace Fszsoft\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Fszsoft\Modules\Contracts\RepositoryInterface;
use Fszsoft\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
