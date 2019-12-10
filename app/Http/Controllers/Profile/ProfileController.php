<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        // dd($user->posts);
        return View::make('profile.index', compact('user'));
    }
}
