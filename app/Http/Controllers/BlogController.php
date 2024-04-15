<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogColletion;
use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return new BlogColletion(blog::all());
    }
}
