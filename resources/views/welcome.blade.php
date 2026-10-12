<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'My Laravel App') }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">My Laravel App</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link text-secondary" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero / Jumbotron Section -->
    <div class="bg-primary text-white text-center py-5">
        <div class="container py-3">
            <h1 class="display-5 fw-bold">Welcome Aboard!</h1>
            <p class="fs-5 mb-2">{{ $name ?? 'Leon' }}</p>
            <p class="small text-white-50 mb-3">{{ $datetime ?? date('Y-m-d H:i:s') }}</p>
            <p class="lead mb-0">A simple and elegant app using Bootstrap 5 and Laravel Blade.</p>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container my-5">
        <div class="row g-4">
            
            <!-- Kolom Kiri -->
            <div class="col-md-6">
                <!-- Card 1: About Our Application -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">About Our Application</h5>
                        <p class="card-text text-muted">
                            Our application provides a clean and intuitive interface, allowing users to navigate easily and perform tasks efficiently. Built with Laravel and Bootstrap, it offers flexibility and responsiveness.
                        </p>
                        <a href="#" class="btn btn-primary">Explore More</a>
                    </div>
                </div>

                <!-- Card 2: Accordion About Us -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <div class="accordion accordion-flush" id="aboutAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold text-primary bg-transparent px-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        About Us
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body px-0 text-muted">
                                        We are a tech company that specializes in web development solutions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold text-dark bg-transparent px-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        Our Services
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body px-0 text-muted">
                                        Web design, backend development, and cloud services.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Badges, List & Card -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Badges, List, & Card</h5>
                        <div class="mb-3">
                            <span class="badge bg-primary">Web Dev</span>
                            <span class="badge bg-success">Laravel</span>
                            <span class="badge bg-danger">Bootstrap</span>
                        </div>
                        <ul class="list-group list-group-flush border-top">
                            <li class="list-group-item px-0 text-muted">Item Satu</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6">
                <!-- Card: Form Pertanyaan -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">Form Pertanyaan</h5>
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label text-muted small fw-bold">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-muted small fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label text-muted small fw-bold">Pertanyaan</label>
                                <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                        </form>
                    </div>
                </div>

                <!-- Alert Section -->
                <div class="alert alert-primary border-0 shadow-sm" role="alert">
                    Informational alert
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>