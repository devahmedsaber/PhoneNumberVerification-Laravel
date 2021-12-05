@extends('layouts.master')

@section('title', 'Phone Number')

@section('css')

@endsection

@section('pageHeaderTitle')
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="fa fa-search bg-c-blue"></i>
            <div class="d-inline">
                <h5>Phone Numbers</h5>
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
                <li class="breadcrumb-item"><a href="{{ route('phone.index') }}">Phone Number</a> </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h5>Phone Numbers</h5>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="{{ route('phone.check') }}" class="badge badge-primary px-3 py-2">Check New Number</a>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="order-table" class="table table-striped table-bordered nowrap datatable text-center">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Local Format</th>
                                <th>International Format</th>
                                <th>Country Prefix</th>
                                <th>Country Code</th>
                                <th>Country Name</th>
                                <th>Location</th>
                                <th>Carrier</th>
                                <th>Line Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($phones as $phone)
                                <tr>
                                    <td>{{ $phone->number }}</td>
                                    <td>{{ $phone->local_format }}</td>
                                    <td>{{ $phone->international_format }}</td>
                                    <td>{{ $phone->country_prefix }}</td>
                                    <td>{{ $phone->country_code }}</td>
                                    <td>{{ $phone->country_name }}</td>
                                    <td>{{ $phone->location == '' || $phone->location == null ? 'No Location' : $phone->location }}</td>
                                    <td>{{ $phone->carrier }}</td>
                                    <td>{{ ucfirst($phone->line_type)  }}</td>
                                    <td>
                                        @if($phone->status == 1)
                                            <span class="badge badge-pill badge-success py-2 px-3">Valid</span>
                                        @else
                                            <span class="badge badge-pill badge-danger py-2 px-2">Invalid</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('phone.delete', $phone->id) }}" method="POST"
                                              style="display: inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class=" btn btn-danger btn-round" type="submit"
                                                    style="padding: 3px;width: 30px;"
                                                    onclick="return confirm('Do You Want To Delete This Phone ?');">
                                                <i style="margin-right: 0" class="fas fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')

@endsection
