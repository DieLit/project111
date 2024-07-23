@extends('layouts.layout')

<link rel="stylesheet" href="/public/css/catalog.css">

@section('content')
<div class="main-text-cont">
    <h1 class="main-h1">Найдите лучший вариант</h1>
    <p class="main-p">Выбирайте из самых выгодных предложений</p>
</div>


<!------------------------------- FILTER ----------------------------->
<div class="cont-filter">

<div class="zdar">
<form action="" method="POST">
    @csrf
    <div class="search">
        <input class="input-filter" style="font-family:Open sans, FontAwesome" type="text" placeholder="Введите ключевое слово">
        <a class="search-btn" href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i> Поиск</a>
    </div>
</form>
</div>
    
</div>

<main>
    <section class="catalog">
<!---------------------------------- CARDS --------------------------->
@foreach ($posts as $post)
        <div class="product">
            @isset($path)
                <img src="{{asset('/storage/' . $path)}}">
            @endisset
            <h3>{{ $post->name_apps }}</h3>
            <p> {{ $post->room }} комнат</p>
            <p>{{ $post->price }}₽</p>
            <p></p>
            <a href="{{ route('posts.item', $post->id) }}" class="btn">Открыть</a>
        </div>
        @endforeach
    </section>

</main>



{{-- <!-------------------------------- SPAM ----------------------------->
<section class="spam_cont">

        <div class="spam-img-block">
            <img class="spam-img"src="img/Group 188.png" alt="">
        </div>

        <div class="spam-block-text">
            <h1 class="spam-h1">Подпишитесь чтобы следить за новостями</h1>
            <p class="spam-p">Получайте последние новости и интересные предложения</p>  
            <input class="spam-input" type="email" placeholder="Ваш почта e-mail">
            <button class="spam-btn" type="submit">Подписаться</button>
        </div>
        
</section> --}}

@endsection