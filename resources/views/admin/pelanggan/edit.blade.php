@extends('layouts.app')

@section('content')
    <h1>Edit Pelanggan</h1>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Memanggil Partial View Form yang Sama -->
        @include('pelanggan.form')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
