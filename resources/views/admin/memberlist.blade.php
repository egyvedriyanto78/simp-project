@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Anggota Perpustakaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Anggota</li>
                <li class="breadcrumb-item active">Daftar Anggota</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Daftar Anggota Perpustakaan</h3>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            @foreach ($members as $member)
                <div class="col">
                    <div class="card custom-card">
                        <img src="{{ $member->foto ? asset($member->foto) : 'https://via.placeholder.com/200' }}"
                            class="card-img-top custom-img" alt="Foto {{ $member->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ url('/member/list/detail/' . $member->uid) }}" class="custom-link">
                                    {{ $member->nama }}
                                </a>
                            </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                <div class="me-auto">UID</div>
                                <div>{{ $member->uid }}</div>
                            </li>
                            <li class="list-group-item d-flex">
                                <div class="me-auto">Gender</div>
                                <div>{{ ucfirst($member->jenis_kelamin) }}</div>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</main><!-- End #main -->

@endsection