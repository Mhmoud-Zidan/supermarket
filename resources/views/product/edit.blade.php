@extends('product.layout')
@section('content')
    <div class="container pt-5">

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1"> <a href="{{ route('products.index') }}">Back </a> Product Name:
                    {{ $product->name }}</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                    id="exampleFormControlInput1" placeholder="eg: banana">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Product Price</label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                    id="exampleFormControlInput1" placeholder="eg: 22$">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Details</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1"
                    rows="3">{{ $product->detail }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
@endsection
