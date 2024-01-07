@extends('layouts.template')

@section('content')
    <form action="{{ route('rombel.store') }}" method="POST" class="card  p-5">
        @csrf
        <div class="mb-3 row">
            <label for="rombel" class="col-sm-2 col-form-laber">Rombel</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="rombel" name="rombel">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    </form>
@endsection