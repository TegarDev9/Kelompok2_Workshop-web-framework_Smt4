@extends('layout.default')
@section('content')
<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4">Tambah Anggota</h3>
                <form action="{{ url('/storeanggota') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Nama Anggota</label>
                        <input type="text" name="nama_anggota" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option selected>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">No HP</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp">
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection