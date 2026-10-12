<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Fasilitas Kota</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('profil') }}">Profil</a>
                <a class="nav-link" href="{{ route('reports.index') }}">Laporan</a>
                <a class="nav-link" href="{{ route('categories.index') }}">Kategori</a>
            </div>
        </div>
    </div>
</nav>