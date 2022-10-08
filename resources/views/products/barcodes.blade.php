@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h2 class="text-uppercase text-bold">Barcodes</h2>
                            <h4 class="btn btn-outline-info">
                                <i class="bi-upc"></i>
                                Print Barcode
                            </h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Barcode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($prod_barcodes as $barcode)
                                        <td>{!! $barcode->barcode !!}
                                            <h5 class="text-bold">{{ $barcode->product_code }}</h5>
                                        </td>
                                    @empty
                                        <div colspan="6">No items found</div>
                                    @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Product Details</div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
