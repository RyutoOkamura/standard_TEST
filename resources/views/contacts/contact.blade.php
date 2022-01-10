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
  <div class="container m-10">
    <div class="container">
      <h1 class="title text-xl font-bold text-center p-5">お問い合わせ</h1>
    </div>

    <form action="/confirm" method="post">
      @csrf
      <div class="container justify-start sm:flex mb-5">
        <p class="font-bold sm:w-20vw pt-2 sm:ml-7vw">お名前<span class="text-red-500 ml-1 font-normal">※</span></p>
        <div class="">
          <input type="text" name="last-name" value="{{ old('last-name') }}" class="rounded border-gray-400 w-full sm:w-30vw">
          <p class="m-2 ml-10 text-gray-400">例) 山田</p>
          @error('last-name')
            <p class="text-red-500 bg-red-300 p-1 mb-2">{{$message}}</p>
          @enderror
        </div>
        <div class="">
          <input type="text" name="first-name" value="{{ old('first-name') }}" class="rounded border-gray-400 w-full sm:w-30vw sm:ml-14">
          <p class="ml-10 m-2 sm:ml-24 text-gray-400">例) 太郎</p>
          @error('first-name')
            <p class="text-red-500 bg-red-300 sm:ml-14 p-1 mb-2">{{$message}}</p>
          @enderror
        </div>
      </div>
      
      <div class="container justify-start sm:flex items-center mb-5">
        <p class="sm:w-20vw font-bold sm:ml-7vw">性別<span class="text-red-500 ml-1 font-normal">※</span></p>
        <input type="radio" name="gender" checked="checked" value="1" {{ old('gender') == '男性' ? 'checked' : '' }} class=" mr-3 w-10 h-10">男性
        <input type="radio" name="gender" value="2" <?php if( old('gender')  == 2){ echo "checked";} ?> {{ old('gender') == '女性' ? 'checked' : '' }} class="w-10 h-10 ml-3 mr-3">女性
        @error('gender')
          <p class="text-red-500 bg-red-300 p-1 mb-2">{{$message}}</p>
        @enderror
      </div>
      
      <div class="container justify-start sm:flex mb-5">
        <p class="font-bold sm:w-20vw pt-2 sm:ml-7vw">メールアドレス<span class="badge-danger text-red-500 ml-1 font-normal">※</span></p>
        <div class="">
          <input type="email" name="email" value="{{ old('email') }}" class="rounded border-gray-400 w-full sm:w-65vw">
          <p class="m-2 ml-5 text-gray-400">例) test@example.com</p>
          @error('email')
            <p class="text-red-500 bg-red-300 p-1 mb-2">{{$message}}</p>
          @enderror
        </div>
      </div>
      

      <div class="container justify-start sm:flex mb-5">
        <p class="font-bold sm:w-20vw pt-2 sm:ml-7vw">郵便番号<span class="badge-danger text-red-500 ml-1 font-normal">※</span></p>
        <p class="m-3">〒</p>
        <div class="">
          <input type="text" name="postcode" value="{{ old('postcode') }}" class="rounded border-gray-400 w-full sm:w-62vw">
          <p class="m-2 ml-5 text-gray-400">例) 123-4567</p>
          @error('postcode')
            <p class="text-red-500 bg-red-300 p-1 mb-2">{{$message}}</p>
          @enderror
        </div>
      </div>
      

      <div class="container justify-start sm:flex mb-5">
        <p class="font-bold sm:w-20vw pt-2 sm:ml-7vw">住所<span class="badge-danger text-red-500 ml-1 font-normal">※</span></p>
        <div class="">
          <input type="text" name="address" value="{{ old('address') }}" class="rounded border-gray-400 w-full sm:w-65vw">
          <p class="m-2 ml-5 text-gray-400">例) 東京都渋谷区千駄ヶ谷1-2-3</p>
          @error('address')
            <p class="text-red-500 bg-red-300 p-1 mb-2">{{$message}}</p>
          @enderror
        </div>
      </div>
      

      <div class="container justify-start sm:flex mb-5">
        <p class="font-bold sm:w-20vw pt-2 sm:ml-7vw">建物名</p>
        <div class="">
          <input type="text" name="building_name" value="{{ old('building_name') }}" class="rounded border-gray-400 w-full sm:w-65vw">
          <p class="m-2 ml-5 text-gray-400">例) 千駄ヶ谷マンション101</p>
        </div>
      </div>
      
      <div class="container justify-start sm:flex mb-5">
        <p class="font-bold sm:w-20vw pt-2 sm:ml-7vw">ご意見<span class="badge-danger text-red-500 ml-1 font-normal">※</span></p> 
        <textarea name="opinion" cols="50" rows="10" class="rounded border-gray-400 w-full sm:w-65vw">{{ old('opinion') }}</textarea>
      </div>
      @error('opinion')
        <p class="text-red-500 bg-red-300 p-1 mb-2 sm:ml-27vw sm:w-65vw">{{$message}}</p>
      @enderror
      <div class="container justify-center flex mb-5">
        <button type="submit" class="container bg-black px-14 py-3 text-white rounded ">確認</button>
      </div>
      
    </form>
  </div>
</body>
</html>