@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Riwayat Order</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Buat Pemesanan</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col" style="width: 10%; text-align: center">Detail</th>
                <th scope="col" style="width: 30%; text-align: center">Nama</th>
                <th scope="col" style="width: 30%; text-align: center">Category</th>
                <th scope="col" style="width: 30%; text-align: center">Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td style="text-align: center">
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                            <span>
                                <i class="fas fa-eye"></i>
                            </span>
                        </a>
                    </td>
                    <td style="text-align: center">{{ $post->title }}</td>
                    <td style="text-align: center">{{ $post->category->name }}</td>
                    <td style="text-align: center">{{ $post->telepon }}</td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection