<!-- resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail Mahasiswa') }}</div>

                <div class="card-body">
                    <p><strong>ID:</strong> {{ $student->id }}</p>
                    <p><strong>NIM:</strong> {{ $student->nim }}</p>
                    <p><strong>Nama:</strong> {{ $student->nama }}</p>
                    <p><strong>Tempat Lahir:</strong> {{ $student->tempatlahir }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ $student->tanggallahir }}</p>
                    <a href="{{ route('student.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
