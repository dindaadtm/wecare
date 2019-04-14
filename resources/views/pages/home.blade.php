@extends('layouts.app')

@section('content')

<div class="container-fluid main">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2500">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active background a"></div>
            <div class="carousel-item background b"></div>
            <div class="carousel-item background c"></div>
        </div>
    </div>

    <div class="covertext">
        <div class="col-lg-10" style="float:none; margin:0 auto;">
            <h1 class="title">We Care</h1>
        </div>
        <div class="form-group col-sm-6" style="float:none; margin:0 auto;">
            <input type="text" class="form-control form-rounded" id="search" name="search" placeholder="search...">
        </div>
        <div class="col-xs-12 explore">
            <a href="#"><button type="button" class="btn btn-outline-light">Write a Post</button></a>
        </div>
    </div>

</div>
<div class="container">
    <div class="py-4">
        <div class="row">
            <div class="col-sm">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/bg.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/6891.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
