@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Anggota</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Anggota</a></li>
                <li class="breadcrumb-item active">Tambah Anggota</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Pendaftaran Anggota</h3>
        <div class="container mb-3">
            <form id="memberForm">
                <div class="mb-3">
                    <label for="memberUid" class="form-label">UID</label>
                    <input type="text" class="form-control" id="memberUid" name="memberUid" required>
                </div>
                <div class="mb-3">
                    <label for="memberName" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="memberName" name="memberName" required>
                </div>
                <div class="mb-3">
                    <label for="memberPhoto" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="memberPhoto" name="memberPhoto">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="gender" name="gender" required>
                        <option selected disabled value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Konfirmasi</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection