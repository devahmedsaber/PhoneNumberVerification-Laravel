@extends('layouts.master')

@section('title', 'Edit Country')

@section('pageHeaderTitle')
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="fa fa-list-ol bg-c-blue"></i>
            <div class="d-inline">
                <h5>Edit Country</h5>
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
                    <a href="{{ route('countries.index') }}">Countries</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('countries.edit', $country->id) }}">Edit Country</a>
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
                    <h5>Edit Country</h5>
                </div>
                <div class="card-body">
                    {!! Form::model($country, ['method' => 'PUT', 'route' => ['countries.update', $country->id]]) !!}
                        @include('countries.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        window.onload = function() {
            $(function(){
                $(".datepicker").datepicker({
                    dateFormat: "yy-mm-dd"
                });
            });
        }
    </script>
@endsection
