<?php
namespace MyVendor\MyProject\Resource\Page\Loop;

use BEAR\Resource\Annotation\Link;
use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Loop4 extends ResourceObject
{
    use ResourceInject;

    public function onGet() : ResourceObject
    {
        $request = $this->resource->get->uri('/');
        foreach (range(1, 5) as $i) {
            $this->body[(string) $i] = $request(['name' => (string) $i]);
        }

        return $this;
    }
}
