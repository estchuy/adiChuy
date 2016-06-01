@extends("layout.content")
@section('content')
<div class="row">
                  <div class="col-sm-12">
                      <div class="card-box">

                          <h2 class=" m-t-0 header-title"><b>Ultimos Ingresos</b></h2>

                          <div class="owl-carousel owl-theme" id="owl-multi">
                          	<?php
				              $last10homes = Home::orderBy('created_at', 'desc')->take(10)->get();
				            ?>
                            @foreach($last10homes as $home)
                              <div class="item">
                                <div class="thumbnail">
                                  <img class="img-responsive" src="assets/images/big/img3.jpg" onerror="this.src='packages/assets/images/greyHome.png';">
                                  <div class="caption">
                                      <h3>{{$home->nombre}}</h3>
                                      <p>
                                          Área Construida: {{$home->construccion}} <b>m<sup>2</sup></b><br>
                                          Área del Terreno: {{$home->terreno}} <b>m<sup>2</sup></b><br>
                                          Habitaciones: 3<br>
                                          Baños: {{$home->banos}}<br>

                                      </p>
                                      <p>
                                          <a href="/home/{{$home->id}}/detail" class="btn btn-info waves-effect waves-light"> <i class="fa fa-info m-r-5"></i> <span>Detalles</span> </a>
                                      </p>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          </div>
                      </div>
                  </div>
              </div>    
@stop