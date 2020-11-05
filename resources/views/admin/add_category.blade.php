@extends('admin_layout')
@section('admin_content')
<div class="form-group">
            <div class="col-lg-12">
            <h4>
              <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Thêm Danh Mục </font></font>
            </h4>
            </div></br>
            <form role="form" action="{{URL::to('/save_category')}}" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleFormControlFile1">Tên Danh Mục</label><br>
                <input type="text" name="category_name" class="form-control" id="formGroupExampleInput" placeholder="Thêm tên danh mục" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                <input type="file" name="category_image" id="formGroupExampleInput" placeholder="Thêm tên danh mục" required>
                </div></br>
              <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
</div>
@endsection