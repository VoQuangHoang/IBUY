@extends('layouts.admin')
@section('admin_content')
<div class="form-group">
            <div class="col-lg-12">
            <h4>
              <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cập Nhật Tài Khoản </font></font>
            </h4>
            </div></br>
            @foreach($edit_admin as $key =>$edit)
            <form role="form" action="{{URL::to('/update_admin/'.$edit->id)}}" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label col-md-3">Tên tài khoản</label>
                  <input type="text" name="name" value="{{$edit->name}}" class="form-control form-control-user" id="exampleFirstName" placeholder="Nhập tên tài khoản...">
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
                  <input type="phone" name="phone" value="{{$edit->phone}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập Số Điện Thoại...">
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Địa Chỉ</label>
                  <input type="text" name="address" value="{{$edit->address}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập địa chỉ...">
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Mật Khẩu</label>
                  <input type="password" name="password" value="{{$edit->password}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nhập mật khẩu...">
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3">Phân Quyền</label>
                	<div class="col-md-2">
                		<select class="form-control" name="roles_id" value="roles_id">
                		  @foreach($roles as $key => $rol)
		                  <option value="{{$rol->id}}"><td>{{$rol->name_roles}}</td></option>
		                  @endforeach
		                </select>
                	</div>
                </div>
              <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
            @endforeach
</div>
@endsection