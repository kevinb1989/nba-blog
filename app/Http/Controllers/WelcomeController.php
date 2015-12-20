<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * return the contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $users = ['Kevin Bui', 'John Le', 'Dat Vu', 'MT Nguyen'];
        return view('pages.contact', compact('users'));
    }

    /**
     * return the about page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        //$name = 'Kevin Bui';
        return view('pages.about') -> with([
                'first_name' => 'Kevin',
                'last_name' => '<span style="color: green;">Hoang Bui</span>' 
            ]);
    }


}
