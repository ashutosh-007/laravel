<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index( $number1, $number2 = '' ) {
    	return "<h5>Calling index method of AdminController with id <a href='https:\/\/www.w3schools.com'>{$number1}</a></h5>";
    }
}
