<?php

declare(strict_types=1);

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Commands;

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */

    'namespace' => 'Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */

    'stubs' => [
        'enabled' => true,
        'path' => base_path('stubs/api'),
        'files' => [
            'routes/api' => 'Routes/api.php',
            'scaffold/config' => 'Config/config.php',
            'composer' => 'composer.json',
        ],
        'replacements' => [
            'routes/web' => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/api' => ['LOWER_NAME'],
            'vite' => ['LOWER_NAME'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
            ],
        ],
        'gitkeep' => true,
    ],
    'paths' => [

        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path used for save the generated module. This path also will be added
        | automatically to list of scanned folders.
        |
        */

        'modules' => base_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),

        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */

        'generator' => [
            // Configuration.
            'config' => ['path' => 'Config', 'generate' => true],

            // Providers.
            'provider' => ['path' => 'Providers', 'generate' => true],

            // Entities.
            'model' => ['path' => 'Entities', 'generate' => true],

            // Data storage.
            'migration' => ['path' => 'Database/Migrations', 'generate' => true],
            'factory' => ['path' => 'Database/Factories', 'generate' => true],
            'seeder' => ['path' => 'Database/Seeders', 'generate' => true],
            'repository' => ['path' => 'Repositories', 'generate' => true],

            // Business logic.
            'routes' => ['path' => 'Routes', 'generate' => true],
            'filter' => ['path' => 'Http/Middleware', 'generate' => false],
            'request' => ['path' => 'Http/Requests', 'generate' => false],
            'data-transfer-objects' => ['path' => 'DataTransferObjects', 'generate' => true],
            'policies' => ['path' => 'Policies', 'generate' => false],
            'controller' => ['path' => 'Http/Controllers', 'generate' => true],
            'command' => ['path' => 'Console', 'generate' => false],
            'jobs' => ['path' => 'Jobs', 'generate' => false],
            'actions' => ['path' => 'Actions', 'generate' => true],
            'tasks' => ['path' => 'Tasks', 'generate' => true],
            'exceptions' => ['path' => 'Exceptions', 'generate' => true],

            // Events.
            'event' => ['path' => 'Events', 'generate' => false],
            'listener' => ['path' => 'Listeners', 'generate' => false],

            // Data transformation.
            'resource' => ['path' => 'Transformers', 'generate' => true],

            // Localization.
            'lang' => ['path' => 'Resources/lang', 'generate' => true],

            // Rules.
            'rules' => ['path' => 'Rules', 'generate' => false],

            // Notice.
            'emails' => ['path' => 'Emails', 'generate' => false],
            'notifications' => ['path' => 'Notifications', 'generate' => false],

            // Views.
            'views' => ['path' => 'Resources/views', 'generate' => false],
            'assets' => ['path' => 'Resources/assets', 'generate' => false],
            'component-view' => ['path' => 'Resources/views/components', 'generate' => false],
            'component-class' => ['path' => 'View/Components', 'generate' => false],

            // Testing.
            'test-feature' => ['path' => 'Tests/Feature', 'generate' => true],
            'test' => ['path' => 'Tests/Unit', 'generate' => true],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. If for example you don't use some of the commands provided
    | you can simply comment them out.
    |
    */

    'commands' => [
        Commands\CommandMakeCommand::class,
        Commands\ComponentClassMakeCommand::class,
        Commands\ComponentViewMakeCommand::class,
        Commands\ControllerMakeCommand::class,
        Commands\DisableCommand::class,
        Commands\DumpCommand::class,
        Commands\EnableCommand::class,
        Commands\EventMakeCommand::class,
        Commands\JobMakeCommand::class,
        Commands\ListenerMakeCommand::class,
        Commands\MailMakeCommand::class,
        Commands\MiddlewareMakeCommand::class,
        Commands\NotificationMakeCommand::class,
        Commands\ProviderMakeCommand::class,
        Commands\RouteProviderMakeCommand::class,
        Commands\InstallCommand::class,
        Commands\ListCommand::class,
        Commands\ModuleDeleteCommand::class,
        Commands\ModuleMakeCommand::class,
        Commands\FactoryMakeCommand::class,
        Commands\PolicyMakeCommand::class,
        Commands\RequestMakeCommand::class,
        Commands\RuleMakeCommand::class,
        Commands\MigrateCommand::class,
        Commands\MigrateFreshCommand::class,
        Commands\MigrateRefreshCommand::class,
        Commands\MigrateResetCommand::class,
        Commands\MigrateRollbackCommand::class,
        Commands\MigrateStatusCommand::class,
        Commands\MigrationMakeCommand::class,
        Commands\ModelMakeCommand::class,
        Commands\PublishCommand::class,
        Commands\PublishConfigurationCommand::class,
        Commands\PublishMigrationCommand::class,
        Commands\PublishTranslationCommand::class,
        Commands\SeedCommand::class,
        Commands\SeedMakeCommand::class,
        Commands\SetupCommand::class,
        Commands\UnUseCommand::class,
        Commands\UpdateCommand::class,
        Commands\UseCommand::class,
        Commands\ResourceMakeCommand::class,
        Commands\TestMakeCommand::class,
        Commands\LaravelModulesV6Migrator::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */

    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for composer.json file, generated by this package
    |
    */

    'composer' => [
        'vendor' => 'zdravstvuy1714',
        'author' => [
            'name' => 'Eugene Musienko',
            'email' => 'zdravstvuy1714@gmail.com',
        ],
        'composer-output' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | Here is the config for setting up caching feature.
    |
    */

    'cache' => [
        'enabled' => false,
        'driver' => env('MODULES_CACHE_DRIVER', 'file'),
        'key' => 'laravel-modules',
        'lifetime' => 60,
    ],

    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */

    'register' => [
        'translations' => true,

        /**
         * load files on boot or register method
         *
         * Note: boot not compatible with asgardcms
         *
         * @example boot|register
         */
        'files' => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */

    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
            'cache-key' => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];
