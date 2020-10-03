{{-- <!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ブログ</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ブログ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">ブログ一覧 <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="#">ブログ投稿</a>
    </div>
  </div>
</nav>
    </header>
    <br> --}}
@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      @if (session('err_msg'))
           <p class="text-danger">
             {{ session('err_msg') }}
           </p>
          
      @endif
      <table class="table table-striped">
          <tr>
              <th>記事No.</th>
              <th>タイトル</th>
              <th>日付</th>

              {{-- <th>内容</th> --}}
          </tr>
          @foreach ($blogs as $blog)
          <tr>
              <td>{{ $blog->id }}</td>
              <td><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></td>
              <td>{{ $blog->updated_at }}</td>
              {{-- <td>{{ $blog->content }}</td> --}}
          </tr>
          @endforeach
      </table>
  </div>
</div>
@endsection
    {{-- <footer class="footer bg-dark  fixed-bottom">
    <div class="container text-center">
    <span class="text-light">©︎福のプログラミング講座</span>
</div>
    </footer>
</body>
</html> --}}