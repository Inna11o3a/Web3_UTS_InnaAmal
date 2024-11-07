@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Mahasiswa') }}</div>

                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form Edit Student -->
                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Method PUT digunakan untuk update -->

                        <!-- Input NIM -->
                        <div class="form-group mb-3">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $student->nim) }}" required>
                        </div>
                        
                        <!-- Input Nama -->
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $student->nama) }}" required>
                        </div>
                        
                        <!-- Input Tempat Lahir -->
                        <div class="form-group mb-3">
                            <label for="tempatlahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="{{ old('tempatlahir', $student->tempatlahir) }}" required>
                        </div>

                        <!-- Input Tanggal Lahir -->
                        <div class="form-group mb-3">
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="{{ old('tanggallahir', $student->tanggallahir) }}" required>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
