
@extends('layout.mainlayout')

@section('content')

  <!--div class="album text-muted">

    <div class="container">

      <div class="row">

        oi
      </div>

    </div>

  </div-->
  <!--  @for ($i = 0; $i < 6; $i++)

  <div class="d-flex d-inline">

    <div class="row">
      <div class="col-sm-12 col-s-8">
        <div id="card">
          <div class="row">
            <div class="col-sm-9">
              <div id="card-title" class="card-title">
                <p>Titulo do grupo</p>
              </div>
              <div id="card-body">
                <p>29 comentários - 4 membros</p>
                <p>Último comentário em 21/04/2019</p>
              </div>
            </div>
            <div class="col-sm">
              <div id="icon">
                @
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div id="ver-mais">
                <a href="#" >Ver mais</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      </div>
      @endfor

</div>-->

<div class="container mr-5 ml-5">

  <div class="row justify-content-end">
    <div class="col-md-10 " style="display:inline-block">
      <div class="row">

        @for ($i = 0; $i < 6; $i++)
          <div id="card">
            <div class="row">
              <div class="col-sm-9">
                <div id="card-title" class="card-title">
                  <p>Titulo do grupo</p>
                </div>
                <div id="card-body">
                  <p>29 comentários - 4 membros</p>
                  <p>Último comentário em 21/04/2019</p>
                </div>
              </div>
              <div class="col-sm">
                <div id="icon">
                  <i class="fa fa-group"></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div id="ver-mais">
                  <a href="#" >Ver mais</a>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
    <div class="col-md" style="border:1px solid #000">

              

  </div>

</div>
@endsection
<b></b>
