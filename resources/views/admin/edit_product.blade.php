@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item active">Cập Nhật Sản Phẩm</li>
    <li class="list-group-item" aria-disabled="true">
        <div class="form-group">

            @foreach($edit_product as $key => $edit)
            <form role="form" action="{{URL::to('/update_product/'.$edit->id_product)}}" method="post"
                class="form-horizontal style-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Tên sản phẩm</label><br>
                    <input type="text" name="product_name" value="{{$edit->name_product}}" class="form-control"
                        id="formGroupExampleInput" placeholder="Tên sản phẩm" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Giá sản phẩm</label><br>
                    <input type="number" name="product_price" value="{{$edit->price_product}}" class="form-control"
                        id="formGroupExampleInput" placeholder="Giá sản phẩm" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Giảm giá (tính theo %)</label><br>
                    <input type="number" name="promotion_price" class="form-control" id="formGroupExampleInput"
                        placeholder="" value="{{$edit->promotion_price}}" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Mô tả sản phẩm</label><br>
                    <textarea tyle="text" rows="10" id="ckeditor1" placeholder="Mô tả sản phẩm"
                        id="formGroupExampleInput" class="form-control" name="product_desc"
                        required>{{$edit->description_product}}</textarea></div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Số lượng sản phẩm</label><br />
                    <input type="number" name="product_quantity" value="{{$edit->quantity_product}}"
                        class="form-control" id="formGroupExampleInput" placeholder="Số lượng sản phẩm" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Hình Ảnh</label><br />
                    <input type="file" name="product_image" class="form-control" style="height:auto"
                        id="formGroupExampleInput" placeholder="Thêm tên danh mục">
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Hình Ảnh Cũ</label><br />
                    <img src="{{url::to('public/uploads/product/'.$edit->image_product)}}" width="100">
                </div>
                <div class="form-group mb-4">
                    <label class="control-label col-md-3">Danh mục sản phẩm</label>
                    <div class="col-md-2">
                        <select class="form-control" name="category" value="category">
                            @foreach($category as $key => $cate)
                            @if($cate->id_category==$edit->id_category)
                            <option selected value="{{$cate->id_category}}">{{$cate->name_category}}</option>
                            @else
                            <option value="{{$cate->id_category}}">{{$cate->name_category}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <button type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
                </div>

            </form>
            @endforeach
        </div>
    </li>
</ul>

@endsection
