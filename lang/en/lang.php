<?php

return [

    //
    // Plugin
    //
    'plugin' => [
        'name' => 'Web Hooks',
        'description' => 'Create web hooks to integrate your application with external services.',
    ],

    //
    // Hooks
    //
    'hooks' => [
        'controller' => 'Web Hooks',
        'copied_to_clipboard' => 'Copied webhook to clipboard!',
        'list_title' => 'Manage Web Hooks',
        'model' => 'Hook',
        'columns' => [
            'name' => 'Name',
            'directory' => 'Directory',
            'executed_at' => 'Last executed',
            'logs_count' => 'Logs',
            'url' => 'URL',
        ],
        'form' => [
            'directory_label' => 'Execute from directory',
            'directory_placeholder' => '~',
            'name_label' => 'Name',
            'name_placeholder' => 'Enter a name...',
        ],
        'tabs' => [
            'script' => 'Script',
        ],
    ],

    //
    // Responses
    //
    'responses' => [
        'ok' => 'OK',
        'failed' => 'FAILED',
        '404' => 'No such webhook.',
    ],
];
