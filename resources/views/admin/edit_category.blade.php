@extends('layouts.admin')
@section('admin_content')
<div class="form-group">
            <div class="col-lg-12">
            <h4>
              <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Thêm Danh Mục </font></font>
            </h4>
            </div></br>
            @foreach($edit_category as $key =>$edit)
            <form role="form" action="{{URL::to('/update_category/'.$edit->id_category)}}" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleFormControlFile1">Tên Danh Mục</label><br>
                <input type="text" name="category_name" value="{{$edit->name_category}}" class="form-control" id="formGroupExampleInput" placeholder="Thêm tên danh mục" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                <input type="file" name="category_image" id="formGroupExampleInput" placeholder="Thêm tên danh mục">
                </div></br>
                <img src="{{url::to('public/uploads/category/'.$edit->image_category)}}" height="90" width="120"></br>
                <div class="form-group"></br>
                	<button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
            @endforeach
</div>
@endsection