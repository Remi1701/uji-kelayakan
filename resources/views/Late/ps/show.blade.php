@extends('layouts.template')

@section('content')
    <h2>Data Keterlambatan</h2>
    <p><a href="/home">Home</a> / Data Keterlambatan</p>
    {{--  <a href="{{ route('lates.export-excel') }}"><button class="btn btn-info mt-3">Export Data
            Keterlambatan</button></a>  --}}
    <br>
    <br>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('ps.late.index') }}">Keseluruhan Data</a>
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jumlah Keterlambatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($lates as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                {{ $item->students->nis }}
                            </td>
                            <td>
                                {{ $item->students->name }}
                            </td>
                            <td>
                                {{ $lates::count() }}
                            </td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('late.detail', $item['id']) }}" class="btn btn-primary me-3">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </li>
    </ul>
@endsection
