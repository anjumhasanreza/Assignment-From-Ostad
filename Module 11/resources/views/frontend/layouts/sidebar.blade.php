<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ asset('/') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="" height="45">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ asset('/') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="" height="45">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ asset('/') }}" class="nav-link" data-key="t-ecommerce"> Dashboard </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Product</span></li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProducts">
                        <i class="ri-pages-line"></i> <span data-key="tpProducts">Products</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarproducts" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarproducts" data-key="t-groups">
                                    Products
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarproducts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('product.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('product.create') }}" class="nav-link" data-key="t-add">
                                                Add Product </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarGroups" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarGroups" data-key="t-groups">
                                    Groups
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarGroups">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('group.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('group.create') }}" class="nav-link" data-key="t-add"> Add
                                                Group </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a href="#sidebarCategouries" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCategouries" data-key="t-categouries">
                                    Categouries
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCategouries">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('category.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('category.create') }}" class="nav-link" data-key="t-add">
                                                Add Category </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a href="#sidebarBrands" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarBrands" data-key="t-brands">
                                    Brands
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarBrands">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('brand.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('brand.create') }}" class="nav-link" data-key="t-add"> Add
                                                Brand </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarStyles" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarStyles" data-key="t-styles">
                                    Styles
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarStyles">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('style.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('style.create') }}" class="nav-link" data-key="t-add"> Add
                                                Style </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarSizes" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSizes" data-key="t-sizes">
                                    Sizes
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSizes">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('size.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('size.create') }}" class="nav-link" data-key="t-add"> Add
                                                Size </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarColors" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarColors" data-key="t-colors">
                                    Colors
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarColors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('color.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('color.create') }}" class="nav-link" data-key="t-add"> Add
                                                Color </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarUOMs" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarUOMs" data-key="t-uoms">
                                    UOMs
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarUOMs">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('uom.index') }}" class="nav-link" data-key="t-list">
                                                List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('uom.create') }}" class="nav-link" data-key="t-add"> Add
                                                UOM </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- End Products -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>