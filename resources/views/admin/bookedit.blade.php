@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Inventaris</a></li>
                <li class="breadcrumb-item active">Ubah Data Buku</li>
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
                <tr>
                    <th scope="row">1</th>
                    <td>PAG001</td>
                    <td>Pendidikan Agama Islam Kelas X</td>
                    <td>
                        <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                            class="img-fluid rounded-start table-image" alt="...">
                    </td>
                    <td>2023</td>
                    <td>Pendidikan Agama</td>
                    <td>400</td>
                    <td>4A</td>
                    <td>
                        <a href="#"><i class="bi bi-pencil"></i></a>
                        <a href="#" style="color: red; margin-left: 1rem;"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>PAG002</td>
                    <td>Pendidikan Agama Islam Kelas XI</td>
                    <td>
                        <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                            class="img-fluid rounded-start table-image" alt="...">
                    </td>
                    <td>2023</td>
                    <td>Pendidikan Agama</td>
                    <td>375</td>
                    <td>4A</td>
                    <td>
                        <a href="#"><i class="bi bi-pencil"></i></a>
                        <a href="#" style="color: red; margin-left: 1rem;"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>PAG003</td>
                    <td>Pendidikan Agama Islam Kelas XII</td>
                    <td>
                        <img src="https://ebooks.gramedia.com/ebook-covers/43467/image_highres/ID_PAIBPX2018MTH07.jpg"
                            class="img-fluid rounded-start table-image" alt="...">
                    </td>
                    <td>2023</td>
                    <td>Pendidikan Agama</td>
                    <td>375</td>
                    <td>4A</td>
                    <td>
                        <a href="#"><i class="bi bi-pencil"></i></a>
                        <a href="#" style="color: red; margin-left: 1rem;"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>

    </section>

</main><!-- End #main -->

@endsection