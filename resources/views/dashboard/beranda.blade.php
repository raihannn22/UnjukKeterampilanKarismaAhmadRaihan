@extends('templatefront')
@section('main')
    <div class="container">
        @foreach ($data as $item)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text fs-6">{{ $item->tanggalDibuat }}</p>
                    <p class="card-text">{{ substr($item->isi, 0, 50) }}</p>
                    <a href="{{ url('beranda/detail/'.$item->id) }}" class="btn btn-primary">Baca Lengkap</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
