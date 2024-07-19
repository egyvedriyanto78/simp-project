@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Profil saya</li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-4">
                <div class="card profile-card">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}"
                            class="rounded-circle img-thumbnail custom-profile-img" alt="Profile Image" width="150"
                            height="150">
                        <h3 class="mt-3">Egy Vedriyanto</h3>
                        <p>Administrator</p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-8">
                <div class="card profile-card">
                    <div class="card-body">
                        <ul class="nav nav-tabs custom-profile-nav" id="profileTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">Ringkasan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="edit-profile-tab" data-bs-toggle="tab" href="#edit-profile"
                                    role="tab" aria-controls="edit-profile" aria-selected="false">Ubah Profil</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="change-password-tab" data-bs-toggle="tab"
                                    href="#change-password" role="tab" aria-controls="change-password"
                                    aria-selected="false">Ubah Kata Sandi</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-3" id="profileTabContent">
                            <!-- Overview Tab -->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">
                                <h4>Ringkasan</h4>
                                <p>Administrator Perpustakaan SMA Negeri 1 Kotaagung bertugas untuk mengelola
                                    perpustakaan dan juga melayani dengan sepenuh hati kepada semua anggota
                                    perpustakaan.</p>
                            </div>
                            <!-- Edit Profile Tab -->
                            <div class="tab-pane fade" id="edit-profile" role="tabpanel"
                                aria-labelledby="edit-profile-tab">
                                <h4>Ubah Profil</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="Egy Vedriyanto">
                                    </div>
                                    <div class="mb-3">
                                        <label for="job" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control" id="job" name="job"
                                            value="Administrator">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pic" class="form-label">Foto</label>
                                        <input class="form-control" type="file" id="pic" name="pic">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                            <!-- Change Password Tab -->
                            <div class="tab-pane fade" id="change-password" role="tabpanel"
                                aria-labelledby="change-password-tab">
                                <h4>Ubah Kata Sandi</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="current-password" class="form-label">Kata Sandi Saat Ini</label>
                                        <input type="password" class="form-control" id="current-password"
                                            name="current-password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new-password" class="form-label">Kata Sandi Baru</label>
                                        <input type="password" class="form-control" id="new-password"
                                            name="new-password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
                                        <input type="password" class="form-control" id="confirm-password"
                                            name="confirm-password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ubah Kata Sandi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection