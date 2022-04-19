@extends('pas.template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Pasien</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('pas.create') }}"> Input Pasien</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th width="280px"class="text-center">Tanggal</th>
            <th width="280px"class="text-center">Nama Pasien</th>
            <th width="280px"class="text-center">Alamat</th>
            <th width="280px"class="text-center">Jenis Kelamin</th>
            <th width="280px"class="text-center">No Telepon</th>
            <th width="280px"class="text-center">Layanan</th>
            <!-- <th width="280px"class="text-center">Action</th> -->
        </tr>
        @foreach ($pas as $pasien)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $pasien-> Tanggal}}</td>
            <td>{{ $pasien->NamaPasien }}</td>
            <td>{{ $pasien->Alamat }}</td>
            <td>{{ $pasien->JenisKelamin }}</td>
            <td>{{ $pasien->NoTelepon }}</td>
            <td>{{ $pasien->Layanan }}</td>
            <!-- <td class="text-center">
                <form action="{{ route('pas.destroy',$pasien->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('pas.show', $pasien->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('pas.edit', $pasien->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td> -->
        </tr>
        @endforeach
    </table>

    {!! $pas->links() !!}

@endsection