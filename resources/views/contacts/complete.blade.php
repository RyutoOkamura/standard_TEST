<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
  <title>お問い合わせ</title>
</head>

<body>
  <div class="container text-center h-screen">
        <h1 class=" mt-2 mb-5  mt-45vh">お問い合わせありがとうございました。</h1>
        <a href="{{ route('contact') }}" class="inline-block bg-black px-14 py-3 text-white rounded">トップページへ</a>
    </div>
</body>