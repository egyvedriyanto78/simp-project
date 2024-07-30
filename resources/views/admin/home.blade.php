@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dasbor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item active">Dasbor</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Summary Cards -->
            <div class="col-lg-3 col-md-6">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Buku</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-book"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalBooks }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Total Books Card -->

            <div class="col-lg-3 col-md-6">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Anggota</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalMembers }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Total Members Card -->

            <div class="col-lg-3 col-md-6">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Peminjaman</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-left-right"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalBorrowings }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Total Borrowings Card -->

            <div class="col-lg-3 col-md-6">
                <div class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Denda (Rp)</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalFines }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Total Fines Card -->

            <div class="row">
                <!-- Left Column -->
                <div class="col-lg-8">
                    <!-- Borrowings Chart -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Statistik Peminjaman Buku</h5>
                            <div id="borrowingsChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#borrowingsChart"), {
                                        series: [{
                                            name: 'Peminjaman',
                                            data: @json($borrowingsByDate->pluck('total'))
                                        }],
                                        chart: {
                                            type: 'line',
                                            height: 350
                                        },
                                        xaxis: {
                                            categories: @json($borrowingsByDate->pluck('date'))
                                        }
                                    }).render();
                                });
                            </script>
                        </div>
                    </div><!-- End Borrowings Chart -->

                    <!-- Books by Category Chart -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Buku per Kategori</h5>
                            <div id="booksByCategoryChart"></div>

                            <script src="https://cdn.jsdelivr.net/npm/chroma-js"></script>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const numCategories = @json($booksByCategory->count());
                                    const colors = chroma.scale('Set1').mode('lch').colors(numCategories);

                                    new ApexCharts(document.querySelector("#booksByCategoryChart"), {
                                        series: [{
                                            name: 'Jumlah Buku',
                                            data: @json($booksByCategory->pluck('total'))
                                        }],
                                        chart: {
                                            type: 'bar',
                                            height: 350
                                        },
                                        xaxis: {
                                            categories: @json($booksByCategory->pluck('kategori'))
                                        },
                                        plotOptions: {
                                            bar: {
                                                distributed: true
                                            }
                                        },
                                        colors: colors
                                    }).render();
                                });
                            </script>
                        </div>
                    </div><!-- End Books by Category Chart -->

                    <!-- Top Borrowed Books Table -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Top Buku yang Paling Sering Dipinjam</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Preview</th>
                                        <th>Judul Buku</th>
                                        <th>Total Dipinjam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($topBorrowedBooks as $book)
                                        <tr>
                                            <td><img src="{{ $book->sampul ? asset($book->sampul) : asset('assets/img/book/puhsepuh.jpg') }}"
                                                    alt="Sampul" style="width: 50px; height: 75px;"></td>
                                            <td>{{ $book->judul }}</td>
                                            <td>{{ $book->borrow_count }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- End Top Borrowed Books Table -->

                </div><!-- End Left Column -->

                <!-- Right Column -->
                <div class="col-lg-4">
                    <!-- Member Gender Statistics Pie Chart -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Statistik Anggota Berdasarkan Jenis Kelamin</h5>
                            <div id="memberGenderChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#memberGenderChart"), {
                                        series: @json($memberGenderCounts->pluck('total')),
                                        chart: {
                                            type: 'pie',
                                            height: 350
                                        },
                                        labels: @json($memberGenderCounts->pluck('jenis_kelamin'))
                                    }).render();
                                });
                            </script>
                        </div>
                    </div><!-- End Member Gender Statistics Pie Chart -->

                </div><!-- End Right Column -->

            </div><!-- End row -->
        </div>
    </section>

</main><!-- End #main -->

@endsection