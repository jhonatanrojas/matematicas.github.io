<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Matematicas para Restaurantes</title>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/lib/js/emojione.min.js"
      integrity="sha512-ibgn4qpJT55EG11zy1D65XS/7pgdgVxwPEwSSNDfH35Li2kEpNHKNs/lcmkwm5kaOaA1Ls1kdRSE6L/Qs7DE+Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/css/emojione.min.css"
      integrity="sha512-stXuDISyaxZUf+TKKuWLknpyCteOwkgqm4eqXCRuryS1d9aqKj1VIuDRHevj4DC8voNTwY/mHklbyoRTkRdulQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
      integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="style.css?v=1.0.1" />

    <style>
      body {
        background: url(fondo.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    </style>
  </head>

  <body className="snippet-body">
    <div class="form__container">
      <div class="header-content">
        <div class="title__container">
          <h1>Matematicas para restaurantes</h1>
          <p class="text-dark">
            Conviértete en un experto en la gestión financiera de tu restaurante
          </p>
          <div id="emoji-container">
            <div id="emoji" class=""></div>
            <div id="emoji-text"></div>
          </div>
        </div>
      </div>
      <div class="body__container">
        <div class="left__container">
          <div class="side__titles">
            <div class="title__name">
              <h3 class="In">Utilidad</h3>
              <p class="In text-dark">Meta de ingresos mensuales</p>
            </div>
            <div class="title__name">
              <h3>Tenedor promedio</h3>
              <p class="In text-dark">valor promedio de consumo por cliente</p>
            </div>
            <div class="title__name">
              <h3>Objetivos de clientes</h3>
              <p class="In text-dark">Calculo de clientes por dia</p>
            </div>
     
            <div class="title__name">
              <h3>Porcentaje de costo</h3>
              <p class="In text-dark">Costos de tu restaurant</p>
            </div>
            <div class="title__name text-dark">
              <h3>Sueldo mensual típico</h3>
              <p class="In text-dark">Salario de empleado</p>
            </div>
            <div class="title__name text-dark">
              <h3>Cantidad de personal</h3>
              <p class="In text-dark">proyectar cantidad de empleados</p>
            </div>
            <div class="title__name">
              <h3>Gastos generales</h3>
              <p class="text-dark">Clacula tus gatos</p>
            </div>
            <div class="title__name">
              <h3>Plan financiero</h3>
              <p class="text-dark">Listo</p>
            </div>
          </div>
          <div class="progress__bar__container">
            <ul>
              <li class="active pactual" id="icon1">
                <ion-icon name="calculator-outline"></ion-icon>
              </li>
              <li id="icon2">
                <ion-icon name="restaurant-outline"></ion-icon>
              </li>
          
              <li id="icon3">
                <ion-icon name="calendar-outline"></ion-icon>
              </li>
              <li id="icon4">
                <ion-icon name="wallet-outline"></ion-icon>
              </li>
              <li id="icon5">
                <ion-icon name="cash-outline"></ion-icon>
              </li>
              <li id="icon6">
                <ion-icon name="people-outline"></ion-icon>
              </li>

              <li id="icon7">
                <ion-icon name="cart-outline"></ion-icon>
              </li>
              <li id="icon8">
                <ion-icon name="cash-outline"></ion-icon>
              </li>
            </ul>
          </div>
        </div>
        <div class="right__container">
          <fieldset
            id="form1"
            class="fieldsetform animate__animated animate__zoomIn"
          >
            <div class="sub__title__container">
              <h2 class="">
                ¿Cuánto quieres de utilidad en tu establecimiento al mes?
              </h2>
              <p class="animate__lightSpeedInRight text-dark">
                Ingresa tu objetivo de ingresos mensual
              </p>
            </div>

            <div class="input__container">
              <div class="row justify-content-md-center mb-5">
                <div class="col-md-6 col-xs-12">
                  <label for="rentabilidad"> Utilidad Mes</label>
                  <div class="input-group number-spinner">
              
                    <input
                      type="text"
                      min="0"
                      class="form-control form-control-sm validar_input "
                      id="rentabilidad"
                      placeholder="0"
                    />
                
                  </div>
                </div>
              </div>
              <input type="hidden" id="objetivo_mensual" />

              <div class="row justify-content-end mt-5">
                <div class="col align-self-end">
                  <a
                    class="nxt__btn btn btn-info text-white ml-auto"
                    onclick="nextForm();"
                  >
                    Siguiente</a
                  >
                </div>
              </div>
            </div>
            <p class="text-center page">Pag 1/8</p>
          </fieldset>
          <fieldset
            class="active__form fieldsetform animate__animated imprimirpdf"
            id="form2"
          >
            <div class="sub__title__container">
              <h2>
                Para llegar a $<span class="valor_ganancia"></span> de utilidad
                al mes, tu Establecimiento debe vender $<span
                  class="valor_venta"
                ></span>
                al mes.
              </h2>
              <p class="text-dark">
                Para entender cómo llegas a $<span
                  class="valor_ganancia2"
                ></span>
                de utlidad al mes, puedes manejar el tenedor “promedio de tu
                carta”. Cambia el valor en promedio que consume un cliente en tu
                local por cada visita cambiando el “tenedor promedio” aquí
                abajo.
              </p>
            </div>

            <div class="input__container">
              <div class="row justify-content-md-center mb-5">
                <div class="col-md-4 col-xs-12">
                  <label for="tenedor_promedio"> Tenedor promedio</label>
                  <div class="input-group number-spinner">
                  
                    <input
                      type="text"
                      class="form-control text-right validar_input"
                      id="tenedor_promedio"
                      value=""
                      placeholder="0"
                      min="0"
                      max=""
                    />
                   
                  </div>
                </div>
              </div>

              <div class="buttons mt-5">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >
              </div>
              <p class="text-center page">Pag 2/8</p>
            </div>
          </fieldset>
          
          <fieldset
            class="active__form fieldsetform animate__animated imprimirpdf"
            id="form3"
          >
            <div class="sub__title__container">
              <h2>Tu plan actual</h2>
              <p class="text-dark">
                Para entender cómo llegas a $<span
                  class="valor_ganancia3"
                ></span>
                al mes, puedes manejar el tenedor promedio de tu carta y el
                volumen de personas que atiendes por dia en tu local. Aquí abajo
                puedes simular esto y ver el resultado.
              </p>
            </div>

            <div class="input__container">
              <div class="row align-items-center">
                <div class="col-xs-12 col-md-4">
               

                  <table style="padding-bottom: 0px" class="table">
                    <thead class="thead-dark">
                      <th></th>
                      <th>Clientes por dia</th>
                      <th>% de clientes a la semana</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="L">Lunes</td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="lunes"
                                class="tick-slider-pag-4 form-control validar_input clientes-dia"
                                type="text"
                                min="0"
                                max="500"
                                step="5"
                                value="100"
                                data-id="1"
                                data-tick-step="5"
                                data-tick-id="weightTicksc1"
                                data-value-id="weightValuec1"
                                data-progress-id="weightProgressc1"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMinc1"
                                data-max-label-id="weightLabelMaxc1"
                              />
                            </div>
                          </div>
                        </td>
                          <td data-label="Client x dia*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p
                                id="porcentaje-lunes"
                                class="tick-slider-pag-3  "
                                type="text"
                                min="0"
                                data-id="1"
                                max="100"
                                step="5"
                                value="20"
                                data-tick-step="5"
                                data-tick-id="weightTicks"
                                data-value-id="weightValue"
                                data-progress-id="weightProgress"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMin"
                                data-max-label-id="weightLabelMax"
                              readonly
                              ></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="M">Martes</td>
                          <td data-label="Client x dia*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="martes"
                                class="tick-slider-pag-3 validar_input clientes-dia"
                                type="text"
                                min="0"
                                max="100"
                                step="5"
                                value="20"
                                data-id="2"
              
                         
                              />
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p
                                id="porcentaje-martes"
                                class="tick-slider-pag-4 "
                                type="text"
                                min="0"
                                max="500"
                                step="5"
                                value="100"
                                data-id="2"
                           
                                readonly
                              ></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="M">Miercoles</td>
                          <td data-label="Client x dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="tick-slider">
                                <input
                                  id="miercoles"
                                  class="tick-slider-pag-3 validar_input clientes-dia"
                                  type="text"
                                  min="0"
                                  max="100"
                                  step="5"
                                  value="20"
                                  data-id="3"
                            
                                />
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p
                                id="porcentaje-miercoles"
                                class="tick-slider-pag-4 "
                                type="text"
                                min="0"
                                max="500"
                                step="5"
                                data-id="3"
                                value="100"
                    
                              ></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="J">Jueves</td>
                          <td data-label="Client x dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="tick-slider">
                                <input
                                  id="jueves"
                                  class="tick-slider-pag-3 validar_input clientes-dia"
                                  type="text"
                                  min="0"
                                  max="100"
                                  step="5"
                                  data-id="4"
                                  value="20"
                   
                                 
                                />
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p
                                id="porcentaje-jueves"
                                class="tick-slider-pag-4 "
                                type="text"
                                min="0"
                                max="500"
                                step="5"
                                value="100"
                                data-id="4"
           
                                readonly
                              ></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="V">Viernes</td>
                          <td data-label="Client x dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="tick-slider">
                                <input
                                  id="viernes"
                                  class="tick-slider-pag-3 validar_input form-control clientes-dia"
                                  type="text"
                                  min="0"
                                  max="100"
                                  step="5"
                                  value="20"
                                  data-id="5"
                              
                                />
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p
                                id="porcentaje-viernes"
                                class="tick-slider-pag-4 "
                                type="text"
                                min="0"
                                max="500"
                                step="5"
                                value="100"
                                data-id="5"
                                     ></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="S">Sabado</td>
                          <td data-label="Client x dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="pt-input-group">
                                <div class="tick-slider">
                                  <input
                                    id="sabado"
                                    class="tick-slider-pag-3 validar_input clientes-dia"
                                    type="text"
                                    min="0"
                                    max="100"
                                    step="5"
                                    data-id="6"
                                    value="0"
                            
                              
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p
                                id="porcentaje-sabado"
                                class="tick-slider-pag-4 "
                                type="text"
                                min="0"
                                max="500"
                                step="5"
                                data-id="6"
                                value="0"
                                data-tick-step="5"
                            
                                readonly
                              ></p>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td data-label="D">Domingo</td>
                          <td data-label="Client x dia*">
                          <div class="pt-input-group">
                            <div class="pt-input-group">
                              <div class="pt-input-group">
                                <div class="tick-slider">
                                  <input
                                    id="domingo"
                                    class="tick-slider-pag-3 validar_input  form-control clientes-dia"
                                    type="text"
                                    min="0"
                                    max="100"
                                    step="5"
                                    value="0"
                                    data-id="7"
                                 
                             
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <p
                                id="porcentaje-domingo"
                                class=""
                                type="text"
                                min="0"
                                max="500"
                                step="5"
                                value="0"
                                data-id="7"
                           
                                readonly
                              ></p>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Totales</td>
                        <td>   <input
                            type="text"
                            class="form-control validar_input  total_clientes_semana"
                          
                            id="total_clientes_semana"
                      
                            aria-label=""
                            aria-describedby="basic-addon1"
                            
                          />
                        </td>
                        <td>
                            <p
                       
                    
                            id="total_porcentaje_semana"
                            class="total_porcentaje_semana"
                            value="100"                      
                            aria-label=""
                            aria-describedby="basic-addon1"
                            >100%</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
                <div class="col-xs-12 col-md-8">
                  <div
                    class="row justify-content-center align-items-lg-center"
                    style="height: 15%"
                  >
                 
                        <input
                          type="hidden"
                          class="form-control text-right"
                          id="tenedor_promedio2"
                          value=""
                        />
                     
                  </div>

                  <div
                    class="imagen-grafico"
                    style="position: relative; height: 50vh; width: 38vw"
                  >
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>

              <div class="buttons">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >
              </div>
            </div>
            <p class="text-center page">Pag 3/8</p>
          </fieldset>
          <fieldset
            class="active__form fieldsetform animate__animated imprimirpdf"
            id="form4"
          >
            <div class="sub__title__container">
              <h2>¿Cuál es el porcentaje de costo en tu Establecimiento?</h2>
              <p class="text-dark">
                El porcentaje de costo es el porcentaje del precio de venta de
                tus productos que usas en matería prima. Por ejemplo si vendes
                tu plato promedio en <span class="tenedor_promedio_p9"></span>,
                y el costo de los componentes es <span class="valor_costo_promedio"></span>; tu porcetaje de costo es
                del 40%. Por lo general este indicador es del 35% o menos.
              </p>
            </div>

            <div class="input__container">
              <div class="row justify-content-md-center">
                <div class="col-md-4 col-xs-12">
                  <label for="tenedor_promedio"> Costo promedio %</label>
                  <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button
                        class="btn btn-info text-white"
                        onclick="click_input_costo()"
                        data-dir="up"
                      >
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input
                      type="text"
                      class="form-control validar_input text-center"
                      id="costo_promedio"
                      value="35"
                    />
                    <span class="input-group-btn">
                      <button
                        onclick="click_input_costo()"
                        class="btn btn-info text-white"
                        data-dir="dwn"
                      >
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center align-items-lg-center">
                <div class="col-xs-12 col-md-8">
                  <div
                    class="chart-container imagen-grafico-costo"
                    style="position: relative; height: 50vh; width: 40vw"
                  >
                    <canvas id="chart_costo_promedio"></canvas>
                  </div>
                </div>
              </div>

              <div class="buttons">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >

                <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
              </div>
              <p class="text-center page">Pag 4/8</p>
            </div>
          </fieldset>

          <fieldset
            class="active__form fieldsetform animate__animated"
            id="form5"
          >
            <div class="sub__title__container">
              <h2>
                ¿Cuánto es el sueldo mensual típico en tu localidad para un
                cajero/mesero?
              </h2>
              <p class="text-dark">
                Ingresa el valor que se paga en tu país para un mesero o cajero
                tipicamente en los cuadros aquí abajo.
              </p>
            </div>

            <div class="input__container">
              <div class="row justify-content-md-center mb-5">
                <div class="col-xs-12 col-md-6">
                  <label for="tenedor_promedio">
                    Sueldo promedio mes $ por empleado</label
                  >
                  <div class="input-group number-spinner">
                
                    <input
                      type="text"
                      min="0"
                      class="form-control text-right validar_input"
                      id="sueldo_promedio"
                      placeholder="0"
                      value=""
                    />
                  
                  </div>
                </div>
              </div>

              <div class="row justify-content-md-center mb-5">
                <div class="col-xs-12 col-md-6">
                  <label for="tenedor_promedio"
                    >Valor que pagas por beneficios sociales $ por empleado por
                    mes</label
                  >
                  <div class="input-group number-spinner">
                
                    <input
                    placeholder="0"
                      type="text"
                      min="0"
                      class="form-control text-right validar_input"
                      id="valor_beneficio_promedio"
                      value="0"
                    />
                  
                  </div>
                </div>
              </div>

              <div class="buttons">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >

                <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
              </div>
              <p class="text-center">Pag 5/8</p>
            </div>
          </fieldset>

          <fieldset
            class="active__form fieldsetform animate__animated imprimirpdf"
            id="form6"
          >
            <div class="sub__title__container">
              <h2>Ahora exploremos la cantidad de personal que necesitas.</h2>
              <p class="text-dark">
                De acuerdo a tu objetivo de ventas y a los estándar de la
                industria, puedes gastar hasta $<span
                  class="valor_ganancia4"
                ></span>
                en personal cada mes. Usa la siguiente tabla para proyectar la
                cantidad de empleados del Establecimiento.
              </p>
            </div>

            <div class="input__container">
              <div class="table-responsive">
                <table class="table table-sm table-hover ">
                  <thead class="thead-dark">
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
                      <td scope="Cajero " class="rowcol">Cajero</td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            data-id="1"
                            class="form-control cantidade cantidade1 validar_input"
                            id="cant_cajeros"
                            value="0"
                          />
                        </div>
                      </td>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="tsueldo1"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="tbeneficio1"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="totros1"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="ttotale1"
                            value="0"
                            readonly
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Cocina" class="rowcol">Cocina</td>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            data-id="2"
                            class="form-control cantidade cantidade2 validar_input"
                            id="cant_cocina"
                            value="0"
                          />
                        </div>
                      </td>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="tsueldo2"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="tbeneficio2"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="totros2"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="ttotale2"
                            value="0"
                            readonly
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Meseros" class="rowcol">Meseros</td>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            class="form-control cantidade cantidade3 validar_input"
                            data-id="3"
                            id="cant_meseros"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="tsueldo3"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="tbeneficio3"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="totros3"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="ttotale3"
                            value="0"
                            readonly
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Administrador" class="rowcol">Administrador</td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            data-id="4"
                            class="form-control cantidade cantidade4 validar_input"
                            id="cant_administrador"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="tsueldo4"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="tbeneficio4"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="totros4"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="ttotale4"
                            value="0"
                            readonly
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td scope="Otros" class="rowcol">Otros</td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            data-id="5"
                            class="form-control cantidade cantidade5 validar_input"
                            id="cant_otros"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="tsueldo5"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="tbeneficio5"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="totros5"
                            value="0"
                          />
                        </div>
                      </td>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="ttotale5"
                            value="0"
                            readonly
                          />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="row justify-content-md-center mb-5">
                <div class="col-xs-12 col-md-4">
                  <label for="tenedor_promedio"> Gasto empleado Mes $</label>
                  <div class="input-group number-spinner">
               
                    <input
                      type="text"
                      class="form-control text-right"
                      id="gastos_empleados"
                      value="0"
                    />
                    
                  </div>
                  <input type="hidden" name="" id="sueldo_promedio_final" />
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="checkdistribuiraut"
                      checked
                    />
                    <label class="custom-control-label" for="checkdistribuiraut"
                      >Distrubuir automaticamente</label
                    >
                  </div>
                </div>
              </div>

              <div class="buttons">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >

                <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
              </div>
              <p class="text-center page">Pag 6/8</p>
            </div>
          </fieldset>
          <fieldset
            class="active__form fieldsetform animate__animated imprimirpdf"
            id="form7"
          >
            <div class="sub__title__container">
              <h2>Finalmente, validemos como están tus gastos generales</h2>
              <p class="text-dark">
                Aquí calculamos los pagos que haces en gastos generales para
                mantener el negocio en marcha.
              </p>
            </div>

            <div class="input__container">
          
              <div class="table-responsive">
                <table
                  class="table table-hover "
                  id="tabla_gasto_general"
                >
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Descripción Rubro</th>
                      <th scope="col">Valor Mes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="  text-left pl-3"   >Arriendo Local</th>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="gastogral1"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="  text-left pl-3" >Otros Gastos generales</th>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control validar_input"
                            id="gastogral2"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <th  class="  text-left pl-3" >
                        Internet
                      </th>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="gastogral3"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="  text-left pl-3" >
                      Otros
                      </th>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="gastogral4"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <button data-toggle="tooltip" data-placement="top" title="Agregar nueva fila"
                onclick="agregar_fila_gastos()"
                class="btn btn-primary w-25 col-2 align-self-end float-right"
              >
                <i class="fa fa-plus" aria-hidden="true"></i>
              </button>
              <div class="row justify-content-md-center mb-5">
                <div class="col-xs-12 col-md-6">
                  <label for="tenedor_promedio"> Gatos $</label>
                  <div class="input-group number-spinner">
                   
                    <input
                      type="text"
                      class="form-control text-center"
                      id="total_gasto_general"
                      value="0"
                      readonly
                    />
                   
                  </div>
                </div>
              </div>
              <div class="buttons">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >

                <!-- a class="nxt__btn btn-info text-white" id="submitBtn" onclick="nextForm();">Siguiente</a -->
              </div>
              <p class="text-center page">Pag 7/8</p>
            </div>
          </fieldset>
          <fieldset
            class="active__form fieldsetform animate__animated imprimirpdf"
            id="form8"
          >
            <div class="sub__title__container">
              <h2>!Listo! Mira el plan financiero de tu Establecimiento.</h2>
              <p class="text-dark">
                Hemos generado con tus datos, el plan financiero/matemático de
                tu Establecimiento. Puedes explorar el plan dando click en cada
                sección del grafico. Adicionalmente puedes exportarlo a PDF o
                generar una cuenta gratuita para grabarlo y hacer seguimiento de
                su cumplimiento.
              </p>
            </div>

            <div class="input__container">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div
                    class="imagen-grafico-chartplanfinanciero d-flex flex-row"
                    style="position: relative; height: 45vh; width: 30vw"
                  >
                    <canvas id="chartplanfinanciero"></canvas>
                  </div>
                </div>

                <div class="col-xs-12 col-md-6">
                  <div class="row justify-content-md-center mb-5 pl-4">
                    <div class="col-md-6 col-xs-12">
                      <h2 class="titulo_utilidad">Tu Utilidad</h2>
                      <h2 class="form-porcentaje titulo-porcentaje">18%</h2>
                      <h2 class="form-porcentaje titulo-cantidad">$4,200</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-md-center mb-5">
                <div class="col-md-4 col-xs-4">
                  <button
                    type="button"
                    class="btn btn-info"
                    onclick="imprimirpdf()"
                  >
                    Descargar plan financiero PDF
                  </button>
                </div>
                <div class="col-md-4 col-xs-4">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    onclick="enviar_correo()"
                  >
                    Enviar Correo
                  </button>
                </div>
                <div class="col-md-4 col-xs-4">
                  <a type="button" href="login.html" class="btn btn-primary"
                    >Guadar plan para seguimiento</a
                  >
                </div>
              </div>

              <div class="buttons">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >
              </div>
            </div>
            <p class="text-center page">Pag 8/8</p>
          </fieldset>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
      crossorigin="anonymous"
    ></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript" src="#"></script>
    <script type="text/javascript">
      const nxtBtn = document.querySelector("#submitBtn");
    </script>

    <script src="app.js?v=1.0.1"></script>

    <script type="text/javascript" src="#"
    >
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>
  </body>
</html>
