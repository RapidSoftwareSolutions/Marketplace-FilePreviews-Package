<?php
$routes = [
    'metadata',
    'createPreview',
    'getPreview',
    'webhookEvent'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

