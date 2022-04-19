@extends('layouts.post')
@section('style', asset('css/demand.css'))
@section('title','offers')
@section('content')
    <div class="demand">
        <section class="demand__header">
            <h1 class="demand__title">OFFERS</h1>
            <p class="demand__paragraph">Post the offer that you got so poeple can see it</p>
        </section>
        <section class="demand__posts">
            <div class="demand__add">
                <form action="/offers" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Equipment title">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" placeholder="Equipment description">
                    <label for="image">Image : </label>
                    <input type="file" name="image" id="image">
                    <input type="submit" id="submit" value="Create demand">
                </form>
            </div>
            @foreach($posts as $post)
                <div class="demand__post post">
                    <div class="post__body">
                        <div class="post__authorContainer">
                            <div class="post__authorImage">
                                <img src="{{ asset('images/Quincy-Larson-photo.jpg') }}" alt="">
                            </div>
                            <div class="post__authorInfo">
                                <h2 class="post__authorName">{{ $post->name }} </h2>
                                <small class="post__authorJoined"> Joined 12 SEP 2012.</small>
                            </div>

                            @if(auth()->id() === $post->author)
                                <span class="post__more" id="more" href="#">more...</span>
                                <div class="update-delete">
                                    <form method="get" class="add-button" action="/offers/{{ $post->id }}/edit">
                                        {{--                            <input type="hidden" name="" value="{{ $post->id }} ">--}}

                                        <button class="update-button-toggler" >
                                            update
                                        </button>
                                    </form>
                                    <form method="post" class="update-button" action="/offers/{{ $post->id }}">
                                        {{--                            <input type="hidden" name="poste_id" value=" {{ $post->id }} ">--}}
                                        @csrf
                                        @method('DELETE')
                                        <button name="delete-submit" class="delete-button-toggler">
                                            delete
                                        </button>
                                    </form>
                                </div>
                            @endif

                        </div>

                        <h3 class="post__title">
                            {{ $post->title }}
                        </h3>
                        <div class="post__description">

                            <p>
                                {{ $post->description }}
                            </p>
                        </div>
                        <div class="post__image">
                            <img src="{{asset("images/$post->image")}}" alt="post-image">
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>

    <script src="{{asset('js/view-more.js')}}"></script>
@endsection
