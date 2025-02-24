<?php

return [
    'web_examplebackendmodule' => [
        'parent' => 'web',
        'position' => ['after' => 'web_info'],
        'access' => 'user',
        'workspaces' => 'live',
        'path' => '/module/page/example-backend-module',
        'icon'   => 'EXT:icon_api/Resources/Public/Icons/Extension.svg',
        'labels' => 'LLL:EXT:icon_api/Resources/Private/Language/locallang_mod.xlf',
        'extensionName' => 'IconApi',
        'controllerActions' => [
            \Passionweb\IconApi\Controller\BackendController::class => 'javascriptIcons',
        ],
    ]
];