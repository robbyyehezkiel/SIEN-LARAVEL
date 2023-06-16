@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-12">

                <div class="mt-3">
                    <label for="title" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="{{ $post->title }}" disabled>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                    
                <div class="mt-3">
                    <label for="telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" required value="{{ old('telepon') }}" placeholder="{{ $post->telepon }}" disabled>
                    @error('telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <label for="telepon " class="mt-3">File Pemesanan</label><br>
                <a href="{{ asset('storage/' . $post->dokumen) }}">
                    <button class="btn btn-success">
                        Download
                    </button>
                </a>

                <div class="mt-3">
                    <label for="body" class="form-label">Keterangan</label>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}" disabled>
                    <trix-editor input="body"></trix-editor>
                </div>
                <a href="/dashboard/posts" class="btn btn-success mt-3"><span data-feather="arrow-left"></span>Lihat Riwayat Pemesanan</a>

            </div>
        </div>
    </div>
@endsection