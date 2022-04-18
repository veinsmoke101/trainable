<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\NoReturn;


class PostController extends Controller
{



    public function demand()
    {
        $posts = DB::table('posts')
            ->join('users','users.id', '=', 'posts.author')
            ->select(
        'posts.id',
                'posts.title',
                'posts.description',
                'posts.image',
                'posts.author',
                'users.name'
            )
            ->get();
        return view('demands', compact('posts'));
    }

    public function editDemand(Post $post)
    {
        return view('editDemand', compact('post'));
    }

    public function updateDemand(Post $post)
    {

        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $post->update([
            'title' => request('title'),
            'description' => request('description')
        ]);
        return $this->demand();

    }

    public function storeDemand()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'image' => 'bla bla',
            'type' => 'demand',
            'author' => Auth::id()
        ]);
        return redirect('/demands');
    }

    public function destroyDemand(Post $post)
    {
        $post->delete();
        return redirect('/demands');
    }
}
