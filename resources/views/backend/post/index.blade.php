@extends('layout.admin')

@section('title','Bài Viết')

@section('content')
<div class="content-wrapper">
   <!-- CONTENT -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Quản lý bài viết</h1>
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
                  <a class="btn btn-sm btn-success" href="{{ route('admin.post.create')}}">
                     <i class="fas fa-plus"></i> Thêm
                  </a>
                  <a class="btn btn-sm btn-danger" href="{{ route('admin.post.trash')}}">
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
                     <th>Tiêu đề bài viết</th>
                     <th>Chủ đề</th>
                     <th>Kiểu</th>
                     <th class="text-center" style="width:200px;">Chức năng</th>
                     <th class="text-center" style="width:30px;">ID</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($list as $row)
                  @php
                  $arg=['id'=>$row->id]
                  @endphp
                  <tr>
                     <td class="text-center">
                        <input type="checkbox" id="checkId" value="1" name="checkId[]">
                     </td>
                     <td class="text-center">
                        <img src="{{ asset('images/post/' . $row->image) }}" class="img-fluid" alt="{{$row->title}}">
                     </td>
                     <td>{{$row->title}}</td>
                     <td>{{$row->topic}}</td>
                     <td>{{$row->type}}</td>

                     <td class="text-center">
                        @if ($row->status == 1)
                        <a href="{{ route('admin.post.edit',$arg)}}" class="btn btn-sm btn-success">
                           <i class="fas fa-toggle-on"></i>
                        </a>
                        @else
                        <a href="{{ route('admin.post.edit',$arg)}}" class="btn btn-sm btn-success">
                           <i class="fas fa-toggle-on"></i>
                        </a>
                        @endif
                        <a href="{{ route('admin.post.show',$arg)}}" class="btn btn-sm btn-info">
                           <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.post.edit',$arg)}}" class="btn btn-sm btn-primary">
                           <i class="far fa-edit"></i>
                        </a>
                        <a href="{{ route('admin.post.delete',$arg)}}" class="btn btn-sm btn-danger">
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
   <!-- /.CONTENT -->
</div>
@endsection