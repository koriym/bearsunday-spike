<?php
namespace MyVendor\MyProject\Resource\Page\Loop;

use BEAR\Resource\Annotation\Link;
use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Loop2 extends ResourceObject
{
    use ResourceInject;

    /**
     * @Link(rel="greeting", href="page://self/index")
     */
    public function onGet() : ResourceObject
    {
        foreach (range(1, 5) as $i) {
            $resource = clone $this->resource;
            $this->body[(string) $i] = $resource->href('greeting', ['name' => (string) $i]);
        }

        return $this;
    }
}
