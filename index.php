<?php

class Content
{
    private $type;
    private $title;
    private $text;
    private $breaking;

    function __construct($type, $title, $text, $breaking=false)
    {
        $this->type =$type;
        $this->title =$title;
        $this->text =$text;
        $this->breaking =$breaking;
    }

    function getTitle()
    {
        $modifiedTitle = $this->title;

        if ($this->type === 'ad') {
            $modifiedTitle = strtoupper($modifiedTitle);
        } elseif ($this->type === 'vacancy') {
            $modifiedTitle = $modifiedTitle . ' - apply now!';
        }
        if ($this->breaking) {
            $modifiedTitle = 'BREAKING' . $modifiedTitle;
        }
        return $modifiedTitle;
    }
    function getText(){
        return $this->text;
    }
}

$content =
[
    new content('article', "Why elevators don't go sideways", "Elevators, elevators, elevators..."),
    new content('article', "The reason why water is not that good for you", "Water, water, water..."),
    new content('ad', "Potatoes", "The best potatoes in the area"),
    new content('vacancy', "Potato farmer", "Farm potatoes?")
];

function displayContent($contentArray) {
    foreach ($contentArray as $item){
    echo "<h1>" . $item->getTitle() . "</h1>";
    echo "<p>" . $item->getText() . "</p>";
    }
}
displayContent($content);