@extends('layout.admin')

@section('title','Sản Phẩm')

@section('content')
<!-- CONTENT -->
<div class="content-wrapper">
   <!-- CONTENT -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Quản lý sản phẩm</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Home</a></li>
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
                  <a class="btn btn-sm btn-success" href="{{ route('admin.product.create')}}">
                     <i class="fas fa-plus"></i> Thêm
                  </a>
                  <a class="btn btn-sm btn-danger" href="{{ route('admin.product.trash')}}">
                     <i class="fas fa-trash"></i> Thùng rác
                  </a>
               </div>
            </div>
         </div>
         <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
               <thead>
                  <tr>
                     <th class="text-center" style="width:30px;">#</th>
                     <th class="text-center" style="width:90px;">Hình</th>
                     <th>Tên sản phẩm</th>
                     <th>Danh mục</th>
                     <th>Thương hiệu</th>
                     <th class="text-center" style="width:200px;">Chức năng</th>
                     <th class="text-center" style="width:30px;">ID</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($list as $row)
                  <tr class="datarow">
                     @php
                     $arg=['id'=>$row->id]
                     @endphp
                     <td class="text-center">
                        <input type="checkbox" id="checkId" value="1" name="checkId[]">
                     </td>
                     <td class="text-center">
                        <img src="{{ asset('images/product/' . $row->image) }}" class="img-fluid" alt="{{$row->name}}">
                     </td>
                     <td>{{$row->name}}</td>
                     <td>{{$row->cat}}</td>
                     <td> {{$row->brand}}</td>
                     <td class="text-center">
                        @if ($row->status == 1)
                        <a href="{{ route('admin.product.edit',$arg)}}" class="btn btn-sm btn-success">
                           <i class="fas fa-toggle-on"></i>
                        </a>
                        @else
                        <a href="{{ route('admin.product.edit',$arg)}}" class="btn btn-sm btn-success">
                           <i class="fas fa-toggle-on"></i>
                        </a>
                        @endif
                        <a href="{{ route('admin.product.show',$arg)}}" class="btn btn-sm btn-info">
                           <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.product.edit',$arg)}}" class="btn btn-sm btn-primary">
                           <i class="far fa-edit"></i>
                        </a>
                        <a href="{{ route('admin.product.delete',$arg)}}" class="btn btn-sm btn-danger">
                           <i class="fas fa-trash"></i>
                        </a>
                     </td>
                     <td class="text-center">
                        {{$row->id}}
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </section>

@endsection