@extends('layouts.app')

@section('content')
<div class="container-fluid content">
        <div class="row challenge-title-bg">
            <div class="container-fluid" id="challenge-title">
                <h1>Leaderboard</h1>
                <h4>List of our top users</h4>
            </div>
        </div>
        <div class="row content-row leaderboard">
            <!-- start of the sidenav -->
            <div class="col-sm-12 col-lg-3 default-side-nav">
                <div class="sticky">
                    <ul class="nav flex-column">
                        <h6>Filters</h6>
                        <li class="nav-item">
                            <a class="nav-link active" href="#challenge-row"><i class="fas fa-list"></i>All
                                Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-stream"></i>Latest Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-hand-peace"></i>Easy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-stream"></i>intermediate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-brain"></i>Difficult</a>
                        </li>

                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="solutions.html"><i class="fas fa-clipboard-list"></i>Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mentors.html"><i class="fas fa-users"></i>Mentors</a>
                        </li>

                        <hr>
                        <li class="nav-item">
                            <a class="nav-link active" href="#!"><i class="fas fa-user-edit"></i>My Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"><i class="fas fa-tasks"></i>My Solutions</a>
                        </li>
                        <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#!">Disabled</a>
            </li> -->
                    </ul>
                </div>
            </div>
            <!-- end of the sidenav -->

            <!-- start of the challenges -->
            <div class="col-sm-12 col-lg-6 top-users">
                <h4 class="my-3">Top Users</h4>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo1.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-gold.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo1.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-silver.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo2.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo3.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo4.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo5.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo6.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo8.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo1.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo2.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="secondary-user.html" class="leaderboard-user">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 leaderboard-user-sub-1">
                                <div class="user">
                                    <div class="user-img-con"><img src="assets/images/photo3.png" alt="" class="user-img"></div>
                                    <div class="user-detail-con">
                                        <div class="username">Username</div>
                                        <div class="user-submit-date">Submit-date</div>
                                    </div>
                                    <div class="user-grade-con"><img class="grade-img" src="assets/images/trophy-bronze.svg" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 leaderboard-user-sub-2">
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>9</span>
                                    <p>Results</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>12</span>
                                    <p>Reviews</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>90</span>
                                    <p>Followers</p>
                                </div>
                                <div class="leaderboard-user-sub-2-sub">
                                    <span>4</span>
                                    <p>Mentors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-3 sticky recently-promoted-inline">
                <h4>Recently Promoted</h4>
                <div class="recently-promoted-inline-sub">
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name username"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-silver.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-gold.svg" alt=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-bronze.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-silver.svg" alt=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-silver.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-gold.svg" alt=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-bronze.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-silver.svg" alt=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-silver.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-gold.svg" alt=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-bronze.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-silver.svg" alt=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-silver.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-gold.svg" alt=""></div>
                        </div>
                    </div>
                    <hr>
                    <div class="promotion-inline">
                        <div class="person">
                            <div class="img"><img src="assets/images/photo1.png" alt=""></div>
                            <div class="name"><a href="secondary-user.html">Username</a></div>
                            <div class="pts"><p>400pts</p></div>
                        </div>
                        <div class="level-to">
                            <div class="level-to-img-1"><img src="assets/images/trophy-bronze.svg" alt=""></div>
                            <div class="level-to-img-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                            <div class="level-to-img-3"><img src="assets/images/trophy-silver.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection