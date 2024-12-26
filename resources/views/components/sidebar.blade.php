<div class="col-md-3 bg-dark text-white min-vh-100">
    <div class="d-flex flex-column align-items-center py-3">
        {{-- <h4>{{ config('app.name', 'NOMS.KOPI') }}</h4> --}}
        <div class="d-flex">
            <img src="{{ asset('https://via.placeholder.com/40') }}" alt="Profile Picture" class="rounded-circle px-2">
            <h1 class="text-warning">NomsKopi</h1>
        </div>
        <div class="border-top border-white" style="width: 100%; height: 2px; margin-top: 20px;"></div>
        <ul class="nav flex-column w-100 ms-5 mt-3">
            <small class="text-white">MAIN MENU</small>
            <li class="nav-item d-flex align-items-center">
                <i class="bi bi-grid me-2"></i>
                <a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <i class="bi bi-cup-straw me-2"></i>
                <a href="{{ route('products') }}" class="nav-link text-white">Products</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <i class="bi bi-tag me-2"></i>
                <a href="{{ route('promo') }}" class="nav-link text-white">Kode Promo</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <i class="bi bi-cart me-2"></i>
                <a href="{{ route('orders') }}" class="nav-link text-white">Pesanan</a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <i class="bi bi-credit-card me-2"></i>
                <a href="{{ route('transactions') }}" class="nav-link text-white">Transaksi</a>
            </li>
            <li class="nav-item mt-4 d-flex flex-column align-items-start">
                <small class="text-white">SUPPORT</small>
                <div class="nav-item d-flex align-items-center">
                    <i class="bi bi-people me-2"></i>
                    <a href="{{ route('roles') }}" class="nav-link text-white">Role</a>
                </div>
                <div class="nav-item d-flex align-items-center">
                    <i class="bi bi-gear me-2"></i>
                    <a href="{{ route('settings') }}" class="nav-link text-white">Setting</a>
                </div>
                <div class="nav-item d-flex align-items-center">
                    <i class="bi bi-info-circle me-2"></i>
                    <a href="{{ route('help-center') }}" class="nav-link text-white">Help Center</a>
                </div>
            </li>
        </ul>
    </div>
</div>
