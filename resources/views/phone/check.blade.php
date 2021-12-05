@extends('layouts.master')

@section('title', 'Check Phone Number')

@section('pageHeaderTitle')
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="fa fa-search bg-c-blue"></i>
            <div class="d-inline">
                <h5>Check Phone Number</h5>
            </div>
        </div>
    </div>
@endsection

@section('breadcrumb')
    <div class="col-lg-4">
        <div class="page-header-breadcrumb">
            <ul class=" breadcrumb breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('phone.index') }}">Phones</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('phone.check') }}">Check Phone Number</a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="card table-card">
                <div class="card-header">
                    <h5>Check Phone Number</h5>
                </div>
                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ('phone.verify')]) !!}
                        @include('phone.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

@endsection
