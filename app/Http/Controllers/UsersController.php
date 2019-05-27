<?php namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * @return Factory|View
     */
    public function myFavorites()
    {
        $myFavorites =Auth::user()->favorites;

        return view('users.my_favorites', compact('myFavorites'));
    }
}
