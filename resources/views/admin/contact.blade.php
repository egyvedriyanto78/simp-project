@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Kontak</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Informasi</li>
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
                            <h5 class="contact-card-title">Informasi Kontak</h5>
                            <ul class="contact-list-group">
                                <li class="contact-list-group-item"><i class="bi bi-telephone"></i> Telepon: (0722)
                                    21056 / 21639</li>
                                <li class="contact-list-group-item"><i class="bi bi-envelope"></i> Email:
                                    sman1ktg@rocketmail.com</li>
                                <li class="contact-list-group-item"><i class="bi bi-geo-alt"></i> Alamat: Jl.
                                    Bhayangkara No.77, Kuripan, Kec. Kota Agung, Kabupaten Tanggamus Lampung Kp.35384
                                </li>
                                <li class="contact-list-group-item"><i class="bi bi-clock"></i> Jam Operasional: Senin -
                                    Jumat, 08:00 - 16:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-card">
                        <div class="contact-card-body">
                            <h5 class="contact-card-title">Lokasi Kami</h5>
                            <!-- Peta Lokasi -->
                            <div id="map-container" style="height: 400px;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.5427363912752!2d104.623200!3d-5.489295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMjknMjEuMCJTIDEwNMKwMzcnMjMuNSJF!5e0!3m2!1sen!2sid!4v1605655089323!5m2!1sen!2sid"
                                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection