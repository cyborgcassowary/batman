<?php

class Batman {
    var $songtitle;
    var $lyrics;

    public function __construct($songtitle, $lyrics) {
        $this->songtitle = $songtitle;
        $this->lyrics = $lyrics;
    }

    public function add($songtitle, Batman $Batman)
    {
        $this->BatmanSings[$songtitle] = $Batman;
    }
}

class SongList {
    var $BatmanSings;

    public function __construct() {
        $this->BatmanSings = array();
    }

    public function add($songtitle, Batman $Batman)
    {
        $this->BatmanSings[$songtitle] = $Batman;
    }
}

$riddler = new Batman('Remember those Riddles', 'Lorem ipsum dolor sit amet<br />
Consectetur adipiscing elit');

$catwoman = new Batman('Yes, I\'m in love with Catwoman', 'Lorem ipsum dolor sit amet<br />
Consectetur adipiscing elit ');

$joker = new Batman('No Joker, No Problems', 'Lorem ipsum dolor sit amet<br />
Consectetur adipiscing elit ');

$result = new SongList();
$result->add('riddler', $riddler);
$result->add('catwoman', $catwoman);
$result->add('joker', $joker);

echo json_encode($result);

