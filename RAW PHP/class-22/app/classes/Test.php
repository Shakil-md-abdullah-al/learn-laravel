<?php


namespace App\classes;


class Test
{
    public $message,$x,$y,$z,$i,$arr,$item,$arr2,$valu,$arr3,$product;

    public function __construct()
    {
        $this->message = 'Hello Shakil, I am there';
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
        $this->arr =[30,50.25,'Shakil',70,10];
        $this->arr2=[
            0=>[
                'Name'  => 'Shakil',
                'Dept' => 'CSE',
                'Mobile'  => '01789765678',],
            1=>[
            'Name'  => 'Sohan',
            'Dept' => 'CSE',
            'Mobile'  => '01789765678',],

            2=>[
                'Name'  => 'Tamim',
                'Dept' => 'CSE',
                'Mobile'  => '01789765678',],
        ];
        $this->arr3 = [
            0=>[
                'Name' => 'Product-01',
                'Price' => '999',
                'Color' => 'Red',
            ],
            1=>[
                'Name' => 'Product-02',
                'Price' => '799',
                'Color' => 'Green',
            ],
            2=>[
                'Name' => 'Product-03',
                'Price' => '1199',
                'Color' => 'Orenged',
            ],
            3=>[
                'Name' => 'Product-04',
                'Price' => '699',
                'Color' => 'Red',
            ],
            4=>[
                'Name' => 'Product-05',
                'Price' => '399',
                'Color' => 'Blue',
            ],
        ];

    }

    public function shakil()
    {
        echo $this->message;
        echo '<br>'.'<br>';

        //Switch Case
        switch ($this->x){
            case 10:
                echo 'Hello'.'<br>';
                break;
            case 20:
                echo 'Hello Bangladesh'.'<br>';
                break;
            default:
                echo 'BITM'.'<br>';
        }

        //Repeated Statement
            //for
        //foreach
        //while
        //do... while

        //for(initialization; condition; inc/dec)
//        {
//            //Statement
        //For loop moves anti-clockwise
        //While loop moves clock-wise
//        }
        echo '<br>';

        for($this->i=0; $this->i<=10; $this->i++){
            echo $this->i+1;
            echo ' Hello Repeat'.'<br>';
        }

        //While Loop
//        initialization;
//        while (condition){
//            Statement;
//            inc/dec;
//        }
        echo '<br>'.'<br>';
        $this->i=10;
        while ($this->i<=25){
            echo $this->i+1;
            echo '  Hello While Loop'.'<br>';
            $this->i++;
        }

        echo '<br>'.'<br>';
        // do... while loop
//        do{
//            statement;
//            inc/dec;
//        }while(condition);
        $this->i = 0;
        do{
            echo $this->i+1;
            echo 'Hello do... while'.'<br>';
            $this->i++;
        }while($this->i <10);

        //foreach --Like an Array
        //Works with multiple variable
        //Use  Array define(way of (declearation)  in 2 ways
            //1. Use Array Keyword
            //2. Use [] Bracket
        //Print array at a time
            //print_r(var)
        print_r($this->arr);
        echo '<br>'.'<br>'.'<br>';
        var_dump($this->arr);
        echo '<br>'.'<br>'.'<br>';

        //Search by index
        foreach ($this->arr as $this->item){
                echo $this->item;
                echo '<br>';
        }
        echo '<br>'.'<br>'.'<br>';

        //3 types of array based on index. They are:
            //1. Numeric Array
            //2. Associative Array
            //3.Hybrid Array

        //Two Types of Array based on Dimension. They are:
            //1. Single Line Array
            //2. Multi Dimensional Array


        foreach ($this->arr2 as $this->item) {

            foreach ($this->item as $key=>$this->valu){
                echo $key .' = '. $this->valu.'<br>';
            }
        }
        echo '<br>'.'<br>'.'<br>';

        foreach ($this->arr3 as $this->item) {
            echo '<br>';
            foreach ($this->item as $key=>$this->product ){
                echo $key .' = '.$this->product.'<br>';
            }

        }


    }

}