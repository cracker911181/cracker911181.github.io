<?php
$aContext = array(
    'http' => array(
        'proxy' => 'proxy:8080',
        'request_fulluri' => true,
    ),
);
$cxContext = stream_context_create($aContext);

$sFile = file_get_contents("http://www.google.com", False, $cxContext);

echo $sFile;
?>
