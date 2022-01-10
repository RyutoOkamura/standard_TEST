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
  <div class="colntainer m-10">
    <div class="container border border-red-500">
      <h1 class="title text-xl font-bold text-center p-5">管理システム</h1>
    </div>

    <form action="/serch" method="post">
      @csrf
      <div class="border border-red-500 lg:flex justify-start">

        <div class="container border border-red-500 justify-start lg:flex">
          <p class="font-bold w-10vw pt-2">お名前</p>
          <div class="container">
            <input type="text" name="fullname" placeholder="検索したい名前を入力してください" value="" class="rounded border-gray-400 w-full lg:w-30vw mb-5">
          </div>
        </div>
        
        <div class="container justify-start lg:flex items-center mb-5">
          <p class="font-bold lg:ml-7vw w-10vw">性別</p>
          <input type="radio" name="gender" checked="checked" value="1"  class=" mr-3 w-10 h-10">男性
          <input type="radio" name="gender" value="2" <?php if( old('gender')  == 2){ echo "checked";} ?> class="w-10 h-10 ml-3 mr-3">女性
          <input type="radio" name="gender" value="3" <?php if( old('gender')  == 3){ echo "checked";} ?> class="w-10 h-10 ml-3 mr-3">当てはまらない
        </div>
      </div>

      <div class="container border border-red-500 justify-start lg:flex">
        <p class="font-bold w-10vw">登録日</p>
        <div class="container">
          <input type="text" name="fullname" placeholder="検索開始日" value="" class="rounded border-gray-400 w-full sm:w-30vw">
          <p class="border border-red-500 lg:inline-block text-center">~</p>
          <input type="text" name="fullname" placeholder="検索終了日" value="" class="rounded border-gray-400 w-full sm:w-30vw mb-5">
        </div>
      </div>

      <div class="container border border-red-500 justify-start lg:flex">
        <p class="border border-red-500 font-bold lg:w-10vw pt-2">メールアドレス</p>
        <div class="container">
          <input type="text" name="fullname" placeholder="xxx@xxx" value="" class="rounded border-gray-400 w-full lg:w-30vw mb-5">
        </div>
      </div>

      <div class="container mb-12 border border-red-500">
        <button name="action" type="submit" value="submit" class="container btn-center bg-black px-14 py-3 text-white rounded ">検索</button>
        <button name="action" type="submit" value="return" class="btn-center text-black underline">リセット</button>
      </div>
  </form>

  <div class="container">
    <h1>ユーザー一覧</h1>
    @if(isset($contacts))
    <table>
      <tr class="text-left">
        <th class="border border-red-500 w-5vw">ID</th>
        <th class="border border-red-500 w-15vw">お名前</th>
        <th class="border border-red-500 w-10vw">性別</th>
        <th class="border border-red-500 w-30vw">メールアドレス</th>
        <th class="border border-red-500 w-40vw">ご意見</th>
      </tr>
    @foreach($contacts as $contact)
      <tr>
          <td class="border border-red-500">{{$contact->id}}</td>
          <td>{{$contact->fullname}}</td>
          <td>
            @if ($contact['gender'] === 1)
            男性
            @else
            女性
            @endif
          </td>
          <td>{{$contact->email}}</td>
          <td>{{$contact->opinion}}</td>
        </tr>
    @endforeach
    </table>
    @endif
  </div>
  
</body>