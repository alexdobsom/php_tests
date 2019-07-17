<?php 


class Human {

    //can be accessed only in this class:
    private $employer = "KROHNE";
    
    //can be accessed from everywhere:
    public $age = 18; 
    
    //can be accessed only from a class:
    protected $someone = " X "; 
    protected $email = 'name@company.com';
    protected $id;

    //can be access from everywhere but updates everywhere:
    //access it with: "Human::$website"
    public static $website = 'www.go.ro';

    //access it with "Human::PI"
    const PI = 3.14; 


    //this method is invoked at creation, variables dissappear if not mentioned above:
    function __construct($someone) {
        $this->someone = $someone;
        $this->id = rand(1,100000000); 
    }

    function __get($something) {
        echo "Asked for: " . $something . "<br>";
        return $this ->something;
    }

    public function displayVar() {
        // echo "Display var";
        echo $this->someone . " is here.<br>";
    }

    public function showName() {
        return "Yes, I am ".$this->someone . '<br>';
    }

    public function showEmail() {
        echo "My email is: " . $this->email . '<br>';
    }

    public function showId() {
        echo "My id is: " . $this->id . '<br>';
    }
}


?>