@extends('user.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto">
                @if (session('msg'))
                    <div class="alert bg-danger text-white">
                        {{session('msg')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h2>Admin Login Here</h2>   
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn w-100 btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection