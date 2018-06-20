@php
    $title = __('Posts');
@endphp
@extends('../layouts/app')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
    <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
            <span class="card-title">{{ $post->title }}</span>
            <p>{{ $post->body }}</p>
            </div>
            <div class="card-action">
              <a href="{{ url('posts/'.$post->id) }}">Show</a>
              <a href="{{ url('posts/'.$post->id.'/edit') }}">Edit</a>
            </div>
          </div>
        </div>
    </div>
    @endforeach
</div>
@endsection