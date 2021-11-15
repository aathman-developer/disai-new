<div class="col-12 live_well_head header w-100 px-0 " id="header">
    <div class="col-12 w-100 sub-hea py-1 d-flex justify-content-lg-between">
        <div class="justify-content-start align-items-center d-flex sub-new-p">
            <!-- <a href="" class="">
                <p class="mb-0 sub-p px-3">OUR STORY</p>
            </a> -->
            <!-- <a href="" class="">
                <p class="mb-0 sub-p px-3">BUYERS GUIDE</p>
            </a> -->
            <a href="{{ url('/contact') }}" class="">
                <p class="mb-0 sub-p px-3">CONTACT US</p>
            </a>
        </div>
        <div class="py-1 justify-content-end px-lg-5 d-flex">
            <a href="" class=""> <img src="assets/images/face.png" class="px-3 h-20"></a>
            <a href="" class=""> <img src="assets/images/insta.png" class="px-3 h-20"></a>
            <a href="" class=""><img src="assets/images/link.png" class="px-3 h-20"></a>
            <a href="" class=""> <img src="assets/images/p.png" class="px-3 h-20"></a>
            <a href="" class=""><img src="assets/images/you.png" class="px-3 h-20"></a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light nav_bar h-shadow w-100  pl-0 py-0">
        <div class="d-flex new-contact">
            <div class="logo align-items-center py-lg-2 pl-lg-3 d-flex header-p px-lg-0 px-3">
                <a href="{{ url('/') }}">
                    <img src="assets/images/logo.jpg" class="how-im py-2 px-lg-2">
                </a>
            </div>
        </div>
        <button class="navbar-toggler formy navbar-toggler ml-auto bg-white outline-0 z-depth-0" id="navbarSideButton"
            type="button">
            <i class="fas fa fa-bars"></i>
            <i class="fas fa fa-close d-none"></i>
        </button>
        <div class="collapse navbar-collapse naranjee-head justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav py-1 d-flex align-items-center">
                <li class="nav-item px-4">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == '/')?'head-active':'head-deactive' }}"
                        href="{{ url('/') }}" title="HOME">HOME
                    </a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'about')?'head-active':'head-deactive' }}"
                        href="{{ url('/about') }}" title="ABOUT US">ABOUT US</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link wht h-clr {{ (Route::current()->uri() == 'trustee')?'head-active':'head-deactive' }}"
                        href="{{ url('/trustee') }}" 
                        title="Trustees">TRUSTEES</a>
                    <!-- <ul class="dropdown z-depth-1 p-0 d-dow d-flex align-items-center">
                        <li class="list-type-none mt-2"><a href="{{ url('/modular_kitchen#l-shape') }}" class="p-2 clrr text-decor-none d-block">
                                <img src="assets/images/kitchen/lshape.png" class="h-110 h-img">
                                <p class="text-center h-p">COMMITTEE</p>
                            </a></li>
                        <li class="list-type-none mt-2"><a href="{{ url('/modular_kitchen#g-shape') }}" class="p-2 clrr text-decor-none d-block">
                                <img src="assets/images/kitchen/gshape.png" class="h-110 h-img">
                                <p class="text-center h-p">G-Shape</p>
                            </a></li>
                        <li class="list-type-none mt-2"><a href="{{ url('/modular_kitchen#island') }}" class="p-2 clrr text-decor-none d-block">
                                <img src="assets/images/kitchen/island.png" class="h-110 h-img">
                                <p class="text-center h-p">Island</p>
                            </a></li>
                        <li class="list-type-none mt-2"><a href="{{ url('/modular_kitchen#parallel') }}" class="p-2 clrr text-decor-none d-block">
                                <img src="assets/images/kitchen/paralel.png" class="h-110 h-img">
                                <p class="text-center h-p">Parallel</p>
                            </a></li>
                        <li class="list-type-none mt-2"><a href="{{ url('/modular_kitchen#straight') }}" class="p-2 clrr text-decor-none d-block">
                                <img src="assets/images/kitchen/stright.png" class="h-110 h-img">
                                <p class="text-center h-p">Straight</p>
                            </a></li>
                        <li class="list-type-none mt-2"><a href="{{ url('/modular_kitchen#u-shape') }}" class="p-2 clrr text-decor-none d-block">
                                <img src="assets/images/kitchen/ushape.png" class="h-110 h-img">
                                <p class="text-center h-p">U-Shape</p>
                            </a></li>
                    </ul> -->
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'committee')?'head-active':'head-deactive' }}"
                        href="{{ url('/committee') }}" title="Committee">COMMITTEE</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'mou')?'head-active':'head-deactive' }}"
                        href="{{ url('/mou') }}" title="MOU & COLLABORATION">MOU & COLLABORATION</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'events')?'head-active':'head-deactive' }}"
                        href="{{ url('/events') }}" title="EVENTS">EVENTS</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'gallery')?'head-active':'head-deactive' }}"
                        href="{{ url('/gallery') }}" title="PHOTO GALLERY">PHOTO GALLERY</a>
                </li>
                <li class="nav-item px-4">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'view')?'head-active':'head-deactive' }}"
                        href="{{ url('/view') }}" title="VIEWS & REPORTS">VIEWS & REPORTS</a>
                </li>
                <!-- <li class="nav-item px-3">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'kitchen_planner')?'head-active':'head-deactive' }}"
                        href="{{ url('/kitchen_planner') }}" title="KITCHEN PLANNER">CONTACT US</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link font-bold narajee-head neris-semi h-clr wht {{ (Route::current()->uri() == 'kitchen_planner')?'head-active':'head-deactive' }}"
                        href="{{ url('/kitchen_planner') }}" title="KITCHEN PLANNER"></a>
                </li> -->
            </ul>
        </div>
    </nav>
    <div class="modal-fixed d-none"></div>
    <ul class="navbar-side d-lg-none" id="navbarSide">
        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side semi_bold_font text-uppercase {{ (Route::current()->uri() == '/')?'primary-text-color':'text-muted' }}"
                href="{{ url('/') }}" title="Home">Home</a>
        </li>
        <li class="navbar-side-item position-relative p-2">
            <a class="nav-link font-9 mixed-side semi_bold_font text-uppercase {{ (Route::current()->uri() == 'about')?'primary-text-color':'text-muted' }}"
                href="{{ url('/about') }}" title="About US">About US</a>
        </li>
        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side semi_bold_font text-uppercase {{ (Route::current()->uri() == 'trustee')?'primary-text-color':'text-muted' }}"
                href="{{ url('/trustee') }}" title="TRUSTEES">TRUSTEES</a>
        </li>
        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side semi_bold_font text-uppercase {{ (Route::current()->uri() == 'committee')?'primary-text-color':'text-muted' }}"
                href="{{ url('/committee') }}" title="COMMITTEE">COMMITTEE</a>
        </li>
        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side semi_bold_font text-uppercase {{ (Route::current()->uri() == 'mou')?'primary-text-color':'text-muted' }}"
                href="{{ url('/mou') }}" title="MOU & COLLABORATION">MOU & COLLABORATION</a>
        </li>

        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side text-muted semi_bold_font text-uppercase {{ (Route::current()->uri() == 'events')?'primary-text-color':'text-muted' }}"
                href="{{ url('/events') }}" title="Events">Events</a>
        </li>
        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side text-muted semi_bold_font text-uppercase {{ (Route::current()->uri() == 'gallery')?'primary-text-color':'text-muted' }}"
                href="{{ url('/gallery') }}" title="PHOTO GALLERY">PHOTO GALLERY</a>
        </li>
        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side text-muted semi_bold_font text-uppercase {{ (Route::current()->uri() == 'view')?'primary-text-color':'text-muted' }}"
                href="{{ url('/view') }}" title="VIEWS & REPORTS">VIEWS & REPORTS</a>
        </li>
        <li class="navbar-side-item p-2">
            <a class="nav-link font-9 mixed-side text-muted semi_bold_font text-uppercase {{ (Route::current()->uri() == 'contact')?'primary-text-color':'text-muted' }}"
                href="{{ url('/contact') }}" title="Contact">Contact</a>
        </li>
    </ul>
</div>