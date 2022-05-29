<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//     class car{
//         public $name;
//         public $color;

//     function __construct($name){
//         $this -> name =$name;

//     }
//     function get_name(){
//         return $this -> name;
//     }
//     function __destruct(){
//         echo ("<br> The Destruct method is called");
//     }
// }
// $bmw = new Car("BMW");
// $honda = new Car("honda");
// echo $bmw -> get_name();
// echo("<br>");
// unset($honda);
// echo ("The value of variable 'a' after unset: " . $honda -> get_name());



    // class car{
    //     public $name;
    //     public $color;
    //     function set_name($n){
    //         $this -> name =$n;
    //     }
    //     function get_name() {
    //         return $this -> name;
    //     }
    // }
    // // var_dump(get_name());

    // $bmw = new Car();
    // $honda = new Car();
    // $honda -> set_name('honda');
    // $bmw -> set_name('BMW');

    // echo $bmw->get_name();
    // echo("<br>");
    // echo $honda->get_name();

    // var_dump($bmw instanceof Car);

    class A{
        public $first_name;
        public $sur_name;
        function _construct ($first_name,$sur_name){
            $this->first_name = $first_name;
            $this->sur_name = $sur_name;
        }
        function get_full_name(){
            return $this->first_name. " ". $this->sur_name;
        }
    }

    class B extends A{
        public $caste;
        function __construct ($first_name,$sur_name,$caste){
            $this->first_name = $first_name;
            $this->sur_name = $sur_name;
            $this->caste = $caste;
        }
        function get_caste(){
            return $this->caste;
        }
    }


    $rajmobj = new B('hari','gopala','brahmin');

    echo"Full Name: ".$rajmobj->get_full_name(). " caste: ".$rajmobj-> get_caste();
    
    ?>
</body>
</html>