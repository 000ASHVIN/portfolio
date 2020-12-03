@extends('layouts.master')

@section('css')
<style>
    .portfolio-content {
        margin-left: 380px;
        margin-right: 50px;
        margin-right: 75px;
        padding: 25px 10px 10px;
        border-radius: 20px;
        border: 1px solid white;
        box-shadow: 3px 0px 14px lightgrey;
        overflow: hidden;
    }
    .outside-style {
        width: 50%;
        height: 200%;
        background-color: #6c5dd3;
        /* opacity: 0.5; */
        position: absolute;
        top: -100px;
        right: 0;
        z-index: -100;
        transform: skewX(20%);
        transform: rotate(45deg);
    }
</style>   
@endsection
@section('content')

<div class="portfolio-content position-relative">
    <div class="container">
        <div class="row">
            @foreach ($siteInformations as $siteInformation)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem; margin-bottom: 20px;">
                <img class="card-img-top" src="{{ asset('storage/'.$siteInformation->image)}}" alt="Card image cap" onclick="window.location.href='/portfolio/siteInformation/{{$siteInformation->id}}/show'" style="cursor: pointer;">
                    <div class="card-body">
                    <p class="card-text font-weight-600" style="padding: 10px;color: white;">{{$siteInformation->title}}</p>
                    </div>
                </div>
            </div>
            @endforeach          
        </div>
        <div class="pagination justify-content-center" style="margin-top: 30px;">
            {{ $siteInformations->links() }}
        </div>

        {{-- <div class="outside-style"></div> --}}
    </div>
</div>
@endsection
@push('script')
<script>
    var height = 0;
    $('.card-body p').each(function() {
       if($(this).height() > height) {
           height = $(this).height();
       } 
    });
    $('.card-body p').each(function() {
       if($(this).height() < height) {
            var padding = (height - $(this).height())/2 + 10;
            $(this).css('padding-top', padding);
            $(this).css('padding-bottom', padding);
       } 
    });
</script>
@endpush