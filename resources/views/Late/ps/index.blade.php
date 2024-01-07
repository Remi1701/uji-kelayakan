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
            <a class="nav-link" href="{{ route('ps.late.show') }}">Rekapitulasi Data</a>
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Information</th>
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
                                {{ $item->students->name }} <br>
                                {{ $item->students->nis }}
                            </td>
                            <td>{{ $item['information'] }}</td>
                            <td>{{ $item['date_time_late'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </li>
    </ul>
@endsection
