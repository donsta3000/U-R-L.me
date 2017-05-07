@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Active Links</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Target</th>
                            <th>Link ID</th>
                            <th>Action</th>
                        </tr>
                        
                        @foreach($links as $link)
                        <tr>
                            <td>{{$link->id}}</td>
                            <td>{{$link->user->first()->email}}</td>
                            <td>{{$link->target}}</td>
                            <td>
                                <a href="{{$app->make('url')->to('/l/').'/'.$link->linkid}}">{{$link->linkid}}</a>
                            </td>
                            <td>
                                <a href="#">Edit</a>, 
                                <a href="#">Delete</a> 
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection