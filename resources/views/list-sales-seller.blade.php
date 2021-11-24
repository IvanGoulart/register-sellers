@extends('layouts.layout')

@section('title', 'Listar Vendas de vendedor')

@section('content')

<div class="jumbotron">
    <div class="mb-3">
        <form class="d-flex" style="float: left;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Nome</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">Dt. Cadastro</th>
                    <th scope="col">Vendas</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

@endsection
