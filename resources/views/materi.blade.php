@extends('base')

@section('content')
<div>
    <div class="container-fluid">
        <div class="page-header min-height-150 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <h3>{{ $materi->title }}</h3>
            </div>
        </div>
    </div>
    <link href="/assets/css/froala.css" rel="stylesheet" type="text/css" />
    <div class="container-fluid py-4">
        <div class="card">
            <div class="text-dark card-body pt-7 px-7 p-3">
                {!! $materi->content !!}
            </div>
        </div>
    </div>
</div>
@endsection