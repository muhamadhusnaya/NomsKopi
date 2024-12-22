<nav class="navbar navbar-expand-lg navbar-light bg-black shadow">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item d-flex align-items-center">
                    <a class="icon-link text-decoration-none px-3" href="#">
                        <i class="bi bi-bell-fill text-light d-flex align-items-center"></i>
                    </a>
                    <img src="{{ asset('https://via.placeholder.com/40') }}" alt="Profile Picture" class="rounded-circle px-2">
                    <h4 class="text-light p-2">Admin</h4>
                    <button class="btn btn-link text-decoration-none">
                        <i class="bi bi-caret-down-fill text-light"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
