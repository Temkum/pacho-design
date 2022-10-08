<style>
    #print_order {
        box-shadow: 0 0 1in -0.25in rgb(0, 0, 0.5);
        padding: 2mm;
        margin: 10px auto;
        width: 400px;
    }

    #print_order .logo {
        height: 60px;
        width: 60px;
        background-image: url() no-repeat;
        background-size: 60px 60px;
        border-radius: 50px;
    }

    #print_order .info {
        display: block;
        margin-left: 0;
        text-align: center;
    }

    #print_order .info p {
        margin: 3px;
    }

    #print_order table {
        width: 100%;
    }

    #print_order h1 {
        font-size: 1.5em;
        color: #222;
    }

    #print_order h2 {
        font-size: 0.9em;
    }

    #print_order h3 {
        font-size: 1.3em;
        font-weight: 300;
        line-height: 2em;
    }

    #print_order p {
        font-size: 0.7em;
        line-height: 1.2em;
        color: #666;
    }

    .text div {
        min-height: 100px;
    }

    .mid {
        min-height: 80px;
    }

    .footer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    #table .items {
        color: #222;
        font-size: 12px;
        /* background: rgb(185, 183, 183); */
    }

    .table-title {
        font-weight: bold;
        font-size: 12px;
    }

    .fs-2 {
        font-size: 1.5rem;
    }

    .bold {
        font-weight: bold;
    }
</style>

<div id="print_order">
    <div class="container">
        <center id="logo">
            <div class="logo">Logo</div>
            <div class="info">Info</div>
            <h3>POS System</h3>
        </center>

        <div class="mid">
            <div class="info">
                <p>Address: Buea, Cameroon</p>
                <p>Email: example@test.com</p>
                <p>Phone: 679947838</p>
            </div>
        </div>

        <div class="footer ">
            <table id="table">
                <tr class="table-title">
                    <td>Item</td>
                    <td>Qty</td>
                    <td>Unit Price</td>
                    <td>Discount</td>
                    <td>Sub total</td>
                </tr>

                @foreach ($order_receipt as $receipt)
                    <tr class="items">
                        <td>{{ $receipt->product->product_name }}</td>
                        <td>{{ $receipt->quantity }}</td>
                        <td>${{ number_format($receipt->product->price, 2) }}</td>
                        <td>{{ $receipt->discount ? '' : 0 }}</td>
                        <td>${{ number_format($receipt->amount, 2) }}</td>
                    </tr>

                    <tr class="items">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Tax</td>
                        <td></td>
                    </tr>
                    <tr class="items">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="bold">Total</td>
                        <td class="fs-2">
                            <b>${{ number_format($receipt->sum('amount'), 2) }}</b>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="text mt-4">
                <div>
                    <h5>** Thank you for coming! ** <br /></h5>
                    <p>Items are subject to taxes & prices include taxes</p>
                </div>
                <p class="legal text-bold">
                    Serial: <span class="serial">659875234551</span>
                    <span class="date">03/10/2022 &nbsp;</span>
                    <span class="time">10:25pm</span>
                </p>
            </div>
        </div>
    </div>
</div>
