@extends('pas.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Pasien</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('pas.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pas.update',$pas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal:</strong>
                <input type="datetime" name="Tanggal" class="form-control" placeholder="Tanggal" value="{{ $pas->Tanggal }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pasien:</strong>
                <input type="text" name="NamaPasien" value="{{ $pas->NamaPasien }}" class="form-control" placeholder="Nama Pasien">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content">{{ $pas->Alamat }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <input type="text" name="JenisKelamin" value="{{ $pas->JenisKelamin }}" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telepon:</strong>
                <input type="text" name="NoTelepon" value="{{ $pas->NoTelepon }}" class="form-control" placeholder="No Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Layanan:</strong>
                <select  name="Layanan" value="{{ $pas->Layanan }}" class="form-control" placeholder="Layanan">
                                        <option selected>Pilih Layanan</option>
                                        <option value="Perawatan Kecantikan Gigi">Perawatan Kecantikan Gigi</option>
                                        <option value="Implan Gigi">Implan Gigi</option>
                                        <option value="Pemasangan Gigi Palsu">Pemasangan Gigi Palsu</option>
                                        <option value="Pemutihan Gigi">Pemutihan Gigi</option>
                                        <option value="Cabut Gigi">Cabut Gigi</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection