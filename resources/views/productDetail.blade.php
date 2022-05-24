@extends('plantilles.plantilla')

@section('content')
    <h1>Product Detail</h1>
    <div class="container box">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>country</th>
                    <th>weight</th>
                    <th>Energy unit</th>
                    <th>Energy 100 g</th>
                    <th>Nutrition Info</th>
                    <th>Buy</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="{{($product->image)}}" alt="photo of {{$product->name}}"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td> {{$product -> country}} </td> 
                    <td> {{$product -> weight}} </td> 
                    <td> {{$product -> energy_unit}} </td> 
                    <td> {{$product -> energy_grams}} </td> 
                    <td> {{$product -> nutriotric_info}} </td> 
                    @auth
                    <td>
                        <a href="{{route('buy',$product->price)}}" class="btn btn-primary">Buy</a>
                    </td>
                    @endauth
                </tr>
@endsection
