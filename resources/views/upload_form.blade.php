@extends('layouts.master');

@section('main')
    <br>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <legend>Form upload</legend>
        <div class="form-group">
            <label for="">Chọn ảnh</label>
            <input type="file" class="form-control" name="image"/>
            @error('image') {{$message}} @enderror
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
@endsection