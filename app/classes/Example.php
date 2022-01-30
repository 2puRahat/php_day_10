<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $fisrtName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];




    public function index()
    {


        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';

//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>......<br/>';

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>......<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>......<br/>';

//        echo $this->x == $this->y;

        /*array
       */
        $this->data = [10,30,20,'BITM',100.200,true];
//        echo $this->data[9];
        foreach ($this->data as $item){
            echo $item.' ';
        }

        /*
         * statement
         */
//        $this->x = 100;
//        if($this->x < 20){
//            echo $this->x;
//        }
//        else{
//            echo 'Hello World';
//        }

//        if($this->x > 200){
//            echo '200';
//        }
//        elseif ($this->x < 200){
//            echo $this->x;
//        }
//        $this->x = 10;
//        switch ($this->x){
//            case 10:
//                echo 'Hello World';
//
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            case 40:
//                echo 'Hello BITM';
//                break;
//            default:
//                echo 'Hello Word';
//        }

//        $this->x = 100;
//        for ($this->y = 10; $this->y <=15; $this->y++){
//            echo 'Hellow World<br/>';
//        }

//        $this->x = 100;
//        do{
//            echo 'Hello World';
//            $this->x++;
//        }
//        while($this->x <110);

//        $this->x = 100;
//        while ($this->x <110){
//            echo 'Hello World<br/>';
//            $this->x++;
//        }




//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x;


//        $this->firstName ='Rahim';
//        $this->lastName ='khan';
//        echo "Full name is ".$this->firstName." ".$this->lastName;

//        $this->x = 10;
//        $this->y = 20;
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';


    }
}

