<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */

use Templating\Generator\Task\IconRenderTask;
use Templating\View\Icon\BootstrapIcon;
use Templating\View\Icon\FeatherIcon;
use Templating\View\Icon\FontAwesome4Icon;
use Templating\View\Icon\MaterialIcon;

return [
    'IdeHelper' => [
        'plugins' => [
            'Shim',
        ],
        'arrayAsGenerics' => true,
        'objectAsGenerics' => true,
        'templateCollectionObject' => 'iterable',
        'annotators' => [
        ],
        'generatorTasks' => [
            IconRenderTask::class,
        ],
        'classAnnotatorTasks' => [
        ],
        'illuminatorTasks' => [
        ],
        'includedPlugins' => [
        ],
        'typeMap' => [
        ],
    ],

    'Icon' => [
        'sets' => [
            'fa' => [
                'class' => FontAwesome4Icon::class,
                'path' => WWW_ROOT . 'assets/font-awesome/less/variables.less',
            ],
            'bs' => [
                'class' => BootstrapIcon::class,
                'path' => WWW_ROOT . 'assets/bootstrap-icons/font/bootstrap-icons.json',
            ],
            'material' => [
                'class' => MaterialIcon::class,
                'path' => WWW_ROOT . 'assets/material-symbols/index.d.ts',
                'namespace' => 'material-symbols-outlined',
            ],
            'feather' => [
                'class' => FeatherIcon::class,
                'path' => WWW_ROOT . 'assets/feather-icons/dist/icons.json',
            ],
        ],
        'map' => [
            'add' => 'fa:plus',
            'view' => 'fa:eye',
            'delete' => 'fa:times',
            'yes' => 'fa:check',
            'no' => 'fa:times',
            'see' => 'fa:eye',
            'details' => 'fa:chevron-right',
            'admin' => 'fa:shield',
            'login' => 'fa:sign-in',
            'logout' => 'fa:sign-out',
            'translate' => 'fa:language',
            'prev' => 'fa:arrow-left',
            'next' => 'fa:arrow-right',
            'chart-bar' => 'fa:bar-chart',
            'pro' => 'fa:thumbs-up',
            'contra' => 'fa:thumbs-down',
        ],
        //'checkExistence' => true,
    ],

    'Queue' => [
        //'serializerClass' => JsonSerializer::class,
        'sleeptime' => 5,
        'gcprob' => 10,
        'maxworkers' => 3,
        // time (in seconds) after which a job is requeued if the worker doesn't report back
        'defaultworkertimeout' => 1800,
        // number of retries if a job fails or times out.
        'defaultworkerretries' => 1,
        // seconds of running time after which the worker will terminate (0 = unlimited)
        'workermaxruntime' => 125,
        // instruct a Workerprocess quit when there are no more tasks for it to execute (true = exit, false = keep running)
        'exitwhennothingtodo' => false,
        // minimum time (in seconds) which a task remains in the database before being cleaned up.
        'cleanuptimeout' => 2592000, // 30 days
    ],

];

