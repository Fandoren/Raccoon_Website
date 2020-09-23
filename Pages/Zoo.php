<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../Styles/bootstrap.css">
            <link rel="stylesheet" href="../Styles/style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <title>Милые еноты!</title>
        </head>
    <body>
        <header>
            <nav id="navbar-main" class="mobile-offcanvas navbar navbar-expand-md main-header fixed-top">
                <a class="navbar-brand text-light " href="#"><h3><i class="fa fa-paw"></i> Еноты</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light"><i class="fa fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light " href="index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link text-light " href="Species.php">Виды</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link text-light " href="Zoo.php">Зоопарки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link text-light " href="#">Форум</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link text-light " href="#">О нас</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid content">
            <div class="row-fluid first-row">
                <div class="accordion" id="accordionExample">
                    <div class="card bg-darker">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="bg-darker text-light btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Санкт-Петербург
                            </button>
                        </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body bg-content">
                                <ul class="list-unstyled">
                                <li><a class="text-light" href="#">Ленинградский зоопарк</a></li>
                                <li><a class="text-light" href="#">Енотовиль - Дом Енотов в Спб.</a></li>
                                <li><a class="text-light" href="#">Вот Енот</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-darker">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="bg-darker text-light btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Москва
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body bg-content">
                                <ul class="list-unstyled">
                                <li><a class="text-light" href="#">Московский зоопарк</a></li>
                                <li><a class="text-light" href="#">Кружок юных биологов зоопарка</a></li>
                                <li><a class="text-light" href="#">Лесное Посольство</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-darker">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="bg-darker text-light btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Остальная Россия
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body bg-content">
                                <ul class="list-unstyled">
                                <li><a class="text-light" href="#">Новосибирский зоопарк имени Р.А. Шило</a></li>
                                <li><a class="text-light" href="#">Калининградский зоопарк</a></li>
                                <li><a class="text-light" href="#">Государственный зоологический парк Удмуртии</a></li>
                                <li><a class="text-light" href="#">Ростовский-на-Дону Зоопарк</a></li>
                                <li><a class="text-light" href="#">Ярославский Зоопарк</a></li>
                                <li><a class="text-light" href="#">Городской парк флоры и фауны Роев ручей</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
                <div class="container-fluid text-center text-md-left foot">

                    <div class="row">

                        <div class="col-md-6 mt-md-0 mt-3">

                            <h5 class="text-uppercase">Какая-то общая информация</h5>
                            <p>Сайт очень классный, мне нравится. Его, кстати, сделал очень крутой человек, в 581 группе учится, вот.</p>

                        </div>

                        <hr class="clearfix w-100 d-md-none pb-3">

                            <div class="col-md-3 mb-md-0 mb-3">

                                <h5 class="text-uppercase">Ссылки</h5>

                                <ul class="list-unstyled">
                                <li>
                                    <a class="text-white" href="#!"><img class="link-icon" src="../Resources/Vkontakte.png"> Вконтакте </a>
                                </li>
                                </ul>

                            </div>

                    </div>
                </div>
        </footer>
    </body>
</html>