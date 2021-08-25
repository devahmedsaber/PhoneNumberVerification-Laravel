@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('pageHeaderTitle')
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="feather icon-home bg-c-blue"></i>
            <div class="d-inline">
                <h5>Dashboard</h5>
                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a> </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">

        <div class="col-xl-12">
            <div class="card proj-progress-card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <h6>Published Project</h6>
                            <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-red" style="width:25%"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <h6>Completed Task</h6>
                            <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-blue" style="width:65%"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <h6>Successfull Task</h6>
                            <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-green" style="width:85%"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <h6>Ongoing Project</h6>
                            <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

@endsection
