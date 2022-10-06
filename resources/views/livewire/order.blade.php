<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
                    <div class="d-flex justify-content-between">
                        <h2 class="text-uppercase text-bold">Order products</h2>
                    </div>
                </div>
                {{-- <form action="{{ route('orders.store') }}" method="post">
                    @csrf --}}
                <div class="card-body">
                    {{-- search products --}}
                    <div class="search mb-4">
                        <form action="" wire:submit.prevent="addToCart">
                            @csrf
                            <input type="text" class="form-control" name="search" placeholder="Enter product code"
                                wire:model="product_code">
                        </form>

                    </div>
                    <div class="alert alert-danger">
                        {{ $message ?? '' }}
                    </div>
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Discount (%)</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="addMoreProduct">
                            @foreach ($cart_product as $key => $cart)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td class="w-30">
                                        <input type="text" value="{{ $cart->product->product_name }}"
                                            class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" name="price[]" id="price" class="form-control"
                                            value="{{ $cart->product_price }}">
                                    </td>
                                    <td>
                                        <input type="number" name="quantity[]" id="quantity" class="form-control"
                                            value="{{ $cart->product_qty }}">
                                    </td>
                                    <td>
                                        <input type="number" name="discount[]" id="discount" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="total_amt[]" id="total_amt" class="form-control"
                                            value="{{ $cart->product_qty * $cart->product_price }}">
                                    </td>
                                    <td><a href="#" class="btn btn-sm btn-danger"
                                            wire:click="removeProduct({{ $cart->id }})">
                                            <i class="bi-x"></i></a></td>
                                </tr>
                            @endforeach
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
                            <input type="radio" name="payment_method" value="cash" class="form-check-input" checked>
                            <label for="cash" class="form-check-label" for="flexCheckDefault">Cash</label>
                        </span>
                        <span class="me-2">
                            <input type="radio" name="payment_method" value="bank">
                            <label for="bank">Bank Transfer</label>
                        </span>
                        <span class="me-2">
                            <input type="radio" name="payment_method" value="card">
                            <label for="card" class="form-check-label" for="flexCheckDefault">Card</label>
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
