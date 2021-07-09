<div class="navbar-fixed">
    <nav class="mynav">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo" title="Poornatha | Admin Panel">Poornatha</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse" title="menu"><i
                    class="material-icons">menu</i></a>
            <ul id="mobile-demo" class="side-nav fixed">
                <li class="side_li no-padding site_li">
                 <img class="login_img" src="{{ url('assets/images/flower.svg') }}">
            <div class="logo header-p">
              <a href="{{ url('/') }}">  <p class="font-bold logo-color m-0">Live <span class="well px-2 logo-color"> Well</span></p> </a>
            </div></li>
                
                <li class="side_li no-padding"><a href="{{ url('admin/image_upload') }}" class="waves-effect"><i
                            class="material-icons">widgets</i>Image Upload</a></li>
                <li class="side_li no-padding"><a href="{{ url('admin/contact_data') }}" class="waves-effect"><i
                            class="material-icons">account_box</i>Contact Details</a></li>
                            <li class="side_li no-padding"><a href="{{ url('admin/category') }}" class="waves-effect"><i
                            class="material-icons">storage</i>Category</a></li>
                <!-- <li class="side_li no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="{{ (Request::segment(2) == 'users') ? 'active' : ''  }}">
                            <a class="collapsible-header {{ (Request::segment(2) == 'blogs') ? 'active' : ''  }}"><i
                                    class="material-icons">forum</i>Blogs<i
                                    class="fa fa-chevron-down down {{ (Request::segment(2) == 'blogs') ? 'rotate' : ''  }}"
                                    aria-hidden="true"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="{{ url('admin/blogs') }}">List Blogs</a></li>
                                    <li><a href="{{ url('admin/blogs/add') }}">Add New Blogs</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li> -->
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('admin/logout') }}" class="logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>



<!-- $2y$10$j4GxZIq6tcCjp4KdXG7DputpBr85ccdWSke9QaMF86iSvqaDgr/FK -->