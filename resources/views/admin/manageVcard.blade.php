@extends('admin.layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">@include('admin.side')</div>
            <div class="col-9">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact</th>
                        <th>Created By</th>
                        <th>action</th>
                    </tr>
                    @foreach ($Vcards as $cards)
                        <tr>
                           
                            <td>{{$cards->id}}</td>
                            <td>{{$cards->name}}</td>
                            <td>{{$cards->contact}}</td>
                            <td>{{$cards->user->name}}</td>
                            <td>
                                
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection