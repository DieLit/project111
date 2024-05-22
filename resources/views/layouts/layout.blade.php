
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/main.css">
    <title>Real Estate :: Home page</title>
</head>
<body>
    
    <header>
        <nav>
            <div class="header-logo ">
                <a href="/"><img src="/public/img/logo.png " alt=" "></a>
            </div>
    
            <div class="nav ">
                <a href="/catalog" class="nav-item ">Каталог</a>
                <a href="@" class="nav-item ">О нас</a> 
                <a href="@ " class="nav-item ">Наша команда</a>
                <a href="@ " class="nav-item ">Отзывы</a>
            </div>
    
    @php
      dump(Auth::check())
    @endphp



                <div class="btn_contact">
                    <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-primary" id="contact_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Контакты
                    </button>
    
                    <!-- Модальное окно -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Контакты</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Наш номер телефона : +7(913) 196 55-18</h6>
                            <h6 class="mt-3">Наша электронная почта : realestate@mail.ru</h6>
                            <h6>Наши социальные сети : <a href="" ><i id="inst" class="fa-brands fa-instagram"></i></a> <a href=""><i id="whatsapp" class="fa-brands fa-whatsapp"></i></a> <a href=""><i id="tg" class="fa-brands fa-telegram"></i></a> <a href=""><i id="vk" class="fa-brands fa-vk"></i></a> </h6>
                        </div>
                        <div class="modal-footer justify-content-center align-items-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
    
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Авторизация</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form method="post" action="{{ route('log')}} ">
                                @csrf
                                <div class="mb-3">
                                      <label for="email" class="col-form-label">Почта</label>
                                      <input type="text" class="form-control" name="email" id="email" placeholder="Ваша почта">
                                  </div>
                                  <div class="mb-3">
                                      <label for="password" class="col-form-label">Пароль</label>
                                      <input type="password" class="form-control" name="user_email" id="password" placeholder="Ваш пароль">
                                  </div>
                                  <div class="modal-footer justify-content-center align-items-center">
                                    <button type="submit" class="btn btn-primary">Войти</button>
                                  </div>
                              </form>
                              <div class="modal-footer justify-content-center align-items-center">
                              <p class="p-bs">Если нет аккаунта -> <button class="btn btn-primary" id="signup_btn_modal" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Регистрация</button></p>
                            </div>
                          </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalToggleLabel2">Регистрация</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                          <div class="modal-body">
                            @foreach ($errors->all() as $message )
                              <li>{{$message}}</li>
                            @endforeach
                              <form method="post" action="{{ route('reg') }}">
                                @csrf
                                  <div class="mb-3">
                                    <label for="name" class="col-form-label">ФИО</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" placeholder="Ваше ФИО">
                                </div>
                                  <div class="mb-3">
                                      <label for="email" class="col-form-label">Почта</label>
                                      <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Ваша электронная почта">
                                  </div>
                                  <div class="mb-3">
                                      <label for="password" class="col-form-label">Пароль</label>
                                      <input type="password" class="form-control" name="pass" id="pass" placeholder="Ваш пароль">
                                  </div>
                                  <div class="mb-3">
                                    <label for="password_confirmation" class="col-form-label">Подтвердите пароль</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Подтвердите пароль">
                                </div>
                                <div class="modal-footer justify-content-center align-items-center">
                                  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                                </div>
                              </form>
                          </div>
            

                        <div class="modal-footer justify-content-center align-items-center">
                          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" id="back_to_login_btn" data-bs-dismiss="modal">Вернуться к авторизации</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Войти</a>
            
        
                </nav>
    </header>

    @yield('content')

    <footer>
        <div class="footer-cont">
            <img class="footer-logo" src="/public/img/logo-white.png" alt="">
            <h1 class="footer-h1">Real Estate</h1>
        </div>
    </footer>

<script src="https://kit.fontawesome.com/f8be89d6cd.js" crossorigin="anonymous"></script>
</body>
</html>