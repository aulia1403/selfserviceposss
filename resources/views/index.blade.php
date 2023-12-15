@extends('layouts.default')

@section('content')
    <section>
   <div class="continer mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h1>DATA MAHASISWA</h1>
            <a href="{{url('create')}}" class="btn btn-primary"> + Tambah Data Mahasiswa</a>
        </div>

        <div class="col-lg-8 mt-5">
            <table class="table table-primary table-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $dataMahasiswa)
                <tr>
                    <td>{{ $dataMahasiswa->id }}</td>
                    <td>{{ $dataMahasiswa->nama }}</td>
                    <td>{{ $dataMahasiswa->nim }}</td>
                    <td>{{ $dataMahasiswa->alamat }}</td>
                    <td>
                        <a href="{{ url('/show/' . $dataMahasiswa->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('/destroy/' . $dataMahasiswa->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr> 
                @endforeach
            </table>
        </div>
    </div>
   </div>
    </section>
@endsection

