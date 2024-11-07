@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mahasiswa Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Nim') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>

                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Tempat Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tempatlahir" type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" required autocomplete="tempatlahir" autofocus>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tanggallahir" type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" required autocomplete="tanggallahir" autofocus>

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
