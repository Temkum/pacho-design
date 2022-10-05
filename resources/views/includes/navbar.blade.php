    <nav class="main-nav">
        <a href="#" class="btn btn-outline-primary me-3" data-bs-toggle="modal" data-bs-target="#sidebar">
            <i class="bi-list "></i>
        </a>
        {{-- <a href="{{ route('home') }}" class="btn btn-outline-primary me-4">
        <i class="bi-house me-2"></i>
        Home
    </a> --}}
        <a href="{{ route('users.index') }}" class="btn btn-outline-primary me-4">
            <i class="bi-people-fill me-2"></i> Users
        </a>
        <a href="{{ route('products.index') }}" class="btn btn-outline-primary me-4">
            <i class="bi-stack me-2"></i> Products
        </a>
        <a href="{{ route('orders.index') }}" class="btn btn-outline-primary me-4">
            <i class="bi-cart-check me-2"></i> Orders
        </a>
        <a href="#" class="btn btn-outline-primary me-4">
            <i class="bi-currency-exchange me-2"></i> Transactions
        </a>
        <a href="#" class="btn btn-outline-primary me-4">
            <i class="bi-pie-chart-fill me-2"></i>Report
        </a>
        <a href="#" class="btn btn-outline-primary me-4">
            <i class="bi-truck me-2"></i>Suppliers
        </a>
        <a href="#" class="btn btn-outline-primary me-4">
            <i class="bi-people me-2"></i>Customers
        </a>
        <a href="#" class="btn btn-outline-primary me-4">
            <i class="bi-bag-plus me-2"></i>Incoming
        </a>
    </nav>
