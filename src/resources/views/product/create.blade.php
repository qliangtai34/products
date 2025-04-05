<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
</head>
<body>
  <div class="container">
    <div class="title">
        <h1>商品登録</h1>
    </div>
    <form action="/products/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form__group-title">
        <span class="form__label--item">
        商品名
        </span>
        <span class="form__label--required">
        必須
        </span>
        </div>
        <div class="input">
        <input type="text" name="name"><br>
        </div>
        @if ($errors->has('name')){{$errors->first('name')}}@endif <br>
        <div class="form__group-title">
        <span class="form__label--item">
        値段
        </span>
        <span class="form__label--required">
        必須
        </span>
        </div>
        <div class="input">
        <input type="text" name="price"><br>
        </div>
        @if ($errors->has('price')){{$errors->first('price')}}@endif <br>
        <input type="file" name="image"><br>
        @if ($errors->has('image')){{$errors->first('image')}}@endif <br>
        <input type="checkbox" name="seasons[]" value="1">春
        <input type="checkbox" name="seasons[]" value="2">夏
        <input type="checkbox" name="seasons[]" value="3">秋
        <input type="checkbox" name="seasons[]" value="4">冬
        <br>
        @if ($errors->has('seasons')){{$errors->first('seasons')}}@endif <br>
        <textarea name="description" id=""></textarea>
        <br>
        @if ($errors->has('description')){{$errors->first('description')}}@endif <br>
        <input type="submit" value="登録">
    </form>
  </div>
</body>
</html>