@extends('layouts.master')

@section('title', 'Countries')

@section('css')

@endsection

@section('pageHeaderTitle')
    <div class="col-lg-8">
        <div class="page-header-title">
            <i class="fa fa-list-ol bg-c-blue"></i>
            <div class="d-inline">
                <h5>Countries</h5>
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
                <li class="breadcrumb-item"><a href="{{ route('countries.index') }}">Countries</a> </li>
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
                        <div class="col-md-10">
                            <h5>Countries Table</h5>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ route('countries.create') }}" class="badge badge-primary px-3 py-2">New</a>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="order-table" class="table table-striped table-bordered nowrap datatable text-center">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($countries as $country)
                                <tr>
                                    <td>{{ $country->id }}</td>
                                    <td>{{ $country->name }}</td>
                                    <td>{{ $country->code }}</td>
                                    <td>
                                        <a type="button" href="{{ route('countries.edit', $country->id) }}"
                                           style="padding: 3px;width: 30px; " class="btn btn-primary btn-round"><i
                                                style="margin-right: 0" class="fas fa-pencil-alt"></i></a>
                                        <form action="{{ route('countries.destroy', $country->id) }}" method="POST"
                                              style="display: inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class=" btn btn-danger btn-round" type="submit"
                                                    style="padding: 3px;width: 30px;"
                                                    onclick="return confirm('Do You Want To Delete This Country ?');">
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
