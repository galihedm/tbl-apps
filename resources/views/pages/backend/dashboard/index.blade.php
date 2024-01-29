@extends('layouts.backend.app')
@section('title', 'Dashboard')
@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title my-auto">Dashboard</h1>
            <div>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Main</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 -->
        <form class="row">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="input-group ms-auto">
                                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option class="dropdown-item" href="javascript:void(0);" value="GET" selected>GET</option>
                                    <option class="dropdown-item" href="javascript:void(0);" value="POST" >POST</option>
                                    <option class="dropdown-item" href="javascript:void(0);" value="PUT" >PUT</option>
                                    <option class="dropdown-item" href="javascript:void(0);" value="PATCH" >PATCH</option>
                                    <option class="dropdown-item" href="javascript:void(0);" value="DELETE" >DELETE</option>
                                    <option class="dropdown-item" href="javascript:void(0);" value="HEAD" >HEAD</option>
                                    <option class="dropdown-item" href="javascript:void(0);" value="OPTIONS" >OPTIONS</option>
                                </select>
                                <input type="text" class="form-control input-group-req" aria-label="Text input with dropdown button">
                            </div>
                            <div class="ms-2">
                                <button type="button" type="submit" class="btn btn-primary btn-wave waves-effect waves-light">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xxl-12 mb-3">
                                <h4>Request Body</h4>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xxl-12">
                                <h4>Response</h4>
                                <textarea class="form-control" rows="5" readonly></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        // body...
    })
</script>
@endpush