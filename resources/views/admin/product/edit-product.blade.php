@extends('admin.layouts.app')

@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Edit Product </h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('admin.product.update', $product->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <!-- start 1st row  -->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Brand Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="brand_id" class="form-control" required>
                                                            <option value="" selected="" disabled="">Select
                                                                Brand</option>
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}"
                                                                    {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                                                    {{ $brand->brand_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Category Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="category_id" class="form-control" required>
                                                            <option value="" selected="" disabled="">Select
                                                                Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}"
                                                                    {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                                    {{ $category->category_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>SubCategory Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="sub_category_id" class="form-control" required>
                                                            <option value="" selected="" disabled="">Select
                                                                SubCategory</option>
                                                            @foreach ($subcategories as $subcat)
                                                                <option value="{{ $subcat->id }}"
                                                                    {{ $subcat->id == $product->subcategory_id ? 'selected' : '' }}>
                                                                    {{ $subcat->sub_category_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('subcategory_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 1st row  -->

                                        <div class="row">
                                            <!-- start 2ndst row  -->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Sub SubCategory Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="subsubcategory_id" class="form-control" required>
                                                            <option value="" selected="" disabled="">Select
                                                                Sub Sub Category</option>
                                                            @foreach ($subsubcategories as $subsubcat)
                                                                <option value="{{ $subsubcat->id }}"
                                                                    {{ $subsubcat->id == $product->subsubcategory_id ? 'selected' : '' }}>
                                                                    {{ $subsubcat->sub_sub_category_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('subsubcategory_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Name En <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_en"
                                                            value="{{ $product->product_name_en }}" id="product_name_en"
                                                            class="form-control" required>
                                                    </div>
                                                    @error('product_name_en')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div> <!-- end col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Name Hin <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name_hin"
                                                            value="{{ $product->product_name_hin }}" id="product_name_hin"
                                                            class="form-control" required>
                                                    </div>
                                                    @error('product_name_hin')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 2nd row  -->


                                        <div class="row">
                                            <!-- start 3rd row  -->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Code <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_code"
                                                            value="{{ $product->product_code }}" id="product_code"
                                                            class="form-control" required>
                                                    </div>
                                                    @error('product_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Qty <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_qty"
                                                            value="{{ $product->product_qty }}" id="product_qty"
                                                            class="form-control" required>
                                                    </div>
                                                    @error('product_qty')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div> <!-- end col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Tags En <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tags_en" class="form-control"
                                                            value="{{ $product->product_tags_en }}" data-role="tagsinput"
                                                            required>
                                                        @error('product_tags_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 3rd row  -->

                                        <div class="row">
                                            <!-- start 4th row  -->
                                            <div class="col-md-4">


                                                <div class="form-group">
                                                    <h5>Product Tags Hin <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_tags_hin"
                                                            class="form-control" value="{{ $product->product_tags_hin }}"
                                                            data-role="tagsinput" required>
                                                        @error('product_tags_hin')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">


                                                <div class="form-group">
                                                    <h5>Product Size Hin <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_size_en" class="form-control"
                                                            value="{{ $product->product_size_en }}" data-role="tagsinput"
                                                            required>
                                                        @error('product_size_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->


                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Size Hin <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_size_hin"
                                                            class="form-control" value="{{ $product->product_size_hin }}"
                                                            data-role="tagsinput" required>
                                                        @error('product_size_hin')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 4th row  -->

                                        <div class="row">
                                            <!-- start 5th row  -->
                                            <div class="col-md-6">


                                                <div class="form-group">
                                                    <h5>Product Color Eng <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_color_en"
                                                            class="form-control" value="{{ $product->product_color_en }}"
                                                            data-role="tagsinput" required>
                                                        @error('product_color_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Product Color Hin <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_color_hin"
                                                            class="form-control"
                                                            value="{{ $product->product_color_hin }}"
                                                            data-role="tagsinput" required>
                                                        @error('product_color_hin')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 5th row  -->

                                        <div class="row">
                                            <!-- start 6th row  -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Product Discount Price <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="number" name="discount_price"
                                                            value="{{ $product->discount_price }}" class="form-control"
                                                            placeholder="000" required>
                                                        @error('discount_price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Product Selling Price <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="number" value="{{ $product->selling_price }}"
                                                            name="selling_price" class="form-control" required>
                                                    </div>
                                                    @error('selling_price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Product Main Image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="product_thambnail" onchange="mainImage(this)" class="form-control" value="" required>
                                                        @error('product_thambnail')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <img src="" alt="" id="mainImg">
                                                    </div>
                                                </div>
                                            </div> <!-- end col md 4 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Product Multiple Images <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="multi_images[]" multiple id="multiImg" class="form-control" required>
                                                    </div>
                                                    @error('multi_images')
                                                            <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <div class="row" id="preview_img"></div>
                                                </div>
                                            </div> <!-- end col md 4 -->
                                        </div> <!-- end 6th row  --> --}}

                                        <div class="row">
                                            <!-- start 7th row  -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Short Desc English <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="short_descp_en" id="textarea" class="form-control" required placeholder="Textarea text">{{ $product->short_descp_en }}</textarea>
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 6 -->

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Short Desc Hindi <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="short_descp_hin" id="textarea" class="form-control" required placeholder="Textarea text">{{ $product->short_descp_hin }}</textarea>
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 6 -->


                                        </div> <!-- end 7th row  -->

                                        <div class="row">
                                            <!-- start 8th row  -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Long Desc English <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="long_descp_en" id="editor1" class="form-control" required placeholder="Textarea text">{!! $product->long_descp_en !!}</textarea>
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 6 -->

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Long Desc Hindi <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="long_descp_hin" id="editor2" class="form-control" required placeholder="Textarea text">{!! $product->long_descp_hin !!}</textarea>
                                                    </div>
                                                </div>
                                            </div> <!-- end col md 6 -->
                                        </div> <!-- end 8th row  -->
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <fieldset>
                                                            <input type="checkbox" name="hot_deals"
                                                                {{ $product->hot_deals ? 'checked' : '' }} id="checkbox_1"
                                                                value="1">
                                                            <label for="checkbox_1">Hot Deals</label>
                                                        </fieldset>
                                                        <fieldset>
                                                            <input type="checkbox" name="featured"
                                                                {{ $product->featured ? 'checked' : '' }} id="checkbox_2"
                                                                value="1">
                                                            <label for="checkbox_2">Featured</label>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <fieldset>
                                                            <input type="checkbox" id="checkbox_3"
                                                                {{ $product->special_offer ? 'checked' : '' }}
                                                                name="special_offer" value="1">
                                                            <label for="checkbox_3">Special Offer</label>
                                                        </fieldset>
                                                        <fieldset>
                                                            <input type="checkbox" id="checkbox_4"
                                                                {{ $product->special_deals ? 'checked' : '' }}
                                                                name="special_deals" value="1">
                                                            <label for="checkbox_4">Special Deals</label>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5"
                                        value="Update Product">
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->



        <!-- ///////////////// Start Multiple Image Update Area ///////// -->

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box bt-3 border-info">
                        <div class="box-header">
                            <h4 class="box-title">Product Multiple Image <strong>Update</strong></h4>
                        </div>
                        <form method="POST" action="{{ route('admin.productMultiImg.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-sm p-4">
                                @foreach ($multiImgs as $img)
                                    <div class="col-md-3">

                                        <div class="card p-4">
                                            <img src="{{ asset($img->photo_name) }}" class="" height="">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <a href="{{ route('admin.MultiImg.delete',$img->id) }}" class="btn btn-sm btn-danger delete" id="delete"
                                                        title="Delete Data"><i class="fa fa-trash"></i> </a>
                                                </h5>
                                                <p class="card-text">
                                                <div class="form-group">
                                                    <label class="form-control-label">Change Image <span
                                                            class="tx-danger">*</span></label>
                                                    <input class="form-control" type="file" multiple
                                                        name="multi_img[ {{ $img->id }} ]">
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--  end col md 3-->
                                @endforeach
                            </div>
                            <div class="text-xs-right p-4 float-right">
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>

            </div> <!-- // end row  -->
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box bt-3 border-info">
                        <div class="box-header">
                            <h4 class="box-title">Product Main Image <strong>Update</strong></h4>
                        </div>
                        <form method="POST" action="{{ route('admin.productImage.update',$product->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-sm p-4">
                                    <div class="col-md-3">
                                        <div class="card p-4">
                                            <img src="{{ asset($product->product_thambnail) }}" class="" height="">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    {{-- <a href="" class="btn btn-sm btn-danger" id="delete"
                                                        title="Delete Data"><i class="fa fa-trash"></i> </a> --}}
                                                </h5>
                                                <p class="card-text">
                                                <div class="form-group">
                                                    <label class="form-control-label">Change Image <span
                                                            class="tx-danger">*</span></label>
                                                    <input class="form-control" onchange="mainImage(this)" type="file"
                                                        name="product_thambnail">
                                                </div>
                                                <img src="" alt="" id="mainImg">
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--  end col md 3-->
                            </div>
                            <div class="text-xs-right p-4 float-right">
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>

            </div> <!-- // end row  -->
        </section>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                //   console.log(category_id);

                if (category_id) {
                    $.ajax({
                        url: "{{ url('admin/category/subcategory/ajax/') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subsubcategory_id"]').html('');
                            var d = $('select[name="sub_category_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="sub_category_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .sub_category_name_en + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });


            $('select[name="sub_category_id"]').on('change', function() {
                var sub_category_id = $(this).val();
                //   console.log(category_id);

                if (sub_category_id) {
                    $.ajax({
                        url: "{{ url('admin/category/sub-subcategory/ajax/') }}/" +
                            sub_category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subsubcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subsubcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .sub_sub_category_name_en + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>

    <script type="text/javascript">
        function mainImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainImg').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                            .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(80)
                                        .height(80); //create image element
                                    $('#preview_img').append(
                                    img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>
@endsection
