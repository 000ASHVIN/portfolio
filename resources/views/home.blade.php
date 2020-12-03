@extends('layouts.master')

@section('css')
<style>
   .hello-design {
        background: #69dbbd;
        border-radius: 10px 8px 8px 0px;
        padding: 3px 23px 5px;
        color: white;
        font-weight: 700;
    }
    .profile-image img {
        border-radius: 50%;
        border: 15px solid #d9d9d9;
    }
    .image-border {
        display: inline-block;
        border-radius: 50%;
        border: 15px solid #f0f0f0;
        border-style: outset;
    }
    .information {
        position: absolute;
        top: 25%;
        bottom: 25%;
    }
    .information li {
        list-style-type: none;
        padding-right: 15px;
    }
</style>   
@endsection
@section('content')
@if(isset($a))
{{dd($a)}}
@endif
<div class="container">
    <div class="about-me" style="padding-top: 60px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="information">
                    <span class="hello-design">
                        Hello I'm
                    </span>
                    <h3 style="padding-top: 10px;">Solanki Ashvin</h3>
                    <p style="font-weight: bold">Web Developer</p>
                    <p><small><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 10px;"></i>ashvinniten0002@gmail.com</small></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="profile-image text-center">
                    <div class="image-border">
                        <img src="{{ asset('assets/frontend/images/profile/profile.jpg')}}" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <img class="w-100" src="{{ asset('assets/frontend/images/sarmi13-26.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="information">
                    <h3 class="font-weight-bold">About me</h3>
                    <p><small>Hello, I'm a web-developer based on Laravel(php). I have rich experience in web site design & building and customization.</small></p>
                    <ul class="d-flex p-0">
                        <li><a href="#"><i class="fab fa-facebook-square" aria-hidden="true" style="margin-top: 5px;"></i></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/images/instagram_logo.png')}}" alt=""></a></li>
                        <li><a href="#"><i class="fab fa-youtube" aria-hidden="true" style="color:#ff0000;margin-top: 5px;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
