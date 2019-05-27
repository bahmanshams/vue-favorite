<?php namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class PostsController
 * @package App\Http\Controllers
 */
class PostsController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $posts = Post::paginate(3);

        return view('posts.index', compact('posts'));
    }

    /**
     * @param Post $post
     * @return RedirectResponse
     */
    public function favoritePost(Post $post)
    {
        Auth::user()->favorites()->atach($post->id);

        return back();
    }

    public function unFavoritePost(Post $post)
    {
        Auth::user()->favorites()->detach($post->id);

        return back();
    }
}
