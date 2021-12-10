<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index($building = '建物')
    {
        return $building . 'です';
    }
    public function index2($room)
    {
        return '部屋番号は' . $room . 'です';
    }
}
