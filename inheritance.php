<?php

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key){
        return array_sum(array_map(fn($item) => $item->$key, $this->items));
    }
}

class VideosCollection extends Collection
{
    public function length(){
        return $this->sum('length');
    }
}

class Video
{
    public string $title;
    public float $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$collection = new VideosCollection([
    new Video('Some Video', 100),
    new Video('Some Video', 600),
    new Video('Some Video', 3),
]);

echo $collection->sum('length');