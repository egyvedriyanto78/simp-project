@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Anggota</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Anggota</a></li>
                <li class="breadcrumb-item active">Ubah Data Anggota</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <h3>Daftar Anggota</h3>
        <table class="table table-secondary table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">UID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>24010115</td>
                    <td>Leonor Van Lora</td>
                    <td>
                        <img src="https://img.freepik.com/free-photo/beauty-portrait-female-face_93675-132045.jpg"
                            class="img-fluid rounded-start table-image" alt="...">
                    </td>
                    <td>Perempuan</td>
                    <td>
                        <a href="#"><i class="bi bi-pencil"></i></a>
                        <a href="#" style="color: red; margin-left: 1rem;"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>22020107</td>
                    <td>Lamine Yamal</td>
                    <td>
                        <img src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg?cs=srgb&dl=pexels-creationhill-1681010.jpg&fm=jpg"
                            class="img-fluid rounded-start table-image" alt="...">
                    </td>
                    <td>Laki-laki</td>
                    <td>
                        <a href="#"><i class="bi bi-pencil"></i></a>
                        <a href="#" style="color: red; margin-left: 1rem;"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>23030221</td>
                    <td>Nathan Visca</td>
                    <td>
                        <img src="https://i.mdel.net/i/db/2016/4/510508/510508-800w.jpg"
                            class="img-fluid rounded-start table-image" alt="...">
                    </td>
                    <td>Perempuan</td>
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