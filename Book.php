
<?php
class Book{
    public $title;
    public $author;
    private $price;
    const  CATEGORY = "Literature";
    public static $count = 0;
    
    public function getDetails(){
        return "$this->title by $this->author";
    }
    
    public function __construct($title, $author){
        $this->title = $title;
        $this->author = $author;
        self::$count++;
    }
    
    public function __destruct(){
        echo "Book object destroyed";
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function setPrice($price){
        $this->price = $price;
    }

    public static function getCount(){
        return self::$count;
    }
}
$book1 = new Book("Memoirs of a geisha", "Arthur Golden");
echo $book1->getDetails() . "<br>";

$book2 = new Book("The Great Gatsby", "F.Scott Fitzergerald");
echo $book2->getDetails() . "<br>";

$book3 = new Book ("1984", "George Orwell");

$book1->setPrice(15.99);
echo "Price of " . $book1->title . ": $" . $book1->getPrice() . "<br>";

$book4 = new Book("Pride and Prejudice","Jane Austen");

$book5 = new Book("To Kill a Mockingbird", "Harper Lee");

echo "Category: " . Book::CATEGORY . "<br>";
echo "Total books created: " . Book::getCount() . "<br>";

class Textbook extends Book{
    public $subject;

    public function __construct($title, $author, $subject){
        parent::__construct($title, $author);
        $this->subject = $subject;
    }

    public function getDetails(){
        return parent::getDetails() . "- $this->subject";
    }
}

$textbook1 = new Textbook("Introduction to PHP", "John Doe", "Programming");
echo $textbook1->getDetails() . "<br>";
?>

