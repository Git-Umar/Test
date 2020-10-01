@extends('home')
@section('content')
    <div class="row justify-content-center border border-dark">
        <div class="col-4">
        <div class="row justify-content-center mt-2">
            <h4>Login</h4>
        </div>
            <form action="/submit-login" method="post">
                @csrf
                <input type="text" class="form-control mb-2" value="" onkeyup="fun();" name="name" id="name"/>
                <input type="password" class="form-control" name="pass" id="pass"/>
                <div class="row justify-content-center mt-1">
                <button type="button" class="btn btn-success">Sumbit</button>
                </div>
            </form>
        </div>
    </div>
    <p id="values"></p>
@endsection