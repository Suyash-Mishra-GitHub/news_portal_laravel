@extends('layouts.layout')

@push('title')
<title>viewPost-news-portal</title>
@endpush

@push('heading')
<h1 class="m-0 text-success font-weight-bold h3">View Post</h1>
@endpush

@push('sub-heading')
<li class="breadcrumb-item active text-success font-weight-bold">View Post</li>
@endpush

@section('content')
<div class="container-fluid">

    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row p-2">
                        <div class="col-md-12">
                            <span class="h4">View Post</span>
                            <button type="button" id="addCategory"
                                class="btn btn-primary add-btn font-weight-bold float-right" data-bs-toggle="modal"
                                data-bs-target="#categoryModal">Add</button>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="container-fluid">
                                <div class="card border">
                                    <div class="flash-news-banner p-3">
                                        <div class="container">
                                            <div class="d-lg-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="badge badge-dark font-weight-bold mr-3">News
                                                        Headline</span>
                                                    <p class="mb-0 font-weight-bold">
                                                        {{ $posts->heading }}
                                                    </p>
                                                </div>
                                                <div class="d-flex">
                                                    <span class="mr-3 text-danger font-weight-bold"><span
                                                            class="text-primary">Post
                                                            Date:</span>&nbsp{{ $posts->created_at }}</span>
                                                    <span class="text-danger font-weight-bold"><span
                                                            class="text-primary">Post
                                                            By:</span>&nbsp{{ $posts->created_by }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row container-fluid">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="flash-news-banner p-3">
                                            <div class="container">
                                                <div class="d-lg-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h2 class="mb-3">
                                                            {{ $posts->heading }}
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="flash-news-banner p-3">
                                            <div class="container">
                                                <div>
                                                    <div class="d-flex">
                                                        <h4><span
                                                                class="font-weight-bold">Category:&nbsp{{ $catName->category_name }}
                                                            </span>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="d-lg-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <p><img src="{{ $posts->image }}" width="300" alt=""></p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="mb-3">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
</div>

<script type="text/javascript">

</script>
@endsection