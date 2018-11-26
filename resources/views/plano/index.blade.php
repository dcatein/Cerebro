@extends('layout.mainlayout')
@section('content')
<div class="container-fluid ">
   <div class="row justify-content-end ">
      <div class="col-md-12 col-sm-12 col-12 " >
         <div class="row title">
            <div class="col-md-12 pl-5" >
               <div>
                  <h2 >Plano de Estudo Semanal</h2>
               </div>
            </div>
         </div>
         
         
         <div class="row">
            <div class="col-md-12 pl-5">
               <div class="container-group center mt-2 ">
                  <table class="table-responsive" id="tblPlano">
                    <thead>
                        <tr class="header">
                            <th scope="col">Período</th>
                            <th scope="col">Segunda-Feira</th>
                            <th scope="col">Terça-Feira</th>
                            <th scope="col">Quarta-Feira</th>
                            <th scope="col">Quinta-Feira</th>
                            <th scope="col">Sexta-Feira</th>
                            <th scope="col" >Sábado</th>
                            <th scope="col">Domingo</th>
                        </tr>
                      </thead>
                    
                     <tr>
                        <th>Manhã</th>
                        <th>-</th>
                        <th>
                            <div class="row">
                                <div class="col-12"> 
                                    <div class="center">
                                        <a href="" title="Ir para grupo de Exatas"> Java 8 [LAMBDA] - Exatas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" >
                                    <div class="btn-remover center ">        
                                        <a href="" title="Remover Estudo" ><i class="fa fa-close pr-2"> Remover</i></a>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th>
                             <div class="row">
                                <div class="col-12"> 
                                    <div class="center">
                                        <a href="" title="Ir para grupo de Exatas"> Função anônima [JS] - Exatas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" >
                                    <div class="btn-remover center  ">        
                                        <a href="" title="Remover Estudo" ><i class="fa fa-close pr-2"> Remover</i></a>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th>-</th>
                        <th>-</th>
                        <th>
                            <div class="row">
                                <div class="col-12"> 
                                    <div class="center">
                                        <a href="" title="Ir para grupo de Exatas"> Orações Subordinadas - Humanas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" >
                                    <div class="btn-remover center  ">        
                                        <a href="" title="Remover Estudo" ><i class="fa fa-close pr-2"> Remover</i></a>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th>-</th>
                     </tr>
                     <tr>
                        <th>Tarde</th>
                        <th>-</th>
                        <th>-</th>
                        <th>-</th>
                        <th>-</th>
                        <th>
                            <div class="row">
                                <div class="col-12"> 
                                    <div class="center">
                                        <a href="" title="Ir para grupo de Exatas"> Java 8 [Stream] - Exatas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" >
                                    <div class="btn-remover center  ">        
                                        <a href="" title="Remover Estudo" ><i class="fa fa-close pr-2"> Remover</i></a>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th>-</th>
                        <th>
                             <div class="row">
                                <div class="col-12"> 
                                    <div class="center">
                                        <a href="" title="Ir para grupo de Exatas"> Magento[Criação de loja]-Exatas </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" >
                                    <div class="btn-remover center  ">        
                                        <a href="" title="Remover Estudo" ><i class="fa fa-close pr-2"> Remover</i></a>
                                    </div>
                                </div>
                            </div>
                        </th>
                     </tr>
                     <tr>
                        <th>Noite</th>
                        <th>
                             <div class="row">
                                <div class="col-12"> 
                                    <div class="center">
                                        <a href="" title="Ir para grupo de Exatas"> Laravel - Exatas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" >
                                    <div class="btn-remover center  ">        
                                        <a href="" title="Remover Estudo" ><i class="fa fa-close pr-2"> Remover</i></a>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th>-</th>
                        <th>-</th>
                        <th>
                            <div class="row">
                                <div class="col-12"> 
                                    <div class="center">
                                        <a href="" title="Ir para grupo de Exatas"> Java 8 [default methods] - Exatas</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" >
                                    <div class="btn-remover center  ">        
                                        <a href="" title="Remover Estudo" ><i class="fa fa-close pr-2"> Remover</i></a>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th>-</th>
                        <th>-</th>
                        <th>-</th>
                     </tr>
                  </table>
               </div>
               </div>
               </div>
                <div class="row title mt-3">
                    <div class="col-md-12   d-inline-block pl-5" >
                            <h4 class="center">Inserir Novo Estudo</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 pl-5">
                        <div class="container-group center mb-2 mt-2  ">
                            <form action="" method="" class="min-w-30">

                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                                <label>Matéria</label><br>
                                <input type="text" name="materia"><br>

                                <label>Categoria</label>
                                <select class="form-control form-control-sm" name="categoria">
                                    <option>Exatas</option>
                                    <option>Humanas</option>
                                    <option>Biológicas</option>
                                </select>
                                <label>Dia</label>
                                <select class="form-control form-control-sm" name="dia">
                                    <option>Segunda-Feira</option>
                                    <option>Terça-Feira</option>
                                    <option>Quarta-Feira</option>
                                    <option>Quinta-Feira</option>
                                    <option>Sexta-Feira</option>
                                    <option>Sábado</option>
                                    <option>Domingo</option>
                                </select>
                                <label>Período</label>
                                <select class="form-control form-control-sm" name="periodo">
                                    <option>Manhâ</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                </select><br>
                                <button class="btn btn-primary btn-block" type="Submit">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
    @include('layout.partials.footer')

@endsection
<b></b>