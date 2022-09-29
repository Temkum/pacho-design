<style>
    #sidebar ul.lead {
        border-bottom: solid 1px #47748b;
        width: fit-content;
    }

    #sidebar a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        /* color: #008b8b; */
        text-decoration: none;
    }

    #sidebar i {
        margin-right: 10px;
        /* color: #008b8b; */
    }

    .bi {
        font-size: 1.2rem;
    }

    .menu-item {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #sidebar li:hover {
        background: rgba(0, 255, 255, 0.5);
    }

    .lead .active {
        background: rgba(87, 216, 199, 0.411);
    }
</style>

<nav id="sidebar" class="sidebar">
    <ul class="list-unstyled lead">
        <li class="menu-item active">
            <i class="bi bi-aspect-ratio"></i>
            <a href="/">Home</a>
        </li>
        <li class="menu-item">
            <i class="bi bi-stack"></i>
            <a href="{{ route('orders.index') }}">Orders</a>
        </li>
        <li class="menu-item">
            <i class="bi bi-cash-stack"></i>
            <a href="{{ route('transactions.index') }}">Transactions</a>
        </li>
        <li class="menu-item">
            <i class="bi bi-box-seam"></i>
            <a href="{{ route('products.index') }}">Products</a>
        </li>
    </ul>
</nav>
