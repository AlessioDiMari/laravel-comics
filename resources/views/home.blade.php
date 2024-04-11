@extends('layouts/app')

@section('content')

    <div class="wrapper">
        <div class="container">
            <h2>current series</h2>
        </div>
        <div class="container">
            <!-- lista prodotti -->
            <div class="product-list">

                @foreach ($comics as $comic)
                
                    <div class="product">
                        <img src="{{$comic['thumb']}}" alt="">
                        <h4>{{$comic['title']}}</h4>
                        <div class="price">{{$comic['price']}}</div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection