@extends('layouts.template')

@section('content')
<div class="jumbotron py-3 px-4">
    <h1 class="display-4">Selamat Datang {{ Auth::user()->name }}!</h1>
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-sm mt-3">Dashboard</h1>
            <p class="text-muted text-sm ml-1" href="#">Home</p>
            <div class="row mt-2 ml-1">
                <div class="col-6 col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title text-sm">Peserta Didik</h2>
                            <h1 class="display-6 text-primary text-sm">
                                 {{ App\Models\students::count() }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title text-sm">Administrator</h2>
                            <h1 class="display-6 text-primary text-sm">
                                 {{ App\Models\User::where('role', 'Admin')->count() }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title text-sm">Pembimbing Siswa</h2>
                            <h1 class="display-6 text-primary text-sm">
                                 {{ App\Models\User::where('role', 'Pembimbing Siswa')->count() }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title text-sm">Rombel</h2>
                            <h1 class="display-6 text-primary text-sm">
                                {{ App\Models\rombels::count() }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="card-title text-sm">Rayon</h2>
                            <h1 class="display-6 text-primary text-sm">
                                {{ App\Models\rayons::count() }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
