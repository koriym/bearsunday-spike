<?php
namespace MyVendor\MyProject\Resource\Page\Key;

use BEAR\Resource\ResourceObject;

class Index extends ResourceObject implements \IteratorAggregate
{
    public $body = [
        'article' => [
            'key1' => 'val1',
            'key2' => 'val2',
            'key3' => 'val3',
        ],
        'pager' => 'pager'
    ];

    public function onGet() : ResourceObject
    {
        return $this;
    }

    /**
     * foreachすると$this->bodyではなく$this->body['article']をイテレート
     */
    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->body['article']);
    }


}
