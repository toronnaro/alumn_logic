<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container mt-2">
        <a class="navbar-brand fw-bold" href="#" style="margin-right: 22rem;">Alumni</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link me-3 {{ Request::is('/') ? 'active fw-bold' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3 {{ Request::is('siswa*') ? 'active fw-bold' : '' }}" href="/siswa">Data
                        Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled fw-semibold" aria-disabled="true" style="margin-left: 23rem">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
