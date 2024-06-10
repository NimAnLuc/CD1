@extends('layout.admin')

@section('title','Sửa')

@section('content')
        <div class="content-wrapper">
            <!-- CONTENT -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Quản lý menu</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a class="btn btn-sm btn-danger" href="{{route('admin.menu.trash')}}">
                                    <i class="fas fa-trash"></i> Thùng rác
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">

                        </form>
                    </div>
                </div>
            </section>
            <!-- /.CONTENT -->
        </div>
        @endsection