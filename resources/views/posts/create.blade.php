@php
    $title = __('Create Post');
@endphp
@extends('../layouts/app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ url('posts/') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="titleInput">タイトル</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <label for="bodyInput">内容</label>
          <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        </div>
        <div class="form-group">
          <label for="titleInput">ユーザーID</label>
          <input type="value" class="form-control" id="user_id" name="user_id">
        </div>
        <button type="submit" class="btn btn-primary">新規追加</button>
      </form>
</div>
@endsection