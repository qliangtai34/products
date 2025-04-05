<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
  <div class="container">
    <header>
       <h1>商品一覧</h1>
        <div>  <a href="/products/register">商品を追加</a> </div>
      </header>

   <div class="wrap">
    <aside>
      <form class="search-form" action="/products/search" method="get">
    
        <div class="search-form__item">
          <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}">
        </div>
        <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
        </div>
      </form>
    </aside>

    <main>
      @foreach($products as $product)
      <div class="card">
        <a href="/products/{{$product->id}}">
        <div class="card__img">
          <img src="{{asset($product->image)}}" alt="" />
        </div>
        <div class="card__content">
        
          <div class="card__content-tag">
            <p class="card__content-tag-item">{{$product->name}}</p>
            <p class="card__content-tag-item card__content-tag-item--last">
              {{$product->price}}
            </p>
          </div>
        </div>
        </a>
      </div>
        @endforeach

     </main>
   </div>
  </div>
</body>
</html>