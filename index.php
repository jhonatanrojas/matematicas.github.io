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
    <link rel="stylesheet" href="style.css" />

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
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="up">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input
                      type="number"
                      min="0"
                      class="form-control text-center form-control-sm"
                      id="rentabilidad"
                      placeholder="Ingrese un valor"
                    />
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="dwn">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
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
                <div class="col-md-6 col-xs-12">
                  <label for="tenedor_promedio"> Tenedor promedio</label>
                  <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="up">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input
                      type="number"
                      class="form-control text-center"
                      id="tenedor_promedio"
                      value=""
                      placeholder="Ingrese un valor"
                      min="0"
                      max=""
                    />
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="dwn">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
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
          <!-- fieldset
            style="display: none"
            class="active__form fieldsetform animate__animated"
            id="form3"
          >
            <div class="sub__title__container">
              <h2>Objetivos por dia</h2>
              <p class="text-dark">
                En base a tu tenedor promedio, hemos calculado cuantos clientes
                debes atender cada día de la semana para que llegues al
                objetivo. Ajusta los valores para reflejar mejor la realidad de
                tu plan de Establecimiento.
              </p>
            </div>

            <div class="input__container">
              <div class="row">
                <div class="col-md-6">
                  <div class="pt-input-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                          Total % de clientes semanales</span
                        >
                      </div>
                      <input
                        type="number"
                        class="form-control"
                        readonly
                        id="sumaTotal"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"
                        >Total clientes semanales</span
                      >
                    </div>
                    <input
                      type="number"
                      class="form-control"
                      id="clienttotal"
                      placeholder="Username"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                    />
                  </div>
                </div>
              </div>

              <table class="table">
                <thead>
                  <th></th>
                  <th>% de clientes por dia</th>
                  <th>Clientes por dia</th>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="L">Lunes</td>
                      <td data-label="Client x dia*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div id="weightLabelMin" class="tick-slider-label">
                              0
                            </div>
                            <div
                              id="weightLabelMax"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValue"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgress"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicks"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="porcentaje_m1"
                            class="tabla1 tick-slider-input"
                            type="range"
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
                          />
                        </div>
                      </div>
                    </td>
                      <td data-label="%*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div
                              id="weightLabelMinc1"
                              class="tick-slider-label"
                            >
                              0
                            </div>
                            <div
                              id="weightLabelMaxc1"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValuec1"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgressc1"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicksc1"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="clientes_l1"
                            class="tabla1 tick-slider-input-2"
                            type="range"
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
                  </tr>

                  <tr>
                    <td data-label="M">Martes</td>
                      <td data-label="Client x dia*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div id="weightLabelMin2" class="tick-slider-label">
                              0
                            </div>
                            <div
                              id="weightLabelMax2"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValue2"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgress"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicks2"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="porcentaje_m2"
                            class="tabla1 tick-slider-input"
                            type="range"
                            min="0"
                            max="100"
                            step="5"
                            value="20"
                            data-id="2"
                            data-tick-step="5"
                            data-tick-id="weightTicks2"
                            data-value-id="weightValue2"
                            data-progress-id="weightProgress"
                            data-handle-size="18"
                            data-min-label-id="weightLabelMin2"
                            data-max-label-id="weightLabelMax2"
                          />
                        </div>
                      </div>
                    </td>
                      <td data-label="%*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div
                              id="weightLabelMinc2"
                              class="tick-slider-label"
                            >
                              0
                            </div>
                            <div
                              id="weightLabelMaxc2"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValuec2"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgressc2"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicksc2"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="clientes_l2"
                            class="tick-slider-input-2"
                            type="range"
                            min="0"
                            max="500"
                            step="5"
                            value="100"
                            data-id="2"
                            data-tick-step="5"
                            data-tick-id="weightTicksc2"
                            data-value-id="weightValuec2"
                            data-progress-id="weightProgressc2"
                            data-handle-size="18"
                            data-min-label-id="weightLabelMinc2"
                            data-max-label-id="weightLabelMaxc2"
                          />
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
                            <div class="tick-slider-value-container">
                              <div
                                id="weightLabelMin3"
                                class="tick-slider-label"
                              >
                                0
                              </div>
                              <div
                                id="weightLabelMax3"
                                class="tick-slider-label"
                              ></div>
                              <div
                                id="weightValue3"
                                class="tick-slider-value"
                              ></div>
                            </div>
                            <div class="tick-slider-background"></div>
                            <div
                              id="weightProgress"
                              class="tick-slider-progress"
                            ></div>
                            <div
                              id="weightTicks3"
                              class="tick-slider-tick-container"
                            ></div>
                            <input
                              id="porcentaje_m3"
                              class="tick-slider-input"
                              type="range"
                              min="0"
                              max="100"
                              step="5"
                              value="20"
                              data-id="3"
                              data-tick-step="5"
                              data-tick-id="weightTicks3"
                              data-value-id="weightValue3"
                              data-progress-id="weightProgress"
                              data-handle-size="18"
                              data-min-label-id="weightLabelMin3"
                              data-max-label-id="weightLabelMax3"
                            />
                          </div>
                        </div>
                      </div>
                    </td>
                      <td data-label="%*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div
                              id="weightLabelMinc3"
                              class="tick-slider-label"
                            >
                              0
                            </div>
                            <div
                              id="weightLabelMaxc3"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValuec3"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgressc3"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicksc3"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="clientes_l3"
                            class="tick-slider-input-2"
                            type="range"
                            min="0"
                            max="500"
                            step="5"
                            data-id="3"
                            value="100"
                            data-tick-step="5"
                            data-tick-id="weightTicksc3"
                            data-value-id="weightValuec3"
                            data-progress-id="weightProgressc3"
                            data-handle-size="18"
                            data-min-label-id="weightLabelMinc3"
                            data-max-label-id="weightLabelMaxc3"
                          />
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
                            <div class="tick-slider-value-container">
                              <div
                                id="weightLabelMin4"
                                class="tick-slider-label"
                              >
                                0
                              </div>
                              <div
                                id="weightLabelMax4"
                                class="tick-slider-label"
                              ></div>
                              <div
                                id="weightValue4"
                                class="tick-slider-value"
                              ></div>
                            </div>
                            <div class="tick-slider-background"></div>
                            <div
                              id="weightProgress"
                              class="tick-slider-progress"
                            ></div>
                            <div
                              id="weightTicks4"
                              class="tick-slider-tick-container"
                            ></div>
                            <input
                              id="porcentaje_m4"
                              class="tick-slider-input"
                              type="range"
                              min="0"
                              max="100"
                              step="5"
                              data-id="4"
                              value="20"
                              data-tick-step="5"
                              data-tick-id="weightTicks4"
                              data-value-id="weightValue4"
                              data-progress-id="weightProgress"
                              data-handle-size="18"
                              data-min-label-id="weightLabelMin4"
                              data-max-label-id="weightLabelMax4"
                            />
                          </div>
                        </div>
                      </div>
                    </td>
                      <td data-label="%*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div
                              id="weightLabelMinc4"
                              class="tick-slider-label"
                            >
                              0
                            </div>
                            <div
                              id="weightLabelMaxc4"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValuec4"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgressc4"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicksc4"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="clientes_l4"
                            class="tick-slider-input-2"
                            type="range"
                            min="0"
                            max="500"
                            step="5"
                            value="100"
                            data-id="4"
                            data-tick-step="5"
                            data-tick-id="weightTicksc4"
                            data-value-id="weightValuec4"
                            data-progress-id="weightProgressc4"
                            data-handle-size="18"
                            data-min-label-id="weightLabelMinc4"
                            data-max-label-id="weightLabelMaxc4"
                          />
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
                            <div class="tick-slider-value-container">
                              <div
                                id="weightLabelMin5"
                                class="tick-slider-label"
                              >
                                0
                              </div>
                              <div
                                id="weightLabelMax5"
                                class="tick-slider-label"
                              ></div>
                              <div
                                id="weightValue5"
                                class="tick-slider-value"
                              ></div>
                            </div>
                            <div class="tick-slider-background"></div>
                            <div
                              id="weightProgress5"
                              class="tick-slider-progress"
                            ></div>
                            <div
                              id="weightTicks5"
                              class="tick-slider-tick-container"
                            ></div>
                            <input
                              id="porcentaje_m5"
                              class="tick-slider-input"
                              type="range"
                              min="0"
                              max="100"
                              step="5"
                              value="20"
                              data-id="5"
                              data-tick-step="5"
                              data-tick-id="weightTicks5"
                              data-value-id="weightValue5"
                              data-progress-id="weightProgress5"
                              data-handle-size="18"
                              data-min-label-id="weightLabelMin5"
                              data-max-label-id="weightLabelMax5"
                            />
                          </div>
                        </div>
                      </div>
                    </td>
                      <td data-label="%*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div
                              id="weightLabelMinc5"
                              class="tick-slider-label"
                            >
                              0
                            </div>
                            <div
                              id="weightLabelMaxc5"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValuec5"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgressc5"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicksc5"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="clientes_l5"
                            class="tick-slider-input-2"
                            type="range"
                            min="0"
                            max="500"
                            step="5"
                            value="100"
                            data-id="5"
                            data-tick-step="5"
                            data-tick-id="weightTicksc5"
                            data-value-id="weightValuec5"
                            data-progress-id="weightProgressc5"
                            data-handle-size="18"
                            data-min-label-id="weightLabelMinc5"
                            data-max-label-id="weightLabelMaxc5"
                          />
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
                              <div class="tick-slider-value-container">
                                <div
                                  id="weightLabelMin6"
                                  class="tick-slider-label"
                                >
                                  0
                                </div>
                                <div
                                  id="weightLabelMax6"
                                  class="tick-slider-label"
                                ></div>
                                <div
                                  id="weightValue6"
                                  class="tick-slider-value"
                                ></div>
                              </div>
                              <div class="tick-slider-background"></div>
                              <div
                                id="weightProgress6"
                                class="tick-slider-progress"
                              ></div>
                              <div
                                id="weightTicks6"
                                class="tick-slider-tick-container"
                              ></div>
                              <input
                                id="porcentaje_m6"
                                class="tick-slider-input"
                                type="range"
                                min="0"
                                max="100"
                                step="5"
                                data-id="6"
                                value="0"
                                data-tick-step="5"
                                data-tick-id="weightTicks6"
                                data-value-id="weightValue6"
                                data-progress-id="weightProgress6"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMin6"
                                data-max-label-id="weightLabelMax6"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                      <td data-label="%*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div
                              id="weightLabelMinc6"
                              class="tick-slider-label"
                            >
                              0
                            </div>
                            <div
                              id="weightLabelMaxc6"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValuec6"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgressc6"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicksc6"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="clientes_l6"
                            class="tick-slider-input-2"
                            type="range"
                            min="0"
                            max="500"
                            step="5"
                            data-id="6"
                            value="0"
                            data-tick-step="5"
                            data-tick-id="weightTicksc6"
                            data-value-id="weightValuec6"
                            data-progress-id="weightProgressc6"
                            data-handle-size="18"
                            data-min-label-id="weightLabelMinc6"
                            data-max-label-id="weightLabelMaxc6"
                          />
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
                              <div class="tick-slider-value-container">
                                <div
                                  id="weightLabelMin7"
                                  class="tick-slider-label"
                                >
                                  0
                                </div>
                                <div
                                  id="weightLabelMax7"
                                  class="tick-slider-label"
                                ></div>
                                <div
                                  id="weightValue7"
                                  class="tick-slider-value"
                                ></div>
                              </div>
                              <div class="tick-slider-background"></div>
                              <div
                                id="weightProgress7"
                                class="tick-slider-progress"
                              ></div>
                              <div
                                id="weightTicks7"
                                class="tick-slider-tick-container"
                              ></div>
                              <input
                                id="porcentaje_m7"
                                class="tick-slider-input"
                                type="range"
                                min="0"
                                max="100"
                                step="5"
                                value="0"
                                data-id="7"
                                data-tick-step="5"
                                data-tick-id="weightTicks7"
                                data-value-id="weightValue7"
                                data-progress-id="weightProgress7"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMin7"
                                data-max-label-id="weightLabelMax7"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                      <td data-label="%*">
                      <div class="pt-input-group">
                        <div class="tick-slider">
                          <div class="tick-slider-value-container">
                            <div
                              id="weightLabelMinc7"
                              class="tick-slider-label"
                            >
                              0
                            </div>
                            <div
                              id="weightLabelMaxc7"
                              class="tick-slider-label"
                            ></div>
                            <div
                              id="weightValuec7"
                              class="tick-slider-value"
                            ></div>
                          </div>
                          <div class="tick-slider-background"></div>
                          <div
                            id="weightProgressc7"
                            class="tick-slider-progress"
                          ></div>
                          <div
                            id="weightTicksc7"
                            class="tick-slider-tick-container"
                          ></div>
                          <input
                            id="clientes_l7"
                            class="tick-slider-input-2"
                            type="range"
                            min="0"
                            max="500"
                            step="5"
                            value="0"
                            data-id="7"
                            data-tick-step="5"
                            data-tick-id="weightTicksc7"
                            data-value-id="weightValuec7"
                            data-progress-id="weightProgressc7"
                            data-handle-size="18"
                            data-min-label-id="weightLabelMinc7"
                            data-max-label-id="weightLabelMaxc7"
                          />
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <p id="mensajeSuma"></p>
              <br />

              <div class="buttons">
                <a class="prev__btn btn btn btn-secondary" onclick="prevForm();"
                  >Regresar</a
                >
                <a class="nxt__btn btn-info text-white" onclick="nextForm();"
                  >Siguiente</a
                >
              </div>
              <p class="text-center page">Pag 3/8</p>
            </div>
          </fieldset -->
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
                    <thead>
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
                                id="clientes_c1"
                                class="tick-slider-pag-4 form-control"
                                type="number"
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
                              <input
                                id="porcentaje_c1"
                                class="tick-slider-pag-3"
                                type="number"
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
                              />
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
                                id="clientes_c2"
                                class="tick-slider-pag-3"
                                type="number"
                                min="0"
                                max="100"
                                step="5"
                                value="20"
                                data-id="2"
                                data-tick-step="5"
                                data-tick-id="weightTicks2"
                                data-value-id="weightValue2"
                                data-progress-id="weightProgress"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMin2"
                                data-max-label-id="weightLabelMax2"
                         
                              />
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="porcentaje_c2"
                                class="tick-slider-pag-4"
                                type="number"
                                min="0"
                                max="500"
                                step="5"
                                value="100"
                                data-id="2"
                                data-tick-step="5"
                                data-tick-id="weightTicksc2"
                                data-value-id="weightValuec2"
                                data-progress-id="weightProgressc2"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMinc2"
                                data-max-label-id="weightLabelMaxc2"
                                readonly
                              />
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
                                  id="clientes_c3"
                                  class="tick-slider-pag-3"
                                  type="number"
                                  min="0"
                                  max="100"
                                  step="5"
                                  value="20"
                                  data-id="3"
                                  data-tick-step="5"
                                  data-tick-id="weightTicks3"
                                  data-value-id="weightValue3"
                                  data-progress-id="weightProgress"
                                  data-handle-size="18"
                                  data-min-label-id="weightLabelMin3"
                                  data-max-label-id="weightLabelMax3"
                           
                                />
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="porcentaje_c3"
                                class="tick-slider-pag-4"
                                type="number"
                                min="0"
                                max="500"
                                step="5"
                                data-id="3"
                                value="100"
                                data-tick-step="5"
                                data-tick-id="weightTicksc3"
                                data-value-id="weightValuec3"
                                data-progress-id="weightProgressc3"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMinc3"
                                data-max-label-id="weightLabelMaxc3"
                                readonly
                              />
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
                                  id="clientes_c4"
                                  class="tick-slider-pag-3"
                                  type="number"
                                  min="0"
                                  max="100"
                                  step="5"
                                  data-id="4"
                                  value="20"
                                  data-tick-step="5"
                                  data-tick-id="weightTicks4"
                                  data-value-id="weightValue4"
                                  data-progress-id="weightProgress"
                                  data-handle-size="18"
                                  data-min-label-id="weightLabelMin4"
                                  data-max-label-id="weightLabelMax4"
                                 
                                />
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="porcentaje_c4"
                                class="tick-slider-pag-4"
                                type="number"
                                min="0"
                                max="500"
                                step="5"
                                value="100"
                                data-id="4"
                                data-tick-step="5"
                                data-tick-id="weightTicksc4"
                                data-value-id="weightValuec4"
                                data-progress-id="weightProgressc4"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMinc4"
                                data-max-label-id="weightLabelMaxc4"
                                readonly
                              />
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
                                  id="clientes_c5"
                                  class="tick-slider-pag-3"
                                  type="number"
                                  min="0"
                                  max="100"
                                  step="5"
                                  value="20"
                                  data-id="5"
                                  data-tick-step="5"
                                  data-tick-id="weightTicks5"
                                  data-value-id="weightValue5"
                                  data-progress-id="weightProgress5"
                                  data-handle-size="18"
                                  data-min-label-id="weightLabelMin5"
                                  data-max-label-id="weightLabelMax5"
                          
                                />
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="porcentaje_c5"
                                class="tick-slider-pag-4"
                                type="number"
                                min="0"
                                max="500"
                                step="5"
                                value="100"
                                data-id="5"
                                data-tick-step="5"
                                data-tick-id="weightTicksc5"
                                data-value-id="weightValuec5"
                                data-progress-id="weightProgressc5"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMinc5"
                                data-max-label-id="weightLabelMaxc5"
                                readonly
                              />
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
                                    id="clientes_c6"
                                    class="tick-slider-pag-3"
                                    type="number"
                                    min="0"
                                    max="100"
                                    step="5"
                                    data-id="6"
                                    value="0"
                                    data-tick-step="5"
                                    data-tick-id="weightTicks6"
                                    data-value-id="weightValue6"
                                    data-progress-id="weightProgress6"
                                    data-handle-size="18"
                                    data-min-label-id="weightLabelMin6"
                                    data-max-label-id="weightLabelMax6"
                              
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="porcentaje_c6"
                                class="tick-slider-pag-4"
                                type="number"
                                min="0"
                                max="500"
                                step="5"
                                data-id="6"
                                value="0"
                                data-tick-step="5"
                                data-tick-id="weightTicksc6"
                                data-value-id="weightValuec6"
                                data-progress-id="weightProgressc6"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMinc6"
                                data-max-label-id="weightLabelMaxc6"
                                readonly
                              />
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
                                    id="clientes_c7"
                                    class="tick-slider-pag-3"
                                    type="number"
                                    min="0"
                                    max="100"
                                    step="5"
                                    value="0"
                                    data-id="7"
                                    data-tick-step="5"
                                    data-tick-id="weightTicks7"
                                    data-value-id="weightValue7"
                                    data-progress-id="weightProgress7"
                                    data-handle-size="18"
                                    data-min-label-id="weightLabelMin7"
                                    data-max-label-id="weightLabelMax7"
                             
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                          <td data-label="%*">
                          <div class="pt-input-group">
                            <div class="tick-slider">
                              <input
                                id="porcentaje_c7"
                                class="tick-slider-pag-4"
                                type="number"
                                min="0"
                                max="500"
                                step="5"
                                value="0"
                                data-id="7"
                                data-tick-step="5"
                                data-tick-id="weightTicksc7"
                                data-value-id="weightValuec7"
                                data-progress-id="weightProgressc7"
                                data-handle-size="18"
                                data-min-label-id="weightLabelMinc7"
                                data-max-label-id="weightLabelMaxc7"
                                readonly
                              />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Totales</td>
                        <td>   <input
                            type="number"
                            class="form-control"
                          
                            id="clienttotal2"
                      
                            aria-label=""
                            aria-describedby="basic-addon1"
                            
                          />
                        </td>
                        <td>
                            <input
                            type="number"
                            class="form-control"
                            readonly
                            id="sumaTotal2"
                            value="100"                      
                            aria-label=""
                            aria-describedby="basic-addon1"
                            readonly
                          />
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
                    <div class="col-6">
                      <label for="tenedor_promedio2"> Tenedor promedio</label>
                      <div class="input-group number-spinner">
                        <span class="input-group-btn">
                          <button
                            onclick="click_tenedor_promedio() "
                            class="btn btn-info text-white"
                            data-dir="up"
                          >
                            <i class="fa fa-plus" aria-hidden="true"></i>
                          </button>
                        </span>
                        <input
                          type="text"
                          class="form-control text-center"
                          id="tenedor_promedio2"
                          value=""
                        />
                        <span class="input-group-btn">
                          <button
                            onclick="click_tenedor_promedio() "
                            class="btn btn-info text-white"
                            data-dir="dwn"
                          >
                            <i class="fa fa-minus" aria-hidden="true"></i>
                          </button>
                        </span>
                      </div>
                    </div>
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
                      class="form-control text-center"
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
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="up">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input
                      type="number"
                      min="0"
                      class="form-control text-center"
                      id="sueldo_promedio"
                      placeholder="Ingrese un valor"
                      value=""
                    />
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="dwn">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
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
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="up">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input
                    placeholder="Ingrese un valor"
                      type="number"
                      min="0"
                      class="form-control text-center"
                      id="valor_beneficio_promedio"
                      value="0"
                    />
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="dwn">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
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
                <table class="table table-sm table-hover table-striped">
                  <thead>
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
                      <th scope="row">Cajero</th>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            data-id="1"
                            class="form-control cantidade cantidade1"
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
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Cocina</th>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            data-id="2"
                            class="form-control cantidade cantidade2"
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
                            type="number"
                            class="form-control"
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
                            type="number"
                            class="form-control"
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
                            type="number"
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
                            type="number"
                            class="form-control"
                            id="ttotale2"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Meseros</th>

                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            class="form-control cantidade cantidade3"
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
                            type="number"
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
                            type="number"
                            class="form-control"
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
                            type="number"
                            class="form-control"
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
                            type="number"
                            class="form-control"
                            id="ttotale3"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Administrador</th>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="number"
                            data-id="4"
                            class="form-control cantidade cantidade4"
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
                            type="number"
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
                            type="number"
                            class="form-control"
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
                            type="number"
                            class="form-control"
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
                            type="number"
                            class="form-control"
                            id="ttotale4"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Otros</th>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="number"
                            data-id="5"
                            class="form-control cantidade cantidade5"
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
                            type="number"
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
                            type="number"
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
                            type="number"
                            class="form-control"
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
                            type="number"
                            class="form-control"
                            id="ttotale5"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="row justify-content-md-center mb-5">
                <div class="col-xs-12 col-md-6">
                  <label for="tenedor_promedio"> Gasto empleado Mes $</label>
                  <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button
                        class="btn btn-info text-white btn_gatos_empleado"
                        data-dir="up"
                      >
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input
                      type="number"
                      class="form-control text-center"
                      id="gastos_empleados"
                      value="0"
                    />
                    <span class="input-group-btn">
                      <button
                        class="btn btn-info text-white btn_gatos_empleado"
                        data-dir="dwn"
                      >
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
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
              <button
                onclick="agregar_fila_gastos()"
                class="btn btn-primary w-25 col-2 align-self-end float-right"
              >
                <i class="fa fa-plus" aria-hidden="true"></i>
              </button>
              <div class="table-responsive">
                <table
                  class="table table-hover table-striped"
                  id="tabla_gasto_general"
                >
                  <thead>
                    <tr>
                      <th scope="col">Descripción Rubro</th>
                      <th scope="col">Valor Mes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Arriendo Local</th>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="number"
                            class="form-control"
                            id="gastogral1"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Otros Gastos generales</th>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="gastogral2"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"> </span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="textotrogastosg2"
                            value="Internet"
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
                            id="gastogral3"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="textotrogastosg3"
                            value="Otros"
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
                            id="gastogral4"
                            value="0"
                          />
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="row justify-content-md-center mb-5">
                <div class="col-xs-12 col-md-6">
                  <label for="tenedor_promedio"> Gatos $</label>
                  <div class="input-group number-spinner">
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="up">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input
                      type="text"
                      class="form-control text-center"
                      id="total_gasto_general"
                      value="0"
                      readonly
                    />
                    <span class="input-group-btn">
                      <button class="btn btn-info text-white" data-dir="dwn">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
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
              <div class="row" style="overflow: auto; max-height: 55vh">
                <div class="col-xs-12 col-md-6">
                  <div
                    class="imagen-grafico-chartplanfinanciero d-flex flex-row"
                    style="position: relative; height: 35vh; width: 32vw"
                  >
                    <canvas id="chartplanfinanciero"></canvas>
                  </div>
                </div>

                <div class="col-xs-12 col-md-6">
                  <div class="row justify-content-md-center mb-5">
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

    <script src="app.js"></script>

    <script type="text/javascript" src="#"></script>
  </body>
</html>