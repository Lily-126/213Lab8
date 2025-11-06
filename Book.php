<?php
class book{
    public $title;
    public $author;
    private $price;
    public function getDetails(){
        return "$this->title by $this->author";
    }
    public function _construct($title, $author){
        $this->title = $title;
        $this->author = $author;
    }
    public function _destruct(){
        echo "Book object destroyed";
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }
}
$book1 = new Book("Memoirs of a geisha", "Arthur Golden");
echo $book1->getDetails() . "<br>";
?>