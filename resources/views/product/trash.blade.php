@extends('product.layout')

@section('content')
    <div class="container pt-4">
        <div class="card">
            <div class="card-header">
                Trashed Products
            </div>
            <div class="card-body">

                <a href="{{ route('products.index') }}" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>
    @php
    $i = 1;
    @endphp
    <div class="container pt-2">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }} LE</td>
                        <td>


                            <div class="row" role="group" aria-label="Basic example">
                                <a href="{{ route('product.restore', $item->id) }}" class="btn btn-primary mr-2"
                                    role="button">Restore</a>
                                <a href="{{ route('product.forceDelete', $item->id) }}" class="btn btn-danger mr-2"
                                    role="button">Delete</a>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $products->links() }}

@endsection
