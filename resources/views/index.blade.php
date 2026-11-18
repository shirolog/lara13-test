@extends('layouts.sns')

@section('title', 'Top')

@section('content')
    <h1>投稿一覧</h1>

    <div class="card">
        <h2>新しい投稿</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="タイトル">
            <br><br>
            <textarea name="content" placeholder="投稿内容" id="" cols="30" rows="10"></textarea>
            <br><br>
            <button type="submit">投稿する</button>
        </form>
    </div>
    <div class="card">
        <p>投稿者: テストユーザー</p>

        <h3></h3>

        <p></p>

        <button><i class="fa-regular fa-heart"></i>
        </button>
        <span>いいね 件</span>
        <p>コメント 0件</p>
    </div>


@endsection
