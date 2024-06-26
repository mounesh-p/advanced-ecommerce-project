<!DOCTYPE html>
<html lang="en">
    @php
    $seo = App\Models\Seo::find(1);
    @endphp
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $seo->meta_description }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">

    <!-- /// Google Analytics Code // -->
<script>
    {{ $seo->google_analytics }}
</script>

    <meta name="robots" content="all">
    <title>Shopify -@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">



    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    {{-- toaster --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script src="https://js.stripe.com/v3/"></script>


</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->

    @include('frontend.layouts.header')

    <!-- ============================================== HEADER : END ============================================== -->
    @yield('content')
    <!-- /#top-banner-and-menu -->

    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend.layouts.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><strong id="pname"></strong></h5>
                    <button type="button" class="close" id="closeModal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="" alt="" id="pimage" width="200"
                                    height="200">
                                {{-- <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div> --}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">Price : <strong class="text-danger"> <span
                                            id="pprice"></span> </strong> <del id="oldprice"></del> </li>
                                <li class="list-group-item">Product Code : <strong id="pcode"></strong> </li>
                                <li class="list-group-item">Category : <strong id="pcategory"></strong> </li>
                                <li class="list-group-item">Brand : <strong id="pbrand"></strong> </li>
                                <li class="list-group-item">Stock :
                                    <span class="badge badge-pill badge-success" id="available"></span>
                                    <span class="badge badge-pill badge-danger" id="stockout"></span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Choose Color</label>
                                <select class="form-control" name="color" id="color">
                                    <option selected disabled>Choose Color</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" id="sizeArea">
                                <label for="">Choose Size</label>
                                <select class="form-control" name="size" id="size">
                                    <option selected disabled>Choose Size</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qty">Quantity</label>
                                <input type="number" class="form-control" name="" id="qty"
                                    value="1" min="1" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>

                        <input type="hidden" id="product_id">

                        <button type="button" class="btn btn-primary float-right" onclick="addToCart()">Add to
                            cart</button>
                    </div>
                </div>
                {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // product model view
        function productView(id) {
            // alert(id);
            $.ajax({
                type: 'GET',
                url: '/product/view/modal/' + id,
                dataType: 'json',
                success: function(data) {
                    // console.log(data)
                    $('#pname').text(data.product.product_name_en);
                    $('#price').text(data.product.selling_price);
                    $('#pcode').text(data.product.product_code);
                    $('#pcategory').text(data.product.category.category_name_en);
                    $('#pbrand').text(data.product.brand.brand_name_en);
                    $('#pimage').attr('src', '/' + data.product.product_thambnail);

                    $('#product_id').val(id);
                    $('#qty').val(1);


                    if (data.product.discount_price == null) {
                        $('#pprice').text('');
                        $('#oldprice').text('');
                        $('#pprice').text(data.product.selling_price);
                    } else {
                        $('#pprice').text(data.product.discount_price);
                        $('#oldprice').text(data.product.selling_price);

                    }

                    if (data.product.product_qty > 0) {
                        $('#stockout').text('');
                        $('#available').text('');
                        $('#available').text('Avalable');
                    } else {
                        $('#stockout').text('');
                        $('#available').text('');
                        $('#stockout').text('Out of Stock');

                    }

                    $('select[name="color"]').empty()
                    $.each(data.color, function(key, value) {
                        $('select[name="color"]').append('<option " ' + value + ' ">' + value +
                            '</option>')
                    })

                    $('select[name="size"]').empty()
                    $.each(data.size, function(key, value) {
                        $('select[name="size"]').append('<option " ' + value + ' ">' + value +
                            '</option>')

                        if (data.size == "") {
                            $('#sizeArea').hide();
                        } else {
                            $('#sizeArea').show();
                        }

                    })
                }
            })
        }
        //End product model view

        // Add To Carrt
        function addToCart() {

            var product_name = $('#pname').text();
            var id = $('#product_id').val();
            var color = $('#color option:selected').text();
            var size = $('#size option:selected').text();
            var quantity = $('#qty').val();

            $.ajax({
                type: "POST",
                url: "/cart/data/store/" + id,
                dataType: "json",
                data: {
                    color: color,
                    size: size,
                    quantity: quantity,
                    product_name: product_name,
                    _token: '{{ csrf_token() }}',
                },
                success: function(data) {
                    miniCart()

                    $('#closeModal').click();
                    console.log(data);

                    // start message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // end message
                }
            })
        }
    </script>

    <script>
        function miniCart() {
            $.ajax({
                type: "GET",
                url: "/product/mini/cart/",
                dataType: "json",
                success: function(response) {
                    // console.log(response);

                    var miniCart = ""

                    $('span[id="cartSubTotal"]').text(response.cartTotal);
                    $('#cartQty').text(response.cartQty);

                    $.each(response.carts, function(key, value) {
                        miniCart += `<div class="cart-item product-summary" style="width:500;">
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="image"> <a href="detail.html"><img src="/${value.options.image}" alt=""></a> </div>
                      </div>
                      <div class="col-xs-7">
                        <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
                        <div class="price">${value.price} * ${value.qty}</div>
                      </div>
                      <div class="col-xs-1 action">
                         <button type="submit" class="btn btn-danger" id="${value.rowId}" onclick="miniCartRemove(this.id)"> <i class="fa fa-trash"></i> </button>
                         </div>
                    </div>
                  </div>
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                  <hr>`
                    });

                    $('#miniCart').html(miniCart);
                }
            })
        }
        miniCart()

        // mini cart remove

        function miniCartRemove(rowId) {
            $.ajax({
                type: "GET",
                url: "/product/mini/cart-remove/" + rowId,
                dataType: "json",
                success: function(data) {

                    miniCart()
                    cart()
                    // start message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // end message


                }
            });
        }
    </script>

    <!-------------------Wishlist----------------------->
    <script>
        function addToWishlist(product_id) {
            // alert(product_id);
            $.ajax({
                type: "POST",
                url: "/product-add-wishlist/" + product_id,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {

                    // start message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // end message

                }
            })


        }
    </script>
    <!-------------------End Wishlist----------------------->

    <!-------------------Wishliost show------------------------->

    <script>
        function wishlist() {
            $.ajax({
                type: "GET",
                url: "/user/product-wishlist/",
                dataType: "json",
                success: function(response) {
                    // console.log(response);

                    var row = ""

                    $.each(response, function(key, value) {
                        row += `<tr>
                    <td class="col-md-2"><img src="/${value.product.product_thambnail}" alt="imga"></td>
                                    <td class="col-md-7">
                                        <div class="product-name"><a href="#">${value.product.product_name_en}</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star rate"></i>
                                            <i class="fa fa-star non-rate"></i>
                                            <span class="review">( 06 Reviews )</span>
                                        </div>
                                        <div class="price">
                                            ${value.product.discount_price == null ? `${value.product.selling_price}` : `${value.product.discount_price} <span>${value.product.selling_price}</span>`}

                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <button data-toggle="modal" data-target="#exampleModalCenter" id="${value.product.id}" onclick="productView(this.id)" class="btn btn-primary icon" type="button" title="Add Cart"> Add To Cart</button>
                                    </td>
                                    <td class="col-md-1 close-btn">
                                        <button type="submit" id="${value.id}" onclick="removeWishlist(this.id)" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>`
                    });

                    $('#wishlist').html(row);
                }
            })
        }
        wishlist()
    </script>
    <!-------------------End Wishliost show----------------------->

    <!--------- Wishlist remove -------------->
    <script>
        function removeWishlist(id) {
            $.ajax({
                type: "GET",
                url: "/user/wishlist-remove/" + id,
                dataType: "json",
                success: function(data) {

                    wishlist()

                    // start message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // end message

                }
            });
        }
    </script>
    <!---------End Wishlist remove -------------->

    <!---------Cart Product -------------->
    <script>
        function cart() {
            $.ajax({
                type: "GET",
                url: "/user/cart-product",
                dataType: "json",
                success: function(response) {
                    // console.log(response);

                    var row = ""

                    $.each(response.carts, function(key, value) {
                        row += `<tr>
					<td class="romove-item"><button type="submit" id="${value.rowId}" onclick="CartRemove(this.id)" title="cancel" class="icon"><i class="fa fa-trash-o"></i></button></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src="/${value.options.image}" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="detail.html">${value.name}</a></h4>

						<h5 class='cart-product-description'><a href="detail.html"> <strong> ${value.price} </strong></a></h5>

						<div class="row">
							<div class="col-sm-4">
								<div class="rating rateit-small"></div>
							</div>
							<div class="col-sm-8">
								<div class="reviews">
									(06 Reviews)
								</div>
							</div>
						</div><!-- /.row -->
						<div class="cart-product-info">
                                            ${value.options.color == null ? `` : `<span class="product-color">COLOR:<span>${value.options.color}</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </span>`}
											<br>
                                            ${value.options.size == null ? `` : `<span class="product-color">SIZE:<span>${value.options.size}</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </span>`}

						</div>
					</td>
					<td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
					<td class="cart-product-quantity ">

                        ${value.qty > 1 ?
                        `<button type="submit" id="${value.rowId}" onclick="CartDecrement(this.id)" class="btn btn-danger btn-sm">-</button>`
                        :
                        `<button type="submit" disabled class="btn btn-danger btn-sm">-</button>`
                        }

                            <div class="quant-input">
                                <input type="number" value="${value.qty}" min="1" max="100">
                            </div>

                        <button type="submit" id="${value.rowId}" onclick="CartIncrement(this.id)" class="btn btn-success btn-sm">+</button>

		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">$${value.subtotal}</span></td>
				</tr>`
                    });

                    $('#myCart').html(row);
                }
            })
        }
        cart()

        // product cart remove
        function CartRemove(rowId) {
            $.ajax({
                type: "GET",
                url: "/user/product/cart-remove/" + rowId,
                dataType: "json",
                success: function(data) {

                    cart()
                    miniCart()
                    couponCal()
                    $('#AplyCoupon').show();
                    $('#coupon_name').val(' ');
                    // start message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                    })

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // end message
                }
            });
        }

        // Cart incement
        function CartIncrement(rowId) {
            $.ajax({
                type: "GET",
                url: "/cart/increment/" + rowId,
                dataType: "json",
                success: function(data) {
                    miniCart();
                    cart();
                    couponCal()
                }
            });
        }
        // end increment

        // Cart incement
        function CartDecrement(rowId) {
            $.ajax({
                type: "GET",
                url: "/cart/decrement/" + rowId,
                dataType: "json",
                success: function(data) {
                    miniCart();
                    cart();
                    couponCal()
                }
            });
        }
        // end increment
    </script>
    <!---------End Cart Product -------------->

    <!---------Start Apply Coupon -------------->
    <script>
        function applyCoupon() {

            var coupon_name = $("#coupon_name").val();

            $.ajax({
                type: "POST",
                url: "{{ url('/coupon-apply') }}",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    coupon_name: coupon_name
                },
                success: function(data) {

                    couponCal()

                    if (data.validity == true) {
                        $('#AplyCoupon').hide();
                    }
                    // start message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',

                            title: data.error
                        })
                    }
                    // end message
                }
            })
        }

        function couponCal() {
            $.ajax({
                type: "GET",
                url: "{{ url('/coupon-calculation') }}",
                dataType: "json",
                success: function(data) {

                    if (data.total) {
                        $('#couponFiels').html(
                            `<tr>
                                <th>
                                    <div class="cart-sub-total">
                                        Subtotal<span class="inner-left-md">$ ${data.total}</span>
                                    </div>
                                    <div class="cart-grand-total">
                                        Grand Total<span class="inner-left-md">$ ${data.total}</span>
                                    </div>
                                </th>
                            </tr>`
                        )
                    } else {
                        $('#couponFiels').html(
                            `<tr>
                                <th>
                                    <div class="cart-sub-total">
                                        Subtotal<span class="inner-left-md">$ ${data.subtotal}</span>
                                    </div>
                                    <div class="cart-sub-total">
                                        Coupon Name<span class="inner-left-md"> ${data.coupon_name}</span>
                                        <button class="" onclick="couponRemove()">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="cart-sub-total">
                                        Discount Amount<span class="inner-left-md">$ ${data.discount_amount}</span>
                                    </div>
                                    <div class="cart-grand-total">
                                        Grand Total<span class="inner-left-md">$ ${data.total_amount}</span>
                                    </div>
                                </th>
                            </tr>`
                        )
                    }

                }
            })
        }
        couponCal()
    </script>
    <!--------- End Apply Coupon -------------->

    <!--------- End Remove Coupon -------------->

    <script>
        function couponRemove() {

            $.ajax({
                type: "GET",
                url: "{{ url('/coupon-remove') }}",
                dataType: "json",
                success: function(data) {

                    couponCal()
                    $('#AplyCoupon').show();
                    $('#coupon_name').val(' ');

                    // start message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })

                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',

                            title: data.error
                        })
                    }
                    // end message
                }
            });
        }
    </script>

    <!--------- End Remove Coupon -------------->



    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/echo.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.rateit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>

</body>

</html>
