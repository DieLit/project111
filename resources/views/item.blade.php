@extends('layouts.layout')

<link rel="stylesheet" href="/public/css/item.css">

@section('content')

@if(session('success'))

<div class="alert alert-success text-center position-fixed top-10 start-50 translate-middle">
    {{session('success')}}
</div>

@endif

<!---------------------------- MAIN ---------------------------------->
<h4 name="mainh1" class="main-h1" > {{$post->name_apps}} </h4>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/product1.png" alt="First slide">    
    </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/product2.png" alt="First slide">   
       </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/product3.png" alt="First slide">     
       </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



<div class="allContactCont">

<form class="contact-cont" action="{{ route('message')}}" method="post">
@csrf

    <div class="contact">
    <h1>Свяжитесь с нами</h1> 

    <p>Название объявления</p>
    <input type="text" name="app" value="{{ $post->name_apps}}" >

    <p>ФИО</p>
    <input name="name" type="text" placeholder="Вашае ФИО" value="{{ auth()->user()->name }}">

    <p>Номер телефона</p>
    <input name="phone" type="phone" placeholder="Ваш номер телефона">

    <p>Почта</p>
    <input name="email" type="email" placeholder="Ваша почта">

    <p>Ваше сообщение</p>
    <textarea name="message" id="message" cols="18" rows="10"></textarea>
    <br>    
    <button type="submit">Отправить сообщение</button>
    </div>

</form>

    <div class="broker-cont">
        <div class="broker">
            <img src="" alt="">
            <br>
            <h1>{{ $post->fio_broker}}</h1>
            <h2>Риэлтор</h2>
            <p>{{ $post->email_broker}}</p>
            <p> {{$post->phone_broker}}</p> <br>
        </div>
    </div>

    </div>
</div>


<div class="allInfoCont">
<div class="about-line-cont">
    <div class="about-line">
        <img  src="img/XMLID 1.png" alt="">
        <h1>{{$post->type}}</h1>

        <img  src="img/dimensions 1.png" alt="">
        <h1>{{$post->total_area}}m²</h1>

        <img  src="img/Group.png" alt="">
        <h1>{{$post->city}}</h1>
    </div>
</div>



<div class="mortgage-cont">
    <div class="mortgage">
        <p class="mortgage-p">Стоимость:</p>
        <h1 class="mortgage-h1">{{$post->price}} ₽</h1>

    </div>
</div>


<div class="content-cont">
    <div class="content">
        <p>  </p> <br>

        <div class="info-cont">
            <div class="info">
                <h1>Основные характеристики</h1> 
                <b>Город: {{$post->city}}</b>  <br>
                <br>
                <b>Улица:{{$post->street}}</b>  <br>
                <br>
                <b>Мест в гараже:{{$post->garage}}</b>  <br>
                <br>
                <b>Количество комнат:{{$post->room}}</b><br>
                <br>
                <b>Использемая площадь:{{$post->useble_area}}</b> > m² <br>
                <br>
                <b>Общая площадь:{{$post->total_area}}</b>  m² <br>
                <br>
                <b>Балкон:{{$post->balcony}}</b>  <br>
                <br>
                <b>Терраса:{{$post->terrace}}</b>  <br>
                <br>
                <b>Ванная комната:{{$post->bath}}</b>  <br>

            </div>
        </div>
        </div>
    </div>
</div>

@endsection
