@extends('admin.layout.app')

@section('content')
<div class="container">
    <h1>Hasil Pencarian untuk "{{ $query }}"</h1>
    @if($results->isEmpty())
        <p>Tidak ada hasil yang ditemukan.</p>
    @else
        <ul>
            @foreach($results as $result)
                <li>{{ $result->name }} - {{ $result->description }}</li> <!-- Sesuaikan dengan atribut model Anda -->
            @endforeach
        </ul>
    @endif
</div>
@endsection