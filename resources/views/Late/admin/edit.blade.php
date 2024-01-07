@extends('layouts.template')

@section('content')
    <form action="{{ route('late.update', $lates['id']) }}" method="POST" class="card  p-5" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @if ($errors->any())
            <ul class="alert alert-danger p-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="mb-3 row">
            <label for="student_id" class="col-sm-2 col-form-laber">Nama Siswa</label>
            <div class="col-sm-10">
                <select name="student_id" id="student_id">
                    @foreach ($students as $ray)
                        <option value="{{ $ray->id }}">{{ $ray->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="date_time_late" class="col-sm-2 col-form-laber">Waktu Terlambat</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="date_time_late" name="date_time_late" value="{{ $lates->date_time_late }}">
            </div>
        </div>
        <div class="mb-3 row">
          <label for="information" class="col-sm-2 col-form-laber">Informasi</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="information" name="information" value="{{ $lates->information }}">
          </div>
      </div>
        <div class="mb-3 row">
            <label for="bukti" class="col-sm-2 col-form-laber">Bukti</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="bukti" name="bukti" value="{{ $lates->bukti }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
@endsection
