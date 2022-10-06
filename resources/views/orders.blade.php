@extends('layouts.app')

@section('content')
    @livewire('order')
@endsection

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
                        <select name="product_id[]" id="product_id" class="form-select">
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
