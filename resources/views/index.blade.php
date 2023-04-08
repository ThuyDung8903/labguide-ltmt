@extends('layouts.master')<!-- Kế thừa master view -->
@section('main') <!-- main là giá trị tại @yieldtrong master.blade.php -->
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, home page!</h1>
            <p>Contents ...</p>
            <p>
                <a class="btn btn-primary btn-lg">Learn more</a>
            </p>
        </div>
    </div>
@stop() <!-- kết thúc một section -->