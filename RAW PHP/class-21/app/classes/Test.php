<?php


namespace App\classes;


class Test
{
    public $message,$x,$y,$z,$inp,$amm,$bank,$card,$ammount,$disAmmount,$payAmmount;

    public function __construct()
    {
        $this->message = 'Hello PHP';

        $this->x =10;
        $this->y =20;
        $this->z =30;
        $this->inp = 5000;
        $this->ammount =8000;
        $this->bank ='UCB';
        $this->card ='Debit';
    }

    public function shakil()
    {
        echo $this->message;
        echo '<br>';
        echo $this->x + $this->y;
        echo '<br>';
        echo $this->x -$this->y;
        echo '<br>';
        echo $this->x *$this->y;
        echo '<br>';
        echo $this->x /$this->y;
        echo '<br>';
        echo $this->x %$this->y;
        echo '<hr>';

        echo 'Assignment:';
        echo '<hr>';
        echo $this->x += $this->y;
        echo '<br>';
        echo $this->x -=$this->y;
        echo '<br>';
        echo $this->x *=$this->y;
        echo '<br>';
        echo $this->x /=$this->y;
        echo '<hr>';
        echo '<br>';
        echo '<br>';
        echo $this->x++;
        echo '<br>';
        echo ++$this->x;
        echo '<br>';
        echo $this->x--;
        echo '<br>';
        echo --$this->x;
        echo '<br>';
        echo '<hr>'.' '.'Conditional'.'<br>'.'<hr>'.'<br>';

        echo $this->x > $this->y;
        echo '<br>';
        echo $this->x < $this->y;
        echo '<br>';
        echo $this->x >= $this->y;
        echo '<br>';
        echo $this->x <= $this->y;
        echo '<br>';
        echo $this->x == $this->y;
        echo '<br>';
        echo $this->x === $this->y; //check value + Data Type
        echo '<br>';
        echo $this->x != $this->y;
        echo '<br>';
        echo $this->x !== $this->y;
        echo '<hr>'.'Logical Operator'.'<hr>'.'<br>'.'<br>';

        echo ($this->x > $this->y) && ($this->x < $this->z);
        echo '<br>';
        echo ($this->x > $this->y) || ($this->x < $this->z);
        echo '<br>';

        //Statement
        echo '<hr>'.'Statement'.'<hr>'.'<br>';
        echo 'Single Line Statement'.'<br>'.'Conditional Statement: '.'.'.'if, else-if, if elseif else, switch.'.'<br>'.'Repeated Statement: '.' for, while, do... while, foreach'.'<br>';

        echo '<br>'.'<hr>'.'Conditional Operator'.'<hr>';

        if($this->x > $this->y){
            echo $this->x;
        }else{
            echo $this->y;
        }
        echo '<br>';

        if($this->x > $this->y){
            echo $this->x;
        }elseif($this->x > $this->z){
            echo $this->y;
        }elseif ($this->x < $this->z){
            echo $this->z;
        }
        echo '<br>'.'<hr>';
        echo ' With Discount Pay: ';

        if($this->ammount > $this->inp){
            if($this->bank=='UCB'){
                if($this->card =='Credit'){
                    $this->disAmmount= ($this->ammount*7)/100;
                   $this->payAmmount =$this->ammount- $this->disAmmount;
                   echo $this->payAmmount;
                }elseif ($this->card =='Debit'){
                    $this->disAmmount= ($this->ammount*5)/100;
                    $this->payAmmount =$this->ammount- $this->disAmmount;
                    echo $this->payAmmount;
                }
            }

            if($this->bank =='Al-Arafa'){
                if($this->card =='Credit'){
                    $this->disAmmount= ($this->ammount*8)/100;
                    $this->payAmmount =$this->ammount- $this->disAmmount;
                    echo $this->payAmmount;
                }elseif ($this->card =='Debit'){
                    $this->disAmmount= ($this->ammount*4)/100;
                    $this->payAmmount =$this->ammount- $this->disAmmount;
                    echo $this->payAmmount;
                }
            }

            if($this->bank =='Pubali'){
                if($this->card =='Credit'){
                    $this->disAmmount= ($this->ammount*10)/100;
                    $this->payAmmount =$this->ammount- $this->disAmmount;
                    echo $this->payAmmount;
                }elseif ($this->card =='Debit'){
                    $this->disAmmount= ($this->ammount*8)/100;
                    $this->payAmmount =$this->ammount- $this->disAmmount;
                    echo $this->payAmmount;
                }
            }
        }
        echo '<hr>';







    }
}