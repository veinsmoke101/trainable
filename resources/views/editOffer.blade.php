@extends('layouts.post')
@section('style', asset('css/demand.css'))
@section('title','edit offer')
@section('content')

    <div class="demand">
        <section class="demand__header">
            <h1 class="demand__title">Edit your offer</h1>
        </section>
        <section class="demand__posts">
            <div class="demand__add">
                <form action="/offers/{{ $post->id }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="{{ $post->title }}" placeholder="Equipment title">
                    <label for="description">Description</label>
                    <input type="text" id="description" value="{{ $post->description }}" name="description" placeholder="Equipment description">
                    <label for="image">Image : </label>
                    <input type="file" name="image" id="image">
                    <input type="submit" id="submit" value="Update offer">
                </form>
            </div>
        </section>
    </div>
@endsection
