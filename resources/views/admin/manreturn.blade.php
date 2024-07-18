@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengembalian Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Manajemen</a></li>
                <li class="breadcrumb-item active">Pengembalian Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Daftar Peminjam Buku</h3>
        <table class="table table-secondary table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">UID Anggota</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>240718001</td>
                    <td>PAG001</td>
                    <td>Pendidikan Agama Islam Kelas X</td>
                    <td>24010115</td>
                    <td>Leonor Van Lora</td>
                    <td>2024-07-18</td>
                    <td>
                        <a href="{{ url('/management/return/confirmation') }}" class="btn btn-info">Kembalikan</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>240718002</td>
                    <td>FIS003</td>
                    <td>Fisika Kelas XII</td>
                    <td>22020107</td>
                    <td>Lamine Yamal</td>
                    <td>2024-07-18</td>
                    <td>
                        <a href="{{ url('/management/return/confirmation') }}" class="btn btn-info">Kembalikan</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </section>

</main><!-- End #main -->

@endsection