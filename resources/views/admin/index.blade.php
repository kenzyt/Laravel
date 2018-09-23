@extends('admin/default')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1 class="h1">Login</h1>
            {!! BootForm::open()->action(route("connexion")) !!}
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="email" name="email" value="{{ old("email") }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox"> Se rappeler de moi
                        </label>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div>
                        <input name="login" value="Login" type="submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
            {!! BootForm::close() !!}
        </div>
    </div>
@endsection