@php
    $categories = App\Models\Category::latest()->get();
@endphp

<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>  @if (session()->get('language') == 'hindi') श्रेणियाँ @else Categories @endif </div>
    <nav class="yamm megamenu-horizontal">
      <ul class="nav">

        @foreach ($categories as $category)
        <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="{{ $category->category_icon }}" aria-hidden="true"></i>
            @if (session()->get('language') == 'hindi') {{ $category->category_name_hin }} @else {{ $category->category_name_en }}
            @endif
        </a>
          <ul class="dropdown-menu mega-menu">
            <li class="yamm-content">
              <div class="row">

                @php
                    $subcategories = App\Models\SubCategory::where('category_id',$category->id)->get();
                @endphp

                @foreach ($subcategories as $subcategory)

                <div class="col-sm-12 col-md-3">
                    <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->sub_category_slug_en) }}">
                    <h2 class="title"> @if (session()->get('language') == 'hindi') {{ $subcategory->sub_category_name_hin }} @else {{ $subcategory->sub_category_name_en }}
                        @endif
                    </h2>
                    </a>
                    @php
                        $subsubcategories = App\Models\SubSubCategory::where('sub_category_id',$subcategory->id)->get();
                     @endphp

                @foreach ($subsubcategories as $subsubcategory)

                  <ul class="links list-unstyled">
                    <li><a href="{{ url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->sub_sub_category_slug_en) }}">
                        @if (session()->get('language') == 'hindi') {{ $subsubcategory->sub_sub_category_name_hin }} @else {{ $subsubcategory->sub_sub_category_name_en }}
                        @endif
                    </a></li>
                  </ul>
                @endforeach
                </div>
                @endforeach
              </div>
              <!-- /.row -->
            </li>
            <!-- /.yamm-content -->
          </ul>
          <!-- /.dropdown-menu -->
        </li>
        @endforeach
        <!-- /.menu-item -->

        <!-- /.menu-item -->

      </ul>
      <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
  </div>
