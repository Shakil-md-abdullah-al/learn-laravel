<?php

namespace App\classes;
class Home
{
    public function __construct()
    {
    }
    public function shakil()
    {
        header('Location:action.php?page=home');
    }
}