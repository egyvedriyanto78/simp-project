@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Anggota</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Anggota</li>
                <li class="breadcrumb-item">Tabel Anggota</li>
                <li class="breadcrumb-item active">Ubah Data Anggota</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Ubah Data Anggota</h3>
        <div class="container mb-3">
            <form id="memberForm" action="{{ url('/member/table/' . $member->uid) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $member->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="laki-laki" {{ $member->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="perempuan" {{ $member->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <img src="{{ asset($member->foto) }}" alt="Foto {{ $member->nama }}" class="img-fluid mt-2 memberimg">
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection