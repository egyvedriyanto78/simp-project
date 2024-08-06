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

                    <!-- Top Active Members Chart -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Top Anggota yang Paling Aktif</h5>
                            <div id="topActiveMembersChart" class="w-100"></div> <!-- Menambahkan kelas w-100 -->

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/2.1.0/chroma.min.js"></script>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const memberNames = @json($topActiveMembers->pluck('displayName'));
                                    const borrowCounts = @json($topActiveMembers->pluck('borrow_count'));
                                    const numMembers = memberNames.length;
                                    const colors = chroma.scale('Set1').mode('lch').colors(numMembers);

                                    console.log("Member Names:", memberNames);
                                    console.log("Borrow Counts:", borrowCounts);
                                    console.log("Colors:", colors);

                                    const topActiveMembersChartElement = document.querySelector("#topActiveMembersChart");
                                    if (topActiveMembersChartElement) {
                                        new ApexCharts(topActiveMembersChartElement, {
                                            series: [{
                                                name: 'Aktivitas',
                                                data: borrowCounts
                                            }],
                                            chart: {
                                                type: 'bar',
                                                height: 350,
                                                width: '100%' // Pastikan width diatur dengan benar
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: true,
                                                    distributed: true
                                                }
                                            },
                                            xaxis: {
                                                categories: memberNames
                                            },
                                            colors: colors
                                        }).render();
                                    }
                                });
                            </script>
                        </div>
                    </div><!-- End Top Active Members Chart -->

                    <!-- Books by Category Chart -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Buku per Kategori</h5>
                            <div id="booksByCategoryChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const numCategories = @json($booksByCategory->count());
                                    const colors = chroma.scale('Set1').mode('lch').colors(numCategories);

                                    console.log("Book Categories:", @json($booksByCategory->pluck('kategori')));
                                    console.log("Book Totals:", @json($booksByCategory->pluck('total')));
                                    console.log("Category Colors:", colors);

                                    const booksByCategoryChartElement = document.querySelector("#booksByCategoryChart");
                                    if (booksByCategoryChartElement) {
                                        new ApexCharts(booksByCategoryChartElement, {
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
                                    }
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
                    <!-- Real-Time Clock -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Waktu Saat Ini (Lampung)</h5>
                            <div id="clock" style="font-size: 24px; font-weight: bold;"></div>
                        </div>
                        <script>
                            async function fetchTime() {
                                const response = await fetch('http://worldtimeapi.org/api/timezone/Asia/Jakarta');
                                const data = await response.json();
                                const dateTime = new Date(data.datetime);
                                const hours = dateTime.getHours().toString().padStart(2, '0');
                                const minutes = dateTime.getMinutes().toString().padStart(2, '0');
                                const seconds = dateTime.getSeconds().toString().padStart(2, '0');
                                document.getElementById('clock').innerText = `${hours}:${minutes}:${seconds}`;
                            }

                            // Fetch time initially and then update every second
                            document.addEventListener("DOMContentLoaded", () => {
                                fetchTime();
                                setInterval(fetchTime, 1000);
                            });
                        </script>
                    </div>

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

                    <!-- Recently Added Books -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Buku yang Baru Ditambahkan</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentBooks as $book)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $book->judul }}</td>
                                            <td>{{ $book->kategori }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- End Recently Added Books -->

                    <!-- Recent Member Activity -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Aktivitas Terbaru Anggota</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Peminjam</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentActivities as $activity)
                                        <tr>
                                            <td>{{ $activity->judul }}</td>
                                            <td>{{ $activity->nama }}</td>
                                            <td>{{ $activity->borrowDate }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- End Recent Member Activity -->
                </div><!-- End Right Column -->

            </div><!-- End row -->
        </div>
    </section>

</main><!-- End #main -->

@endsection