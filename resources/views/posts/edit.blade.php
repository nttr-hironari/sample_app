@php
    $title = __('Edit') . ': ' . $post->title;
@endphp
@extends('../layouts/app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('posts/'.$post->id) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="input-field col s12">
            <input id="title" type="text" class="validate" name="title" value="{{ $post->title }}">
            <label for="email">Title</label>
        </div>
        <div class="input-field col s12">
            <textarea id="body" class="materialize-textarea" name="body">{{ $post->body }}</textarea>
            <label for="body">Content</label>
        </div>
        <input type="hidden" name="user_id" value="{{ $post->user_id }}">
        <button class="btn waves-effect waves-light" type="submit">Submit
            <i class="material-icons right">Update</i>
          </button>
    </form>
</div>
@endsection