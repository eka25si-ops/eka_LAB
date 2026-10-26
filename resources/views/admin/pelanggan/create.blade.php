@extends('layouts.app')

@section('content')
    <h1>Tambah Pelanggan</h1>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf

        <!-- Memanggil Partial View Form -->
        @include('pelanggan.form')

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
