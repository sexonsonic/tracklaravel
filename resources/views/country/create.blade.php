@extends('layouts.admin')
@section('content')
    <div class = "container">
        <div class ="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Tambah data Negara
                    </div>
                    <div class="card-body ">
                        <form action="{{route('country.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Kode negara</label>
                                <input type="text" name="kode_negara" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label for="">negara</label>
                                <input type="text" name="nama_negara" class="form-control"required>
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