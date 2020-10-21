<?php 
    include_once 'header.php';
?>
        <div class="container-fluid content fill-height">
            <div class="row-fluid first-row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-50" src="https://slon.fr/wp-content/uploads/2020/01/3-201901-001-1150-preview-2700-1280x640.jpg" alt="Зоопарк">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-50" src="https://vsluh.ru/uploads/2020/01/22/148919/fixed_large_4fb3bb1e-24fc-4353-99fe-b12fb620ffcb.jpg" alt="Контактный зоопарк">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-50" src="https://api.parkseason.ru/images/styles/1200_500/eb/ed/6e5db8936ed2dc3a70e57b8ee2818343572a2835a91f1631166437.jpg" alt="Московский зоопарк">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row-fluid">
                <div id="accordion">
                    <div class="card bg-darker">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link bg-darker text-light" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Санкт-Петербург
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
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
                            <button class="bg-darker text-light btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Москва
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
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
                            <button class="btn btn-link collapsed bg-darker text-light" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Остальная Россия
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
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

<?php 
    include_once 'footer.php';
?>