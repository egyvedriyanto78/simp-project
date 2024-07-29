@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengembalian Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Manajemen</li>
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
                    <th scope="col">Jumlah</th>
                    <th scope="col">UID Anggota</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($borrowings as $borrowing)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $borrowing->borrowCode }}</td>
                        <td>{{ $borrowing->book->id }}</td>
                        <td>{{ $borrowing->book->judul }}</td>
                        <td>{{ $borrowing->quantity }}</td>
                        <td>{{ $borrowing->member->uid }}</td>
                        <td>{{ $borrowing->member->nama }}</td>
                        <td>{{ $borrowing->borrowDate }}</td>
                        <td>
                            <a href="{{ route('return.confirmation', $borrowing->borrowCode) }}"
                                class="btn btn-info">Kembalikan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>

</main><!-- End #main -->

@endsection