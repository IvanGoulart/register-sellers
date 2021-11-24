@extends('layouts.layout')

@section('title', 'Page Title')

@section('content')

<div class="jumbotron">
    <form action="/registerSeller" method="POST">
    @csrf
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-7">
            <input type="email" class="form-control" id="" name="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="" name="name">
            </div>
        </div>

        <div style="text-align: center;">
            <input class="btn btn-primary" type="submit" value="Gravar">
        </div>
    </form>
</div>

@endsection
