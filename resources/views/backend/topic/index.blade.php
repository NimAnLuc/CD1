@extends('layout.admin')

@section('title','Chủ đề')

@section('content')
<div class="content-wrapper">
   <!-- CONTENT -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Quản lý chủ đề</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route('admin.topic.index')}}">Home</a></li>
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
                  <a class="btn btn-sm btn-danger" href="{{ route('admin.topic.trash')}}">
                     <i class="fas fa-trash"></i> Thùng rác
                  </a>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-3">
                  <form action="{{ route('admin.topic.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                     <div class="mb-3">
                        <label for="name">Tên chủ đề</label>
                        <input type="text" value="{{ old('name')}}" name="name" id="name" class="form-control">
                        @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                     </div>
                     <div class="mb-3">
                        <label for="description">Mô tả</label>
                        <textarea name="description" value="{{ old('description')}}" id="description" class="form-control"></textarea>
                     </div>
                     <div class="mb-3">
                        <label for="sort_order">Sắp xếp</label>
                        <select name="sort_order" id="sort_order" class="form-control">
                           <option value="0">None</option>
                           {!!$htmlsortorder!!}
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="status">Trạng thái</label>
                        <select name="status" id="status" class="form-control">
                           <option value="2">Chưa xuất bản</option>
                           <option value="1">Xuất bản</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <button type="submit" name="create" class="btn btn-success">Thêm danh
                           mục</button>
                     </div>
                  </form>
               </div>
               <div class="col-md-9">
                  <table class="table table-bordered table-striped table-hover">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">#</th>
                           <th>Tên chủ đề</th>
                           <th>Slug</th>
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
                           <td>{{$row->name}}</td>
                           <td>{{$row->slug}}</td>
                           <td class="text-center">
                              @if ($row->status == 1)
                              <a href="{{ route('admin.topic.edit',$arg)}}" class="btn btn-sm btn-success">
                                 <i class="fas fa-toggle-on"></i>
                              </a>
                              @else
                              <a href="{{ route('admin.topic.edit',$arg)}}" class="btn btn-sm btn-success">
                                 <i class="fas fa-toggle-on"></i>
                              </a>
                              @endif
                              <a href="{{ route('admin.topic.show',$arg)}}" class="btn btn-sm btn-info">
                                 <i class="far fa-eye"></i>
                              </a>
                              <a href="{{ route('admin.topic.edit',$arg)}}" class="btn btn-sm btn-primary">
                                 <i class="far fa-edit"></i>
                              </a>
                              <a href="{{ route('admin.topic.delete',$arg)}}" class="btn btn-sm btn-danger">
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
         </div>
      </div>
   </section>
   <!-- /.CONTENT -->
</div>
@endsection