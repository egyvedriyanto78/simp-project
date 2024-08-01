<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ?? 'Perpustakaan' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon-smansaka.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon-smansaka.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/dashboard') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo-smansaka.png') }}" alt="">
                <span class="d-none d-lg-block">Perpustakaan</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form id="searchForm" class="search-form d-flex align-items-center">
                <input type="text" name="query" id="searchInput" placeholder="Cari" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <div id="searchResults"></div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>Administrator</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/profile') }}">
                                <i class="bi bi-person"></i>
                                <span>Profil saya</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data @submit.prevent="confirmLogout">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Keluar</span>
                                </button>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? '' : 'collapsed' }}" data-bs-target="#home-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-house-door"></i><span>Beranda</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="home-nav" class="nav-content collapse {{ request()->is('dashboard') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Dasbor</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Home Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('book/*') ? '' : 'collapsed' }}" data-bs-target="#components-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Inventaris</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse {{ request()->is('book/*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/book/list') }}" class="{{ request()->is('book/list') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Katalog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/book/table') }}" class="{{ request()->is('book/table') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Ubah Data Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/book/table/create') }}"
                            class="{{ request()->is('book/table/create') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Tambah Buku</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('management/*') ? '' : 'collapsed' }}" data-bs-target="#forms-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Manajemen</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse {{ request()->is('management/*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/management/borrow') }}"
                            class="{{ request()->is('management/borrow') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Pinjam Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/management/return') }}"
                            class="{{ request()->is('management/return') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Pengembalian Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/management/history') }}"
                            class="{{ request()->is('management/history') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Riwayat Peminjaman</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('member/*') ? '' : 'collapsed' }}" data-bs-target="#tables-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-lines-fill"></i></i><span>Anggota</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse {{ request()->is('member/*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/member/list') }}" class="{{ request()->is('member/list') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Daftar Anggota</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/member/table') }}"
                            class="{{ request()->is('member/table') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Ubah Data Anggota</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/member/table/create') }}"
                            class="{{ request()->is('member/table/create') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Tambah Anggota</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('information/*') ? '' : 'collapsed' }}" data-bs-target="#extra-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder2"></i><span>Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="extra-nav" class="nav-content collapse {{ request()->is('information/*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/information/faq') }}"
                            class="{{ request()->is('information/faq') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>F.A.Q</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/information/contact') }}"
                            class="{{ request()->is('information/contact') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Kontak</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Extra Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SMA Negeri 1 Kotaagung</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://www.linkedin.com/in/egyvedriyanto/" target="_blank">Egy Vedriyanto</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
        function confirmLogout(event) {
            if (confirm("Apakah yakin ingin logout?")) {
                event.target.submit();
            }
        }
    </script>

    <script>
        document.getElementById('searchForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah form untuk submit secara default

            let query = document.getElementById('searchInput').value;

            // Kirim permintaan AJAX ke server
            fetch('{{ route('search') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ query: query })
            })
                .then(response => response.json())
                .then(data => {
                    let resultsDiv = document.getElementById('searchResults');
                    resultsDiv.innerHTML = ''; // Kosongkan hasil sebelumnya

                    if (data.results.length > 0) {
                        data.results.forEach(item => {
                            let resultItem = document.createElement('div');
                            resultItem.textContent = item.judul + ' - ' + item.kategori; // Sesuaikan dengan atribut yang ada
                            resultsDiv.appendChild(resultItem);
                        });
                    } else {
                        resultsDiv.textContent = 'Tidak ada hasil yang ditemukan.';
                    }
                });
        });
    </script>

    @yield('scripts')

</body>

</html>