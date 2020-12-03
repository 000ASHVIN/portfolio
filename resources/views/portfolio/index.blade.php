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
    /* .laravel-icon {
        background-image: url('{{ asset("assets/frontend/images/laravel-brands.svg") }}');
        background-repeat: no-repeat;
        background-position: right top;
        background-size: 20%;
    } */
    .php {
        background: #7377ad;
        color: white;
        padding: 5px 10px 9px;
        font-weight: 600;
        /* line-height: 1.7; */
        border-radius: 35px;
    }
    .html {
        background: #2bc21c;
        color: white;
        padding: 5px 10px 9px;
        font-weight: 600;
        /* line-height: 1.7; */
        border-radius: 35px;
    }
    .css {
        background: #493990;
        color: white;
        padding: 5px 10px 9px;
        font-weight: 600;
        /* line-height: 1.7; */
        border-radius: 35px;
    }
    .js {
        background: #68b945;
        color: white;
        padding: 5px 10px 9px;
        font-weight: 600;
        /* line-height: 1.7; */
        border-radius: 35px;
    }
    .jquery {
        background: #0765aa;
        color: white;
        padding: 5px 10px 9px;
        font-weight: 600;
        /* line-height: 1.7; */
        border-radius: 35px;
    }
    .bootstrap {
        background: #533b78;
        color: white;
        padding: 5px 10px 9px;
        font-weight: 600;
        /* line-height: 1.7; */
        border-radius: 35px;
    }
    .sql {
        background: #e6a01b;
        color: white;
        padding: 5px 10px 9px;
        font-weight: 600;
        /* line-height: 1.7; */
        border-radius: 35px;
    }
    .skills {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 150px;
        flex-direction: column;
        height: 100px;
        margin: 1em 1em;
        box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.2);
        /* flex-wrap: wrap; */
        /* margin-left: auto; */
        /* margin-right: auto; */
    }
    .skills i {
        display: flex;
        font-size: 3em;
        width: 100%;
        height: 80%;
        justify-content: center;
        align-items: center;
        /* background: black; */
        color: white;
    }
    .skills span {
        display: block;
    }
    p {
        font-family: 'Poppins', sans-serif;
    }
    .others {
        border: 3px solid white;
        padding: 10px 0px;
        border-top: 0px;
        margin-bottom: 10px;
        border-radius: 0px 0px 20px 20px;
        box-shadow: 3px 5px 14px lightgrey;
        box-sizing: border-box;
    }
    .about {
        margin-bottom: 10px;
    }
    .about b {
        background: linear-gradient(to bottom left, #0066ff 0%, #66ccff 100%);
        color: white;
        padding: 5px 10px 9px;
        border-radius: 35px;
    }
</style>   
@endsection
@section('content')

<div class="portfolio-content laravel-icon">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><strong>Name:</strong> Solanki Ashvin</p>
            </div>
            <div class="col-12">
                <p><strong>Experience:</strong> +1 year</p>
            </div>
            <div class="col-12">
                <p><strong>Currently Working:</strong> Software Engineer (As Employee)</p>
            </div>
           <div class="others">
                <div class="col-12">
                    <p class="text-center position-relative">
                        <strong class="mr-3">Main Technology:</strong>
                        <i class="fab fa-laravel position-absolute" style="font-size: 2em; color: #ff2d20"></i> 
                        <span style="font-size: 20px; font-weight: bold; color: #ff2d20;margin-left: 42px;">Laravel</span>
                    </p>
                </div>
                <div class="col-12">
                    <div class="">
                        <p><strong>Other Skills:</strong></p>
                        <div class="d-flex" style="flex-wrap: wrap">
                            <div class="skills php">
                                <i class="fab fa-php fa-lg"></i>
                                <span>php</span>
                            </div>
                            <div class="skills html">
                                <i class="fab fa-html5 fa-lg"></i>
                                <span>Html</span>
                            </div>
                            <div class="skills css">
                                <i class="fab fa-css3 fa-lg"></i>
                                <span>css</span>
                            </div>
                            <div class="skills js">
                                <i class="fab fa-js fa-lg"></i>
                                <span>js</span>
                            </div>
                            <div class="skills jquery">
                                <i class="fab fa-jquery fa-lg"><img src="{{ asset('assets/frontend/images/jquery-javascript-icon.svg')}}" alt="" class="" style="width: 50px;"></i>
                                <span>jQuery</span>
                            </div>
                            <div class="skills bootstrap">
                                <i class="fab fa-bootstrap fa-lg"></i>
                                <span>Bootstrap</span>
                            </div>
                            <div class="skills sql">
                                <i class="fas fa-database fa-lg"></i>
                                <span>SQL</span>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>

<div class="portfolio-content mt-3 mb-3">
    <div class="container">
        <div class="about text-center"><b>About Me</b></div>
        <div class="description">
            <p>
                Hello Everyone, you are right now viewing my portfolio.
            </p>
            <p>
                I have worked in many projects. But for My company's terms and conditions currently i am not able to show all my projects that i worked under.
            </p>
            <p>
                but projects that i have done by myself for my clients are shown in side bar off this page.(<small> for client privacy i am not able to show my client details</small>)
            </p>
            <p>
                In side bar you are able to show both my Frontend and Admin work with their title and description.
            </p>
            <p>
                So if you like my work then feel free to contact me.
            </p>
            <p>
                My contact details are as follows:
            </p>
            <p><small><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 10px;"></i>
                <a href="mailto:ashvinniten0002@gmail.com">ashvinniten0002@gmail.com</a>
            </small></p>
        </div>
    </div>
</div>
@endsection