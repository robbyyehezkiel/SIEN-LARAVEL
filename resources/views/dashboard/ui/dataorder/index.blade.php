@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Order</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col" style="width: 12%; text-align: center">Action</th>
                <th scope="col" style="width: 22%; text-align: center">Nama</th>
                <th scope="col" style="width: 22%; text-align: center">Category</th>
                <th scope="col" style="width: 22%; text-align: center">Telepon</th>
                <th scope="col" style="width: 12%; text-align: center">File</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $p)
                <tr>
                    <td style="text-align: center">
                        
                        <a href="/dataorder/{{ $p->id }}" class="badge bg-info">
                            <span>
                                <i class="fas fa-eye"></i>
                            </span>
                        </a>
                        <form action="/dataorder/{{ $p->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')">Hapus</button>
                        </form>
                    </td>
                    <td style="text-align: center">{{ $p->title }}</td>
                    <td style="text-align: center">{{ $p->category->name }}</td>
                    <td style="text-align: center">{{ $p->telepon }}</td>
                    
                    <td style="text-align: center">
                        
                        <a href="{{ asset('storage/' . $p->dokumen) }}">
                            <button class="badge bg-success border-0">
                                Download
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection