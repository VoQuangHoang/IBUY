@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item active">Cập Nhật Tài Khoản</li>
    <li class="list-group-item">
        @foreach($edit_admin as $key =>$edit)
        <form role="form" action="{{URL::to('/update_admin/'.$edit->id)}}" method="post"
            class="form-horizontal style-form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-md-3">Tên tài khoản</label>
                <input type="text" name="name" value="{{$edit->name}}" class="form-control form-control-user"
                    id="exampleFirstName" placeholder="Nhập tên tài khoản...">
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Email</label>
                <input type="email" name="email" value="{{$edit->email}}" class="form-control form-control-user"
                    id="email" placeholder="Email" readonly>
            </div>
            <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="{{$edit->gender}}">{{$edit->gender}}</option>
                        @if($edit->gender == "Nam")
                        <option value="Nữ">Nữ</option>
                        @else
                        <option value="Nam">Nam</option>
                        @endif 
                    </select>
            </div>
            <div class="form-group">
                <label for="image">Hình Ảnh</label><br />
                <input type="file" name="image" class="form-control" style="height:auto;" id="image" placeholder="Hình ảnh">
            </div>
            <div class="form-group">
                <label for="image_old">Hình Ảnh Cũ</label><br />
                <img src="{{asset('public/uploads/user/'.$edit->image)}}" width="100">
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Số Điện Thoại</label>
                <input type="phone" name="phone" value="{{$edit->phone}}" class="form-control form-control-user"
                    id="phone" placeholder="Nhập Số Điện Thoại...">
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Địa Chỉ</label>
                <input type="text" name="address" value="{{$edit->address}}" class="form-control form-control-user"
                    id="exampleInputEmail" placeholder="Nhập địa chỉ...">
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Mật Khẩu</label>
                <input type="password" name="password" value="{{$edit->password}}"
                    class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập mật khẩu..." required>
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-md-3">Vai trò</label>
                <div class="col-md-2" style="padding:0">
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
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật tài khoản</button>
            </div>
            
        </form>
        @endforeach
    </li>
</ul>

@endsection
