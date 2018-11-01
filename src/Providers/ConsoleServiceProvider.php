<?php

namespace Fszsoft\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Fszsoft\Modules\Commands\CommandMakeCommand;
use Fszsoft\Modules\Commands\ControllerMakeCommand;
use Fszsoft\Modules\Commands\DisableCommand;
use Fszsoft\Modules\Commands\DumpCommand;
use Fszsoft\Modules\Commands\EnableCommand;
use Fszsoft\Modules\Commands\EventMakeCommand;
use Fszsoft\Modules\Commands\FactoryMakeCommand;
use Fszsoft\Modules\Commands\InstallCommand;
use Fszsoft\Modules\Commands\JobMakeCommand;
use Fszsoft\Modules\Commands\ListCommand;
use Fszsoft\Modules\Commands\ListenerMakeCommand;
use Fszsoft\Modules\Commands\MailMakeCommand;
use Fszsoft\Modules\Commands\MiddlewareMakeCommand;
use Fszsoft\Modules\Commands\MigrateCommand;
use Fszsoft\Modules\Commands\MigrateRefreshCommand;
use Fszsoft\Modules\Commands\MigrateResetCommand;
use Fszsoft\Modules\Commands\MigrateRollbackCommand;
use Fszsoft\Modules\Commands\MigrateStatusCommand;
use Fszsoft\Modules\Commands\MigrationMakeCommand;
use Fszsoft\Modules\Commands\ModelMakeCommand;
use Fszsoft\Modules\Commands\ModuleMakeCommand;
use Fszsoft\Modules\Commands\NotificationMakeCommand;
use Fszsoft\Modules\Commands\PolicyMakeCommand;
use Fszsoft\Modules\Commands\ProviderMakeCommand;
use Fszsoft\Modules\Commands\PublishCommand;
use Fszsoft\Modules\Commands\PublishConfigurationCommand;
use Fszsoft\Modules\Commands\PublishMigrationCommand;
use Fszsoft\Modules\Commands\PublishTranslationCommand;
use Fszsoft\Modules\Commands\RequestMakeCommand;
use Fszsoft\Modules\Commands\ResourceMakeCommand;
use Fszsoft\Modules\Commands\RouteProviderMakeCommand;
use Fszsoft\Modules\Commands\RuleMakeCommand;
use Fszsoft\Modules\Commands\SeedCommand;
use Fszsoft\Modules\Commands\SeedMakeCommand;
use Fszsoft\Modules\Commands\SetupCommand;
use Fszsoft\Modules\Commands\TestMakeCommand;
use Fszsoft\Modules\Commands\UnUseCommand;
use Fszsoft\Modules\Commands\UpdateCommand;
use Fszsoft\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

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
