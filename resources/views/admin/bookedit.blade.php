@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</a></li>
                <li class="breadcrumb-item active">Daftar Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Daftar Buku</h3>
        <table class="table table-secondary table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($books as $index => $book)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->judul }}</td>
                        <td>
                            <img src="{{ $book->sampul ? asset($book->sampul) : asset('assets/img/book/coverbook.jpg') }}"
                                class="img-fluid rounded-start table-image" alt="Sampul Buku">
                        </td>
                        <td>{{ $book->tahun_terbit }}</td>
                        <td>{{ str_replace('_', ' ', $book->kategori) }}</td>
                        <td>{{ $book->stok }}</td>
                        <td>{{ $book->lokasi }}</td>
                        <td>
                            <a href="{{ url('/book/table/edit/' . $book->id) }}"><i class="bi bi-pencil"></i></a>
                            <form action="{{ url('/book/table/' . $book->id) }}" method="POST" style="display:inline;"
                                onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:none; border:none; color:red;">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>

</main><!-- End #main -->

@endsection

@section('scripts')
<script>
    function confirmDelete() {
        return confirm("Apakah yakin ingin menghapus data ini?");
    }
</script>
@endsection