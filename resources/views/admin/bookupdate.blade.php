@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</a></li>
                <li class="breadcrumb-item">Daftar Buku</a></li>
                <li class="breadcrumb-item active">Ubah Data Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Ubah Data Buku</h3>
        <div class="container mb-3">
            <form id="bookForm" action="{{ url('/book/table/' . $book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="bookTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="bookTitle" name="judul" value="{{ $book->judul }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="bookCover" class="form-label">Sampul</label>
                    <input class="form-control" type="file" id="bookCover" name="sampul" value="{{ $book->sampul }}">
                </div>
                <div class="mb-3">
                    <label for="bookYear" class="form-label">Tahun Terbit</label>
                    <select class="form-select" id="bookYear" name="tahun_terbit" required>
                        <option selected disabled value="">Pilih Tahun</option>
                        @for ($year = 2000; $year <= 2024; $year++)
                            <option value="{{ $year }}" {{ $book->tahun_terbit == $year ? 'selected' : '' }}>{{ $year }}
                            </option>
                        @endfor
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookCategory" class="form-label">Kategori</label>
                    <select class="form-select" id="bookCategory" name="kategori" required>
                        <option selected disabled value="">Pilih Kategori</option>
                        <option value="Agama" {{ $book->kategori == 'Agama' ? 'selected' : '' }}>Pendidikan Agama</option>
                        <option value="PPKN" {{ $book->kategori == 'PPKN' ? 'selected' : '' }}>PPKN</option>
                        <option value="Fisika" {{ $book->kategori == 'Fisika' ? 'selected' : '' }}>Fisika</option>
                        <option value="Kimia" {{ $book->kategori == 'Kimia' ? 'selected' : '' }}>Kimia</option>
                        <option value="Matematika" {{ $book->kategori == 'Matematika' ? 'selected' : '' }}>Matematika
                        </option>
                        <option value="Biologi" {{ $book->kategori == 'Biologi' ? 'selected' : '' }}>Biologi</option>
                        <option value="Sejarah" {{ $book->kategori == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
                        <option value="Inggris" {{ $book->kategori == 'Inggris' ? 'selected' : '' }}>Bahasa Inggris
                        </option>
                        <option value="Indonesia" {{ $book->kategori == 'Indonesia' ? 'selected' : '' }}>Bahasa Indonesia
                        </option>
                        <option value="Comedy" {{ $book->kategori == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                        <option value="Fantasy" {{ $book->kategori == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                        <option value="Horror" {{ $book->kategori == 'Horror' ? 'selected' : '' }}>Horror</option>
                        <option value="Mystery" {{ $book->kategori == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                        <option value="Psychology" {{ $book->kategori == 'Psychology' ? 'selected' : '' }}>Psychology
                        </option>
                        <option value="Romance" {{ $book->kategori == 'Romance' ? 'selected' : '' }}>Romance</option>
                        <option value="Scifi" {{ $book->kategori == 'Scifi' ? 'selected' : '' }}>Sci-Fi</option>
                        <option value="Self" {{ $book->kategori == 'Self' ? 'selected' : '' }}>Pengembangan Diri</option>
                        <option value="Filsafat" {{ $book->kategori == 'Filsafat' ? 'selected' : '' }}>Filsafat</option>
                        <option value="Biografi" {{ $book->kategori == 'Biografi' ? 'selected' : '' }}>Autobiografi &
                            Biografi</option>
                        <option value="Lainnya" {{ $book->kategori == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookStock" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="bookStock" name="stok" value="{{ $book->stok }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="bookLocation" class="form-label">Lokasi</label>
                    <select class="form-select" id="bookLocation" name="lokasi" required>
                        <option selected disabled value="">Pilih Lokasi</option>
                        <option value="A1" {{ $book->lokasi == 'A1' ? 'selected' : '' }}>Rak A1</option>
                        <option value="A2" {{ $book->lokasi == 'A2' ? 'selected' : '' }}>Rak A2</option>
                        <option value="A3" {{ $book->lokasi == 'A3' ? 'selected' : '' }}>Rak A3</option>
                        <option value="A4" {{ $book->lokasi == 'A4' ? 'selected' : '' }}>Rak A4</option>
                        <option value="B1" {{ $book->lokasi == 'B1' ? 'selected' : '' }}>Rak B1</option>
                        <option value="B2" {{ $book->lokasi == 'B2' ? 'selected' : '' }}>Rak B2</option>
                        <option value="B3" {{ $book->lokasi == 'B3' ? 'selected' : '' }}>Rak B3</option>
                        <option value="B4" {{ $book->lokasi == 'B4' ? 'selected' : '' }}>Rak B4</option>
                        <option value="C1" {{ $book->lokasi == 'C1' ? 'selected' : '' }}>Rak C1</option>
                        <option value="C2" {{ $book->lokasi == 'C2' ? 'selected' : '' }}>Rak C2</option>
                        <option value="C3" {{ $book->lokasi == 'C3' ? 'selected' : '' }}>Rak C3</option>
                        <option value="C4" {{ $book->lokasi == 'C4' ? 'selected' : '' }}>Rak C4</option>
                        <option value="D1" {{ $book->lokasi == 'D1' ? 'selected' : '' }}>Rak D1</option>
                        <option value="D2" {{ $book->lokasi == 'D2' ? 'selected' : '' }}>Rak D2</option>
                        <option value="D3" {{ $book->lokasi == 'D3' ? 'selected' : '' }}>Rak D3</option>
                        <option value="D4" {{ $book->lokasi == 'D4' ? 'selected' : '' }}>Rak D4</option>
                        <option value="E1" {{ $book->lokasi == 'E1' ? 'selected' : '' }}>Rak E1</option>
                        <option value="E2" {{ $book->lokasi == 'E2' ? 'selected' : '' }}>Rak E2</option>
                        <option value="E3" {{ $book->lokasi == 'E3' ? 'selected' : '' }}>Rak E3</option>
                        <option value="E4" {{ $book->lokasi == 'E4' ? 'selected' : '' }}>Rak E4</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui Buku</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection