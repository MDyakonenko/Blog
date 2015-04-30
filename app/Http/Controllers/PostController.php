<?php
namespace App\Http\Controllers;

use App\Posts;
use View;

class PostController extends Controller
{
    public function getPost($slug){
        $post = Posts::where('slug', '=', $slug)->firstOrFail();
        return View::make('show')->with('post', $post);
    }
     
}

?>