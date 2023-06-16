@extends('dashboard.layouts.main')


@section('container')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="width: 10%">#</th>
                    <th scope="col" class="text-center" style="width: 30%">Nama</th>
                    <th scope="col" class="text-center" style="width: 30%">Username</th>
                    <th scope="col" class="text-center" style="width: 30%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $s)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $s->name }}</td>
                    <td class="text-center">{{ $s->username }}</td>
                    <td class="text-center">
                        <form action="/datauser/{{ $s->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection