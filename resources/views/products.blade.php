@extends('plantilles.plantilla')

@section('content')
    <h1>Product list</h1>
    <div class="container box">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="{{($product->image)}}" alt="photo of {{$product->name}}"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{route('productDetail', $product->id)}}" class="btn btn-primary">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
