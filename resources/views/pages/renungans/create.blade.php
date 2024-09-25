@extends('layouts.app')

@section('title', 'New Renungan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Renungan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Renungan</a></div>
                    <div class="breadcrumb-item">New Renungan</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('renungan.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Create Renungan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"
                                    class="form-control @error('title')
                                    is-invalid
                                @enderror"
                                    name="title" value="">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Bacaan</label>
                                <textarea class="form-control" name="bacaan" id="bacaan" value="bacaan"
                                cols="30" rows="10" style="resize: none; width:100%; height:100%"></textarea>
                                @error('bacaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ayat Kunci</label>
                                <textarea class="form-control" name="ayat_kunci" id="ayat_kunci" value="ayat_kunci"
                                cols="30" rows="10" style="resize: none; width:50%; height:25%"></textarea>
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
                                    name="kalimat_prinsip" value="">
                                @error('kalimat_prinsip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kalimat Renung</label>
                                <textarea class="form-control" name="kalimat_renung" id="kalimat_renung" value=""
                                cols="30" rows="10" style="resize: none; width:100%; height:100%"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pembuatan Renungan</label>
                                <input type="date"
                                    class="form-control @error('date_renungan')
                                    is-invalid
                                @enderror"
                                    name="date_renungan" value="date_renungan">
                                @error('date_renungan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" id="content" value="content"
                                cols="30" rows="10" style="resize: none; width:100%; height:100%"></textarea>
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Penerapan</label>
                                <ul>
                                    <li><input type="text" class="form-control" id="penerapan1" name="penerapan1" value=""></li>
                                    <li><input type="text" class="form-control" id="penerapan2" name="penerapan2" value=""></li>
                                    <li><input type="text" class="form-control" id="penerapan3" name="penerapan3" value=""></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Doa</label>
                                <textarea id="doa" name="doa" class="form-control" value="doa"
                                cols="30" rows="10" style="resize: none; width:100%; height:100%"></textarea>
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
