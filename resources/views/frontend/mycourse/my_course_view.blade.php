@include('frontend.mycourse.body.header')
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<section class="header-menu-area">
    <div class="header-menu-content bg-dark">
        <div class="container-fluid">
            <div class="main-menu-content d-flex align-items-center">
                <div class="logo-box logo--box">
                    <div class="theme-picker d-flex align-items-center">
                        <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                            <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </button>
                        <button class="theme-picker-btn light-mode-btn" title="Light mode">
                            <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </button>
                    </div>
                </div><!-- end logo-box -->
                <div class="pl-4 course-dashboard-header-title">
                    <a href="course-details.html" class="text-white fs-15">{{ $course->course->course_name }}</a>
                </div><!-- end course-dashboard-header-title -->
                <div class="ml-auto menu-wrapper">
                    <div class="mr-3 theme-picker d-flex align-items-center">
                        <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                            <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </button>
                        <button class="theme-picker-btn light-mode-btn" title="Light mode">
                            <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </button>
                    </div>
                    <div class="nav-right-button d-flex align-items-center">
                        <a href="#" class="mr-2 text-white btn theme-btn theme-btn-sm theme-btn-transparent lh-26" data-toggle="modal" data-target="#ratingModal"><i class="mr-1 la la-star"></i> leave a rating</a>
                        <a href="#" class="mr-2 text-white btn theme-btn theme-btn-sm theme-btn-transparent lh-26" data-toggle="modal" data-target="#shareModal"><i class="mr-1 la la-share"></i> share</a>
                        <div class="generic-action-wrap generic--action-wrap">
                            <div class="dropdown">
                                <a class="action-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Favorite this course</a>
                                    <a class="dropdown-item" href="#">Archive this course</a>
                                    <a class="dropdown-item" href="#">Gift this course</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end nav-right-button -->
                </div><!-- end menu-wrapper -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</section><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START COURSE-DASHBOARD
======================================-->
<section class="course-dashboard">
    <div class="course-dashboard-wrap">
        <div class="course-dashboard-container d-flex">
            <div class="course-dashboard-column">
                <div class="lecture-viewer-container">
                    <div class="lecture-video-item">
                        <video controls crossorigin playsinline id="player">
                            <!-- Video files -->
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4"/>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4"/>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4"/>

                            <!-- Caption files -->
                            <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default/>
                            <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"/>

                            <!-- Fallback for browsers that don't support the <video> element -->
                            <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                        </video>
                    </div>
                    <div class="lecture-viewer-text-wrap">
                        <div class="lecture-viewer-text-content custom-scrollbar-styled">
                            <div class="lecture-viewer-text-body">
                                <h2 class="pb-4 fs-24 font-weight-semi-bold">Download your Footage for your Quick Start</h2>
                                <div class="lecture-viewer-content-detail">
                                    <ul class="pb-4 generic-list-item">
                                        <li>Hi</li>
                                        <li>Welcome to Motion Graphics in After Effects. </li>
                                        <li>In the next lectures you will start creating your first animation and animate imported footage.</li>
                                        <li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes,</li>

                                        <li><strong class="font-weight-semi-bold">Download your footage Now, Click on the Link Below.</strong></li>
                                    </ul>
                                    <div class="btn-box">
                                        <h3 class="pb-3 fs-18 font-weight-semi-bold">Resources for this lecture</h3>
                                        <a href="#" class="btn theme-btn theme-btn-transparent"><i class="mr-1 la la-file-zip-o"></i>Quick-start.zip</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end lecture-viewer-container -->
                <div class="lecture-video-detail">
                    <div class="p-4 lecture-tab-body bg-gray">
                        <ul class="nav nav-tabs generic-tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
                                    <i class="la la-search"></i>
                                </a>
                            </li>
                            <li class="nav-item mobile-menu-nav-item">
                                <a class="nav-link" id="course-content-tab" data-toggle="tab" href="#course-content" role="tab" aria-controls="course-content" aria-selected="false">
                                    Course Content
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="question-and-ans-tab" data-toggle="tab" href="#question-and-ans" role="tab" aria-controls="question-and-ans" aria-selected="false">
                                    Question & Ans
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#announcements" role="tab" aria-controls="announcements" aria-selected="false">
                                    Announcements
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="lecture-video-detail-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                                <div class="search-course-wrap pt-40px">
                                    <form action="#" class="pb-5">
                                        <div class="input-group">
                                            <input class="pl-3 form-control form--control form--control-gray" type="text" name="search" placeholder="Search course content">
                                            <div class="input-group-append">
                                                <button class="btn theme-btn"><span class="la la-search"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="text-center search-results-message">
                                        <h3 class="pb-1 fs-24 font-weight-semi-bold">Start a new search</h3>
                                        <p>To find captions, lectures or resources</p>
                                    </div>
                                </div><!-- end search-course-wrap -->
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="course-content" role="tabpanel" aria-labelledby="course-content-tab">
                                <div class="pt-4 mobile-course-menu">
                                    <div class="accordion generic-accordion generic--accordion" id="mobileCourseAccordionCourseExample">
                                        <div class="card">
                                            <div class="card-header" id="mobileCourseHeadingOne">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mobileCourseCollapseOne" aria-expanded="true" aria-controls="mobileCourseCollapseOne">
                                                    <i class="la la-angle-down"></i>
                                                    <i class="la la-angle-up"></i>
                                                    <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                                                    <span class="course-duration">
                                                        <span>1/5</span>
                                                        <span>21min</span>
                                                    </span>
                                                </button>
                                            </div><!-- end card-header -->
                                            <div id="mobileCourseCollapseOne" class="collapse show" aria-labelledby="mobileCourseHeadingOne" data-parent="#mobileCourseAccordionCourseExample">
                                                <div class="p-0 card-body">
                                                    <ul class="curriculum-sidebar-list">
                                                        <li class="course-item-link active">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                        <li class="course-item-link">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox2" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox2"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                        <li class="course-item-link active-resource">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox3" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox3"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">3. Download your Footage for your Quick Start</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                        <div class="generic-action-wrap">
                                                                            <div class="dropdown">
                                                                                <a class="mt-1 btn theme-btn theme-btn-sm theme-btn-transparent fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="mr-1 la la-folder-open"></i> Resources<i class="ml-1 la la-angle-down"></i>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                                        Section-Footage.zip
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- end generic-action-wrap -->
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                        <li class="course-item-link">
                                                            <div class="course-item-content-wrap">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox4" required>
                                                                    <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox4"></label>
                                                                </div><!-- end custom-control -->
                                                                <div class="course-item-content">
                                                                    <h4 class="fs-15">4. Jump in and Animate your Character</h4>
                                                                    <div class="courser-item-meta-wrap">
                                                                        <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                    </div>
                                                                </div><!-- end course-item-content -->
                                                            </div><!-- end course-item-content-wrap -->
                                                        </li>
                                                    </ul>
                                                </div><!-- end card-body -->
                                            </div><!-- end collapse -->
                                        </div><!-- end card -->





                                    </div><!-- end accordion-->
                                </div><!-- end mobile-course-menu -->
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="lecture-overview-wrap">
                                    <div class="lecture-overview-item">
                                        <h3 class="pb-2 fs-24 font-weight-semi-bold">About this course</h3>
                                        <p>{{ $course->course->course_title }}</p>
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">By the numbers</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item">
                                                <ul class="generic-list-item">
                                                    <li><span>Skill level:</span>{{ $course->course->label }}</li>
                                                    <li><span>Students:</span>83950</li>
                                                    <li><span>Languages:</span>English</li>
                                                    <li><span>Captions:</span>Yes</li>
                                                </ul>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item">
                                                <ul class="generic-list-item">
                                                    <li><span>Resources:</span>{{ $course->course->resources }}</li>
                                                    <li><span>Video length:</span>{{ $course->course->duration }} total hours</li>
                                                    <li><span>Certificate:</span>{{ $course->course->certificate }}</li>
                                                </ul>
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">Certificates</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                                <p class="pb-3">Get Aduca certificate by completing entire course</p>
                                                <a href="#" class="btn theme-btn theme-btn-transparent">Aduca Certificate</a>
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">Features</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item">
                                                <p>Available on <a href="#" class="text-color hover-underline">IOS</a> and <a href="#" class="text-color hover-underline">Android</a></p>
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">Description</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item lecture-description">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">From the Author of the Best Selling After Effects CC 2020 Complete Course</h3>
                                                <p>{{ $course->course->description }}</p>



                                                <div class="collapse" id="collapseMore">
                                                    <p>Aliquid odit perspiciatis quidem rerum? Architecto aspernatur beatae consectetur illo labore molestias natus, provident quas tempore ut vitae voluptate! Dicta doloremque dolores doloribus dolorum ea enim est ex harum mollitia natus necessitatibus, non officiis repellat rerum sed sint vel voluptatem. Aspernatur enim error esse facere numquam quidem reiciendis sit soluta suscipit voluptates.</p>
                                                    <ul class="generic-list-item generic-list-item-bullet">
                                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                        <li>Cumque ea esse inventore odit voluptate.</li>
                                                        <li>Phasellus posuere urna et faucibus</li>
                                                        <li>Mauris faucibus ligula vestibulum </li>
                                                        <li>Phasellus posuere urna </li>
                                                    </ul>
                                                    <p>impedit in magnam mollitia nulla placeat porro, possimus quae quaerat quasi quidem recusandae reprehenderit saepe, suscipit voluptatibus. Beatae, fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ea esse inventore odit voluptate. Accusantium asperiores at doloremque ex impedit ipsa itaque. Consequuntur dignissimos itaque mollitia tenetur voluptatem. Aut beatae blanditiis consequuntur corporis delectus deserunt dolores eos et fugit hic illo, impedit in magnam mollitia nulla placeat porro, possimus quae quaerat quasi quidem recusandae reprehenderit saepe, suscipit voluptatibus. Beatae, fugiat?</p>
                                                    <p>See you in the course.</p>
                                                    <p>Alex</p>

                                                    <h3 class="pb-2 fs-16 font-weight-semi-bold">What you’ll learn</h3>

                                                    @foreach ($course->course->coursegoals as $item)

                                                    <ul class="generic-list-item generic-list-item-bullet">
                                                        <li>{{$item->goal_name}}</li>
                                                    </ul>
                                                    @endforeach



                                                    
                                                </div>


                                                <div class="show-more-btn-box">
                                                    <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseMore" role="button" aria-expanded="false" aria-controls="collapseMore">
                                                        <span class="collapse-btn-hide">Read more<i class="ml-1 la la-angle-down fs-14"></i></span>
                                                        <span class="collapse-btn-show">Read less<i class="ml-1 la la-angle-up fs-14"></i></span>
                                                    </a>
                                                </div><!-- end show-more-btn-box -->
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                    <div class="section-block"></div>
                                    <div class="lecture-overview-item">
                                        <div class="lecture-overview-stats-wrap d-flex ">
                                            <div class="lecture-overview-stats-item">
                                                <h3 class="pb-2 fs-16 font-weight-semi-bold">Instructor</h3>
                                            </div><!-- end lecture-overview-stats-item -->
                                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">


{{-- image is not show here try to fix but can't --}}




                                                <div class="media media-card align-items-center">
                                                    <a href="teacher-detail.html" class="rounded-full media-img d-block avatar-md">
                                                        <img src="{{ asset($course->course->instructor->photo) }}" alt="Instructor avatar" class="rounded-full">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="teacher-detail.html">{{ $course->course->instructor->name }}</a></h5>
                                                        <span class="pt-2 d-block lh-18">{{ $course->course->instructor->email }}</span>
                                                    </div>
                                                </div>


                                                <div class="pt-4 lecture-owner-profile">
                                                    <ul class="social-icons social-icons-styled">
                                                        <li><a href="{{ $course->course->instructor->facebook }}" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                                                        <li><a href="{{ $course->course->instructor->twitter }}" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                                                        <li><a href="{{ $course->course->instructor->instagram }}" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                                                        <li><a href="{{ $course->course->instructor->linkedin }}" class="linkedin-bg"><i class="la la-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="pt-4 lecture-owner-decription">
                                                    <p>{{ $course->course->instructor->shortdescription }}</p>
                                                    <p>{{ $course->course->instructor->longdescription }}</p>
                                                </div>
                                            </div><!-- end lecture-overview-stats-item -->
                                        </div><!-- end lecture-overview-stats-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                </div><!-- end lecture-overview-wrap -->
                            </div><!-- end tab-pane -->





                            <div class="tab-pane fade" id="question-and-ans" role="tabpanel" aria-labelledby="question-and-ans-tab">
                                <div class="lecture-overview-wrap lecture-quest-wrap">
                                    <div class="new-question-wrap">
                                        <button class="btn theme-btn theme-btn-transparent back-to-question-btn"><i class="mr-1 la la-reply"></i>Back to all questions</button>
                                        <div class="new-question-body pt-40px">
                                            <h3 class="fs-20 font-weight-semi-bold">My question relates to</h3>
                                            <form action="#" class="pt-4">
                                                <div class="custom-control-wrap">
                                                    <div class="pl-0 mb-3 custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="courseContentRadio" name="radio-stacked" required>
                                                        <label class="custom-control-label custom--control-label custom--control-label-boxed" for="courseContentRadio">
                                                            <span class="text-black font-weight-semi-bold d-block">Course content</span>
                                                            <span class="d-block fs-14 lh-20">This might include comments, questions, tips, or projects to share</span>
                                                        </label>
                                                    </div>
                                                    <div class="pl-0 mb-3 custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="somethingElseRadio" name="radio-stacked" required>
                                                        <label class="custom-control-label custom--control-label custom--control-label-boxed" for="somethingElseRadio">
                                                            <span class="text-black font-weight-semi-bold d-block">Something else</span>
                                                            <span class="d-block fs-14 lh-20">This might include questions about certificates, audio and video troubleshooting, or download issues</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="text-center btn-box">
                                                    <button class="btn theme-btn w-100">Continue <i class="ml-1 la la-arrow-right icon"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- end new-question-wrap -->
                                    <div class="replay-question-wrap">
                                        <button class="btn theme-btn theme-btn-transparent back-to-question-btn"><i class="mr-1 la la-reply"></i>Back to all questions</button>
                                        <div class="replay-question-body pt-30px">
                                            <div class="question-list-item">
                                                <div class="py-4 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img class="rounded-full" src="images/small-avatar-1.jpg" alt="User image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="question-meta-content">
                                                                <h5 class="pb-1 fs-16">I still did't get H264 after installing Quicktime. Please what do I do</h5>
                                                                <p class="meta-tags fs-13">
                                                                    <a href="#">Alex Smith</a>
                                                                    <a href="#">Lecture 20</a>
                                                                    <span>3 hours ago</span>
                                                                </p>
                                                                <p class="fs-15 text-gray">
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                                </p>
                                                            </div><!-- end question-meta-content -->
                                                            <div class="question-upvote-action">
                                                                <div class="pb-2 number-upvotes d-flex align-items-center generic-action-wrap">
                                                                    <span>1</span>
                                                                    <button type="button"><i class="la la-arrow-up"></i></button>
                                                                    <div class="dropdown">
                                                                        <button class="ml-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-ellipsis-v"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal"><i class="mr-1 la la-flag"></i> Report abuse</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end question-upvote-action -->
                                                        </div>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="py-3 question-replay-separator-wrap d-flex align-items-center justify-content-between">
                                                    <h4 class="fs-16 font-weight-semi-bold">1 Replay</h4>
                                                    <button class="btn swapping-btn text-gray font-weight-medium" data-text-swap="Following replies" data-text-original="Follow replies">Follow replies</button>
                                                </div><!-- end question-replay-separator-wrap -->
                                                <div class="section-block"></div>
                                                <div class="question-answer-wrap">
                                                    <div class="py-4 mb-3 media media-card border-bottom border-bottom-gray">
                                                        <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                            <img src="images/small-avatar-2.jpg" alt="Instructor avatar" class="rounded-full">
                                                        </div><!-- end media-img -->
                                                        <div class="media-body">
                                                            <h5 class="fs-16"><a href="#">David Luise</a></h5>
                                                            <span class="fs-14">3 years ago</span>
                                                            <p class="pt-1 fs-15">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                    <div class="question-replay-input-wrap pt-20px">
                                                        <div class="question-replay-body">
                                                            <h3 class="fs-16 font-weight-semi-bold">Add Replay</h3>
                                                            <form method="post" class="pt-4">
                                                                <div class="replay-action-bar">
                                                                    <div class="btn-group">
                                                                        <button class="btn" type="button" data-toggle="modal" data-target="#insertLinkModal" title="Insert link"><i class="la la-link"></i></button>
                                                                        <button class="btn" type="button" data-toggle="modal" data-target="#uploadPhotoModal" title="Upload an image"><i class="la la-photo"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea class="pl-3 form-control form--control" name="message" rows="4" placeholder="Write your response..."></textarea>
                                                                </div>
                                                                <div class="btn-box">
                                                                    <button class="btn theme-btn" type="submit">Add an answer <i class="ml-1 la la-arrow-right icon"></i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- end question-replay-input-wrap -->
                                                </div><!-- end question-answer-wrap -->
                                            </div><!-- end question-list-item -->
                                        </div><!-- end replay-question-body -->
                                    </div><!-- end replay-question-wrap -->
                                    <div class="question-overview-result-wrap">
                                        <div class="lecture-overview-item">
                                            <form method="post">
                                                <div class="mb-3 input-group">
                                                    <input class="pl-3 form-control form--control form--control-gray" type="text" name="search" placeholder="Search all course questions">
                                                    <div class="input-group-append">
                                                        <button class="btn theme-btn"><i class="la la-search search-icon"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="question-overview-filter-wrap d-flex align-items-center">
                                                <div class="question-overview-filter-item">
                                                    <div class="select-container w-100">
                                                        <select class="select-container-select">
                                                            <option value="0">All lectures</option>
                                                            <option value="1">Current lecture</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                                <div class="question-overview-filter-item">
                                                    <div class="select-container w-100">
                                                        <select class="select-container-select">
                                                            <option value="0">Sort by most recent</option>
                                                            <option value="1">Sort by most upvoted</option>
                                                            <option value="2">Sort by recommended</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end question-overview-filter-item -->
                                                <div class="question-overview-filter-item">
                                                    <div class="generic-action-wrap">
                                                        <div class="dropdown">
                                                            <a class="btn theme-btn theme-btn-transparent w-100" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Filter questions
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <div class="dropdown-item">
                                                                    <div class="custom-control custom-checkbox fs-15">
                                                                        <input type="checkbox" class="custom-control-input" id="questionsCheckbox" required>
                                                                        <label class="custom-control-label custom--control-label" for="questionsCheckbox">
                                                                            Questions I'm following
                                                                        </label>
                                                                    </div><!-- end custom-control -->
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="custom-control custom-checkbox fs-15">
                                                                        <input type="checkbox" class="custom-control-input" id="questionsCheckbox2" required>
                                                                        <label class="custom-control-label custom--control-label" for="questionsCheckbox2">
                                                                            Questions I asked
                                                                        </label>
                                                                    </div><!-- end custom-control -->
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div class="custom-control custom-checkbox fs-15">
                                                                        <input type="checkbox" class="custom-control-input" id="questionsCheckbox3" required>
                                                                        <label class="custom-control-label custom--control-label" for="questionsCheckbox3">
                                                                           Questions without responses
                                                                        </label>
                                                                    </div><!-- end custom-control -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end generic-action-wrap -->
                                                </div><!-- end question-overview-filter-item -->
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="lecture-overview-item">
                                            <div class="question-overview-result-header d-flex align-items-center justify-content-between">
                                                <h3 class="fs-17 font-weight-semi-bold">30 questions in this course</h3>
                                                <button class="btn theme-btn theme-btn-sm theme-btn-transparent ask-new-question-btn">Ask a new question</button>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="mt-0 lecture-overview-item">
                                            <div class="question-list-item">
                                                <div class="px-3 py-4 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img class="rounded-full" src="images/small-avatar-1.jpg" alt="User image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="question-meta-content">
                                                                <a href="javascript:void(0)" class="d-block">
                                                                    <h5 class="pb-1 fs-16">I still did't get H264 after installing Quicktime. Please what do I do</h5>
                                                                    <p class="text-truncate fs-15 text-gray">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                                                    </p>
                                                                </a>
                                                            </div><!-- end question-meta-content -->
                                                            <div class="question-upvote-action">
                                                                <div class="pb-2 number-upvotes d-flex align-items-center">
                                                                    <span>1</span>
                                                                    <button type="button"><i class="la la-arrow-up"></i></button>
                                                                </div>
                                                                <div class="number-upvotes question-response d-flex align-items-center">
                                                                    <span>1</span>
                                                                    <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                </div>
                                                            </div><!-- end question-upvote-action -->
                                                        </div>
                                                        <p class="pt-1 meta-tags fs-13">
                                                            <a href="#">Alex Smith</a>
                                                            <a href="#">Lecture 20</a>
                                                            <span>3 hours ago</span>
                                                        </p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="px-3 py-4 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img class="rounded-full" src="images/small-avatar-2.jpg" alt="User image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="question-meta-content">
                                                                <a href="javascript:void(0)" class="d-block">
                                                                    <h5 class="pb-1 fs-16">When i selected rectangle and placed it its create mask ? I cant solve this</h5>
                                                                    <p class="text-truncate fs-15 text-gray">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                                                    </p>
                                                                </a>
                                                            </div><!-- end question-meta-content -->
                                                            <div class="question-upvote-action">
                                                                <div class="pb-2 number-upvotes d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button"><i class="la la-arrow-up"></i></button>
                                                                </div>
                                                                <div class="number-upvotes question-response d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                </div>
                                                            </div><!-- end question-upvote-action -->
                                                        </div>
                                                        <p class="pt-1 meta-tags fs-13">
                                                            <a href="#">Alex Smith</a>
                                                            <a href="#">Lecture 20</a>
                                                            <span>3 hours ago</span>
                                                        </p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="px-3 py-4 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img class="rounded-full" src="images/small-avatar-3.jpg" alt="User image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="question-meta-content">
                                                                <a href="javascript:void(0)" class="d-block">
                                                                    <h5 class="pb-1 fs-16">Practice Activity</h5>
                                                                    <p class="text-truncate fs-15 text-gray">
                                                                        https://youtu.be/fzyAWYKh2pgg
                                                                    </p>
                                                                </a>
                                                            </div><!-- end question-meta-content -->
                                                            <div class="question-upvote-action">
                                                                <div class="pb-2 number-upvotes d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button"><i class="la la-arrow-up"></i></button>
                                                                </div>
                                                                <div class="number-upvotes question-response d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                </div>
                                                            </div><!-- end question-upvote-action -->
                                                        </div>
                                                        <p class="pt-1 meta-tags fs-13">
                                                            <a href="#">Alex Smith</a>
                                                            <a href="#">Lecture 20</a>
                                                            <span>3 hours ago</span>
                                                        </p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="px-3 py-4 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img class="rounded-full" src="images/small-avatar-4.jpg" alt="User image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="question-meta-content">
                                                                <a href="javascript:void(0)" class="d-block">
                                                                    <h5 class="pb-1 fs-16">The walking man composition.</h5>
                                                                    <p class="text-truncate fs-15 text-gray">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                                                    </p>
                                                                </a>
                                                            </div><!-- end question-meta-content -->
                                                            <div class="question-upvote-action">
                                                                <div class="pb-2 number-upvotes d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button"><i class="la la-arrow-up"></i></button>
                                                                </div>
                                                                <div class="number-upvotes question-response d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                </div>
                                                            </div><!-- end question-upvote-action -->
                                                        </div>
                                                        <p class="pt-1 meta-tags fs-13">
                                                            <a href="#">Alex Smith</a>
                                                            <a href="#">Lecture 20</a>
                                                            <span>3 hours ago</span>
                                                        </p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="px-3 py-4 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img class="rounded-full" src="images/small-avatar-5.jpg" alt="User image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="question-meta-content">
                                                                <a href="javascript:void(0)" class="d-block">
                                                                    <h5 class="pb-1 fs-16">Record options</h5>
                                                                    <p class="text-truncate fs-15 text-gray">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                                                    </p>
                                                                </a>
                                                            </div><!-- end question-meta-content -->
                                                            <div class="question-upvote-action">
                                                                <div class="pb-2 number-upvotes d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button"><i class="la la-arrow-up"></i></button>
                                                                </div>
                                                                <div class="number-upvotes question-response d-flex align-items-center">
                                                                    <span>0</span>
                                                                    <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                </div>
                                                            </div><!-- end question-upvote-action -->
                                                        </div>
                                                        <p class="pt-1 meta-tags fs-13">
                                                            <a href="#">Alex Smith</a>
                                                            <a href="#">Lecture 20</a>
                                                            <span>3 hours ago</span>
                                                        </p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                            </div>
                                            <div class="text-center question-btn-box pt-35px">
                                                <button class="btn theme-btn theme-btn-transparent w-100" type="button">See More</button>
                                            </div>
                                        </div><!-- end lecture-overview-item -->
                                    </div>
                                </div>
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                                <div class="lecture-overview-wrap lecture-announcement-wrap">
                                    <div class="lecture-overview-item">
                                        <div class="media media-card align-items-center">
                                            <a href="teacher-detail.html" class="rounded-full media-img d-block avatar-md">
                                                <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="pb-1"><a href="teacher-detail.html">Alex Smith</a></h5>
                                                <div class="announcement-meta fs-15">
                                                    <span>Posted an announcement</span>
                                                    <span> · 3 years ago ·</span>
                                                    <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-4 lecture-owner-decription">
                                            <h3 class="pb-3 fs-19 font-weight-semi-bold">Important Q&A support</h3>
                                            <p>Happy 2019 to everyone, thank you for being a student and all of your support.</p>
                                            <p><strong>Great job on enrolling and your current course progress.  I encourage you keep in pursuit of your dreams :)</strong></p>
                                            <p>The whole lot. In my course After Effects Complete Course packed with all Techniques and Methods (No Tricks and gimmicks).</p>
                                            <p class="font-italic"><strong>Unfortunately this will result in delayed responses by me in the Q&A section and to direct messages.  This is only for the next week  and once back I will be back to 100% .</strong></p>
                                            <p>I will continue to do my best to respond to as many questions as possible but only one person, regularly I spend 4-5 hours daily on this and with over 440000 students as you can image that its a lot of work.</p>
                                            <p class="font-italic">Thank you once again for your understanding and for all of the wonderful students who I have had an opportunity to communicate with regularly and all of your encouragement.</p>
                                            <p>Have an awesome day</p>
                                            <p>Alex</p>
                                        </div>
                                        <div class="pt-4 lecture-announcement-comment-wrap">
                                            <div class="media media-card align-items-center">
                                                <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                    <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                                                </div><!-- end media-img -->
                                                <div class="media-body">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input class="pl-3 form-control form--control form--control-gray" type="text" name="search" placeholder="Enter your comment">
                                                            <div class="input-group-append">
                                                                <button class="btn theme-btn" type="button"><i class="la la-arrow-right"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                            <div class="comments pt-40px">
                                                <div class="pb-3 mb-3 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img src="images/small-avatar-2.jpg" alt="Instructor avatar" class="rounded-full">
                                                    </div><!-- end media-img -->
                                                    <div class="media-body">
                                                        <div class="announcement-meta fs-15 lh-20">
                                                            <a href="#" class="text-color">Tony Olsson</a>
                                                            <span> · 3 years ago ·</span>
                                                            <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                        </div>
                                                        <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="pb-3 mb-3 media media-card border-bottom border-bottom-gray">
                                                    <div class="flex-shrink-0 rounded-full media-img avatar-sm">
                                                        <img src="images/small-avatar-3.jpg" alt="Instructor avatar" class="rounded-full">
                                                    </div><!-- end media-img -->
                                                    <div class="media-body">
                                                        <div class="announcement-meta fs-15 lh-20">
                                                            <a href="#" class="text-color">Eduard-Dan</a>
                                                            <span> · 2 years ago ·</span>
                                                            <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                        </div>
                                                        <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                            </div><!-- end comments -->
                                        </div><!-- end lecture-announcement-comment-wrap -->
                                    </div><!-- end lecture-overview-item -->
                                </div>
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end lecture-video-detail-body -->
                </div><!-- end lecture-video-detail -->






                <div class="py-4 cta-area bg-gray">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="cta-content-wrap">
                                    <h3 class="fs-18 font-weight-semi-bold">Top companies choose <a href="for-business.html" class="text-color hover-underline">Aduca for Business</a> to build in-demand career skills.</h3>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="text-right client-logo-wrap">
                                    <a href="#" class="pr-3 client-logo-item client--logo-item-2"><img src="{{ asset('frontend/images/sponsor-img.png') }}" alt="brand image"></a>
                                    <a href="#" class="pr-3 client-logo-item client--logo-item-2"><img src="{{ asset('frontend/images/sponsor-img2.png') }}" alt="brand image"></a>
                                    <a href="#" class="pr-3 client-logo-item client--logo-item-2"><img src="{{ asset('frontend/images/sponsor-img3.png') }}" alt="brand image"></a>
                                </div><!-- end client-logo-wrap -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                </div><!-- end cta-area -->
                <div class="footer-area pt-50px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <a href="index.html">
                                        <img src="{{ asset('frontend/images/logo.png') }}" alt="footer logo" class="footer__logo">
                                    </a>
                                    <ul class="pt-4 generic-list-item">
                                        <li><a href="tel:+1631237884">+163 123 7884</a></li>
                                        <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
                                        <li>Melbourne, Australia, 105 South Park Avenue</li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="pb-3 fs-20 font-weight-semi-bold">Company</h3>
                                    <ul class="generic-list-item">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Become a Teacher</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="pb-3 fs-20 font-weight-semi-bold">Courses</h3>
                                    <ul class="generic-list-item">
                                        <li><a href="#">Web Development</a></li>
                                        <li><a href="#">Hacking</a></li>
                                        <li><a href="#">PHP Learning</a></li>
                                        <li><a href="#">Spoken English</a></li>
                                        <li><a href="#">Self-Driving Car</a></li>
                                        <li><a href="#">Garbage Collectors</a></li>
                                    </ul>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                            <div class="col-lg-3 responsive-column-half">
                                <div class="footer-item">
                                    <h3 class="pb-3 fs-20 font-weight-semi-bold">Download App</h3>
                                    <div class="mobile-app">
                                        <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                                        <a href="#" class="mb-2 d-block hover-s"><img src="images/appstore.png" alt="App store" class="img-fluid"></a>
                                        <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store" class="img-fluid"></a>
                                    </div>
                                </div><!-- end footer-item -->
                            </div><!-- end col-lg-3 -->
                        </div><!-- end row -->
                    </div><!-- end container-fluid -->
                    <div class="section-block"></div>
                    <div class="py-4 copyright-content">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="flex-wrap d-flex align-items-center justify-content-end">
                                        <ul class="flex-wrap generic-list-item d-flex align-items-center fs-14">
                                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                            <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                                        </ul>
                                        <div class="select-container select-container-sm">
                                            <select class="select-container-select">
                                                <option value="1">English</option>
                                                <option value="2">Deutsch</option>
                                                <option value="3">Español</option>
                                                <option value="4">Français</option>
                                                <option value="5">Bahasa Indonesia</option>
                                                <option value="6">Bangla</option>
                                                <option value="7">日本語</option>
                                                <option value="8">한국어</option>
                                                <option value="9">Nederlands</option>
                                                <option value="10">Polski</option>
                                                <option value="11">Português</option>
                                                <option value="12">Română</option>
                                                <option value="13">Русский</option>
                                                <option value="14">ภาษาไทย</option>
                                                <option value="15">Türkçe</option>
                                                <option value="16">中文(简体)</option>
                                                <option value="17">中文(繁體)</option>
                                                <option value="17">Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                            </div><!-- end row -->
                        </div><!-- end container-fluid -->
                    </div><!-- end copyright-content -->
                </div><!-- end footer-area -->
            </div><!-- end course-dashboard-column -->
            <div class="course-dashboard-sidebar-column">
                <button class="sidebar-open" type="button"><i class="la la-angle-left"></i> Course content</button>
                <div class="course-dashboard-sidebar-wrap custom-scrollbar-styled">
                    <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                        <h3 class="fs-18 font-weight-semi-bold">Course content</h3>
                        <button class="sidebar-close" type="button"><i class="la la-times"></i></button>
                    </div><!-- end course-dashboard-side-heading -->
                    <div class="course-dashboard-side-content">
                        <div class="accordion generic-accordion generic--accordion" id="accordionCourseExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-header -->
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCourseExample">
                                    <div class="p-0 card-body">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link active">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox2" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox2"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link active-resource">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox3" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox3"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">3. Download your Footage for your Quick Start</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                            <div class="generic-action-wrap">
                                                                <div class="dropdown">
                                                                    <a class="mt-1 btn theme-btn theme-btn-sm theme-btn-transparent fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mr-1 la la-folder-open"></i> Resources<i class="ml-1 la la-angle-down"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                            Section-Footage.zip
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end generic-action-wrap -->
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox4" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox4"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">4. Jump in and Animate your Character</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15">Section 2: Jump Start Into Motion Graphics</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-header -->
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionCourseExample">
                                    <div class="p-0 card-body">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox5" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox5"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">5. Let's Have Fun - Seriously!</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox6" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox6"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">6. A simple concept to get ahead</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link active-resource">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox7" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox7"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">7. Download your Footage for your Quick Start</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                            <div class="generic-action-wrap">
                                                                <div class="dropdown">
                                                                    <a class="mt-1 btn theme-btn theme-btn-sm theme-btn-transparent fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mr-1 la la-folder-open"></i> Resources<i class="ml-1 la la-angle-down"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                            Section-Footage.zip
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end generic-action-wrap -->
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox8" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox8"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">8. Jump in and Animate your Character</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15">Section 3: Graphics from within After Effects</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-heder -->
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCourseExample">
                                    <div class="p-0 card-body">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox9" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox9"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">9. Let's Have Fun - Seriously!</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox10" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox10"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">10. A simple concept to get ahead</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link active-resource">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox11" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox11"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">11. Download your Footage for your Quick Start</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                            <div class="generic-action-wrap">
                                                                <div class="dropdown">
                                                                    <a class="mt-1 btn theme-btn theme-btn-sm theme-btn-transparent fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="mr-1 la la-folder-open"></i> Resources<i class="ml-1 la la-angle-down"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                            Section-Footage.zip
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end generic-action-wrap -->
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox12" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox12"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">12. Jump in and Animate your Character</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15">Section 4: Bonus Lecture</span>
                                        <span class="course-duration">
                                            <span>1/5</span>
                                            <span>21min</span>
                                        </span>
                                    </button>
                                </div><!-- end card-heder -->
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionCourseExample">
                                    <div class="p-0 card-body">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox13" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox13"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">13. Bonus Courses - Learn more for less</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                            <li class="course-item-link">
                                                <div class="course-item-content-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="courseCheckbox14" required>
                                                        <label class="custom-control-label custom--control-label" for="courseCheckbox14"></label>
                                                    </div><!-- end custom-control -->
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">14. Conclusion</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                        </div>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                        </div><!-- end accordion-->
                    </div><!-- end course-dashboard-side-content -->
                </div><!-- end course-dashboard-sidebar-wrap -->
            </div><!-- end course-dashboard-sidebar-column -->
        </div><!-- end course-dashboard-container -->
    </div><!-- end course-dashboard-wrap -->
</section><!-- end course-dashboard -->
<!--======================================
        END COURSE-DASHBOARD
======================================-->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="ratingModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="ratingModalTitle">
                        How would you rate this course?
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="py-5 text-center modal-body">
                <div class="mt-5 leave-rating">
                    <input type="radio" name='rate' id="star5"/>
                    <label for="star5" class="fs-45"></label>
                    <input type="radio" name='rate' id="star4"/>
                    <label for="star4" class="fs-45"></label>
                    <input type="radio" name='rate' id="star3"/>
                    <label for="star3" class="fs-45"></label>
                    <input type="radio" name='rate' id="star2"/>
                    <label for="star2" class="fs-45"></label>
                    <input type="radio" name='rate' id="star1"/>
                    <label for="star1" class="fs-45"></label>
                    <div class="pb-4 rating-result-text fs-20"></div>
                </div><!-- end leave-rating -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <h5 class="modal-title fs-19 font-weight-semi-bold" id="shareModalTitle">Share this course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="copy-to-clipboard">
                    <span class="success-message">Copied!</span>
                    <div class="input-group">
                        <input type="text" class="pl-3 form-control form--control copy-input" value="https://www.aduca.com/share/101WxMB0oac1hVQQ==/">
                        <div class="input-group-append">
                            <button class="shadow-none btn theme-btn theme-btn-sm copy-btn"><i class="mr-1 la la-copy"></i> Copy</button>
                        </div>
                    </div>
                </div><!-- end copy-to-clipboard -->
            </div><!-- end modal-body -->
            <div class="modal-footer justify-content-center border-top-gray">
                <ul class="social-icons social-icons-styled">
                    <li><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                    <li><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                    <li><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                </ul>
            </div><!-- end modal-footer -->
        </div><!-- end modal-content-->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="reportModalTitle">Report Abuse</h5>
                    <p class="pt-1 fs-14 lh-24">Flagged content is reviewed by Aduca staff to determine whether it violates Terms of Service or Community Guidelines. If you have a question or technical issue, please contact our
                        <a href="contact.html" class="text-color hover-underline">Support team here</a>.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form method="post">
                    <div class="input-box">
                        <label class="label-text">Select Report Type</label>
                        <div class="form-group">
                            <div class="w-auto select-container">
                                <select class="select-container-select">
                                    <option value>-- Select One --</option>
                                    <option value="1">Inappropriate Course Content</option>
                                    <option value="2">Inappropriate Behavior</option>
                                    <option value="3">Aduca Policy Violation</option>
                                    <option value="4">Spammy Content</option>
                                    <option value="5">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Write Message</label>
                        <div class="form-group">
                            <textarea class="pl-3 form-control form--control" name="message" placeholder="Provide additional details here..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="pt-2 text-right btn-box">
                        <button type="button" class="mr-3 btn font-weight-medium" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="ml-1 la la-arrow-right icon"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="insertLinkModal" tabindex="-1" role="dialog" aria-labelledby="insertLinkModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="insertLinkModalTitle">Insert Link</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form action="#">
                    <div class="input-box">
                        <label class="label-text">URL</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Url">
                            <i class="la la-link input-icon"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Text</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="Text">
                            <i class="la la-pencil input-icon"></i>
                        </div>
                    </div>
                    <div class="pt-2 text-right btn-box">
                        <button type="button" class="mr-3 btn font-weight-medium" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Insert <i class="ml-1 la la-arrow-right icon"></i></button>
                    </div>
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="uploadPhotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="uploadPhotoModalTitle">Upload an Image</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <div class="file-upload-wrap">
                    <input type="file" name="files[]" class="multi file-upload-input" multiple>
                    <span class="file-upload-text"><i class="mr-2 la la-upload"></i>Drop files here or click to upload</span>
                </div><!-- file-upload-wrap -->
                <div class="pt-2 text-right btn-box">
                    <button type="button" class="mr-3 btn font-weight-medium" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Submit <i class="ml-1 la la-arrow-right icon"></i></button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->


@include('frontend.mycourse.body.footer')

</body>
</html>
