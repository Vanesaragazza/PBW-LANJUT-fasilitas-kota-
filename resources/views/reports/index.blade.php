@extends('layouts.app')

@section('title', 'Data Laporan - Fasilitas Kota')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h1 class="h4 mb-4">{{ $judul }}</h1>
        <table class="table table-hover align-middle bg-white">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Fasilitas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['fasilitas'] }}</td>
                    <td>
                        @if($item['status'] == 'Baru')
                            <span class="badge bg-danger">Baru</span>
                        @elseif($item['status'] == 'Diproses')
                            <span class="badge bg-warning text-dark">Diproses</span>
                        @else
                            <span class="badge bg-success">Selesai</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection