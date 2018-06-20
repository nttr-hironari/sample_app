@php
    $title = $post->title;
@endphp
@extends('../layouts/app')
@section('content')
<div class="container">
    <h1 id="post-title">{{ $title }}</h1>

    <!-- 記事内容 -->
    <dl class="row">
        <dt class="col-md-2">{{ __('Created') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateCreated" datetime="{{ $post->created_at }}">
                {{ $post->created_at }}
            </time>
        </dd>
        <dt class="col-md-2">{{ __('Updated') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateModified" datetime="{{ $post->updated_at }}">
                {{ $post->updated_at }}
            </time>
        </dd>
    </dl>
    <hr>
    <div id="post-body">
        <p class="flow-text">{{ $post->body }}</p>
    </div>
    <div>
        <form action="{{ url('posts/'.$post->id.'/edit') }}" method="GET" id="edit-btn">
            <input type="submit" class="btn btn-danger" value="EDIT"/>
        </form>
        <br>
        <form action="{{ url('posts/'.$post->id) }}" method="POST" id="delete-btn">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </div>

</div>
@endsection
