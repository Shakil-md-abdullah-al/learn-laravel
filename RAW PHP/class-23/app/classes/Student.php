<?php


namespace App\classes;


class Student
{
    public $Student=[];

    public function __construct()
    {
        $this->Student=[
            [
                'Name' =>'Hamim',
                'Email' =>'hamim@mail.com',
                'Phone' =>'01987654321',
            ],
            [
                'Name' =>'Tahmid',
                'Email' =>'tahmid@mail.com',
                'Phone' =>'01987655321',
            ],
            [
                'Name' =>'Nur',
                'Email' =>'nur@mail.com',
                'Phone' =>'01127655321',
            ]

        ];
    }

    public function all_student(){
        return $this->Student;
    }

}