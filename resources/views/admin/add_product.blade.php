@extends('layouts.admin')
@section('admin_content')
<div class="form-group">
            <div class="col-lg-12">
            <h4>
              <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Thêm Sản Phẩm </font></font>
            </h4>
            </div></br>
            <form role="form" action="{{URL::to('/save_product')}}" method="post" class="form-horizontal style-form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleFormControlFile1">Tên sản phẩm</label><br>
                <input type="text" name="product_name" class="form-control" id="formGroupExampleInput" placeholder="Tên sản phẩm" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Giá sản phẩm</label><br>
                <input type="number" name="product_price" class="form-control" id="formGroupExampleInput" placeholder="Giá sản phẩm" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Mô tả sản phẩm</label><br>
                <div class="col-lg-10">
                    <textarea style="text" rows="10"  placeholder="Mô tả sản phẩm" id="validationCustom02" class="form-control" name="product_desc" required></textarea>
                  </div>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Số lượng sản phẩm</label><br>
                <input type="number" name="product_Quantity" class="form-control" id="formGroupExampleInput" placeholder="Số lượng sản phẩm" required>
              </div></br>
              <div class="form-group">
                <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                <input type="file" name="product_image" id="formGroupExampleInput" placeholder="Thêm tên danh mục" required>
                </div></br>
              <div class="form-group">
                	<label for="exampleFormControlFile1">Danh mục sản phẩm</label>
                	<div class="col-md-4">
                		<select class="form-control" name="category">
                      @foreach($category as $key => $cate)
		                  <option value="{{$cate->id_category}}">{{$cate->Name_category}}</option>
                      @endforeach
		                </select>
                	</div>
                </div>
              <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
</div>
@endsection