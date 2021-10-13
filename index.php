<?php

//abstract

abstract class upLoadBook {

    //You Must To Use
    abstract  public function setBookName($variable); 

    abstract public function addBook($variable1,$variable2,$variable3,$variable4);
}



//Main Class, Super Class
class library extends upLoadBook {
    //Variable inside class is Property

    public $name_book;
    public $name_author;
    public $pagenumber;  //inside Main Class, inside SubClass, outSide Class
    public $price;
    private $id;    //inside Main class
    const  MAXCHAR = 40;

    //protected  inside Main Class, inside SubClass

    //function inside class is Method
    /*public function __get($parameter){
        echo "This [". $parameter . "]Not Found Or Not Accessible ";
    }*/

    public function __set($parameter, $value){
        echo "This [ ". $parameter . " ]Not Found Or Not Accessible  And You  Cannot Assign This Value[ ".$value." ]To It";
    }
    
    final public function setBookName($name_book) {
        if(strlen($name_book) > self::MAXCHAR){
            echo 'Book Name Cannot Be Large Than' . self::MAXCHAR . 'Chars';
        } else {
            echo "Book Name Good";
        }
    }

    public function addBook($nameBooK,$nameAuthor,$number,$pric){
        $this->name_book   = $nameBooK;
        $this->name_author = $nameAuthor;
        $this->pagenumber  = $number;
        $this->price = $pric;
    }

    public function changeid($my_id) {
        $this->id = $my_id;
    }

}
interface interChangePassword{
    public function changepassword($pass);
} 

//Clients is Sub Class, Child Class
class clients extends library  implements interChangePassword  {
    //Properties
    public $name;
    private $password;

    //Methods
    public function changepassword($pass){
        $this->password = sha1($pass);
    }
}

$book1 = New library();
$book1 ->name_book = "الفقراء";
$book1 ->name_author = "دوستويفسكي";
$book1 ->pagenumber = "300";
$book1 ->price = "$5";
$book1->e = "65";
echo $book1->e;
$book1->changeid(55);

$client1 = New clients();
$client1->changepassword("hfhsfs7767");
//$client1->changeSpec("الجريمه و العقاب","دوستويفسكي",400,10);

echo "<pre>";
var_dump($book1);
var_dump($client1);
echo "</pre>";



echo "name_book: " .$book1->name_book."<br>";
echo "name_author: ".$book1->name_author. "<br>";
echo "pagenumber: ".$book1->pagenumber . "<br>";
echo "price: ".$book1->price. "<br>";

//$book1->setBookName("الفقراء");
echo "<br>".library::MAXCHAR;  //print 40
echo "<br>".$book1::MAXCHAR."<br>"; //print 40

$book2 = New library();
$book2->addBook("kitap","Ahmed",400,10);

echo "name_book: " .$book2->name_book."<br>";
echo "name_author: ".$book2->name_author. "<br>";
echo "pagenumber: ".$book2->pagenumber . "<br>";
echo "price: ".$book2->price. "<br>"."<br>";

$book3 = New library();
$book3->addBook("الجريمه و العقاب","دوستويفسكي",400,10);
echo "name_book: " .$book3->name_book."<br>";
echo "name_author: ".$book3->name_author. "<br>";
echo "pagenumber: ".$book3->pagenumber . "<br>";
echo "price: ".$book3->price. "<br>";


?>
