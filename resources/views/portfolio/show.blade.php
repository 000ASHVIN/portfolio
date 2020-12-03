@extends('layouts.master')

@section('css')
<style>
    .portfolio-content {
        margin-left: 400px;
        margin-top: 50px;
        margin-right: 75px;
    }
    .description {
        background: linear-gradient(180deg,#6fceef 0,#289ad6 100%);
        padding: 20px;
        border-radius: 15px;
    }
</style>   
@endsection
@section('content')

<div class="portfolio-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                <a href="{{ url()->previous() }}" class="btn" style="background-color: #6c5dd3; color: white;">Back</a>
                </div>
                <br>
                <div class="content-image">
                    <img src="{{ asset('storage/'.$siteInformation->image) }}" alt="" class="w-100">
                </div>
                <br>
                <div class="description mt-3">
                    <h4 style="color: white">Description:</h4>
                    <p style="color: white">{{$siteInformation->description}}</p>
                </div>
                <br>
                <div class="mt-3">
                    <a href="{{ url()->previous() }}" class="btn" style="background-color: #6c5dd3; color: white;">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection