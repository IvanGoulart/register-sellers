@extends('layouts.layout')

@section('title', 'Listar Vendas de vendedor')

@section('content')

<div class="jumbotron">
    <div class="mb-3">
        <h5>Vendedor: {{$SellerFind->id}}  - {{$SellerFind->name}}</h5>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Adicionar nova venda
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <form action="/registerSale" method="POST">
                        @csrf
                        <div class="accordion-body">
                            <input name="idSeller" type="hidden" value="{{$SellerFind->id}}">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Valor R$</label>
                                </div>
                                <div class="col-auto">
                                <input name="amount" type="number" min="0.00" max="100000000000000.00" step="0.01" />
                                </div>
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Data da venda</label>
                                </div>

                                <div class="col-auto">
                                    <input name="dtSale" type="date" id="inputPassword6" class="form-control" required aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                    <input class="btn btn-primary" type="submit" value="Gravar">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Data da Venda</th>
                    <th scope="col">Valor da venda</th>
                    <th scope="col">Comissão</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($SellerFind))
                @foreach ($SellerFind->sales as $sale )
                    <tr>
                        <td>{{$sale->dt_sale}}</td>
                        <td>R$ {{$sale->amount}}</td>
                        <td>R$ {{$sale->total_amount}}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
