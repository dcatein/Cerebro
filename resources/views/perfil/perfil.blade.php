@extends('layout.mainlayout')
@section('content')
<div class="container-fluid ">
   <div class="row title header-perfil">
      <div class="col-md-12 body-perfil centralizado">
         <div class="content-perfil " title="Editar Perfil">
            <div class="row">
               <div class="col-md-12 centralizado">
                  <div class="img-perfil ce">
                     <img src="/img/pic-perfil.jpg">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 centralizado">
                  <div class="text-perfil mt-4">
                     <h3>Renan da Silva</h3>
                     <small>25 anos - Rio de Janeiro</small>
                     <p> “Comece de onde você está. Use o que você tiver. Faça o que você puder.“ - Arthur Ashe</p>
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