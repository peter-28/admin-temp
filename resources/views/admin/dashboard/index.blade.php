@extends('admin.layouts.app')
@section('content-header')
<div class="content-header-left col-12 mb-2 mt-1">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h5 class="content-header-title float-left pr-1 mb-0">Home</h5>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="toolbar row">
                    <div class="col-md-12">
                        <div class="float-left">
                            <h4 class="card-title">List Data Dashboard</h4>
                        </div>
                        <div class="float-right"></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush