<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->name }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoaa1"
            aria-expanded="true" aria-controls="collapseTwoaa1">
            <i class="fas fa-fw fa-user"></i>
            <span>Slider</span>
        </a>
        <div id="collapseTwoaa1" class="collapse" aria-labelledby="headingTwoaa1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Slider Menu</h6>
                <a class="collapse-item" href="{{ route('adminSlider.index') }}">All Slider</a>
                <a class="collapse-item" href="{{ route('adminSlider.create') }}">Add Slider</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>Category Menu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category</h6>
                <a class="collapse-item" href="{{ route('list.category') }}">All Categoyr</a>
                <a class="collapse-item" href="{{ route('list.create') }}">Add Category</a>
            </div>
        </div>
    </li>

    {{-- for Product--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoa"
            aria-expanded="true" aria-controls="collapseTwoa">
            <i class="fas fa-fw fa-user"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwoa" class="collapse" aria-labelledby="headingTwoa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Menu</h6>
                <a class="collapse-item" href="{{ route('adminproduct.index') }}">All Product</a>
                <a class="collapse-item" href="{{ route('adminproduct.create') }}">Add Product</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoaa"
            aria-expanded="true" aria-controls="collapseTwoaa">
            <i class="fas fa-fw fa-user"></i>
            <span>Blog Category</span>
        </a>
        <div id="collapseTwoaa" class="collapse" aria-labelledby="headingTwoaa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Blog Category Menu</h6>
                <a class="collapse-item" href="{{ route('adminBlogcategory.index') }}">All Blog Category</a>
                <a class="collapse-item" href="{{ route('adminBlogcategory.create') }}">Add BlogCategory</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12a"
            aria-expanded="true" aria-controls="collapseTwoa">
            <i class="fas fa-fw fa-user"></i>
            <span>Blog</span>
        </a>
        <div id="collapseTwo12a" class="collapse" aria-labelledby="headingTwo12a" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Blog Menu</h6>
                <a class="collapse-item" href="{{ route('adminBlog.index') }}">All Blog</a>
                <a class="collapse-item" href="{{ route('adminBlog.create') }}">Add Blog</a>
            </div>
        </div>
    </li>
    {{-- for Contact--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('list.contact') }}">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Contact</span></a>
    </li>
     {{--  Distribution --}}
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaar"
            aria-expanded="true" aria-controls="collapseTwoqaar">
            <i class="fas fa-fw fa-list"></i>
            <span>Distribution</span>
        </a>
        <div id="collapseTwoqaar" class="collapse" aria-labelledby="headingTwoqa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Distribution Menu</h6>
                <a class="collapse-item" href="{{ route('admindistributter.index') }}">All Distribution</a>
                <a class="collapse-item" href="{{ route('admindistributter.create') }}">Add Distribution</a>
            </div>
        </div>
    </li>
    {{-- admindistributter --}}
    {{-- for Companies--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoai"
            aria-expanded="true" aria-controls="collapseTwoai">
            <i class="fas fa-fw fa-user"></i>
            <span>Our Companies</span>
        </a>
        <div id="collapseTwoai" class="collapse" aria-labelledby="headingTwoai" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Companies Menu</h6>
                <a class="collapse-item" href="{{ route('admincompany.index') }}">All Companies</a>
                <a class="collapse-item" href="{{ route('admincompany.create') }}">Add Companies</a>
            </div>
        </div>
    </li>
    {{-- Pages --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaaq"
            aria-expanded="true" aria-controls="collapseTwoqaaq">
            <i class="fas fa-fw fa-pager"></i>
            <span>All Pages</span>
        </a>
        <div id="collapseTwoqaaq" class="collapse" aria-labelledby="headingTwoqaaq" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Page Menu</h6>
                <a class="collapse-item" href="{{ route('about.index')}}">About Page</a>
                <a class="collapse-item" href="{{ route('house.index') }}">Home page</a>
            </div>
        </div>
    </li>
    {{-- Teams --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaaq2"
            aria-expanded="true" aria-controls="collapseTwoqaaq2">
            <i class="fas fa-fw fa-pager"></i>
            <span>Teams</span>
        </a>
        <div id="collapseTwoqaaq2" class="collapse" aria-labelledby="headingTwoqaaq2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Teams</h6>
                <a class="collapse-item" href="{{ route('adminTeams.index')}}">All Teams</a>
                <a class="collapse-item" href="{{ route('adminTeams.create') }}">Add Teams</a>
            </div>
        </div>
    </li>
    {{-- Association --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaaq21"
            aria-expanded="true" aria-controls="collapseTwoqaaq21">
            <i class="fas fa-fw fa-pager"></i>
            <span>Association</span>
        </a>
        <div id="collapseTwoqaaq21" class="collapse" aria-labelledby="headingTwoqaaq21" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Association</h6>
                <a class="collapse-item" href="{{ route('adminAssociation.index')}}">All Association</a>
                <a class="collapse-item" href="{{ route('adminAssociation.create') }}">Add Association</a>
            </div>
        </div>
    </li>
    {{-- Setting --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoq"
            aria-expanded="true" aria-controls="collapseTwoq">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
        <div id="collapseTwoq" class="collapse" aria-labelledby="headingTwoq" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Setting Menu</h6>
                <a class="collapse-item" href="{{ route('setting.index') }}">Site Setting</a>
            </div>
        </div>
    </li>
</ul>