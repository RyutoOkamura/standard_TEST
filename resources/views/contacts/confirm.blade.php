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
      <h1 class="title text-xl font-bold text-center p-5">内容確認</h1>
    </div>
      <form action="/process" method="post">
        @csrf
        <div class="container justify-start flex mb-12">
          <p class="font-bold w-24vw sm:ml-7vw">お名前</p>
          <div class="container w-65vw">
            {{ $inputs['last-name'] }}
            {{ $inputs['first-name'] }}
          </div>
          <input type="hidden" name="fullname" value="{{ $inputs['last-name'] }} {{ $inputs['first-name'] }}">
        </div>

        <div class="container justify-start flex items-center mb-12">
          <p class="w-24vw font-bold sm:ml-7vw">性別</p>
          <div class="w-65vw">
            <?php
              switch ($inputs['gender']){
                  case '1':
                  echo "男性";
                  break;
                  case '2':
                  echo "女性";
                  break;
              }
            ?>
          </div>
          <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
        </div>

        <div class="container justify-start flex items-center mb-12">
          <p class="w-24vw font-bold sm:ml-7vw">メールアドレス</p>
          <div class="w-65vw">
            {{ $inputs['email'] }}
          </div>
          <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        </div>

        <div class="container justify-start flex items-center mb-12">
          <p class="w-24vw font-bold sm:ml-7vw">郵便番号</p>
          <div class="w-65vw">
            {{ $inputs['postcode'] }}
          </div>
          <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
        </div>

        <div class="container justify-start flex items-center mb-12">
          <p class="w-24vw font-bold sm:ml-7vw">住所</p>
          <div class="w-65vw">
            {{ $inputs['address'] }}
          </div>
          <input type="hidden" name="address" value="{{ $inputs['address'] }}">
        </div>

        <div class="container justify-start flex items-center mb-12">
          <p class="w-24vw font-bold sm:ml-7vw">建物名</p>
          <div class="w-65vw">
            {{ $inputs['building_name'] }}
          </div>
          <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}">
        </div>

        <div class="container justify-start flex items-center mb-12">
          <p class="w-24vw font-bold sm:ml-7vw">ご意見</p> 
          <div class="w-65vw">
            {{ $inputs['opinion'] }}
          </div>
          <input type="hidden" name="opinion" value="{{ $inputs['opinion'] }}">
        </div>

        <div class="container mb-12">
          <button name="action" type="submit" value="submit" class="container btn-center bg-black px-14 py-3 text-white rounded ">送信</button>
          <button name="action" type="submit" value="return" class="btn-center text-black underline">修正する</button>
        </div>
      </form>

  </div>
</body>
</html>