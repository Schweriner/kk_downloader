<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['kk_downloader_pi1'] = 'layout,select_key';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['kkdownloader_pi1'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'kkdownloader_pi1',
    'FILE:EXT:kk_downloader/Configuration/FlexForms/KkDownloader.xml'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:kk_downloader/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
        'kkdownloader_pi1'
    ],
    'list_type',
    'kk_downloader'
);
