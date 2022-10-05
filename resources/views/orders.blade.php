@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h2 class="text-uppercase text-bold">Orders products</h2>
                        </div>
                    </div>
                    <form action="{{ route('orders.store') }}" method="post">
                        @csrf
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
                                        <th>
                                            <a href="#" class="btn btn-sm btn-success add-more">
                                                {{-- <i class="bi-plus"></i> --}}
                                                Add</a>
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
                                                        {{ $product->product_name }}
                                                    </option>
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Total: <span class="total text-bold fs-2">0.00</span></div>
                    <div class="card-body">
                        <div class="btns mb-3">
                            <div class="btn-group">
                                <button class="btn btn-secondary"
                                    onclick="event.preventDefault();printReceiptContent('print');">
                                    <i class="bi-printer me-2"></i>
                                    Print</button>
                                <button class="btn btn-primary"><i class="bi-file-earmark-pdf me-2"></i> Report</button>
                                <button class="btn btn-success"><i class="bi-alarm me-2"></i> Latest</button>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-2">
                                <label for="customer">Customer</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="">
                                <label for="desc">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <div class="payment-method d-flex mt-4">
                            <span class="me-2">
                                <input type="radio" name="payment_method" value="cash" selected>
                                <label for="cash">Cash</label>
                            </span>
                            <span class="me-2">
                                <input type="radio" name="payment_method" value="bank">
                                <label for="bank">Bank Transfer</label>
                            </span>
                            <span class="me-2">
                                <input type="radio" name="payment_method" value="card">
                                <label for="card">Card</label>
                            </span>
                        </div>
                        <div class="payment-method d-flex mt-4">
                            <span class="me-2">
                                <label for="cash">Amount Paid</label>
                                <input type="number" name="amt_paid" value="" class="form-control" id="amt_paid">
                            </span>
                            <span class="me-2">
                                <label for="balance">Balance</label>
                                <input type="number" name="balance" value="" class="form-control" id="balance"
                                    readonly>
                            </span>
                        </div>
                        <div class="text-center">
                            <button class="btn w-100 btn-primary mt-3">Save</button>
                        </div>
                        <div class="text-center">
                            <button class="btn w-100 btn-warning mt-3">Calculator</button>
                        </div>

                    </div> <!-- card body -->
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
{{-- <div class="modal fade">
    <div id="print">
        @include('receipt')
    </div>
</div> --}}

<div class="modal fade" id="print" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            @include('receipt')
        </div>
    </div>
</div>


@section('script')
    <script>
        $('.add-more').on('click', function() {
            let product = $('.product_id').html();
            let numberOfRow = ($('.addMoreProduct tr').length - 0) + 1;

            let tr = `<tr>
                    <td>${numberOfRow}</td>
                      <td>
                        <select name="product_id[]" id="product_id" class="form-control">
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
            let tr = $(this).parent().parent();
            let qty = tr.find('#quantity').val() - 0;
            let disc = tr.find('#discount').val() - 0;
            var price = tr.find('#price').val() - 0;
            let total_amt = (qty * price) - ((qty * price * disc) / 100);
            tr.find('#total_amt').val(total_amt)

            totalAmount();
        });

        $('#amt_paid').keyup(function() {
            // console.log('hi')

            let total = $('.total').html();
            let paid_amt = $(this).val();
            let gTotal = parseFloat(paid_amt - total);

            $('#balance').val(gTotal).toFixed(2);
        });

        // print receipt
        function printReceiptContent(el) {
            var data =
                `<input type="button" id="printBtn" class="printBtn" value="Print Receipt" onclick="window.print()" style = "display: block; width: 100%; border: none; background-color: #008b8b; color: white; padding:10px; cursor:pointer;"`;
            data += document.getElementById(el).innerHTML;
            myReceipt = window.open('', 'myWin', 'left=500, top=130, width=500, height=600');
            console.log(myReceipt)

            myReceipt.screenX = 0;
            myReceipt.screenY = 0;
            myReceipt.document.write(data);
            myReceipt.document.title = 'Print Receipt';
            myReceipt.focus();

            setTimeout(() => {
                myReceipt.close();
            }, 8000)
        }
    </script>
@endsection
{{-- <input type="button" id="printBtn" class="printBtn d-block btn-primary btn-lg w-100" value="Print Receipt"
    onclick="window.print()"
    style="display: block; width: 100%; border: none; background-color: #008b8b; color: white;"> --}}
