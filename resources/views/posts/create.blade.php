@php
    $title = __('Create Post');
@endphp
@extends('../layouts/app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ url('posts/') }}">
        {{ csrf_field() }}
        <div class="input-field col s12">
          <input id="title" type="text" class="validate" name="title">
          <label for="email">Title</label>
        </div>
        <div class="input-field col s12">
          <textarea id="body" class="materialize-textarea" name="body"></textarea>
          <label for="body">Content</label>
        </div>
        <input type="hidden" name="user_id" value="1">
        <button class="btn waves-effect waves-light" type="submit">Submit
          <i class="material-icons right">Post</i>
        </button>
      </form>
</div>
@endsection