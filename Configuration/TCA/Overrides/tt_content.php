<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

$pluginKey = ExtensionUtility::registerPlugin(
    'IconApi',
    'IconProvider',
    'LLL:EXT:icon_api/Resources/Private/Language/locallang.xlf:plugin.iconProvider',
    'tx-passionweb-svg'
);
