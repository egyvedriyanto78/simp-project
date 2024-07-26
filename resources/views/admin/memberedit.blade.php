@extends('admin.layout.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Ubah Data Anggota</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Anggota</li>
                <li class="breadcrumb-item active">Tabel Anggota</li>
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
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($members as $index => $member)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $member->uid }}</td>
                        <td>{{ $member->nama }}</td>
                        <td>
                            <img src="{{ asset($member->foto) }}" class="img-fluid rounded-start table-image"
                                alt="Foto {{ $member->nama }}">
                        </td>
                        <td>{{ ucfirst($member->jenis_kelamin) }}</td>
                        <td>
                            <a href="{{ url('/member/table/edit/' . $member->uid) }}"><i class="bi bi-pencil"></i></a>
                            <form action="{{ url('/member/table/' . $member->uid) }}" method="POST" style="display:inline;"
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