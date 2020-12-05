@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item active">Thêm thương hiệu</li>
    <li class="list-group-item" aria-disabled="true">
        <form role="form" action="{{URL::to('/save_category')}}" method="post" class="form-horizontal style-form"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group mb-4">
                <label for="exampleFormControlFile1">Tên thương hiệu</label><br>
                <input type="text" name="category_name" class="form-control" id="" placeholder="Tên thương hiệu"
                    required>
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                <input type="file" name="category_image" id="" class="form-control" style="height:auto" required>
            </div>
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </li>
</ul>
@endsection
