@extends('layout.mainlayout')

@section('content')
<div class="container-fluid pt-2 ">
    <div class="row justify-content-end ">
        <div class="col-md-12 pl-5" style="display:inline-block">   
            <div class="row">
                <div class="col-md-12" style="display:inline-block">
                    <div>
                        <h2 class="title">Plano de Estudo Semanal</h2>                 
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="container-group center">
                        <div>
                            <label>Matéria</label>
                            <input type="text" name="nome"/>
                        </div>
                        <div>
                            <label>Categoria</label>
                            <select class="form-control form-control-sm" id="filtro">
                                <option>Exatas</option>
                                <option>Humanas</option>
                                <option>Biológicas</option>
                            </select>  
                        </div>
                        <div>
                            <label>Dia</label>
                            <select class="form-control form-control-sm" id="filtro">
                                <option>Segunda-Feira</option>
                                <option>Terça-Feira</option>
                                <option>Quarta-Feira</option>
                                <option>Quinta-Feira</option>
                                <option>Sexta-Feira</option>
                                <option>Sábado</option>
                                <option>Domingo</option>
                            </select>  
                        </div>
                            <a href="" type="button">Adicionar</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="container-group center">
                        <table class="container-fluid" id="tblPlano">
                            <tr class="header">
                                <th>Segunda-Feira</th>
                                <th>Terça-Feira</th>
                                <th>Quarta-Feira</th>
                                <th>Quinta-Feira</th>
                                <th>Sexta-Feira</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                            <tr>
                                <th>Domingo</th>
                                <th>Domingo</th>
                                <th>Domingo</th>
                                <th>Domingo</th>
                                <th>Domingo</th>
                                <th>Domingo</th>
                                <th>Domingo</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
    <b></b>
    