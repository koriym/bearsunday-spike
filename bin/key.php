<?php

require dirname(__DIR__) . '/autoload.php';

$resource = (new \BEAR\Package\AppInjector('MyVendor\MyProject', 'app'))->getInstance(\BEAR\Resource\ResourceInterface::class);
assert($resource instanceof \BEAR\Resource\ResourceInterface);
$ro = $resource->get('/key/');
foreach ($ro as $item) {
    var_dump($item);
}
