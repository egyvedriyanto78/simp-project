@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Kontak</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Informasi</a></li>
                <li class="breadcrumb-item active">Kontak</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-card">
                        <div class="contact-card-body">
                            <h5 class="contact-card-title">Kontak Kami</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="contact-form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="contact-form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="contact-form-label">Pesan</label>
                                    <textarea class="form-control" id="message" rows="4"
                                        placeholder="Pesan Anda"></textarea>
                                </div>
                                <button type="submit" class="contact-btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-card">
                        <div class="contact-card-body">
                            <h5 class="contact-card-title">Informasi Kontak</h5>
                            <ul class="contact-list-group">
                                <li class="contact-list-group-item"><i class="bi bi-telephone"></i> Telepon: (0722)
                                    21056 / 21639</li>
                                <li class="contact-list-group-item"><i class="bi bi-envelope"></i> Email:
                                    sman1ktg@rocketmail.com</li>
                                <li class="contact-list-group-item"><i class="bi bi-geo-alt"></i> Alamat: Jl.
                                    Bhayangkara No.77, Kuripan, Kec. Kota Agung,
                                    Kabupaten Tanggamus Lampung Kp.35384</li>
                                <li class="contact-list-group-item"><i class="bi bi-clock"></i> Jam Operasional: Senin -
                                    Jumat, 08:00 - 16:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection