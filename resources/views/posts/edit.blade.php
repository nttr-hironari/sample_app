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
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="body">{{ __('Body') }}</label>
            <textarea id="body" class="form-control" name="body" rows="8" required>{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="user_id">{{ __('UserId') }}</label>
            <input id="user_id" type="value" class="form-control" name="user_id" value="{{ $post->user_id }}" required autofocus>
        </div>
        <button type="submit" name="submit" class="btn btn-success">{{ __('Submit') }}</button>
    </form>
</div>
@endsection