@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Katalog</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</a></li>
                <li class="breadcrumb-item active">Katalog</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Kategori Buku</h3>
        <div class="d-flex align-items-start mb-3">
            <!-- Buku Pelajaran -->
            <div class="btn-group me-2">
                <button type="button" class="btn btn-secondary">Mata Pelajaran</button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#agama">Pendidikan Agama</a></li>
                    <li><a class="dropdown-item" href="#ppkn">PPKN</a></li>
                    <li><a class="dropdown-item" href="#fisika">Fisika</a></li>
                    <li><a class="dropdown-item" href="#kimia">Kimia</a></li>
                    <li><a class="dropdown-item" href="#matematika">Matematika</a></li>
                    <li><a class="dropdown-item" href="#biologi">Biologi</a></li>
                    <li><a class="dropdown-item" href="#sejarah">Sejarah</a></li>
                    <li><a class="dropdown-item" href="#inggris">Bahasa Inggris</a></li>
                    <li><a class="dropdown-item" href="#bhsindo">Bahasa Indonesia</a></li>
                </ul>
            </div>

            <!-- Novel -->
            <div class="btn-group me-2">
                <button type="button" class="btn btn-secondary">Novel</button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#comedy">Comedy</a></li>
                    <li><a class="dropdown-item" href="#fantasy">Fantasy</a></li>
                    <li><a class="dropdown-item" href="#horror">Horror</a></li>
                    <li><a class="dropdown-item" href="#mystery">Mystery</a></li>
                    <li><a class="dropdown-item" href="#psychology">Psychology</a></li>
                    <li><a class="dropdown-item" href="#romance">Romance</a></li>
                    <li><a class="dropdown-item" href="#scifi">Sci-Fi</a></li>
                </ul>
            </div>

            <!-- Lainnya -->
            <div class="btn-group">
                <button type="button" class="btn btn-secondary">Lainnya</button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#selfimp">Pengembangan Diri</a></li>
                    <li><a class="dropdown-item" href="#filsafat">Filsafat</a></li>
                    <li><a class="dropdown-item" href="#biografi">Autobiografi & Biografi</a></li>
                    <li><a class="dropdown-item" href="#lainnya">Lainnya</a></li>
                </ul>
            </div>
        </div>

        <div class="container mb-3" id="agama">
            <h5>Pendidikan Agama</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="{{ url('/book/list/detail') }}">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas XI</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG002</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>375</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//96/MTA-39306326/kemendikbud-republik-indonesia_buku-siswa-kelas-xii-agama-islam-edisi-revisi-terbaru-buku-siswa-pai-kelas-12_full01.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas XII</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG003</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>375</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="ppkn">
            <h5>Pendidikan Pancasila dan Kewarganegaraan</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas XI</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG002</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>375</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="fisika">
            <h5>Fisika</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="kimia">
            <h5>Kimia</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="matematika">
            <h5>Matematika</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="biologi">
            <h5>Biologi</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="sejarah">
            <h5>Sejarah</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="inggris">
            <h5>Bahasa Inggris</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="bhsindo">
            <h5>Bahasa Indonesia</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="comedy">
            <h5>Comedy</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="Fantasy">
            <h5>Fantasy</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="horror">
            <h5>Horror</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="mystery">
            <h5>Mystery</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="psychology">
            <h5>Psychology</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="romance">
            <h5>Romance</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="scifi">
            <h5>Sci-Fi</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="selfimp">
            <h5>Pengembangan Diri</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="filsafat">
            <h5>Filsafat</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="biografi">
            <h5>Autobiografi & Biografi</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-3" id="lainnya">
            <h5>Lainnya</h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3" style="width: 420px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-header">Pendidikan Agama Islam Kelas X</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">ID</div>
                                        <div>PAG001</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Stok</div>
                                        <div>400</div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="me-auto">Detail</div>
                                        <div>
                                            <a href="#">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main><!-- End #main -->

@endsection