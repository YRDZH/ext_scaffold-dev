<?php
use FluidTYPO3\Flux\Core;
use Vendor\Extension\Form\Element\LollisCustomMapElement;

defined('TYPO3_MODE') || die();
Core::registerProviderExtensionKey('Helhum.ExtScaffold','Page');
Core::registerProviderExtensionKey('Helhum.ExtScaffold','Content');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1625516271] = [
    'nodeName' => 'lollisCustomMapElement',
    'priority' => 40,
    'class' => LollisCustomMapElement::class,
];
// Add new field type to NodeFactory
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1487112284] = [
    'nodeName' => 'selectTagCloud',
    'priority' => '70',
    'class' => \Vendor\CoolTagCloud\Form\Element\SelectTagCloudElement::class,
];
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'ext_scaffold';