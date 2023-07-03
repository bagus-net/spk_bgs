<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('home')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/mgm-light.png') }}" alt="" height="50">
            </span>
        </a>

        <a href="{{url('home')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/mgm.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/mgm-dard.png') }}" alt="" height="50">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Menu')</li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('home')}}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end"></span>
                        <span>@lang('translation.Dashboard')</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>@lang('Users Management')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ route('users.index') }}>@lang('Users')</a></li>
                        <li><a href={{ route('roles.index') }}>@lang('Roles')</a></li>
                        <li><a href="tables-responsive3">@lang('Access')</a></li>
                           @can('menu-permission')
            
           
                        <li><a href={{ route('permissions.index') }}>@lang('Permissions')</a></li> @endcan
                    </ul>
                </li> --}}

                 {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-blogger-alt  "></i>
                        <span>@lang('Blog')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ route('blog-article-category.index') }}>@lang('Article Category')</a></li>
                        <li><a href={{ route('blog-article.index') }}>@lang('Article')</a></li>
                        {{-- <li><a href="sync">@lang('Sync Vend')</a></li>
                        <li><a href="sync">@lang('Sync Email Vend')</a></li> --
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-blogger-alt  "></i>
                        <span>@lang('Kelas')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ route('kelasonlinecategory.index') }}>@lang('Category Kelas Online')</a></li>
                        <li><a href={{ route('kelasonline.index') }}>@lang('Kelas Online Note')</a></li>
                        <li><a href={{ route('kelaseksklusifcategory.index') }}>@lang('Category Kelas Eksklusif')</a></li>
                        <li><a href={{ route('kelaseksklusif.index') }}>@lang('Kelas Eksklusif Note')</a></li>
                        {{-- <li><a href="sync">@lang('Sync Vend')</a></li>
                        <li><a href="sync">@lang('Sync Email Vend')</a></li> --
                    </ul>
                </li> --}}

               {{-- <li>
                    <a href="{{url('fpdf')}}">
                        <i class="uil-home-alt"></i>
                        <span>@lang('Fpdf')</span>
                    </a>
                </li> --}}

  

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-square"></i>
                        <span>@lang('Members')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ route('members.index') }}>@lang('Member')</a></li>
                        <li><a href={{ route('memberorders.index') }}>@lang('Member Order')</a></li>
                        <li><a href={{ route('memberpoints.index') }}>@lang('Member Point History')</a></li>
                        
                    </ul>
                </li> --}}
            {{-- SIDEBAR SPK --}}
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-grid-alt  "></i>
                    <span>@lang('Sistem Pendukung Keputusan Pemilihan Komputer')</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href={{ url('/alternatif') }}>@lang('Data Alternatif')</a></li>
                    <li><a href={{ url('/kriteria')  }}>@lang('Data Kriteria')</a></li>
                    <li><a href={{ url('/hasilwp')  }}>@lang('Perhitungan WP')</a></li>
                    <li><a href={{ url('/hasil')  }}>@lang('Perhitungan Topsis')</a></li>
                    <li><a href={{ url('/hasildua')  }}>@lang('Hasil Rekomendasi')</a></li>
                    {{-- <li><a href={{ url('/kriteria')  }}>@lang('Kriteria')</a></li> --}}
                    {{-- <li><a href={{ route('bobot.list') }}>@lang('Bobot')</a></li> --}}
                    {{-- <li><a href={{ route('users.list') }}>@lang('Users')</a></li>                     --}}
                    
                    {{-- <li><a href="sync">@lang('Sync Vend')</a></li>
                    <li><a href="sync">@lang('Sync Email Vend')</a></li> --}}
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-user-circle  "></i>
                    <span>@lang('Users')</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href={{ url('/user') }}>@lang('Data User')</a></li>

                    {{-- <li><a href={{ url('/kriteria')  }}>@lang('Kriteria')</a></li> --}}
                    {{-- <li><a href={{ route('bobot.list') }}>@lang('Bobot')</a></li> --}}
                    {{-- <li><a href={{ route('users.list') }}>@lang('Users')</a></li>                     --}}
                    
                    {{-- <li><a href="sync">@lang('Sync Vend')</a></li>
                    <li><a href="sync">@lang('Sync Email Vend')</a></li> --}}
                </ul>
            </li>


                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-blogger-alt  "></i>
                        <span>@lang('Koperasi')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ route('koperasicategorybarang.list') }}>@lang('Category Barang')</a></li>
                        <li><a href={{ route('koperasibarang.list') }}>@lang('Barang')</a></li>
                        <li><a href={{ route('koperasimember.list') }}>@lang('Member')</a></li>
                        <li><a href={{ route('koperasiprovinsi.list') }}>@lang('provinsi')</a></li>
                        <li><a href={{ route('koperasikota.list') }}>@lang('kota')</a></li>
                        
                        
                        {{-- <li><a href="sync">@lang('Sync Vend')</a></li>
                        <li><a href="sync">@lang('Sync Email Vend')</a></li> --
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-box"></i>
                        <span>@lang('Product')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true"> --}}
                        {{-- <li><a href={{ route('product-kinds.index') }}>@lang('Product Kinds')</a></li>
                        <li><a href={{ route('product-variants.index') }}>@lang('Product Variants')</a></li>
                        <li><a href={{ route('product-categorys.index') }}>@lang('Product Categorys')</a></li>
                         --}}
                        {{-- <li><a href={{ url('admin/product-collections') }}>@lang('Product Collections')</a></li>
                        <li><a href={{ url('admin/product-types') }}>@lang('Product Types')</a></li>
                        <li><a href={{ url('admin/product-forms') }}>@lang('Product Forms')</a></li>
                        <li><a href={{ url('admin/product-packages') }}>@lang('Product Packages')</a></li>
                        <li><a href={{ url('admin/products') }}>@lang('Products')</a></li> --}}
                        {{-- <li><a href="sync">@lang('Sync Vend')</a></li>
                        <li><a href="sync">@lang('Sync Email Vend')</a></li> --}}
                    {{-- </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>@lang('Store')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        {{-- <li><a href="#">@lang('Cart')</a></li> --}}
                        {{-- <li><a href={{ url('admin/orders') }}>@lang('Order History')</a></li>
                        <li><a href={{ url('admin/discount-product') }}>@lang('Discount Product')</a></li>
                        <li><a href={{ url('admin/discount-cluster') }}>@lang('Discount Promo')</a></li> --}}
                        {{-- <li><a href={{ url('admin/discount') }}>@lang('Discount')</a></li> 
                        <li><a href={{ url('admin/flashsale') }}>@lang('Flash Sale')</a></li>
                        <li><a href={{ url('admin/freegift') }}>@lang('Set Free Gift')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-sync"></i>
                        <span>@lang('translation.Syncs')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="sync">@lang('Sync Vend Post Sales')</a></li>
                        <li><a href="/vend-gettransaction">@lang('Vend Get Trans')</a></li>
                        <li><a href="sync">@lang('Sync Vend')</a></li>
                        <li><a href="sync">@lang('Sync Email Vend')</a></li>
                    </ul>
                </li> --}}


                {{-- <li>
                    <a href="{{url('index')}}">
                        <i class="uil-home-alt"></i>
                        <span>@lang('Subscribe Discount')</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('index')}}">
                        <i class="uil-users-alt "></i>
                        <span>@lang('Visitors')</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('index')}}">
                        <i class="uil-edit"></i>
                        <span>@lang('EDM LOGS')</span>
                    </a>
                </li>


             

                <li>
                    <a href="{{url('sliders')}}">
                        <i class="uil-picture "></i>
                        <span>@lang('Sliders')</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('index')}}">
                        <i class="uil-home-alt"></i>
                        <span>@lang('Point History')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-diamond"></i>
                        <span>@lang('Redeemable')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{url('admin/voucher')}}>@lang('Voucher')</a></li>
                        <li><a href={{url('admin/coupon')}}>@lang('Coupon')</a></li>
                        <li><a href={{url('admin/merchandise-product')}}>@lang('Merchandise')</a></li>
                       
                    </ul>
                </li> --}}

        
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>@lang('translation.Layouts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">@lang('translation.Vertical')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-dark-sidebar">@lang('translation.Dark_Sidebar')</a></li>
                                <li><a href="layouts-compact-sidebar">@lang('translation.Compact_Sidebar')</a></li>
                                <li><a href="layouts-icon-sidebar">@lang('translation.Icon_Sidebar')</a></li>
                                <li><a href="layouts-boxed">@lang('translation.Boxed_Width')</a></li>
                                <li><a href="layouts-preloader">@lang('translation.Preloader')</a></li>
                                <li><a href="layouts-colored-sidebar">@lang('translation.Colored_Sidebar')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">@lang('translation.Horizontal')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal">@lang('translation.Horizontal')</a></li>
                                <li><a href="layouts-hori-topbar-dark">@lang('translation.Dark_Topbar')</a></li>
                                <li><a href="layouts-hori-boxed-width">@lang('translation.Boxed_Width')</a></li>
                                <li><a href="layouts-hori-preloader">@lang('translation.Preloader')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

                {{-- <li class="menu-title">@lang('Setting')</li>
                <li>
                    <a href="{{url('admin/websetup')}}">
                        <i class="uil-analytics"></i>
                        <span>@lang('Setup Web')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-database"></i>
                        <span>@lang('Sync Database')</span> --}}
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="true">
                        <li><a href={{ route('sync-product.index') }}>@lang('Sync Products')</a></li>
                        <li><a href="#">@lang('Sync Orders')</a></li>
                       
                        {{-- <li><a href="sync">@lang('Sync Vend')</a></li>
                        <li><a href="sync">@lang('Sync Email Vend')</a></li> 
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="calendar" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>@lang('translation.Calendar')</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="chat" class=" waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span class="badge rounded-pill bg-warning float-end">New</span>
                        <span>@lang('translation.Chat')</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>@lang('translation.Ecommerce')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products">@lang('translation.Products')</a></li>
                        <li><a href="ecommerce-product-detail">@lang('translation.Product_Detail')</a></li>
                        <li><a href="ecommerce-orders">@lang('translation.Orders')</a></li>
                        <li><a href="ecommerce-customers">@lang('translation.Customers')</a></li>
                        <li><a href="ecommerce-cart">@lang('translation.Cart')</a></li>
                        <li><a href="ecommerce-checkout">@lang('translation.Checkout')</a></li>
                        <li><a href="ecommerce-shops">@lang('translation.Shops')</a></li>
                        <li><a href="ecommerce-add-product">@lang('translation.Add_Product')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-envelope"></i>
                        <span>@lang('translation.Email')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox">@lang('translation.Inbox')</a></li>
                        <li><a href="email-read">@lang('translation.Read_Email')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-invoice"></i>
                        <span>@lang('translation.Invoices')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list">@lang('translation.Invoice_List')</a></li>
                        <li><a href="invoices-detail">@lang('translation.Invoice_Detail')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-book-alt"></i>
                        <span>@lang('translation.Contacts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid">@lang('translation.User_Grid')</a></li>
                        <li><a href="contacts-list">@lang('translation.User_List')</a></li>
                        <li><a href="contacts-profile">@lang('translation.Profile')</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="menu-title">@lang('translation.Pages')</li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login">@lang('translation.Login')</a></li>
                        <li><a href="auth-register">@lang('translation.Register')</a></li>
                        <li><a href="auth-recoverpw">@lang('translation.Recover_Password')</a></li>
                        <li><a href="auth-lock-screen">@lang('translation.Lock_Screen')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file-alt"></i>
                        <span>@lang('translation.Utility')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter">@lang('translation.Starter_Page')</a></li>
                        <li><a href="pages-maintenance">@lang('translation.Maintenance')</a></li>
                        <li><a href="pages-comingsoon">@lang('translation.Coming_Soon')</a></li>
                        <li><a href="pages-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-faqs">@lang('translation.FAQs')</a></li>
                        <li><a href="pages-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500">@lang('translation.Error_500')</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="menu-title">@lang('translation.Components')</li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-flask"></i>
                        <span>@lang('translation.UI_Elements')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts">@lang('translation.Alerts')</a></li>
                        <li><a href="ui-buttons">@lang('translation.Buttons')</a></li>
                        <li><a href="ui-cards">@lang('translation.Cards')</a></li>
                        <li><a href="ui-carousel">@lang('translation.Carousel')</a></li>
                        <li><a href="ui-dropdowns">@lang('translation.Dropdowns')</a></li>
                        <li><a href="ui-grid">@lang('translation.Grid')</a></li>
                        <li><a href="ui-images">@lang('translation.Images')</a></li>
                        <li><a href="ui-lightbox">@lang('translation.Lightbox')</a></li>
                        <li><a href="ui-modals">@lang('translation.Modals')</a></li>
                        <li><a href="ui-rangeslider">@lang('translation.Range_Slider')</a></li>
                        <li><a href="ui-session-timeout">@lang('translation.Session_Timeout')</a></li>
                        <li><a href="ui-progressbars">@lang('translation.Progress_Bars')</a></li>
                        <li><a href="ui-sweet-alert">@lang('translation.Sweet_Alert')</a></li>
                        <li><a href="ui-tabs-accordions">@lang('translation.Tabs_Accordions')</a></li>
                        <li><a href="ui-typography">@lang('translation.Typography')</a></li>
                        <li><a href="ui-video">@lang('translation.Video')</a></li>
                        <li><a href="ui-general">@lang('translation.General')</a></li>
                        <li><a href="ui-colors">@lang('translation.Colors')</a></li>
                        <li><a href="ui-rating">@lang('translation.Rating')</a></li>
                        <li><a href="ui-notifications">@lang('translation.Notifications')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="uil-shutter-alt"></i>
                        <span class="badge rounded-pill bg-info float-end">6</span>
                        <span>@lang('translation.Forms')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements">@lang('translation.Basic_Elements')</a></li>
                        <li><a href="form-validation">@lang('translation.Validation')</a></li>
                        <li><a href="form-advanced">@lang('translation.Advanced_Plugins')</a></li>
                        <li><a href="form-editors">@lang('translation.Editors')</a></li>
                        <li><a href="form-uploads">@lang('translation.File_Upload')</a></li>
                        <li><a href="form-xeditable">@lang('translation.Xeditable')</a></li>
                        <li><a href="form-repeater">@lang('translation.Repeater')</a></li>
                        <li><a href="form-wizard">@lang('translation.Wizard')</a></li>
                        <li><a href="form-mask">@lang('translation.Mask')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-list-ul"></i>
                        <span>@lang('translation.Tables')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic">@lang('translation.Bootstrap_Basic')</a></li>
                        <li><a href="tables-datatable">@lang('translation.Datatables')</a></li>
                        <li><a href="tables-responsive">@lang('translation.Responsive')</a></li>
                        <li><a href="tables-editable">@lang('translation.Editable')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-chart"></i>
                        <span>@lang('translation.Charts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex">@lang('translation.Apex')</a></li>
                        <li><a href="charts-chartjs">@lang('translation.Chartjs')</a></li>
                        <li><a href="charts-flot">@lang('translation.Flot')</a></li>
                        <li><a href="charts-knob">@lang('translation.Jquery_Knob')</a></li>
                        <li><a href="charts-sparkline">@lang('translation.Sparkline')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-streering"></i>
                        <span>@lang('translation.Icons')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-unicons">@lang('translation.Unicons')</a></li>
                        <li><a href="icons-boxicons">@lang('translation.Boxicons')</a></li>
                        <li><a href="icons-materialdesign">@lang('translation.Material_Design')</a></li>
                        <li><a href="icons-dripicons">@lang('translation.Dripicons')</a></li>
                        <li><a href="icons-fontawesome">@lang('translation.Font_Awesome')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-location-point"></i>
                        <span>@lang('translation.Maps')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google">@lang('translation.Google')</a></li>
                        <li><a href="maps-vector">@lang('translation.Vector')</a></li>
                        <li><a href="maps-leaflet">@lang('translation.Leaflet')</a></li>
                    </ul>
                </li> --}}

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-share-alt"></i>
                        <span>@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">@lang('translation.Level_1.1')</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">@lang('translation.Level_2.1')</a></li>
                                <li><a href="javascript: void(0);">@lang('translation.Level_2.2')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->