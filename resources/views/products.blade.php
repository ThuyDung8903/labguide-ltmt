@extends('layouts.master')
@section('main')
    <div class="row">
        @csrf
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="{{$product->image}}" alt="{{$product->name}}">
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        <p>{{$product->price}} $</p>
                        <p><a href="#" class="btn btn-primary" role="button">View</a>
                            <a href="#" class="btn btn-default" role="button">Add to cart</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        {{--        {{ dd($products->links()); }}--}}
        {{$products->links()}}
    </div>
@stop()