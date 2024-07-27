<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\UserCategories;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $users= User::all();
        $categories= Category::all();

        return view('preview', [
            'users' => $users,
            'categories' => $categories,
        ]);
    }
}
