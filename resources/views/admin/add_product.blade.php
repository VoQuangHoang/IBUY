@extends('layouts.admin')
@section('admin_content')
<ul class="list-group">
    <li class="list-group-item list-group-item-action active">Thêm Sản Phẩm</li>
    <li class="list-group-item" aria-disabled="true">
        <div class="form-group">
            <form role="form" action="{{URL::to('/save_product')}}" method="post" class="form-horizontal style-form"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Tên sản phẩm</label><br>
                    <input type="text" name="product_name" class="form-control" id="formGroupExampleInput"
                        placeholder="Tên sản phẩm" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Danh mục sản phẩm</label>
                    <div class="col-md-4">
                        <select class="form-control" name="category">
                            @foreach($category as $key => $cate)
                            <option value="{{$cate->id_category}}">{{$cate->name_category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Giá sản phẩm</label><br>
                    <input type="number" name="product_price" class="form-control" id="formGroupExampleInput"
                        placeholder="Giá sản phẩm" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Giảm giá (tính theo %)</label><br>
                    <input type="number" name="promotion_price" class="form-control" id="formGroupExampleInput"
                        value="0" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Mô tả sản phẩm</label><br>

                    <textarea tyle="text" rows="10" placeholder="Mô tả sản phẩm" id="ckeditor1" class="form-control"
                        name="product_desc" required></textarea>

                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Số lượng sản phẩm</label><br>
                    <input type="number" name="product_quantity" class="form-control" id="formGroupExampleInput"
                        placeholder="Số lượng sản phẩm" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                    <input type="file" class="form-control" style="height:auto" name="product_image" id="product_image" placeholder="Thêm tên danh mục"
                        required>
                </div>
                
                <div class="form-group mb-4">
                <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                </div>
                
            </form>
        </div>
    </li>
</ul>

@endsection
