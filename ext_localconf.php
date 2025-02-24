<?php

use Passionweb\IconApi\Controller\IconController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'IconApi',
    'IconProvider',
    [
        IconController::class => 'assignIcons'
    ],
    [
        IconController::class => 'assignIcons'
    ],
);