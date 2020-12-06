@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item active">Cập Nhật Tài Khoản</li>
    <li class="list-group-item" aria-disabled="true">
        <div class="form-group">
            @foreach($edit_admin as $key =>$edit)
            <form role="form" action="{{URL::to('/update_admin/'.$edit->id)}}" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label col-md-3">Tên tài khoản</label>
                  <input type="text" name="name" value="{{$edit->name}}" class="form-control form-control-user" id="exampleFirstName" placeholder="Nhập tên tài khoản..." required>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Giới Tính</label>
                  <input type="text" name="gender" value="{{$edit->gender}}" class="form-control form-control-user" id="exampleFirstName" placeholder="Giới tính">
                </div>
                <div class="form-group">
                <label for="exampleFormControlFile1">Hình Ảnh</label><br/>
                <input type="file" name="image" id="formGroupExampleInput" placeholder="Hình ảnh">
                <img src="{{url::to('public/uploads/user/'.$edit->image)}}" width="250">
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Số Điện Thoại</label>
                  <input type="phone" name="phone" value="{{$edit->phone}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập Số Điện Thoại..." required>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Địa Chỉ</label>
                  <input type="text" name="address" value="{{$edit->address}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập địa chỉ..." required>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Mật Khẩu</label>
                  <input type="password" name="password" value="{{$edit->password}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập mật khẩu..." required>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Phân Quyền</label>
                  <div class="col-md-2">
                    <select class="form-control" name="roles_id" value="roles_id">
                      @foreach($roles as $key => $rol)
                      @if($rol->id==$edit->roles_id)
                      <option selected value="{{$rol->id}}"><td>{{$rol->name_roles}}</td></option>
                      @else
                      <option value="{{$rol->id}}"><td>{{$rol->name_roles}}</td></option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
            @endforeach
</div>
    </li>
</ul>
@endsection