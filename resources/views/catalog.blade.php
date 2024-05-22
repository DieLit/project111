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

    <div class="search">
        <input class="input-filter" style="font-family:Open sans, FontAwesome" type="text" placeholder="Введите ключевое слово">
        <a class="search-btn" href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i> Поиск</a>
    </div>

    <div class="line-cont">
        <div class="line"></div>
        <p class="lince-p">Настройки фильтра</p>
    </div>

    <div class="filter">
        <input class="input-room" type="text" list="list" placeholder="Выберите количество комнат">
            <datalist id="list">
                <option value="1 комната">
                <option value="2 комнаты">
                <option value="3 комнаты">
                <option value="4 комнаты">
                <option value="5 комнаты">
            </datalist>

            <input class="input-location" type="text" list="location" placeholder="Выберите локацию">
            <datalist id="location">
                <option value="Бразилия">
                <option value="Италия">
                <option value="Тайланд">
                <option value="Германия">
                </datalist>
    </div>

<div class="price">
    <input class="input-price" type="range" min="0" max="1000000" step="10000">
        <div class="text-price">
        <p class="min">0 ₽</p>
        <p class="max">100 000 000 ₽</p>
    </div>
</div>
</div>
    
</div>

<main>
    <section class="catalog">
<!---------------------------------- CARDS --------------------------->
        <div class="product">
            <img src="">
            <h3> </h3>
            <p> комнат</p>
            <p>>₽</p>
            <p></p>
            <a href="/item?id=" class="btn">Открыть</a>
        </div>
    </section>

</main>



<!-------------------------------- SPAM ----------------------------->
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
        
</section>

@endsection