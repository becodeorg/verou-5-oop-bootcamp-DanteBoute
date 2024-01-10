<?php

class ContentItem
{
    private $type;
    private $title;
    private $text;
    private $breaking;

    public function __construct($type, $title, $text, $breaking = false)
    {
        $this->type = $type;
        $this->title = $title;
        $this->text = $text;
        $this->breaking = $breaking;
    }

    public function getTitle()
    {
        $modifiedTitle = $this->title;

        if ($this->type === 'ad') {
            $modifiedTitle = strtoupper($modifiedTitle);
        } elseif ($this->type === 'vacancy') {
            $modifiedTitle = $modifiedTitle . ' - apply now!';
        }

        if ($this->breaking) {
            $modifiedTitle = 'BREAKING: ' . $modifiedTitle;
        }

        return $modifiedTitle;
    }

    public function getText()
    {
        return $this->text;
    }
}

$content = [
    new ContentItem('article', 'The Importance of Exercise', 'Regular exercise has numerous benefits...'),
    new ContentItem('article', 'Top 10 Travel Destinations', 'Explore these amazing places...'),
    new ContentItem('ad', 'Special Offer!', 'Hurry! Limited time offer...'),
    new ContentItem('vacancy', 'Frontend Developer', 'Join our team and work on exciting projects...')
];


function displayContent($contentArray)
{
    foreach ($contentArray as $item) {
        
        echo '<h2>' . $item->getTitle() . '</h2>';
        echo '<p>' . $item->getText() . '</p>';
    }
}

displayContent($content);
?>