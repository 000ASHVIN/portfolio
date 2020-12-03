@extends('admin.layouts.master')

@section('overview')
<div class="container-fluid">
    <div class="row">
        <!-- USER DATA-->
        <div class="user-data m-b-40 col-12">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>Edit Site</h3>
            <div class="col-lg-8 pl-5">
                {!! Form::model($site_information, ['route' => ['siteInformation.update', $site_information->id], 'method' => 'post', 'enctype' => 'multipart/form-data'])
                !!}
                    @method('PATCH')
                    @include('admin.site_information.fields')
                {!! Form::close() !!}
            </div>
            
        </div>
    </div>
<div>
@endsection