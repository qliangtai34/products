<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}" />
</head>
<body>
<div class="container">
<h1>編集</h1>
<p>{{$product->seasons->pluck('id')}}</p>
<form action="/products/{{$product->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form__group-title">
        <span class="form__label--item">
        商品名
        </span>
        
        </div>
        <div class="input">
        <input type="text" name="name" value="{{$product->name}}"><br>
        <input type="text" name="price" value="{{$product->price}}"><br>
        <input type="file" name="image" value="{{$product->image}}"><br>
        </div>
        <input type="checkbox" name="seasons[]" value="1">春
        <input type="checkbox" name="seasons[]" value="2">夏
        <input type="checkbox" name="seasons[]" value="3">秋
        <input type="checkbox" name="seasons[]" value="4">冬
        <br>
        <textarea name="description" id="">{{$product->description}}</textarea>
        <br>
        <input type="submit" value="登録">
        
    </form>

    <form action="/products/{{$product->id}}/delete" method="POST">
            @csrf
        
            
            <button>削除</button>
        </form>
</div>
</body>
</html>