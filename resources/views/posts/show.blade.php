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
        {{ $post->body }}
    </div>
    <div>
        <a href="{{ url('posts') }}">Index</a>
    </dib>
</div>
@endsection