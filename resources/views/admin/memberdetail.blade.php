@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Anggota Perpustakaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Anggota</li>
                <li class="breadcrumb-item">Daftar Anggota</li>
                <li class="breadcrumb-item active">Detail Anggota</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <div class="library-card mb-3" id="print-card">
            <div class="library-card-body text-center">
                <h3 class="library-card-title">KARTU ANGGOTA PERPUSTAKAAN</h3>
                <h5 class="library-card-title">SMA NEGERI 1 KOTAAGUNG</h5>
                <img src="{{ asset($member->foto) }}" class="img-fluid rounded-circle mt-3 library-card-img"
                    alt="Foto {{ $member->nama }}">
                <div class="library-card-text mt-3">
                    <p><strong>Nama:</strong> {{ $member->nama }}</p>
                    <p><strong>UID:</strong> {{ $member->uid }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ ucfirst($member->jenis_kelamin) }}</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" onclick="printCard()">Cetak Kartu</button>
        </div>

    </section>

</main><!-- End #main -->

@endsection

@section('scripts')
<script>
    function printCard() {
        const printContent = document.getElementById('print-card').innerHTML;
        const originalContent = document.body.innerHTML;
        document.body.innerHTML = '<div class="print-area">' + printContent + '</div>';
        window.print();
        document.body.innerHTML = originalContent;
        location.reload();
    }
</script>
@endsection