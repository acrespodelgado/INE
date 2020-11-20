<div id="sidebar">
    <ul>
        <li><h3>Nuevos productos</h3></li>
        @foreach($aCar_new as $new)
            @if($loop->index < 2)
                <a href="car/{{$new->id}}">
                    <li class="p-0">
                        <div class="sale-img-background wh-100">
                            <img src="{{url($new->imgurl)}}" alt="{{$new->imgurl}}" class="wh-100">
                        </div>
                        <div class="sale-description">
                            <h3>{{$new->carmodelbrand->name}}</h3>
                            @if($new->HasDiscount())
                                <h5 class="old flex">{{$new->price}}€</h5><span class="m-05">-</span><h4>{{$new->price - ($new->price * $new->discountPercent) / 100}}€</h4>
                            @else
                                <h4>{{$new->price}}€</h4>
                            @endif
                        </div>
                    </li>
                </a>
            @endif
        @endforeach
        <a href="#"><li><i class="fa fa-balance-scale" aria-hidden="true"></i><h3>Ofertas</h3></li></a>
        <a href="#" name="search"><li><i class="fa fa-search" aria-hidden="true"></i><h3>Buscador</h3></li></a>
        <a href="#"><li><i class="fa fa-road" aria-hidden="true"></i><h3>Distribuidores</h3></li></a>
        <a href="#"><li><i class="fa fa-phone" aria-hidden="true"></i><h3>Contáctanos</h3></li></a>
    </ul>
</div>