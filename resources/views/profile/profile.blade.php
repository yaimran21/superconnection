
@extends('layouts.app')
@section('title','profile')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h4> {{ucwords(Auth::user()->name)}} welcome to you profiel page</h4>
                        <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="height: 150px;height: 150px;float: left;border-radius: 50%">
                        <form enctype="multipart/form-data" action="/profile" method="post">
                            <level><h4>Upload profile image</h4></level>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" class="pull-right btn btn-sm btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
