<?php

namespace Larabile\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Larabile\Modules\Contracts\RepositoryInterface;
use Larabile\Modules\Laravel\LaravelFileRepository;

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
