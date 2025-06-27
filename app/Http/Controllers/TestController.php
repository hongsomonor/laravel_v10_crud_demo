<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function show1()
    {
        return "Show 1";
    }

    public function show2()
    {
        return "This is show 2";
    }

    public function showTest()
    {
        return view('test1', ["name" => "Somonor", "skill" => "Laravel"]);
    }

    public function showTest2()
    {
        $students = [
            [
                "id" => 1,
                "name" => "Jame",
                "gender" => "male"
            ],
            [
                "id" => 2,
                "name" => "John",
                "gender" => "male"
            ],
            [
                "id" => 3,
                "name" => "Jay",
                "gender" => "male"
            ],
            [
                "id" => 4,
                "name" => "Jonny",
                "gender" => "male"
            ]
        ];

        return view('test2', ["students" => $students]);
    }
}
