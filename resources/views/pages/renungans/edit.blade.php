@extends('layouts.app')

@section('title', 'Edit Renungan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Renungan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Renungans</a></div>
                    <div class="breadcrumb-item">Edit Renungan</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('renungan.update', $renungans) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit User</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"
                                    class="form-control @error('title')
                                    is-invalid
                                @enderror"
                                    name="title" value="{{ $renungans->title }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Bacaan</label>
                                <textarea class="form-control" name="bacaan" id="bacaan" cols="30" rows="10" style="resize: none; width:100%; height:100%">{{ $renungans->bacaan }}</textarea>
                                @error('bacaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ayat Kunci</label>
                                <textarea class="form-control" name="ayat_kunci" id="ayat_kunci" cols="30" rows="10" style="resize: none; width:50%; height:25%">{{ $renungans->ayat_kunci }}</textarea>
                                @error('ayat_kunci')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kalimat Prinsip</label>
                                <input type="text"
                                    class="form-control @error('kalimat_prinsip')
                                    is-invalid
                                @enderror"
                                    name="kalimat_prinsip" value="{{ $renungans->kalimat_prinsip }}">
                                @error('kalimat_prinsip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kalimat Renung</label>
                                <input type="text"
                                    class="form-control @error('kalimat_renung')
                                    is-invalid
                                @enderror"
                                    name="kalimat_renung" value="{{ $renungans->kalimat_renung }}">
                                @error('kalimat_renung')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pembuatan Renungan</label>
                                <input type="date"
                                    class="form-control @error('date_renungan')
                                    is-invalid
                                @enderror"
                                    name="date_renungan" value="{{ $renungans->date_renungan }}" readonly>
                                @error('date_renungan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10" style="resize: none; width:100%; height:100%">{{ $renungans->content }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Doa</label>
                                <textarea id="doa" name="doa" class="form-control" cols="30" rows="10" style="resize: none; width:100%; height:100%">{{ $renungans->doa }}</textarea>
                                @error('doa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
