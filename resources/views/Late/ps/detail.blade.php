@extends('layouts.template')

@section('content')
    <h2>Data Keterlambatan</h2>
    <p><a href="/home">Home</a> / Data Keterlambatan</p>
    {{--  <a href="{{ route('lates.export-excel') }}"><button class="btn btn-info mt-3">Export Data
            Keterlambatan</button></a>  --}}
    <br>
    <br>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          @php
              $no = 1
          @endphp
            @foreach ($lates as $item)
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
