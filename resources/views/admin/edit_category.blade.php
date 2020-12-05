@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item active">Sửa Thương Hiệu</li>
    <li class="list-group-item" aria-disabled="true">
        <div class="form-group">

            @foreach($edit_category as $key =>$edit)
            <form role="form" action="{{URL::to('/update_category/'.$edit->id_category)}}" method="post"
                class="form-horizontal style-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Tên Thương Hiệu</label><br>
                    <input type="text" name="category_name" value="{{$edit->name_category}}" class="form-control"
                        id="formGroupExampleInput" placeholder="Thêm tên danh mục" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                    <input type="file" name="category_image" id="formGroupExampleInput">
                </div>
                <div class="form-group mb-4">
                <img src="{{url::to('public/uploads/category/'.$edit->image_category)}}" max-width="250" style="border: 0.1px solid #e8e8e8">
                </div>
                
                <div class="form-group mb-4"></br>
                    <button type="submit" class="btn btn-primary">Cập nhật Thương Hiệu</button>
                </div>
            </form>
            @endforeach
        </div>
    </li>
</ul>

@endsection
