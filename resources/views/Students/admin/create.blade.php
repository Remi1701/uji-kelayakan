@extends('layouts.template')

@section('content')
    <form action="{{ route('student.store') }}" method="POST" class="card  p-5">
        @csrf
        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-laber">NIS</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nis" name="nis">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-laber">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
          <label for="rombel_id" class="col-sm-2 col-form-laber">Rombel</label>
          <div class="col-sm-10">
              <select name="rombel_id" id="rombel_id">
                  @foreach ($rombel as $rombel)
                  <option value="{{ $rombel->id }}">{{ $rombel->rombel }}</option>
                  @endforeach
              </select>
          </div>
        <div class="mb-3 row">
          <label for="rayon_id" class="col-sm-2 col-form-laber">Rayon</label>
          <div class="col-sm-10">
              <select name="rayon_id" id="rayon_id">
                  @foreach ($rayon as $rayon)
                  <option value="{{ $rayon->id }}">{{ $rayon->rayon }}</option>
                  @endforeach
              </select>
          </div>
      </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    </form>
@endsection
