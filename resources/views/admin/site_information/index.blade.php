@extends('admin.layouts.master')

@section('overview')
<!-- BREADCRUMB-->
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="/dashboard/index">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Site Information</li>
                            </ul>
                        </div>
                        <button class="au-btn au-btn-icon au-btn--green" onclick="window.location.href ='/admin/site_information/create' ">
                            <i class="zmdi zmdi-plus"></i>add site information</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->

<div class="container-fluid">
    <div class="row">
            <!-- USER DATA-->
            <div class="user-data m-b-40 col-12">
                <div class="d-flex justify-content-between">
                    <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-account-calendar"></i>Site Information</h3>
                    <div>
                        @if(session('success'))
                            <span class="text-success">{{session('success')}}</span>
                        @endif
                    </div>
                </div>
                <div class="table-responsive table-data">
                    <table class="table category-table">
                        <thead>
                            <tr>
                                <td></td>
                                <td>Title</td>
                                <td>Site</td>
                                <td>Type</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="sortable">    
                            @foreach($site_informations as $site_information)
                        
                            <tr data-index="{{$site_information->id}}" data-position="">
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <span>{{$site_information->title}}</span>
                                </td>
                                <td>
                                    <span>{{$site_information->site->name}}</span>
                                </td>
                                <td>
                                    <span>{{$site_information->type}}</span>
                                </td>
                                <td>
                                    <a href="/admin/site_information/{{$site_information->id}}/edit" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="/admin/site_information/{{$site_information->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="user-data__footer">
                {{-- <button class="">{{$categories->links()}}</button> --}}
                </div>
            </div>
            <!-- END USER DATA-->
    </div>
</div>
@endsection
