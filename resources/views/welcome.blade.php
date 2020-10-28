@extends('master.master')

@section('title', 'Pillatubuga')

@section('content')
    @parent
        <div id="ofertas">
            <h2>Ofertas</h2>
            <div class="row">
                <div class="col-12 col-md-6 sale-item">
                    <a href="#">
                        <div class="dark-background wh-100"></div>
                        <div class="sale-img-background wh-100">
                            <img src="img/producto1.jpg" alt="producto1" class="wh-100">
                        </div>
                        <div class="sale-description">
                            <h3>Range Rover Evoque</h3>
                            <span></span>
                            <h4>54000€</h4>
                            <p>Un todoterreno capaz de cualquier cosa. Atrévete a probarlo.</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 sale-item">
                    <a href="#">
                        <div class="dark-background wh-100"></div>
                        <div class="sale-img-background wh-100">
                            <img src="img/producto6.jpg" alt="producto6" class="wh-100">
                        </div>
                        <div class="sale-description">
                            <h3>BMW M8</h3>
                            <span></span>
                            <h4>96000€</h4>
                            <p>Siente el lujo y la deportividad de la más alta gama de BMW.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 sale-item">
                    <a href="#">
                        <div class="dark-background wh-100"></div>
                        <div class="sale-img-background wh-100">
                            <img src="img/producto2.jpg" alt="producto2" class="wh-100">
                        </div>
                        <div class="sale-description">
                            <h3>Honda Civic Type R</h3>
                            <span></span>
                            <h4>42000€</h4>
                            <p>Una auténtica bestia de los track, ¿podrás dominar sus 320cv?</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 sale-item">
                    <a href="#">
                        <div class="dark-background wh-100"></div>
                        <div class="sale-img-background wh-100">
                            <img src="img/producto5.jpg" alt="producto5" class="wh-100">
                        </div>
                        <div class="sale-description">
                            <h3>Audi RS8 Cabrio</h3>
                            <span></span>
                            <h4>160000€</h4>
                            <p>620cv Alemanes dispuestos a rodar junto a tí en una experiencia sin igual.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
@endsection
    
