@extends('layouts.app')

@section('content')
    <!-- start of the challenge-info-->
    <div class="container-custom content padding">
        <div class="container-fluid">
            <h1>Challenge 1</h1>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <div class="challenge-info-img">
                    <img src="../assets/images/alienware.jpg" alt="">
                </div>
                <div class="challenge-info">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="chip">Responsive</div>
                            <div class="chip">API</div>
                            <div class="chip">Front-end</div>
                            <div class="chip">Back-end</div>
                            <div class="chip">Full-stack</div>
                            <div class="chip">Design System</div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="skill css">
                            <i class="fab fa-css3-alt"></i>
                            <p>CSS3</p>
                        </div>
                        <div class="skill html">
                            <i class="fab fa-html5"></i>
                            <P>HTML5</P>
                        </div>
                        <div class="skill js">
                            <i class="fab fa-js"></i>
                            <p>JavaScript</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 provided-assets">
                            <h3>Provided assets</h3>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur .</li>
                                <li>Lorem ipsum dolor sit amet, consectetur .</li>
                                <li>Lorem ipsum dolor sit amet, consectetur elit.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur elit.</li>
                            </ul>
                            <div class="resources-btn">
                                <button>Resources</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <div class="container-fluid">
                    <div class="brief">
                        <h3>Brief</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro nesciunt quaerat ad molestias
                            aliquam odit totam ea pariatur voluptate esse? Excepturi consequuntur pariatur obcaecati
                            asperiores provident rerum ab ut iure.</p>
                        <p>Lorit totam ea pariatur voluptate esse? Excepturi consequuntur pariatur obcaecati asperiores
                            provident rerum ab ut iure.</p>
                        <ul>
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul>
                    </div>
                </div>
                <div class="container-fluid start-challenge">
                    <button class="start-challenge-btn">Start and download challenge</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of the challenge-info-->
@endsection