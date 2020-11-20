@extends('master.master')

@section('title', 'Pillatubuga')

@section('content')
    @parent
    <div id="ofertas">
        <h2>Ofertas</h2>
        <div class="row">
            @foreach($aCar_offering as $offering)
                @if($loop->index < 10)
                    <div class="col-12 col-md-6 sale-item">
                        <a href="car/{{$offering->id}}">
                            <div class="dark-background wh-100"></div>
                            <div class="sale-img-background wh-100">
                                <img src="{{url($offering->imgurl)}}" alt="{{$offering->imgurl}}" class="wh-100">
                            </div>
                            <div class="sale-description">
                                <h3>{{$offering->carmodelbrand->name}}</h3>
                                <span class="yellow"></span>
                                @if($offering->HasDiscount())
                                    <h5 class="old flex">{{$offering->price}}€</h5><span class="flex m-05">-</span><h4 class="flex">{{$offering->price - ($offering->price * $offering->discountPercent) / 100}}€</h4>
                                @else
                                    <h4>{{$offering->price}}€</h4>
                                @endif
                                <p>{{$offering->description}}</p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
    
