<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = array(
            '0' => 'Teste1',
            '1' => 'Teste2',
            '2' => 'Teste3',
            '3' => 'Teste4',
            '4' => 'Teste5',
            '5' => 'Teste6',
            '6' => 'Teste7'
        );

        return view('posts.index', compact('posts'));
    }
}
