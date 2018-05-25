@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Control Panel</div>

                    <div class="panel-body">
                        <ul class="navbar-nav navbar-left">


                            <li><a href="{{url('/addProduct')}}">
                                    <button class="btn-lg">Add Products</button>
                                </a></li>
                            <li>&nbsp;&nbsp;</li>
                            <li><a href="{{url('/editProduct')}}">
                                    <button class="btn-lg">Edit Products</button>
                                </a></li>
                            <li>&nbsp;&nbsp;</li>
                            <li><a href="{{url('/delProduct')}}">
                                    <button class="btn-lg">Delete Products</button>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
