<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Add some fields to fe_users table to show TCA fields definitions
ExtensionManagementUtility::addTCAcolumns('fe_users',
    [
        'tx_ext_scaffold_options' => [
            'exclude' => 0,
            'label' => 'tx_ext_scaffold_options',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['',0,],
                    ['tx_ext_scaffold_options.I.0',1,],
                    ['tx_ext_scaffold_options.I.1',2,],
                    ['tx_ext_scaffold_options.I.2','--div--',],
                    ['tx_ext_scaffold_options.I.3',3,],
                ],
                'size' => 1,
                'maxitems' => 1,
            ],
        ],
        'tx_ext_scaffold_special' => [
            'exclude' => 0,
            'label' => 'tx_ext_scaffold_special',
            'config' => [
                'type' => 'user',
                // renderType needs to be registered in ext_localconf.php
                'renderType' => 'specialField',
                'parameters' => [
                    'size' => '30',
                    'color' => '#F49700',
                ],
            ],
        ],
    ]
);
ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    'tx_ext_scaffold_options, tx_ext_scaffold_special'
);