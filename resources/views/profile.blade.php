@extends('layouts.layout')

<link rel="stylesheet" href="/public/css/profile.css">

@section('content')
<main>
    <div class="profile">
        <div class="profile_txt">
            <h2>Добро пожаловать в ваш профиль, {{ auth()->user()->name }}!</h2>
        </div>

        <div class="profile_desc">
            <p>Имя: {{ auth()->user()->name }}</p>
            <p>Почта: {{ auth()->user()->email }}</p>
            <p>Номер телефона: {{ auth()->user()->phone }}</p>
        </div>
        @foreach ($message as $mes)
        <div class="messages">
            <h2>Отправленные сообщения:</h2>
            
            <div class="mes1">
                <a href="">
                <p>Название объявления: {{$mes->app}} </p>
                <p>ФИО: {{$mes->name}}</p>
                <p>Номер телефона:{{$mes->phone}}</p>
                <p>Почта:{{$mes->email}}</p>
                <p>Ваше сообщение:{{$mes->message}}</p>
            </a>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection