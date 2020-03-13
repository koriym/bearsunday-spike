<?php
namespace MyVendor\MyProject\Resource\Page\Loop;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Loop1 extends ResourceObject
{
    use ResourceInject;

    public function onGet() : ResourceObject
    {
        foreach (range(1, 5) as $i) {
            $this->body[(string) $i] = $this->resource->get('/', ['name' => (string) $i]);
        }

        return $this;
    }
}
