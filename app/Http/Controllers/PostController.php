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
            )->where('type', 'demand')
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

        $fields = [
            'title' => request('title'),
            'description' => request('description')
        ];

        if(!empty(request()->file('image'))){
            $newImageName = time() . '-IMG.' . request()->file('image')->extension();
            \request()->file('image')->move(public_path('images'), $newImageName);

            $fields['image'] = $newImageName;
        }

        $post->update($fields);
        return redirect('/demands');

    }

    public function storeDemand()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,webp|max:5048'
        ]);

        $newImageName = time() . '-IMG.' . request()->file('image')->extension();
        \request()->file('image')->move(public_path('images'), $newImageName);

        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'image' => $newImageName,
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


    public function offer()
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
            )->where('type', 'offer')
            ->get();
        return view('offers', compact('posts'));
    }

    public function editOffer(Post $post)
    {
        return view('editOffer', compact('post'));
    }

    public function updateOffer(Post $post)
    {


        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $fields = [
            'title' => request('title'),
            'description' => request('description')
        ];

        if(!empty(request()->file('image'))){
            $newImageName = time() . '-IMG.' . request()->file('image')->extension();
            \request()->file('image')->move(public_path('images'), $newImageName);

            $fields['image'] = $newImageName;
        }

        $post->update($fields);
        return redirect('/offers');

    }

    public function storeOffer()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,webp|max:5048'
        ]);

        $newImageName = time() . '-IMG.' . request()->file('image')->extension();
        \request()->file('image')->move(public_path('images'), $newImageName);

        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'image' => $newImageName,
            'type' => 'offer',
            'author' => Auth::id()
        ]);
        return redirect('/offers');
    }

    public function destroyOffer(Post $post)
    {
        $post->delete();
        return redirect('/offers');
    }

}
