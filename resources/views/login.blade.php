@extends('layouts.not_login')

@section('not-login')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <FORM method="POST" action="/login">
                    @csrf
                    電子信箱<input type="email" name="email" class="form-control">
                    <br/>
                    密碼<input type="password" name="password" class="form-control">
                    <br/>
                    <button type="submit" class="btn btn-primary">登入</button>
                    <a href="/create"><button type="button" class="btn btn-secondary">創建</button></a>
                </FORM>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
