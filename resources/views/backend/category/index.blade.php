@extends('layout.admin')

@section('title','Danh mục')

@section('content')
<!-- CONTENT -->
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12">
               <h1 class="d-inline">Quản lý danh mục</h1>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="card">
         <div class="card-body">
            <div class="row">
               <div class="col-md-3">
                  <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                        <label for="name">Tên danh mục</label>
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
                        <label for="parent_id">Danh mục cha</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                           <option value="0">None</option>
                           {!! $htmlparentid !!}
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="sort_order">Sắp xếp</label>
                        <select name="sort_order" id="sort_order" class="form-control">
                           <option value="0">None</option>
                           {!! $htmlsortorder !!}

                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="image">Hình</label>
                        <input type="file" name="image" id="image" class="form-control">
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
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Tên danh mục</th>
                           <th>Tên slug</th>
                           <th>Mô tả</th>
                           <th>Chức năng</th>
                           <th>ID</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($list as $row)
                        @php
                        $arg=['id'=>$row->id]
                        @endphp
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              <img src="{{ asset('images/category/' . $row->image) }}" class="img-fluid" alt="{{ $row->name }}">
                           </td>
                           <td>
                              <div class="name">
                                 {{$row->name}}
                              </div>
                           </td>
                           <td>{{$row->slug}}</td>
                           <td>{{$row->description}}</td>
                           <td class="text-center">
                              @if ($row->status == 1)
                              <a href="{{ route('admin.category.edit',$arg)}}" class="btn btn-sm btn-success">
                                 <i class="fas fa-toggle-on"></i>
                              </a>
                              @else
                              <a href="{{ route('admin.category.edit',$arg)}}" class="btn btn-sm btn-success">
                                 <i class="fas fa-toggle-on"></i>
                              </a>
                              @endif
                              <a href="{{ route('admin.category.show',$arg)}}" class="btn btn-sm btn-info">
                                 <i class="far fa-eye"></i>
                              </a>
                              <a href="{{ route('admin.category.edit',$arg)}}" class="btn btn-sm btn-primary">
                                 <i class="far fa-edit"></i>
                              </a>
                              <a href="{{ route('admin.category.delete',$arg)}}" class="btn btn-sm btn-danger">
                                 <i class="fas fa-trash"></i>
                              </a>
                           </td>
                           <td>{{$row->id}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- END CONTENT-->
@endsection