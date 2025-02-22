<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>一覧</h1>
    <a href="/products/register">登録</a>
    <table>
        <tr>   
           <th>id</th>
           <th>価格</th>
           <th>画像</th>
           <th>詳細</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->price}}</td>
            <td><img src="{{asset($product->image)}}" alt=""></td>
        <td><a href="/products/{{$product->id}}">詳細</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>