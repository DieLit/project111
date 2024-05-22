@extends('layouts.layout')


@section('content')
<main>
    <article class="home">
        <div class="top_main_text">
            <h1>Совеременные<br>дома для всех</h1>
        </div>
        <div class="bot_main_text">
            <p>Мы предоставляем полный сервис по продаже,<br>
            покупке или аренде недвижимости. Мы работаем<br>
            на территории СНГ уже более 15 лет.</p>
        </div>
        <div class="header_picture">
            <img src="/public/img/header_picture.jpg" alt="" width="595" height="544">
        </div>

        <form action="" class="search_form">
            <div class="container">
                <input class="input_type" size="17" type="text" list="list" placeholder="Выберите тип">
                <datalist id="list">
                    <option value="Дом, дача">
                    <option value="Квартира">
                    <option value="Таунхаус">
                    <option value="Участок">
                    <option value="Гараж">
                </datalist>
                <input class="input_search" type="text" placeholder="&#xf3c5; Поиск локации" style="font-family: Arial, FontAwesome">
                <button class="button_search" style="font-family: Arial, FontAwesome">&#xf002; Поиск</button>
            </div>
        </form>
    </article>

    <article class="about">
        <div class="cont_about">
            <div class="about_img">
                <img src="/public/img/about.png" alt="">
            </div>
            
            <div class="about_txt">
                <h1 class="zag">О нас</h1>
                <p class="undr_zag">Мы компания, которая соединяет мир недвижимости и финансов. Мы предоставляем полный сервис по продаже, покупке или аренде недвижимости. Нашим преимуществом является более чем 15-летний опыт и территория в привлекательных местах Словакии с филиалами в Братиславе и Кошице.<p>
                У нас есть связь со всеми банками на словацком рынке, поэтому мы можем решить все под одной крышей. Постоянно внедряя инновации в нашу бизнес-деятельность, мы движемся вперед и можем предложить действительно услуги высочайшего уровня, которые отличают нас от конкурентов.</p>
            </div>
        </div>
    </article>


    <article class="cont_team">
        <div class="team_card">
            <img class='about_img1' src="/public/img/sad.jpg" alt="">
            <h1 class="name">Имя Фамилия</h1>
            <p class="udr_name">Frontend разработчик</p>
        </div>

        <div class="team_card2">
            <img class='about_img2' src="/public/img/happy.jpg" alt="">
            <h1 class="name2">Имя Фамилия</h1>
            <p class="udr_name2">Backend разработчик</p>
        </div>

        <div class="about_team">
            <h1 class="up_me">Наша команда</h1>
            <p class="undr_me">У нас работают лучшие специалисты со всей европы, с опытом работы не менее 5 лет.</p>
        </div>
    </article>

    <article class="review">
    <div class="review_txt">
        <h1 class="review_zag">Отзывы</h1>
        <p>Отзывы наших клиентов — искренние рассказы о нашей <br> 
            работе, профессионализме и заботе. Узнайте, как мы помогаем <br> нашим 
            клиентам осуществлять свои мечты о идеальном жилье. </p>
    </div>
    

            <div class="review_cont1">
                        <div class="review_text">
                            <p>"Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit. Tristique in pellentesque 
                                ultrices et massa neque, convallis lorem. 
                                Erat proin in posuere dui accumsan lorem. 
                                Diam nunc scelerisque mi vestibulum 
                                scelerisque mi ac nisi. Dictumst nunc 
                                placerat ultricies pretium."</p>
                        </div>
                        <div class="review_desc">
                            <h1>Иван Иванов</h1>
                            <p>3х комнатная хата жесткая крутая</p>
                        </div>
            </div>
    
                    <div class="review_cont2">
                        <div class="review_text">
                            <p>Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit. Tristique in pellentesque 
                                ultrices et massa neque, convallis lorem. 
                                Erat proin in posuere dui accumsan lorem. 
                                Diam nunc scelerisque mi vestibulum 
                                scelerisque mi ac nisi. Dictumst nunc 
                                placerat ultricies pretium.</p>
                        </div>
                        <div class="review_desc">
                            <h1>Иван Иванов</h1>
                            <p>3х комнатная хата жесткая крутая</p>
                        </div>
                    </div>
        </article>
</main>
@endsection