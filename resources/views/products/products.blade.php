@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h2 class="text-uppercase text-bold">Products</h2>
                            <h5>
                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                    data-bs-target="#addUser">
                                    <i class="bi-plus me-1"></i>Add</a>
                            </h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Stock</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($products->count() >= 1)
                                    @foreach ($products as $key => $product)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>{{ number_format($product->price, 2) }}</td>
                                            <td> {{ $product->quantity }} </td>
                                            <td>
                                                @if ($product->stock_alert >= $product->quantity)
                                                    <span class="badge bg-danger">Low stock</span>
                                                @else
                                                    <span class="badge bg-success">In stock</span>
                                                @endif
                                            </td>
                                            <td> {{ $product->description }} </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="me-4 btn btn-sm btn-outline-primary"
                                                        href="{{ route('products.edit', $product->id) }}"
                                                        data-bs-toggle="modal" data-bs-target="#edit_{{ $product->id }}">
                                                        Edit</a>
                                                    <button class="btn btn-sm btn-outline-danger" role="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete-{{ $product->id }}">Delete</button>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- edit product --}}
                                        <div class="modal fade" id="edit_{{ $product->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-bs-backdrop="stat" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Edit
                                                            product</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('products.update', $product->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Name</span>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $product->product_name }}"
                                                                    placeholder="Product name" aria-label="Name"
                                                                    name="product_name" aria-describedby="basic-addon1"
                                                                    autofocus>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="basic-addon1">Brand</span>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $product->brand }}"
                                                                    placeholder="Product brand" name="brand"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="basic-addon1">Price</span>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $product->price }}"
                                                                    placeholder="Product price" name="price"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"
                                                                    id="basic-addon1">Quantity</span>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $product->quantity }}"
                                                                    placeholder="Product quantity" name="quantity"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text" id="basic-addon1">Stock
                                                                    Alert</span>
                                                                <input type="number" class="form-control"
                                                                    value="{{ $product->stock_alert }}"
                                                                    placeholder="Product quantity" name="stock_alert"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Description</span>
                                                                <textarea class="form-control" name="description">{{ $product->description }}</textarea>
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- delete product --}}
                                        <div class="modal fade" id="delete-{{ $product->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-bs-backdrop="stat"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-uppercase" id="exampleModalLabel">
                                                            Delete
                                                            product</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('products.destroy', $product->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <h3>Are you sure?</h3>
                                                            <div class="modal-footer ">
                                                                <button data-bs-dismiss="modal" type="button"
                                                                    class="btn btn-secondary">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <td colspan="6">No products found</td>
                                @endif
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Search</div>

                    <div class="card-body">
                        <div class="search-box">
                            <form action="" method="GET">
                                <input type="text" id="search" placeholder="Search item..." class="form-control"
                                    name="search" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add product modal --}}
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Add product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" class="form-control" placeholder="Product name" aria-label="Name"
                                name="product_name" aria-describedby="basic-addon1" autofocus>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Brand</span>
                            <input type="text" class="form-control" placeholder="Product brand" name="brand"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Price</span>
                            <input type="number" class="form-control" placeholder="Product price" name="price"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Quantity</span>
                            <input type="number" class="form-control" placeholder="Product quantity" name="quantity"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Stock</span>
                            <input type="number" class="form-control" placeholder="Enter stock" name="stock_alert"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
