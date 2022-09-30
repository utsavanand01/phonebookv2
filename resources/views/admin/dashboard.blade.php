@extends('admin.layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-6">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h1>{{$count_vcards}}</h1>
                                <h2>Total VCards</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h1>{{$count_users}}</h1>
                                <h2>Total Users</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection