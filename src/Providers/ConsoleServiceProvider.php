<?php

namespace Larabile\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Larabile\Modules\Commands\CommandMakeCommand;
use Larabile\Modules\Commands\ControllerMakeCommand;
use Larabile\Modules\Commands\DisableCommand;
use Larabile\Modules\Commands\DumpCommand;
use Larabile\Modules\Commands\EnableCommand;
use Larabile\Modules\Commands\EventMakeCommand;
use Larabile\Modules\Commands\FactoryMakeCommand;
use Larabile\Modules\Commands\InstallCommand;
use Larabile\Modules\Commands\JobMakeCommand;
use Larabile\Modules\Commands\LaravelModulesV6Migrator;
use Larabile\Modules\Commands\ListCommand;
use Larabile\Modules\Commands\ListenerMakeCommand;
use Larabile\Modules\Commands\MailMakeCommand;
use Larabile\Modules\Commands\MiddlewareMakeCommand;
use Larabile\Modules\Commands\MigrateCommand;
use Larabile\Modules\Commands\MigrateRefreshCommand;
use Larabile\Modules\Commands\MigrateResetCommand;
use Larabile\Modules\Commands\MigrateRollbackCommand;
use Larabile\Modules\Commands\MigrateStatusCommand;
use Larabile\Modules\Commands\MigrationMakeCommand;
use Larabile\Modules\Commands\ModelMakeCommand;
use Larabile\Modules\Commands\ModuleMakeCommand;
use Larabile\Modules\Commands\NotificationMakeCommand;
use Larabile\Modules\Commands\PolicyMakeCommand;
use Larabile\Modules\Commands\ProviderMakeCommand;
use Larabile\Modules\Commands\PublishCommand;
use Larabile\Modules\Commands\PublishConfigurationCommand;
use Larabile\Modules\Commands\PublishMigrationCommand;
use Larabile\Modules\Commands\PublishTranslationCommand;
use Larabile\Modules\Commands\RequestMakeCommand;
use Larabile\Modules\Commands\ResourceMakeCommand;
use Larabile\Modules\Commands\RouteProviderMakeCommand;
use Larabile\Modules\Commands\RuleMakeCommand;
use Larabile\Modules\Commands\SeedCommand;
use Larabile\Modules\Commands\SeedMakeCommand;
use Larabile\Modules\Commands\SetupCommand;
use Larabile\Modules\Commands\TestMakeCommand;
use Larabile\Modules\Commands\UnUseCommand;
use Larabile\Modules\Commands\UpdateCommand;
use Larabile\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
        LaravelModulesV6Migrator::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
