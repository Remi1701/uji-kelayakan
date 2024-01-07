@extends('layouts.template')

@section('content')
    <a href="{{ route('rayon.create') }}"><button class="btn btn-primary mt-3">Tambah Data</button></a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Rayon</th>
                <th>Pembimbing Rayon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($rayon as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['rayon'] }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('rayon.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
                        <form action="{{ route('rayon.delete', $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
