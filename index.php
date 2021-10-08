<?php

class library {
    //Variable inside class is Property
    public $name_book;
    public $name_author;
    public $pagenumber;
    public $price;
    private $id;
    const  MAXCHAR = 40;

    //function inside class is Method
    public function setBookName($name_book) {
        if(strlen($name_book) > self::MAXCHAR){
            echo 'Book Name Cannot Be Large Than' . self::MAXCHAR . 'Chars';
        } else {
            echo "Book Name Good";
        }
    }

    public function changeSpec($nameBooK,$nameAuthor,$number,$pric){
        $this->name_book   = $nameBooK;
        $this->name_author = $nameAuthor;
        $this->pagenumber  = $number;
        $this->price = $pric;
    }

    public function changeid($my_id) {
        $this->id = $my_id;
    }
} 
$book1 = New library();
$book1 ->name_book = "الفقراء";
$book1 ->name_author = "دوستويفسكي";
$book1 ->pagenumber = "300";
$book1 ->price = "$5";
$book1->changeid(55);

echo "<pre>";
var_dump($book1);
echo "</pre>";



echo "name_book: " .$book1->name_book."<br>";
echo "name_author: ".$book1->name_author. "<br>";
echo "pagenumber: ".$book1->pagenumber . "<br>";
echo "price: ".$book1->price. "<br>";

//$book1->setBookName("الفقراء");
echo "<br>".library::MAXCHAR;  //print 40
echo "<br>".$book1::MAXCHAR."<br>"; //print 40

$book2 = New library();
$book2->changeSpec("kitap","Ahmed",400,10);

echo "name_book: " .$book2->name_book."<br>";
echo "name_author: ".$book2->name_author. "<br>";
echo "pagenumber: ".$book2->pagenumber . "<br>";
echo "price: ".$book2->price. "<br>"."<br>";

$book3 = New library();
$book3->changeSpec("الجريمه و العقاب","دوستويفسكي",400,10);
echo "name_book: " .$book3->name_book."<br>";
echo "name_author: ".$book3->name_author. "<br>";
echo "pagenumber: ".$book3->pagenumber . "<br>";
echo "price: ".$book3->price. "<br>";


?>