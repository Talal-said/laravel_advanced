<!--**********************************
        Nav header start
    ***********************************-->
<div class="nav-header" >
    <a href="#" class="brand-logo">
        <img class="logo-abbr" src="{{asset('asset/images/logo.png')}}" alt="not found">
        <img class="logo-compact" src="{{asset('asset/images/logo-text.png')}}" alt="not found">
        <img class="brand-title" src="{{asset('asset/images/logo-text.png')}}" alt="not found">
    </a>

    <div class="nav-control">
        <div class="hamburger is-active" onclick="changeHamburger()">
            <span class="line" onclick="changeHamburger()"></span>
            <span class="line" onclick="changeHamburger()"></span>
            <span class="line" onclick="changeHamburger()"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header" id="header">
    <div class="header-content" id="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="fas fa-search"></i>
                                </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="البحث" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled">
                                <li class="media dropdown-item">
                                    <span class="primary" style="margin-left: 10px;"><i class="fal fa-shopping-cart"></i></span>
                                    <div class="media-body">
                                        <a href="#">
                                            <p><strong>طلال</strong> قام بشراء سيارة من متجرك</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 م</span>
                                </li>
                                <a class="all-notification" href="#">رؤية كل الإشعارات<i
                                        class="ti-arrow-right"></i>
                                </a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" style="text-align: right;">
                            <a href="{{ url('admin') }}" class="dropdown-item">
                                <i class="fal fa-user"></i>
                                <span class="mr-2">الصفحة الشخصية</span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fal fa-envelope-open"></i>
                                <span class="mr-2">صندوق الوارد</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fal fa-key" style="margin-left: 0.5rem;"></i>
                                    تسجيل الخروج
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->
