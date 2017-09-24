<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('admin.user.index')}}"><i class="fa fa-user"></i> User </span></a>

                  </li>
                  <li><a href="{{ route('admin.barangay.index')}}"><i class="fa fa-home"></i> Barangay </a>
                    <li><a href="{{ route('admin.barangay-purok.index')}}"><i class="fa fa-home"></i> Barangay Purok </a>
                    <li ><a href="#"><i class="fa fa-home"></i> Category <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li ><a href="{{ route('admin.category.index')}}">All Category</a></li>
                      @foreach (\App\Category::all() as $category)
                        <li><a href="{{ route('admin.survey-field.index',$category->id)}}">{{ ucwords($category->name) }}</a></li>
                      @endforeach

                    </ul>
                    </li>
                      <li><a href="{{ route('admin.sub-category.index')}}"><i class="fa fa-home"></i> SubCategory </a>

                  </li>


                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->
