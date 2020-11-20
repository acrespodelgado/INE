@extends('master.master')

@section('title', 'Detalles')

@section('content')
    @parent
    <div id="car-detail">
        <h2 class="m-40">{{$car->carmodelbrand->name}} ({{$car->carmodelbrand->year}})</h2>
        <div class="item-detail-img">
            <img src="{{url($car->imgurl)}}" alt="{{$car->imgurl}}" class="img-fluid">
        </div>
        <div class="item-detail-description container center">
            <div class="row m-20">
                <div class="col-12 col-sm-4">
                    <h5>Precio </h5>
                    <span class="blue"></span>
                    @if($car->HasDiscount())
                        <h6 class="old">{{$car->price}}€</h6></span><h6 class="flex"><b>{{$car->price - ($car->price * $car->discountPercent) / 100}}€</b></h6>
                    @else
                        <h6>{{$car->price}}€</h6>
                    @endif
                </div>
                <div class="col-12 col-sm-4">
                    <h5>Kilómetros </h5><span class="blue"></span><h6>{{$car->kilometers}} km</h6>
                </div>
                <div class="col-12 col-sm-4">
                    <h5>Combustible </h5><span class="blue"></span><h6>{{$car->carmodelbrand->fuel}}</h6>
                </div>
            </div>
            <div class="row m-20">
                <div class="col-12 col-sm-4">
                    <h5>Potencia </h5><span class="blue"></span><h6>{{$car->carmodelbrand->horsepower}} cv</h6>
                </div>
                <div class="col-12 col-sm-4">
                    <h5>Número de puertas</h5><span class="blue"></span><h6>{{$car->carmodelbrand->doors}}</h6>
                </div>
                <div class="col-12 col-sm-4">
                    <h5>Descripción </h5><span class="blue"></span><h6>{{$car->description}}</h6>
                </div>
            </div>     
        </div>
    </div>
@endsection
    
