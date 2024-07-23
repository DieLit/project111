@extends('layouts.layout')

@section('content')
<div class="container">
    

    <form method="post" action="{{ route('add') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name_apps">Название объявления</label>
            <input type="text" class="form-control" id="name_apps" name="name_apps">
        </div>
    
        <div class="form-group">
            <label for="room">Количество комнат</label>
            <input type="text" class="form-control" id="room" name="room">
        </div>
    
        <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" class="form-control" name="price">
        </div>

        <div class="form-group">
            <label for="type">Тип недвижимости</label>
            <input type="text" class="form-control" name="type">
        </div>
        
        <div class="form-group">
            <label for="desc">Описание</label>
            <input type="text" class="form-control" name="desc">
        </div>

        <div class="form-group">
            <label for="city">Город</label>
            <input type="text" class="form-control" name="city">
        </div>

        <div class="form-group">
            <label for="street">Улица</label>
            <input type="text" class="form-control" name="street">
        </div>

        <div class="form-group">
            <label for="garage">Гараж</label>
            <input type="text" class="form-control" name="garage">
        </div>

        <div class="form-group">
            <label for="total_area">Общая площадь</label>
            <input type="text" class="form-control" name="total_area">
        </div>

        <div class="form-group">
            <label for="useble_area">Используемая площадь</label>
            <input type="text" class="form-control" name="useble_area">
        </div>

        <div class="form-group">
            <label for="balcony">Балкон</label>
            <input type="text" class="form-control" name="balcony">
        </div>

        <div class="form-group">
            <label for="terrace">Терраса</label>
            <input type="text" class="form-control" name="terrace">
        </div>

        <div class="form-group">
            <label for="bath">Количество ванных комнат</label>
            <input type="text" class="form-control" name="bath">
        </div>
    
        <div class="mt-2 form-group">
            <label for="img">Фото 1</label>
            <input type="file" class="form-control-file"  name="img" >
        </div>
        <div class="mt-2 form-group">
            <label for="img1">Фото 2</label>
            <input type="file" class="form-control-file"  name="img1" >
        </div>
        <div class="mt-2 form-group">
            <label for="img2">Фото 3</label>
            <input type="file" class="form-control-file"  name="img2" >
        </div>
        <div class="mt-2 form-group">
            <label for="img3">Фото 4</label>
            <input type="file" class="form-control-file"  name="img3" >
        </div>

        <div class="form-group">
            <label for="fio_broker">ФИО риэлтора</label>
            <input type="text" class="form-control" name="fio_broker">
        </div>

        <div class="form-group">
            <label for="emai_broker">Почта риэлтора</label>
            <input type="text" class="form-control" name="email_broker">
        </div>

        <div class="form-group">
            <label for="phone_broker">Номер телефона риэлтора</label>
            <input type="text" class="form-control" name="phone_broker">
        </div>
       
        <button type="submit" class="mt-3 btn btn-primary">Создать объявление</button>
    
    </form>
    
    </div>
@endsection