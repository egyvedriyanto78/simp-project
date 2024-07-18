@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Frequently Ask Question</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Informasi</a></li>
                <li class="breadcrumb-item active">F.A.Q</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Pertanyaan Umum</h3>
        <div class="container mb-3">
            <div class="accordion" id="faqAccordion">
                <!-- Pertanyaan 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana cara mendaftar sebagai anggota perpustakaan?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Untuk mendaftar sebagai anggota perpustakaan, siswa dapat mengunjungi bagian administrasi
                            perpustakaan dan mengisi formulir pendaftaran. Siswa juga harus membawa kartu identitas
                            siswa untuk verifikasi.
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bagaimana cara meminjam buku dari perpustakaan?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Siswa dapat meminjam buku dengan mengunjungi perpustakaan dan menunjukkan kartu anggota
                            kepada petugas perpustakaan. Buku yang ingin dipinjam kemudian akan dicatat oleh petugas
                            perpustakaan.
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Berapa lama durasi peminjaman buku?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Durasi peminjaman buku adalah 7 hari. Siswa dapat memperpanjang masa peminjaman dengan
                            mengunjungi perpustakaan sebelum batas waktu peminjaman berakhir.
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Apa yang harus dilakukan jika buku yang dipinjam hilang?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Jika buku yang dipinjam hilang, siswa harus segera melaporkan kejadian tersebut kepada
                            petugas perpustakaan. Siswa akan diminta untuk mengganti buku yang hilang dengan buku yang
                            sama atau membayar denda sesuai dengan kebijakan perpustakaan.
                        </div>
                    </div>
                </div>
                <!-- Pertanyaan 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Bagaimana cara mencari buku di katalog perpustakaan?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Siswa dapat mencari buku di katalog perpustakaan melalui sistem informasi manajemen
                            perpustakaan yang tersedia di komputer yang disediakan di perpustakaan. Siswa juga dapat
                            meminta bantuan petugas perpustakaan untuk mencari buku yang diinginkan.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main><!-- End #main -->

@endsection