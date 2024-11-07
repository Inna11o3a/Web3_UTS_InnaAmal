@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('student.create')}}" class="btn btn-primary">Tambah</a>
                </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th> 
                                <th>Nim</th>    
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Students as $s)
                            <tr>
                                <td>{{$s->id}}</td> 
                                <td>{{$s->nim}}</td>    
                                <td>{{$s->nama}}</td>
                                <td>{{$s->tempatlahir}}</td>
                                <td>{{$s->tanggallahir}}</td>
                                <td>
                                    <a href="{{ route('student.show', $s->id) }}" class="btn btn-info">Show</a>
                                    <a href="{{route('student.edit', $s->id)}}" class= "btn btn-success">Edit</a>

                                    <!-- Form Hapus dengan Konfirmasi Alert -->
                                    <form action="{{ route('student.destroy', $s->id) }}" method="POST" style="display: inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete Mahasiswa">Delete</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $Students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
