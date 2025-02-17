<?php
if ( function_exists( 'wfLoadExtension' ) ) {
    wfLoadExtension( 'WikiSEO' );
    // Keep i18n globals so mergeMessageFileList.php doesn't break
    $wgMessagesDirs['WikiSEO'] = __DIR__ . '/i18n';
    wfWarn(
        'Deprecated PHP entry point used for WikiSEO extension. Please use wfLoadExtension instead, ' .
        'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
    );
    return;
} else {
    die( 'This version of the WikiSEO extension requires MediaWiki 1.27+' );
}
