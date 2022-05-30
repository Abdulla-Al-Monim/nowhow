<!--  BEGIN SIDEBAR  -->
   
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <div class="shadow-bottom"></div>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="{{route('user.dashboard')}}"   class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Media Editor</span>
                            </div>
                            
                        </a>
                        
                    </li>
                    
                    <li class="menu">
                        <a href="#temp" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Template</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled @yield('user-temp-cat-show')" id="temp" data-parent="#accordionExample">
                            @if(Auth::User()->user_role_id == 1)
                            <li class="@yield('user-temp-cat-active')">

                                <a href="{{route('category.manage')}}"> Categories </a>
                            </li>
                            <li class="@yield('user-sub-temp-cat-active')">
                                <a href="{{route('user.sub.category.manage')}}"> Sub Categories </a>
                            </li>
                            <li class="@yield('user-temp-tag-active')">
                                <a href="{{route('user.tag.manage')}}"> Tags </a>
                            </li>  
                            @elseif(Auth::User()->user_role_id == 2) 
                                                       
                            <li class="@yield('user-temp-create-active')">
                                <a href="{{route('template.create')}}"> Add New Template </a>
                            </li>
                            <li class="@yield('user-temp-manage-active')">
                                <a href="{{route('template.manage')}}">Manage Template</a>
                            </li>
                            @endif
                            
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#book" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Book</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled @yield('user-book-cat-show')" id="book" data-parent="#accordionExample">
                            @if(Auth::User()->user_role_id == 1)
                            <li class="@yield('user-book-cat-active')">
                                <a href="{{route('book.category.manage')}}"> Categories </a>
                            </li>
                            <li class="@yield('user-sub-book-cat-active')">
                                <a href="{{route('user.book.sub.category.manage')}}"> Sub Categories </a>
                            </li>  
                            <li class="@yield('user-book-tag-active')">
                                <a href="{{route('user.book.tag.manage')}}">Tags</a>
                            </li>     
                            @elseif(Auth::User()->user_role_id == 2)                       
                            <li class="@yield('user-book-create-active')">
                                <a href="{{route('book.upload')}}"> Add New Book </a>
                            </li>
                            <li class="@yield('user-book-manage-active')">
                                <a href="{{route('book.manage')}}">Manage Book</a>
                            </li>
                            @endif
                            
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#audio" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Audio</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled @yield('user-audio-show')" id="audio" data-parent="#accordionExample">
                            @if(Auth::User()->user_role_id == 1)
                            <li class="@yield('user-audio-cat-active')">
                                <a href="{{route('user.audio.category.manage')}}"> Categories </a>
                            </li>
                            <li class="@yield('user-sub-audio-cat-active')">
                                <a href="{{route('user.audio.sub.category.manage')}}"> Sub Categories </a>
                            </li>  
                            <li class="@yield('user-audio-tag-active')">
                                <a href="{{route('user.audio.tag.manage')}}">Tags</a>
                            </li>   
                            @elseif(Auth::User()->user_role_id == 2)                         
                            <li class="@yield('user-audio-create-active')">
                                <a href="{{route('audio.create')}}"> Add New Audio </a>
                            </li>
                            <li class="@yield('user-temp-manage-active')">
                                <a href="{{route('audio.manage')}}">Manage Audio</a>
                            </li>
                            @endif
                            
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#video" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Video</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled @yield('user-video-show')" id="video" data-parent="#accordionExample">
                            @if(Auth::User()->user_role_id == 1)
                            <li class="@yield('user-video-cat-active')">
                                <a href="{{route('user.video.category.manage')}}"> Categories </a>
                            </li>
                            <li class="@yield('user-sub-video-cat-active')">
                                <a href="{{route('user.video.sub.category.manage')}}"> Sub Categories </a>
                            </li>  
                            <li class="@yield('user-video-tag-active')">
                                <a href="{{route('user.video.tag.manage')}}">Tags</a>
                            </li>
                            @elseif(Auth::User()->user_role_id == 2)                            
                            <li class="@yield('user-video-create-active')">
                                <a href="{{route('video.create')}}"> Add Video </a>
                            </li>
                            <li class="@yield('user-video-manage-active')">
                                <a href="{{route('video.manage')}}">Manage Video</a>
                            </li>
                            @endif
                            
                        </ul>
                    </li>
                    <li class="menu">
                        
                        
                         
                        <div class="card component_card_3_side side-card">
                            <div class="card-body text-center">
                                
                                <h5 class="card-user_name text-center">Your Next Step</h5>
                                <p class="card-user_occupation text-center" style="font-weight:600;"> Flexit  </p>
                                
                                <p class="card-text t"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p>
                                @if(Auth::User()->user_role_id ==  1)
                               <a href="https://flexflix.io/admin/dashboard" target="_blank" class="btn btn-danger">Flexflix</a>
                               @elseif(Auth::User()->user_role_id ==  2)
                               <a href="https://flexflix.io/user/dashboard" target="_blank" class="btn btn-danger">Flexflix</a>
                               @endif 
                            </div>
                        </div>
                        
                    </li>
                </ul>
                
            </nav>

        </div>
