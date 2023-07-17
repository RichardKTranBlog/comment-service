<?php

namespace App\Http\Controllers;

class CommentController extends Controller
{
    public function index()
    {
        return ([
            'comment-1' => 'Branch rb-1 This is comment 1',
            'comment-2' => 'Branch rb-1 This is comment 2',
            'comment-3' => 'Branch rb-1 This is comment 3',
            'comment-4' => 'Branch rb-1 This is comment 4',
            'comment-5' => 'Branch rb-1 This is comment 5',
            'comment-6' => 'Branch rb-1 This is comment 6',
        ]);
    }
}
