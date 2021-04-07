@extends('product.layout')

@section('content')
    <div class="container pt-4">
        <div class="card">
            <div class="card-header">
                All Products
            </div>
            <div class="card-body">

                <a href="{{ route('products.create') }}" class="btn btn-success">Create</a>
                <a href="{{ route('products.trash') }}" class="btn btn-warning">Trash</a>

            </div>
        </div>
    </div>

    <div class="pt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
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
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary mr-2"
                                    role="button">Edit</a>
                                <a href="{{ route('products.show', $item->id) }}" class="btn btn-success mr-2"
                                    role="button">Show</a>
                                <a href="{{ route('soft.delete', $item->id) }}" class="btn btn-warning mr-2"
                                    role="button">Soft Delete</a>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $products->links() }}

@endsection
