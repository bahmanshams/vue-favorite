<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Post
 * @package App
 *
 * @property int id
 *
 */
class Post extends Model
{
    public function favorited()
    {
        return (bool)Favorite::where('user_id', Auth::id())->where('post_id', $this->id)->first();
    }
}
