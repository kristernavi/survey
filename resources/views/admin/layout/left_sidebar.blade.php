<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('admin.user.index')}}"><i class="fa fa-user"></i> User </span></a>

                  </li>
                  <li><a href="{{ route('admin.barangay.index')}}"><i class="fa fa-home"></i> Barangay </a>

                    <li ><a href="#"><i class="fa fa-home"></i> Category </a>

                    </li>
                     @foreach (\App\Category::all() as $category)
                      <li><a href="#"><i class="fa fa-home"></i> {{ ucwords($category->name) }} <span class="fa fa-chevron-down"></a>
                          <ul class="nav child_menu">
                         @foreach ($category->subs as $sub)
                        <li><a href="{{ route('admin.survey-field.index',$category->id)}}">{{ ucwords($sub->name) }}</a></li>
                      @endforeach
                       </ul>
                     @endforeach

                  </li>


                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->
