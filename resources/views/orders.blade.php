@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h2 class="text-uppercase text-bold">Orders</h2>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Discount (%)</th>
                                    <th>Total</th>
                                    <th colspan="2">
                                        <a href="#" class="btn btn-sm btn-success add-more">
                                            <i class="bi-plus"></i> Add</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="addMoreProduct">
                                <tr>
                                    <td></td>
                                    <td>
                                        <select name="product_id[]" id="product_id" class="form-control product_id">
                                            <option value="">Select item</option>
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}" data-price="{{ $product->price }}">
                                                    {{ $product->product_name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" name="price[]" id="price" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" name="quantity[]" id="quantity" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" name="discount[]" id="discount" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" name="total_amt[]" id="total_amt" class="form-control">
                                    </td>
                                    <td><a href="#" class="btn btn-sm btn-danger">
                                            <i class="bi-x"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Total: <span class="total text-bold fs-2">0.00</span></div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.add-more').on('click', function() {
            let product = $('.product_id').html();
            let numberOfRow = ($('.addMoreProduct tr').length - 0) + 1;

            let tr = `<tr>
                    <td>${numberOfRow}</td>
                      <td>
                        <select name="product_id[]" id="product_id" class="form-control product_id">
                            ${product}
                        </select>
                    </td>
                    <td>
                        <input type="number" name="price[]" id="price" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="quantity[]" id="quantity" class="form-control">
                    <td>
                        <input type="number" name="discount[]" id="discount" class="form-control">
                    </td>
                    <td>
                        <input type="number" name="total_amt[]" id="total_amt" class="form-control total-amt">
                    </td>
                    <td><a href="#" class="btn btn-sm btn-danger delete">
                            <i class="bi-dashd me-1"></i>Remove</a></td>
                </tr>`
            $('.addMoreProduct').append(tr);
        });

        // delete row
        $('.addMoreProduct').delegate('.delete', 'click', function() {
            $(this).parent().parent().remove();
        });

        function totalAmount() {
            let total = 0;

            $('.total-amt').each(function(i, e) {
                let amount = $(this).val() - 0;
                total += amount;
            });

            $('.total').html(total);
        }

        $('.addMoreProduct').delegate('#product_id', 'change', function() {
            let tr = $(this).parent().parent();
            var price = tr.find('#product_id option:selected').attr('data-price');
            tr.find('#price').val(price);

            let qty = tr.find('#quantity').val() - 0;
            let disc = tr.find('#discount').val() - 0;
            var price = tr.find('#price').val() - 0;
            let total_amt = (qty * price) - ((qty * price * disc) / 100);
            tr.find('#total_amt').val(total_amt);

            totalAmount();
        });

        $('.addMoreProduct').delegate('#quantity, #discount', 'keyup', function() {
            let tr = $(this).parent().parent()
            let qty = tr.find('#quantity').val() - 0;
            let disc = tr.find('#discount').val() - 0;
            var price = tr.find('#price').val() - 0;
            let total_amt = (qty * price) - ((qty * price * disc) / 100)
            tr.find('#total_amt').val(total_amt)

            totalAmount();
        });
    </script>
@endsection
