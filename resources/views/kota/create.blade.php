@extends('layouts.admin')
@section('content')
    <div class = "container">
        <div class ="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Tambah data Kota
                    </div>
                    <div class="card-body ">
                        <form action="{{route('kota.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Provinsi</label>
                                <select name="id_prov" class="form-control" required>
                                    @foreach ($prov as $data)
                                        <option value="{{$data->id}}">{{$data->nama_prov}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Kode Kota</label>
                                <input type="text" name="kode_kota" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label for="">Kota</label>
                                <input type="text" name="nama_kota" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-outline-dark">Simpan</button>
                                <button type="submit" class="btn btn-outline-success"><a href="{{ url()->previous() }}"> Kembali </a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection