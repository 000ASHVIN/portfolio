@extends('admin.layouts.master')

@section('overview')
<div class="container-fluid">
    <div class="row">
        <!-- USER DATA-->
        <div class="user-data m-b-40 col-12">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>Add Site</h3>
            <div class="col-lg-8 pl-5">
                <form method="POST" action="/admin/site/{{$site->id}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="au-input au-input--full form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$site->name}}" placeholder="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="url">Url</label>
                        <input id="url" class="au-input au-input--full form-control @error('url') is-invalid @enderror" type="text" url="url" value="{{$site->url}}" placeholder="url">

                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">update</button>
                    <a href="/dashboard/category">Back</a>
                </form>
            </div>
            
        </div>
    </div>
<div>
@endsection