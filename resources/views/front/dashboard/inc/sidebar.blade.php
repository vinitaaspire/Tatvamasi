<div class="col-xl-3 col-lg-4 col-md-5 p-md-0">
                    <div class="profile-box">
                        <div class="profile-menu position-relative">
                            <div class="profile-menu-img">
                            <img src="{{ Auth::user()->photo != null ? asset(Auth::user()->photo) : asset('front/assets/images/icons/profile.png') }}" class="img-fluid me-2" alt="Profile Image" title="Profile Image" />

                            </div>
                            <div class="profile-menu-img-cnt">
                                <p>{{ Auth::User()->name ?? ''}}</p>
                                <span>{{ Auth::User()->email ?? ''}}</span>
                            </div>
                        </div>
                        <div class="profile-navbar position-relative">
                            <div class="profile-navbar-menu">
                                <ul class="list-unstyled ps-0 mb-md-4">
                                    <li class="d-block align-items-center active">
                                        <a href="{{route('dashboard')}}" class="text-decoration-none d-flex align-items-center"
                                            role="button">
                                            <i class="las la-praying-hands"></i> <span class="ms-md-2">My Courses</span> </a>
                                    </li>
                                    <li class="d-block align-items-center">
                                        <a href="{{route('message')}}" class="text-decoration-none d-flex align-items-center"
                                            role="button">
                                            <i class="las la-sms"></i> <span class="ms-md-2">Messages</span> </a>
                                    </li>
                                    <li class="d-block align-items-center ">
                                        <a href="{{route('payment')}}"
                                            class="text-decoration-none d-flex align-items-center" role="button">
                                            <i class="las la-file-invoice"></i> <span class="ms-md-2">Payment
                                                History</span> </a>
                                    </li>
                                    <li class="d-block  align-items-center">
                                        <a href="{{route('profile')}}" class="text-decoration-none d-flex align-items-center"
                                            role="button">
                                            <i class="las la-user"></i> <span class="ms-md-2">Profile</span> </a>
                                    </li>
                                    <li class="d-block align-items-center">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class=" btn btn-danger d-flex align-items-center" >
                                                <i class="las la-sign-out-alt"></i><span class="ms-md-2">Logout</span>
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>