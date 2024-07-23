@extends('layouts.layoutadmin')

@section('content')

<div class="container">
    

<form method="post" action="{{ route('broker.reg') }}" enctype="multipart/form-data">

    @csrf

    <div class="form-group">
        <label for="name">ФИО</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
        <label for="email">Почта</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="phone">Телефон</label>
        <input type="phone" class="form-control" id="phone" name="phone">
    </div>

    <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" class="form-control" id="password" name="password" >
    </div>

    <div class="form-group">
        <label for="password_confirmation">Подтвердите пароль</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
    </div>

    <div class="mt-2 form-group">
        <label for="avatar">Фотоr</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar" >
    </div>
   
    <button type="submit" class="mt-3 btn btn-primary">Создать аккаунт</button>

</form>

</div>

@endsection