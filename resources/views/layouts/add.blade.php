@extends('layouts.master')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <strong>Create Proyek</strong>
                </div>
                <div class="float-right">
                    <a href="{{ url('proyek') }}"
                        class="btn btn-danger btn-sm">
                        Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('proyek') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Proyek</label>
                                <input type="text" name="nama_proyek" class="form-control @error('nama_proyek') 
                                 is-invalid @enderror" value="{{ old('nama_proyek') }}" autofocus autocomplete="off">

                                @error('nama_proyek')
                                    <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Proyek</label>
                                <textarea name="deskripsi_proyek" class="form-control @error('deskripsi_proyek')
                                 is-invalid @enderror" autocomplete="off"> {{ old('deskripsi_proyek') }} </textarea>

                                @error('deskripsi_proyek')
                                    <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') 
                                 is-invalid @enderror" value="{{ old('tanggal_mulai') }}" autofocus autocomplete="off">

                                @error('tanggal_mulai')
                                    <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') 
                                 is-invalid @enderror" value="{{ old('tanggal_selesai') }}" autofocus autocomplete="off">

                                @error('tanggal_selesai')
                                    <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control @error('status') 
                                 is-invalid @enderror" value="{{ old('status') }}" autofocus autocomplete="off">

                                @error('status')
                                    <div class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- .content -->
@endsection