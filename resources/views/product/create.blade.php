@extends('product.layout')
@section('content')
    <div class="container pt-5">

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Product Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="eg: banana">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Product Price</label>
                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="eg: 22 LE">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Details</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
