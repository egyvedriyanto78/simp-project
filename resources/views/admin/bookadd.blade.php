@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</a></li>
                <li class="breadcrumb-item active">Tambah Buku</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Tambah Buku</h3>
        <div class="container mb-3">
            <form id="bookForm" action="{{ url('/book/table/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="bookId" class="form-label">ID</label>
                    <input type="text" class="form-control" id="bookId" name="id" required>
                </div>
                <div class="mb-3">
                    <label for="bookTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="bookTitle" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="bookCover" class="form-label">Sampul</label>
                    <input class="form-control" type="file" id="bookCover" name="sampul">
                </div>
                <div class="mb-3">
                    <label for="bookYear" class="form-label">Tahun Terbit</label>
                    <select class="form-select" id="bookYear" name="tahun_terbit" required>
                        <option selected disabled value="">Pilih Tahun</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookCategory" class="form-label">Kategori</label>
                    <select class="form-select" id="bookCategory" name="kategori" required>
                        <option selected disabled value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->kategori }}">{{ str_replace('_', ' ', $category->kategori) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bookStock" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="bookStock" name="stok" required>
                </div>
                <div class="mb-3">
                    <label for="bookLocation" class="form-label">Lokasi</label>
                    <select class="form-select" id="bookLocation" name="lokasi" required>
                        <option selected disabled value="">Pilih Lokasi</option>
                        <?php
                        $racks = range('A', 'T');
                        foreach ($racks as $rack) {
                            for ($i = 1; $i <= 4; $i++) {
                                echo "<option value='{$rack}{$i}'>Rak {$rack}{$i}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Buku</button>
            </form>
        </div>

    </section>

</main><!-- End #main -->

@endsection