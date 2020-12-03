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
                                <li class="list-inline-item">Site</li>
                            </ul>
                        </div>
                        <button class="au-btn au-btn-icon au-btn--green" onclick="window.location.href ='/admin/site/create' ">
                            <i class="zmdi zmdi-plus"></i>add site</button>
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
                        <i class="zmdi zmdi-account-calendar"></i>Site</h3>
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
                                <td>Name</td>
                                <td>Url</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody class="sortable">    
                            @foreach($sites as $site)
                        
                            <tr data-index="{{$site->id}}" data-position="">
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <span>{{$site->name}}</span>
                                </td>
                                <td>
                                    <span>{{$site->url}}</span>
                                </td>
                                <td>
                                    <a href="/admin/site/{{$site->id}}/edit" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="/admin/site/{{$site->id}}" method="post">
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
