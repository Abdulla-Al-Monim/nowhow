    <!-- ===============// header section start here \\================= -->
    <header class="header">
        <div class="container-fluid">
            <div class="header__content">
                <div class="header__logo">
                    <a href="{{route('home')}}">
                        <img src="assets/images/logo/logo.gif" alt="nowhow">
                    </a>
                </div>

                <form action="#" class="header__search">
                    <input type="text" placeholder="Search items, collections, and creators">
                    <button type="button"><i class="icofont-search-2"></i></button>
                    <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
                        </svg></button>
                </form>
                <div class="header__menu ms-auto">
                    <ul class="header__nav mb-0">
                        <li class="header__nav-item">
                            <a class="header__nav-link active" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Videos</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="index.html">Home Page One</a></li>
                                <li><a class="drop-down-item" href="index-2.html">Home Page Two</a></li>
                                <li><a class="drop-down-item active" href="index-3.html">Home Page Three</a></li>
                                <li><a class="drop-down-item" href="index-4.html">Home Page Four</a></li>
                                <li><a class="drop-down-item" href="index-5.html">Home Page Five</a></li>
                            </ul>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Audios</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="create-variant.html">Create Variation</a></li>
                                <li><a class="drop-down-item" href="create-nft.html">Create NFT</a></li>
                                <li><a class="drop-down-item" href="item-details.html"> NFT Details</a></li>
                                <li><a class="drop-down-item" href="explore.html">Explore 1</a></li>
                                <li><a class="drop-down-item" href="explore-2.html">Explore 2</a></li>
                                <li><a class="drop-down-item" href="auction.html">Auction Page</a></li>
                                <li><a class="drop-down-item" href="category-single.html">Category single</a></li>
                                <li><a class="drop-down-item" href="collections.html"> NFT Collection</a></li>
                                <li><a class="drop-down-item" href="collection-single.html"> Collection Single</a></li>
                                <li><a class="drop-down-item" href="wallet.html"> Wallet</a></li>

                            </ul>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Books</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="all-authors.html">All Author</a></li>
                                <li><a class="drop-down-item" href="all-authors-2.html">All Author 2</a></li>
                                <li><a class="drop-down-item" href="author.html">Author Single</a></li>
                                <li><a class="drop-down-item" href="rank.html">Author Rank </a></li>
                            </ul>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Templates</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="blog.html">Blog Page One</a></li>
                                <li><a class="drop-down-item" href="blog-2.html">Blog Page Two</a></li>
                                <li><a class="drop-down-item" href="blog-3.html">Blog Page Three</a></li>
                                <li><a class="drop-down-item" href="blog-single.html">Blog Single </a></li>
                                <li><a class="drop-down-item" href="blog-single-2.html">Blog Single Two </a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>

                <div class="header__actions">
                    <div class="header__action header__action--search">
                        <button class="header__action-btn" type="button"><i class="icofont-search-1"></i></button>
                    </div>
                    @if( Route::has('login'))
                                @auth
                    <div class="header__action header__action--profile">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="-100,10">
                                <span><i class="icofont-user"></i></span> <span class="d-none d-md-inline">{{Auth::User()->name}}</span>
                            </a>
                            @if(Auth::User()->user_role_id == 1)
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('user.details')}}"><span class="me-1"><i
                                                class="icofont-options"></i></span>
                                        Edit Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}"><span class="me-1"><i
                                                class="icofont-lightning-ray"></i></span>
                                        Dashboard</a></li>
                                
                                <li><a class="dropdown-item" href="signin.html"><span class="me-1"><i
                                                class="icofont-login"></i></span> Sign
                                        In</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"> Sign
                                        Out <span class="ms-1"><i class="icofont-logout"></i></span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                            </ul>
                            @elseif(Auth::User()->user_role_id == 2)
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('user.details')}}"><span class="me-1"><i
                                                class="icofont-options"></i></span>
                                        Edit Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('user.dashboard')}}"><span class="me-1"><i
                                                class="icofont-lightning-ray"></i></span>
                                        Dashboard</a></li>
                                
                                <li><a class="dropdown-item" href="signin.html"><span class="me-1"><i
                                                class="icofont-login"></i></span> Sign
                                        In</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"> Sign
                                        Out <span class="ms-1"><i class="icofont-logout"></i></span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                    @else
                    <div class="wallet-btn">
                        <a href="{{route('user.login')}}"><span><i class="icofont-login" data-blast="color"></i></span> <span
                                class="d-none d-md-inline">Login</span> </a>
                    </div>
                    <div class="wallet-btn">
                        <a href="{{route('user.register')}}"><span><i class="icofont-space-shuttle" data-blast="color"></i></span> <span
                                class="d-none d-md-inline">Regiter</span> </a>
                    </div>
                    @endif
                    @endif

                </div>

                <button class="menu-trigger header__btn" id="menu05">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <!-- ===============//header section end here \\================= -->