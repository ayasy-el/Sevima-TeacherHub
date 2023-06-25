@extends('base')

@section('content')
<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/bruce-mars.jpg" alt="..." class="w-100 border-radius-lg shadow-sm">
                        <a href="javascript:;" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                            <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
                        </a>
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ Auth::user()->name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{ Auth::user()->jabatan }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="/assets/css/froala.css" rel="stylesheet" type="text/css" />
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form @if(Request::is('edit-materi/*')) action="/edit-materi/{{ $materi->id }}"@else action="/buat-materi"@endif method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="JUDUL" name="title" @if(Request::is('edit-materi/*')) value="{{ $materi->title }}" @endif>    
                        </div>
                    </div>
                    <textarea name="content">@if(Request::is('edit-materi/*')) {{ $materi->content }} @endif</textarea>
                    <script type="text/javascript" src="/assets/js/froala.js"></script>
                    <script>
                        new FroalaEditor('textarea');
                    </script>
                    <div class="d-flex justify-content-end">
                        <button class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection