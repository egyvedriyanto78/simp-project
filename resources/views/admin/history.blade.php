@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Riwayat Peminjaman</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Manajemen</li>
                <li class="breadcrumb-item active">Riwayat Peminjaman</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Riwayat Peminjaman Buku Perpustakaan</h3>
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
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Denda (Rp)</th>
                    <th scope="col">Status</th>
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
                        <td>{{ $borrowing->returnDate }}</td>
                        <td>{{ $borrowing->fine }}</td>
                        <td>
                            @if (is_null($borrowing->status))
                                <form action="{{ route('management.updateStatus', $borrowing->borrowCode) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin konfirmasi pembayaran?');">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Bayar</button>
                                </form>
                            @else
                                Lunas
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>

</main><!-- End #main -->

@endsection