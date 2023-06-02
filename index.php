<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Matematicas para Restaurantes</title>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/lib/js/emojione.min.js" integrity="sha512-ibgn4qpJT55EG11zy1D65XS/7pgdgVxwPEwSSNDfH35Li2kEpNHKNs/lcmkwm5kaOaA1Ls1kdRSE6L/Qs7DE+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/css/emojione.min.css" integrity="sha512-stXuDISyaxZUf+TKKuWLknpyCteOwkgqm4eqXCRuryS1d9aqKj1VIuDRHevj4DC8voNTwY/mHklbyoRTkRdulQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!--link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /-->
  <link rel="stylesheet" href="style.css?v=3.0.4" />
  <link rel="stylesheet" href="style-movil.css?v=1" />

  <style>
    /*body {
      background: url(fondo.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }*/
  </style>
</head>

<body className="snippet-body">
  <div class="form__container">
    <div class="header-content">
      <div class="title__container">

        <h1 class=" ">
          <span class="titulo-principal text-uppercase"> Matematicas para restaurantes</span>
     
        </h1>




        <div id="emoji-container">
          <div id="emoji" class=""></div>
          <div id="emoji-text"></div>
        </div>
      </div>
    </div>
    <div class="body__container">
      <div class="left__container">

        <div class="progress__bar__container">
          <ul>
            <li class="active pactual" id="icon1">
              <!--ion-icon name="calculator-outline"></ion-icon -->
            </li>
            <li id="icon2">
              <!-- ion-icon name="restaurant-outline"></ion-icon -->
            </li>

            <li id="icon3">

            </li>
            <li id="icon4">

            </li>
            <li id="icon5">

            </li>
            <li id="icon6">

            </li>

            <li id="icon7">

            </li>
            <li id="icon8">

            </li>
          </ul>
        </div>
        <div class="header-icon text-center active iconp1">

          <div class="icon-active m-auto">
            <ion-icon name="calculator-outline">
            </ion-icon>


          </div>
          <h5 class="titulo-icon text-center">Utilidad</h5>
          <p class=" subtitulo-icon text-muted text-center"> Meta de ingresos mensuales</p>


        </div>

        <div class="header-icon text-center iconp2">

          <div class="icon-active m-auto">
            <ion-icon name="restaurant-outline"></ion-icon>

          </div>
          <h5 class="titulo-icon text-center">Tenedor promedio</h5>
          <p class=" subtitulo-icon text-muted text-center">Promedio de consumo por cliente</p>


        </div>
        <div class="header-icon text-center iconp3">

          <div class="icon-active m-auto">
            <ion-icon name="calendar-outline"></ion-icon>

          </div>
          <h5 class="titulo-icon text-center">Objetivos de clientes</h5>
          <p class=" subtitulo-icon text-muted text-center">Calculo de clientes por día</p>


        </div>

        <div class="header-icon text-center iconp4">

          <div class="icon-active m-auto">
            <ion-icon name="wallet-outline"></ion-icon>

          </div>
          <h5 class="titulo-icon text-center">Sueldo mensual típico</h5>
          <p class=" subtitulo-icon text-muted text-center">Salario de empleado</p>


        </div>
        <div class="header-icon text-center iconp5">

          <div class="icon-active m-auto">
            <ion-icon name="cash-outline"></ion-icon>

          </div>
          <h5 class="titulo-icon text-center">Cantidad de personal</h5>
          <p class=" subtitulo-icon text-muted text-center">Proyectar cantidad de empleados
          </p>


        </div>

        <div class="header-icon text-center iconp6">

          <div class="icon-active m-auto">
            <ion-icon name="people-outline"></ion-icon>
          </div>
          <h5 class="titulo-icon text-center">Gastos generales</h5>
          <p class=" subtitulo-icon text-muted text-center">Calcula tus gastos


          </p>


        </div>

        <div class="header-icon text-center iconp7">

          <div class="icon-active m-auto">
            <ion-icon name="cart-outline"></ion-icon>

          </div>
          <h5 class="titulo-icon text-center">Gastos Generales</h5>
          <p class=" subtitulo-icon text-muted text-center">Calcula tus gastos</p>


        </div>
        <div class="header-icon text-center iconp8">

          <div class="icon-active m-auto">

            <ion-icon name="checkmark-outline"></ion-icon>

          </div>
          <h5 class="titulo-icon text-center">Plan Financiero de tu establecimiento 

       
          </h5>



        </div>



      </div>
      <div class="right__container">
        <div class="content-header d-flex  justify-content-center">
          <div class="header-icon-principal text-center active icon1">

            <div class="icon-active m-auto">
              <ion-icon name="calculator-outline">
              </ion-icon>


            </div>
            <h5 class="titulo-icon text-center">Utilidad</h5>
            <p class=" subtitulo-icon text-muted text-center"> Meta de ingresos mensuales</p>


          </div>

          <div class="header-icon-principal text-center icon2">

            <div class="icon-active m-auto">
              <ion-icon name="restaurant-outline"></ion-icon>

            </div>
            <h5 class="titulo-icon text-center">Tenedor promedio</h5>
            <p class=" subtitulo-icon text-muted text-center">Promedio de consumo por cliente</p>


          </div>
          <div class="header-icon-principal text-center icon3">

            <div class="icon-active m-auto">
              <ion-icon name="calendar-outline"></ion-icon>

            </div>
            <h5 class="titulo-icon text-center">Objetivos de clientes</h5>
            <p class=" subtitulo-icon text-muted text-center">Calculo de clientes por día</p>


          </div>

          <div class="header-icon-principal text-center icon4">

            <div class="icon-active m-auto">
              <ion-icon name="wallet-outline"></ion-icon>

            </div>
            <h5 class="titulo-icon text-center">Sueldo mensual típico</h5>
            <p class=" subtitulo-icon text-muted text-center">Salario de empleado</p>


          </div>
          <div class="header-icon-principal text-center icon5">

            <div class="icon-active m-auto">
              <ion-icon name="cash-outline"></ion-icon>

            </div>
            <h5 class="titulo-icon text-center">Cantidad de personal</h5>
            <p class=" subtitulo-icon text-muted text-center">Proyectar cantidad de empleados
            </p>


          </div>

          <div class="header-icon-principal text-center icon6">

            <div class="icon-active m-auto">
              <ion-icon name="people-outline"></ion-icon>
            </div>
            <h5 class="titulo-icon text-center">Gastos generales</h5>
            <p class=" subtitulo-icon text-muted text-center">Calcula tus gastos


            </p>


          </div>

          <div class="header-icon-principal text-center icon7">

            <div class="icon-active m-auto">
              <ion-icon name="cart-outline"></ion-icon>

            </div>
            <h5 class="titulo-icon text-center">Gastos Generales</h5>
            <p class=" subtitulo-icon text-muted text-center">Calcula tus gastos</p>


          </div>
          <div class="header-icon-principal text-center icon8">

            <div class="icon-active m-auto">

              <ion-icon name="checkmark-outline"></ion-icon>

            </div>
            <h5 class="titulo-icon text-center">Plan Financiero de tu establecimiento</h5>



          </div>

        </div>

        <fieldset id="form1" class="fieldsetform animate__animated animate__zoomIn">



          <div class="input__container">
            <div class="row justify-content-md-center mb-5">
              <div class="col-12 col-md-4">

                <div class="">
                  <div class="sub__title__container">
                    <h2 class="">
                      ¿Cuánto quieres de utilidad en tu establecimiento al mes?
                    </h2>

                  </div>
                  <input type="text" min="0" class=" form-input
                   validar_input " id="rentabilidad" placeholder="0" />
                  <label for="rentabilidad " class="text-muted text-center"> Ingresa tu objetivo de ingresos mensual $</label>

                </div>

              </div>
            </div>
            <input type="hidden" id="objetivo_mensual" />

            <div class="row justify-content-center mt-5">
              <div class="col ">
                <a class="nxt__btn btn btn-info m-auto text-white " onclick="nextForm();">
                  Siguiente</a>
              </div>
            </div>
          </div>
          <p class="text-center page">Pag 1/8</p>
        </fieldset>
        <fieldset class="active__form fieldsetform animate__animated imprimirpdf" id="form2">
          <div class="sub__title__container">
            <h2>
              Para llegar a $<span class="valor_ganancia"></span> de utilidad
              al mes, tu Establecimiento debe vender $<span class="valor_venta"></span>
              al mes.
            </h2>
            <p class="text-muted">
              Cambia el valor en promedio que consume un cliente en tu
              local por cada visita cambiando el “tenedor promedio” aquí
              abajo.
            </p>
          </div>

          <div class="input__container">
            <div class="row justify-content-md-center mb-5">
              <div class="col-12 col-md-4">

                <div class="input-group number-spinner">

                  <input type="text" class="form-control text-right validar_input" id="tenedor_promedio" value="" placeholder="0" min="0" max="" />

                </div>
                <label for="tenedor_promedio" class="text-muted"> Tenedor promedio $</label>
              </div>
            </div>

            <div class="buttons mt-5">
              <a class="prev__btn btn btn btn-secondary" onclick="prevForm();">Regresar</a>
              <a class="nxt__btn btn-info text-white" onclick="nextForm();">Siguiente</a>
            </div>
            <p class="text-center page">Pag 2/8</p>
          </div>
        </fieldset>

        <fieldset class="active__form fieldsetform animate__animated imprimirpdf" id="form3">
          <div class="sub__title__container">
            <h2>Tu plan actual</h2>
            <p text-muted>
              Para  llegar a $<span class="valor_ventap"></span>
              al mes, hemos simulado el volumen de personas que debes atender por día en tu local. Aquí abajo puedes cambiar y ver el resultado
             
            </p>
          </div>

          <div class="input__container">
            <div class="row align-items-center  justify-content-md-center ">
              <div class="col-12 col-md-6">

                <div class="table-responsive">

                  <table style="padding-bottom: 0px" class="table table-bordered table-clientesdia">
                    <thead class="table-secondary">
                      <th>Día</th>
                      <th class="text-center"> Clientes por día</th>
                      <th class="text-center">% de clientes a la semana</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="L">Lunes</td>
                        <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input id="lunes" class="tick-slider-pag-4   form-control validar_input clientes-dia" type="text" min="0" max="500" step="5" value="100" data-id="1" data-tick-step="5" data-tick-id="weightTicksc1" data-value-id="weightValuec1" data-progress-id="weightProgressc1" data-handle-size="18" data-min-label-id="weightLabelMinc1" data-max-label-id="weightLabelMaxc1" />
                            </div>
                          </div>
                        </td>
                        <td data-label="Client por dia*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p id="porcentaje-lunes" class="tick-slider-pag-3 text-center " type="text" min="0" data-id="1" max="100" step="5" value="20" data-tick-step="5" data-tick-id="weightTicks" data-value-id="weightValue" data-progress-id="weightProgress" data-handle-size="18" data-min-label-id="weightLabelMin" data-max-label-id="weightLabelMax" readonly></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="M">Martes</td>
                        <td data-label="Client por dia*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input id="martes" class="tick-slider-pag-3 clientes-dia validar_input" type="text" min="0" max="100" step="5" value="20" data-id="2" />
                            </div>
                          </div>
                        </td>
                        <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p id="porcentaje-martes" class="tick-slider-pag-4  text-center" type="text" min="0" max="500" step="5" value="100" data-id="2" readonly></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="M">Miercoles</td>
                        <td data-label="Client por dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="tick-slider">
                                <input id="miercoles" class="tick-slider-pag-3 validar_input clientes-dia" type="text" min="0" max="100" step="5" value="20" data-id="3" />
                              </div>
                            </div>
                          </div>
                        </td>
                        <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p id="porcentaje-miercoles" class="tick-slider-pag-4  text-center" type="text" min="0" max="500" step="5" data-id="3" value="100"></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="J">Jueves</td>
                        <td data-label="Client por dia*">
                          <div clafss="pt-input-group">
                            <div class="pt-input-group">
                              <div class="tick-slider">
                                <input id="jueves" class="tick-slider-pag-3 validar_input clientes-dia" type="text" min="0" max="100" step="5" data-id="4" value="20" />
                              </div>
                            </div>
                          </div>
                        </td>
                        <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p id="porcentaje-jueves" class="tick-slider-pag-4  text-center" type="text" min="0" max="500" step="5" value="100" data-id="4" readonly></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="V">Viernes</td>
                        <td data-label="Client por dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="tick-slider">
                                <input id="viernes" class="tick-slider-pag-3 validar_input form-control clientes-dia" type="text" min="0" max="100" step="5" value="20" data-id="5" />
                              </div>
                            </div>
                          </div>
                        </td>
                        <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p id="porcentaje-viernes" class="tick-slider-pag-4  text-center" type="text" min="0" max="500" step="5" value="100" data-id="5"></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="S">Sabado</td>
                        <td data-label="Client por dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="pt-input-group">
                                <div class="tick-slider">
                                  <input id="sabado" class="tick-slider-pag-3 validar_input clientes-dia" type="text" min="0" max="100" step="5" data-id="6" value="0" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p id="porcentaje-sabado" class="tick-slider-pag-4  text-center" type="text" min="0" max="500" step="5" data-id="6" value="0" data-tick-step="5" readonly></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="D">Domingo</td>
                        <td data-label="Client por dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="pt-input-group">
                                <div class="tick-slider">
                                  <input id="domingo" class="tick-slider-pag-3 validar_input  form-control clientes-dia" type="text" min="0" max="100" step="5" value="0" data-id="7" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p id="porcentaje-domingo" class="text-center" type="text" min="0" max="500" step="5" value="0" data-id="7" readonly></p>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Totales</td>
                        <td> <input type="text" class="form-control  validar_input  total_clientes_semana" id="total_clientes_semana" value="0" />
                        </td>
                        <td>
                          <p id="total_porcentaje_semana" class="total_porcentaje_semana text-center" value="100" aria-label="" aria-describedby="basic-addon1">100%</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
                <label for="" class="total_ventas_clientes"></label>
              </div>
            


            </div>
            <div class="buttons">
              <a class="prev__btn btn btn btn-secondary" onclick="prevForm();">Regresar</a>
              <a class="nxt__btn btn-info text-white" onclick="nextForm();">Siguiente</a>
            </div>
            <p class="text-center page">Pag 3/8</p>
          </div>
        </fieldset>
        <fieldset class="active__form fieldsetform animate__animated imprimirpdf" id="form4">
          <div class="sub__title__container">
            <h2>¿Cuál es el porcentaje de costo en tu Establecimiento?</h2>
            <p text-muted>
              El porcentaje de costo es el porcentaje del precio de venta de
              tus productos que usas en matería prima. Por ejemplo si vendes
              tu plato promedio en <span class="tenedor_promedio_p9"></span>,
              y el costo de los componentes es <span class="valor_costo_promedio"></span>; tu porcetaje de costo es
              del 40%. Por lo general este indicador es del 35% o menos.
            </p>
          </div>

          <div class="input__container">
            <div class="row justify-content-center  d-flex align-items-center mb-5">
              <div class="col-12 col-md-6 align-self-center">
                <label for="tenedor_promedio"> Costo promedio %</label>
                <div class="input-group number-spinner">

                  <input type="text" class="form-control validar_input text-center" onkeyup="validarNumero(this)" id="costo_promedio" value="35" />

                </div>
              </div>

            
            </div>

            <div class="buttons">
              <a class="prev__btn btn btn btn-secondary" onclick="prevForm();">Regresar</a>
              <a class="nxt__btn btn-info text-white" onclick="nextForm();">Siguiente</a>
 
              <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
            </div>
            <p class="text-center page">Pag 4/8</p>
          </div>
        </fieldset>

        <fieldset class="active__form fieldsetform animate__animated" id="form5">
          <div class="sub__title__container">
            <h2>
              ¿Cuánto es el sueldo mensual típico en tu localidad para un
              cajero/mesero?
            </h2>
            <p class=" text-muted">
              Ingresa el valor que se paga en tu país para un mesero o cajero
              tipicamente en los cuadros aquí abajo.
            </p>
          </div>

          <div class="input__container">
            <div class="row justify-content-md-center mb-5">
              <div class="col-12 col-md-5">
                <label for="tenedor_promedio">
                  Sueldo promedio mes $ por empleado</label>
                <div class="input-group number-spinner">

                  <input type="text" min="0" class="form-control text-right validar_input" id="sueldo_promedio" placeholder="0" value="" />

                </div>
              </div>
            </div>

            <div class="row justify-content-md-center mb-5">
              <div class="col-12 col-md-5">
                <label for="tenedor_promedio">Valor que pagas por beneficios sociales $ por empleado por
                  mes</label>
                <div class="input-group number-spinner">

                  <input placeholder="0" type="text" min="0" class="form-control text-right validar_input" id="valor_beneficio_promedio" value="0" />

                </div>
              </div>
            </div>

            <div class="buttons">
              <a class="prev__btn btn btn btn-secondary" onclick="prevForm();">Regresar</a>
              <a class="nxt__btn btn-info text-white" onclick="nextForm();">Siguiente</a>

              <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
            </div>
            <p class="text-center">Pag 5/8</p>
          </div>
        </fieldset>

        <fieldset class="active__form fieldsetform animate__animated imprimirpdf" id="form6">
          <div class="sub__title__container">
            <h2>Ahora exploremos la cantidad de personal que necesitas.</h2>
            <p text-muted>
              De acuerdo a tu objetivo de ventas y a los estándar de la
              industria, puedes gastar hasta $<span class="text-gasto-maximo"></span>
              en personal cada mes. Usa la siguiente tabla para proyectar la
              cantidad de empleados del Establecimiento.
            </p>
          </div>

          <div class="input__container">
            <div class="row d-flex justify-content-center">
              <div class="col-12 col-md-9 align-self-center">
                <table class="table_empleado table table-bordered" id="tabla-empleados">
                  <thead class="table-secondary">
                    <tr>
                      <th scope="col">Tipo empleado</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Sueldo US$</th>
                      <th scope="col">Beneficios US$</th>
                      <th scope="col">Otros US$</th>
                      <th scope="col">Total US$</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="Cajero " class="rowcol" data-label="Cajero">Cajero</td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" data-id="1" class="form-control cantidade cantidade1 validar_input" id="cant_cajeros" value="0" />
                        </div>
                      </td>

                      <td data-label="Sueldo">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="tsueldo1" value="0" />
                        </div>
                      </td>
                      <td data-label="Beneficio">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="tbeneficio1" value="0" />
                        </div>
                      </td>
                      <td data-label="Otros">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="totros1" value="0" />
                        </div>
                      </td>
                      <td data-label="Total">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="ttotale1" value="0" readonly />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Cocina" class="rowcol" data-label="Cocina">Cocina</td>

                      <td data-label="Cant de cocina">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" data-id="2" class="form-control cantidade cantidade2 validar_input" id="cant_cocina" value="0" />
                        </div>
                      </td>

                      <td data-label="Sueldo">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="tsueldo2" value="0" />
                        </div>
                      </td>
                      <td data-label="Beneficio">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="tbeneficio2" value="0" />
                        </div>
                      </td>
                      <td data-label="Otros">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="totros2" value="0" />
                        </div>
                      </td>
                      <td data-label="Totales">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="ttotale2" value="0" readonly />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Meseros" class="rowcol" data-label="Meseros">Meseros</td>

                      <td data-label="Cant de meseros">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control cantidade cantidade3 validar_input" data-id="3" id="cant_meseros" value="0" />
                        </div>
                      </td>
                      <td data-label="Sueldo">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="tsueldo3" value="0" />
                        </div>
                      </td>
                      <td data-label="Beneficio">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="tbeneficio3" value="0" />
                        </div>
                      </td>
                      <td data-label="Otros">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="totros3" value="0" />
                        </div>
                      </td>
                      <td data-label="Total">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="ttotale3" value="0" readonly />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Administrador" class="rowcol" data-label="Administrador">Administrador</td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" data-id="4" class="form-control cantidade cantidade4 validar_input" id="cant_administrador" />
                        </div>
                      </td>
                      <td data-label="Sueldo">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="tsueldo4" value="0" />
                        </div>
                      </td>
                      <td data-label="Beneficio">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="tbeneficio4" value="0" />
                        </div>
                      </td>
                      <td data-label="Meseros">

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="totros4" value="0" />
                        </div>
                      </td>
                      <td data-label="Total">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="ttotale4" value="0" readonly />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Otros" class="rowcol" data-label="Otros">Otros</td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" data-id="5" class="form-control cantidade cantidade5 validar_input" id="cant_otros" value="0" />
                        </div>
                      </td>
                      <td data-label="Sueldo">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="tsueldo5" value="0" />
                        </div>
                      </td>
                      <td data-label="Beneficio">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="tbeneficio5" value="0" />
                        </div>
                      </td>
                      <td data-label="Otros">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control validar_input" id="totros5" value="0" />
                        </div>
                      </td>
                      <td data-label="Totales">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="ttotale5" value="0" readonly />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

           
            </div>

            <div class="row justify-content-center">
              
            <div class="col-12 col-md-4 align-self-center">
                <label for="tenedor_promedio"> Gasto empleado Mes $</label>
                <div class="input-group number-spinner">

                  <input type="text" class="form-control text-right" id="gastos_empleados" value="0" />

                </div>
                <input type="hidden" name="" id="sueldo_promedio_final" />
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input dark checkbox" id="checkdistribuiraut" checked />
              
                  <label class="custom-control-label" for="checkdistribuiraut">Distrubuir automaticamente</label>
                </div>
              </div>
            </div>
            <div class="buttons">
              <a class="prev__btn btn btn btn-secondary" onclick="prevForm();">Regresar</a>
              <a class="nxt__btn btn-info text-white" onclick="nextForm();">Siguiente</a>

              <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
            </div>
            <p class="text-center page">Pag 6/8</p>
          </div>
        </fieldset>
        <fieldset class="active__form fieldsetform animate__animated imprimirpdf" id="form7">
          <div class="sub__title__container">
            <h2>Finalmente, validemos como están tus gastos generales</h2>
            <p text-muted>
              Aquí calculamos los pagos que haces en gastos generales para
              mantener el negocio en marcha.
            </p>
          </div>

          <div class="input__container">

          <div class="row justify-content-md-center">

     
              <div class="col-12 col-md-6 mb-5">
            <div class="table-responsive">
              <table class="table table-hover  table-bordered" id="tabla_gasto_general">
                <thead class="table-secondary">
                  <tr>
                    <th scope="col">Descripción Rubro</th>
                    <th scope="col">Valor Mes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="  text-left pl-3">Arriendo Local</th>
                    <td>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" id="gastogral1" value="0" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="  text-left pl-3">
                    Servicios Basicos: Luz, agua, internet, etc. 
                    </th>

                    <td>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" id="gastogral3" value="0" />
                      </div>
                    </td>
                  </tr>
                  <tr>
                    
                    <th scope="row" class="  text-left pl-3">Gastos Marketing</th>
                    <td>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control validar_input" id="gastogral2" value="0" />
                      </div>
                    </td>
                  </tr>

                
                  <tr>
                    <th class="  text-left pl-3">
                      Otros
                    </th>

                    <td>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" id="gastogral4" value="0" />
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button data-toggle="tooltip" data-placement="top" title="Agregar nueva fila" onclick="agregar_fila_gastos()" class="btn btn-primary w-25 col-2 align-self-end float-right">
              <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
         
          
               
              </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center" style="height:0%">
           <div class="col-8  ">
           
                <div class="form-group number-spinner">
                <label for="tenedor_promedio"> Gastos generales mes $</label>
                  <input type="text" class="form-control text-center" id="total_gasto_general" value="0" readonly />

                </div>
            </div>
           </div>
            <div class="buttons">
              <a class="prev__btn btn btn btn-secondary" onclick="prevForm();">Regresar</a>
              <a class="nxt__btn btn-info text-white" onclick="nextForm();">Siguiente</a>

              <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
            </div>
            <p class="text-center page">Pag 7/8</p>
          </div>
        </fieldset>
        <fieldset class="active__form fieldsetform animate__animated imprimirpdf" id="form8">
          <div class="sub__title__container">
            <h2>!Listo! Mira la matemática de tu restaurante..</h2>
            <p text-muted>
            Hemos generado con tus datos, el plan financiero/matemático de tu establecimiento. Puedes explorar el plan dando click en cada
              sección del grafico. Adicionalmente puedes exportarlo a PDF o
              generar una cuenta gratuita para grabarlo y hacer seguimiento de
              su cumplimiento.
            </p>
          </div>

          <div class="input__container">
            <div class="row row justify-content-md-center">
              <div class="col-12 col-md-4">
                <div class="imagen-grafico-chartplanfinanciero d-flex flex-row">
                  <canvas id="chartplanfinanciero"></canvas>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="row justify-content-md-center mb-5 pl-4">
                  <div class="col-md-6 col-xs-12  justify-content-center d-flex flex-column align-self-center" >

                    <h2 class="form-porcentaje">Utilidad: <span class="titulo-porcentaje"></span> =
                      <span class="titulo-cantidad"> </span>
                    </h2>

                  </div>
                </div>
              </div>
            
          </div>
          <div class="row     justify-content-center">
          <div class="col-12 col-md-6">
            <div class="contenedor-botones-f     justify-content-center mb-5">
              <div class=" col-12   no-print justify-content-center d-flex flex-column align-self-center">
                <button type="button" class="btn btn-info btn-block m-1 no-print " onclick="imprimirpdf()">
                  Descargar plan financiero PDF
                </button>
          
         
      
              
                <form id="form-login" action="registrar.php" method="post">


                  <input type="hidden" name="clientes_mes" id="clientes_mes">
                  <input type="hidden" id="datosTablaempleado" name="datos_tabla_empleado">
                  <input type="hidden" id="campo_datos_gasto_general" name="campo_datos_gasto_general">

                  <input type="hidden" name="form_objetivo">
                  <input type="hidden" name="form_utilidad">
                  <input type="hidden" name="form_gasto_general" id="form_gasto_general">
                  <input type="hidden" name="form_gasto_personal" id="form_gasto_personal">
                  <input type="hidden" name="form_tenedor_promedio" id="form_tenedor_promedio">
                  <input type="hidden" name="form_costo" id="form_costo">
                  <button type="submit" class="btn btn-primary btn-block  m-1 no-print">Crear Cuenta de Seguimiento</button>
                  <span for="" class="text-muted"> No te quedes ahi! Puedes crear una cuenta gratuita en Matemática para Restaurantes para dar seguimiento a tu plan</span>
                </form>
              </div>
            </div>
          </div>
          </div>
            <div class="buttons">
              <a class="prev__btn btn btn btn-secondary m-auto" onclick="prevForm();">Regresar</a>
              <a class="nxt__btn btn-info text-white" onclick="nextForm();">Siguiente</a>
            </div>
          </div>
          <p class="text-center page">Pag 8/8</p>
        </fieldset>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type="text/javascript" src="#"></script>
  <script type="text/javascript" src="#"></script>
  <script type="text/javascript" src="#"></script>
  <script type="text/javascript" src="#"></script>
  <script type="text/javascript">
    const nxtBtn = document.querySelector("#submitBtn");
  </script>

  <script src="app.js?v=2"></script>

  <script type="text/javascript" src="#">
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
</body>

</html>