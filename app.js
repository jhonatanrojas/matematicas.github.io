const formIds = ["#form1", "#form2", "#form3", "#form4", "#form5","#form6","#form7","#form8"];
const iconIds = ["#icon1", "#icon2", "#icon3", "#icon4", "#icon5", "#icon6","#icon7","#icon8"];
const SEMANAS_MES = 4;
let viewId = 1;
const forms = formIds.map((id) => document.querySelector(id));
const icons = iconIds.map((id) => document.querySelector(id));
var VALIDACION={
  pasa:true,
  msg:""
};
window.onload = init;
window.addEventListener("resize", onResize);

/**EVENTOS */
const tenenedo_promedio_2 = document.getElementById("tenedor_promedio2");
tenenedo_promedio_2.addEventListener("input", event_tenedor_promedio);
const rentabilidad = document.querySelector("#rentabilidad");
const costoPromedioInput = document.getElementById("costo_promedio");
rentabilidad.addEventListener("change", (event) => {
  const valor_ganancia = document.querySelector(".valor_ganancia");
  const valor_venta = document.querySelector(".valor_venta");


  document.querySelector("#objetivo_mensual").value = Math.round(
    event.target.value * 5
  );
  document.querySelector(".valor_ganancia2").innerHTML = event.target.value;
  document.querySelector(".valor_ganancia3").innerHTML = event.target.value;

  valor_ganancia.innerHTML = `${event.target.value}`;
  valor_venta.innerHTML = ` ${event.target.value * 5}`;
});

var cgastos_empleadosInput = document.getElementById("gastos_empleados");
var btn_gatos_empleado =  document.querySelector(".btn_gatos_empleado");
var sueldo_promedio_finalInput = document.getElementById("sueldo_promedio_final").value;
cgastos_empleadosInput.addEventListener("change", change_input_empleado);
const inputs_clienttotal = document.getElementById("clienttotal");
const inputs_clienttotal_2 = document.getElementById("total_clientes_semana");
//inputs_clienttotal.addEventListener("keyup", event_input_total_semanal);
inputs_clienttotal_2.addEventListener("keyup", event_input_total_semanal2);


// Obtenemos todos los campos de entrada con la clase "calculocliente"
var campos = document.getElementsByClassName("calculocliente");

// Iteramos sobre todos los campos de entrada y agregamos un evento "change"
for (var i = 0; i < campos.length; i++) {
  campos[i].addEventListener("change", function () {
    // Calculamos la suma de los valores de todos los campos de entrada
    var total = 0;
    for (var j = 0; j < campos.length; j++) {
      // Verificamos si el valor del campo es numérico
      if (!isNaN(parseFloat(campos[j].value))) {
        total += Math.round(parseFloat(campos[j].value));
      }
    }

    // Establecemos la suma total en el campo de entrada con el id "clienttotal"
    document.querySelector("#clienttotal").value = total;
    document.querySelector("#total_clientes_semana").value = total;
  });
}

// Obtener los campos de entrada
const camposRange = document.getElementsByClassName("tick-slider-input");
const camposRangeClientes = document.getElementsByClassName("tick-slider-input-2");
const camposRange2 = document.getElementsByClassName("tick-slider-pag-3");
const camposRangeClientes2 = document.getElementsByClassName("tick-slider-pag-4");

// Convertir el objeto NodeList en un array
const camposRangeArrayClientes = Array.from(camposRangeClientes);
const camposRangeArray2 = Array.from(camposRange2);

const camposRangeArray = Array.from(camposRange);


///Obtener todos los input de clientes y porcentaje
const clientes = document.querySelectorAll('input[id^="clientes_l"]');
const porcentajes = document.querySelectorAll('input[id^="porcentaje_m"]');
const inputs_gatos_g = document.querySelectorAll('input[id^="gastogral"]');
const camposRangeArraygatos_g = Array.from(inputs_gatos_g);
///Obtener todos los input de clientes y porcentaje
const clientes2 = document.querySelectorAll('input[id^="clientes_c"]');
const camposRangeArrayClientes2 = Array.from(clientes2);
const porcentajes2 = document.querySelectorAll('input[id^="porcentaje-"]');
const camposRangeArrayPorcentaje = Array.from(porcentajes2);

// Obtener el input de total de clientes y asignar evento de cambio
const totalClientes = document.querySelector("#clienttotal");
const totalClientes2 = document.querySelector("#clienttotal2");
//totalClientes.addEventListener("change", actualizarPorcentajes);
//totalClientes2.addEventListener("change", actualizarPorcentajeTabla_2);
// Asignar evento de cambio para cada input de clientes y porcentaje

/*
for (let i = 0; i < clientes2.length; i++) {
  //clientes[i].addEventListener("change", actualizarPorcentaje);
  clientes2[i].addEventListener("keyup", actualizarPorcentajeTabla_2);
 
}*/

// Asignar el evento "input" a cada campo de entrada

/*for (let campo of camposRangeArray) {
  campo.addEventListener("input", actualizarSumaCampos);
}

for (let campo of camposRangeArrayClientes) {
  campo.addEventListener("input", actualizarSumaCamposClientes);
}*/
for (let campo of camposRangeArraygatos_g) {
  campo.addEventListener("input", change_gastos_inputs);
}




/**GRAFICOS */


const objetivoInput = document.getElementById("sumaTotal2");
const planInput = document.getElementById("clienttotal2");
const ctx = document.getElementById("myChart");
const chart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Objetivo", "Plan actual"],
    datasets: [
      {
        label:[],
        data: [0, 0],
        backgroundColor: ["rgba(54, 162, 235, 0.5)", "rgba(75, 192, 192, 0.5)"],
        borderWidth: 1,
      },
    ],
  },
  options: {
    plugins: {
    legend: {
      display: false,
    },
  },
    
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
const objetivo = 65; // valor del objetivo
const costo = 35; // valor del costo
const total = objetivo + costo; // valor total

const porcentajeObjetivo = Math.round((objetivo / total) * 100);
const porcentajeCosto = Math.round((costo / total) * 100);




const ctx_chartplanfinanciero =  document.getElementById("chartplanfinanciero")
.getContext("2d");

const chartDataplanfinanciero  = {
  labels: ['Objetivo', 'Plan Actual'],
  datasets: [
    {
      label: 'Objetivo',
      data: [100],
      backgroundColor: 'rgba(75, 192, 192, 0.6)',
      stack: 'Stack 0'
    },
    {
      label: 'Costo',
      data: [null, 35],
      backgroundColor: 'rgba(255, 99, 132, 0.6)',
      stack: 'Stack 1'
    },
    {
      label: 'Gastos generales',
      data: [null, 20],
      backgroundColor: 'rgba(255, 206, 86, 0.6)',
      stack: 'Stack 1'
    },
    {
      label: 'Gastos de personal',
      data: [null, 25],
      backgroundColor: 'rgba(153, 102, 255, 0.6)',
      stack: 'Stack 1'
    },
    {
      label: 'Utilidad',
      data: [null, 20],
      backgroundColor: 'rgba(54, 162, 235, 0.6)',
      stack: 'Stack 1'
    }
  ]
};
const chartOptionsplanfinanciero = {
  indexAxis: 'x',
  plugins: {
    tooltip: {
      callbacks: {
        label: function (context) {
          let label = context.dataset.label || '';
          if (tooltips[label] && context.parsed.x !== null) {
            label = tooltips[label];
          }
          if (context.parsed.x !== null) {
            label += ': ' + context.parsed.x;
          }
          return label;
        }
      }
    }
  },
  scales: {
    x: {
      stacked: true,
    },
    y: {
      stacked: true
    }
  }
};

const chartplanfinanciero  = new Chart(ctx_chartplanfinanciero, {
  type: "bar",
  data: chartDataplanfinanciero,
  options: chartOptionsplanfinanciero,
});


$('#chartplanfinanciero').on('click', function(e) {
  var activePoints = chartplanfinanciero.getElementsAtEventForMode(e, 'nearest', { intersect: true }, true);
  var firstPoint = activePoints[0];
  if (firstPoint !== undefined) {
      var label = chartplanfinanciero.data.labels[firstPoint.datasetIndex];
   
      var value = chartplanfinanciero.data.datasets[firstPoint.datasetIndex];
      console.log(value.label)
      click_actulizar_text_grafico(value.label)
   
  }
});

const ctx_costo_promedio = document
  .getElementById("chart_costo_promedio")
  .getContext("2d");


  
  

const chartDatactcosto_promedio = {
  labels: ['Costo de Establecimiento'],
  datasets: [
   
 
    {
      label: "% de Costo Plan",
      data: [35],
      backgroundColor: "rgba(75, 192, 192, 0.5)",
    },
    {
      label: "%Costo Industria",
      data: [35],
      backgroundColor: "rgba(47, 234, 163, 0.7)",
    },
  ],
};



const chartOptionsCosto = {
  scales: {
    y: {
      beginAtZero: true,
    },
  },
  plugins: {
    tooltip: {
      callbacks: {
        label: function (context) {
          const label = context.dataset.label || "";

          if (label) {
            return label + ": " + context.formattedValue + "%";
          } else {
            return context.formattedValue + "%";
          }
        },
      },
    },
  },
};


const chartCosto = new Chart(ctx_costo_promedio, {
  type: "bar",
  data: chartDatactcosto_promedio,
  options: chartOptionsCosto,
});





costoPromedioInput.addEventListener("input", () => {
  console.log('costoPromedioInput')
  const nuevoCostoPromedio = parseFloat(costoPromedioInput.value);
  const objetivo_mensual  = document.querySelector("#objetivo_mensual").value;
  const tenedor_promedio2  = document.querySelector("#tenedor_promedio2").value;
  
  actualizarGraficoCosto(nuevoCostoPromedio);

  if (nuevoCostoPromedio > 35) {
    const porcentajecosto= Math.floor((nuevoCostoPromedio * tenedor_promedio2) / 100);
    console.log('porcentajecosto',porcentajecosto)
  
    VALIDACION.pasa=false;
    VALIDACION.msg=  `Tu costo está alto
    comparado con la
        industria. De  $${tenedor_promedio2} de tu plato
        promedio $${porcentajecosto} se
        van en materia prima Por lo general este indicador es del 35% o menos`;
    mostrarEmoji(
      false,
      `Tu costo está alto
  comparado con la
      industria. De  $${tenedor_promedio2} de tu plato
      promedio $${porcentajecosto} se
      van en materia prima Por lo general este indicador es del 35% o menos`
      
    );
    //alert('La suma de los campos no puede ser mayor a 100');
  } else {
    VALIDACION.pasa=true;
    mostrarEmoji(true);
  }
});


function click_input_costo(){
  const nuevoCostoPromedio = parseFloat(costoPromedioInput.value);
  const objetivo_mensual  = document.querySelector("#objetivo_mensual").value;
  const tenedor_promedio2  = document.querySelector("#tenedor_promedio2").value;
  actualizarGraficoCosto(nuevoCostoPromedio);

  if (nuevoCostoPromedio > 35) {
 
    const porcentajecosto= Math.floor((nuevoCostoPromedio * tenedor_promedio2) / 100);
    mostrarEmoji(
      false,
      `Tu costo está alto
  comparado con la
      industria. De  $${tenedor_promedio2}  de tu plato
      promedio $${porcentajecosto} se
      van en materia prima. `
      
    );
    //alert('La suma de los campos no puede ser mayor a 100');
  } else {
    mostrarEmoji(true);
  }
}

function click_actulizar_text_grafico(label) {
  var costo_promedio=  $("#costo_promedio").val()
  var total_gasto_general=  $("#total_gasto_general").val()
  var gastos_empleados=  $("#gastos_empleados").val()
  const objetivo_mensual  = document.querySelector("#objetivo_mensual").value;
  var  monto_costo = Math.floor((costo_promedio* objetivo_mensual) /100)
  var porcentaje_gasto=  Math.floor((total_gasto_general*100) / objetivo_mensual);
  var porcentaje_gasto_personal=  Math.floor((gastos_empleados*100) / objetivo_mensual);
 var porcentaje_utilidad = 100 - porcentaje_gasto_personal-porcentaje_gasto-costo_promedio;
 var monto_utilidad = Math.floor((porcentaje_utilidad * objetivo_mensual) /100);


  if(label=="Costo"){
  
    $(".titulo_utilidad").html("Costo")
    $(".titulo-porcentaje").html(costo_promedio+"%")
    $(".titulo-cantidad").html("$"+monto_costo)


  }else if(label=="Gatos generales"){ 
    
    $(".titulo_utilidad").html("Gastos General")
    $(".titulo-porcentaje").html(porcentaje_gasto +"%")
    $(".titulo-cantidad").html("$"+total_gasto_general)
  }else if(label=="Gastos de personal"){
    $(".titulo_utilidad").html("Gastos de perosonal")
    $(".titulo-porcentaje").html(porcentaje_gasto_personal+"%")
    $(".titulo-cantidad").html("$"+gastos_empleados)
  
  }else if(label=="Utilidad"){
    $(".titulo_utilidad").html("Utilidad")
    $(".titulo-porcentaje").html(porcentaje_utilidad+"%")
    $(".titulo-cantidad").html("$"+monto_utilidad)
  }

}
/***GEFIC */
function nextForm() {
  viewId++;


  console.log(viewId);
  if (viewId === 1) {

  }else if (viewId === 2) {
    const rentabilidad = document.getElementById("rentabilidad");
    if (rentabilidad.value == "") {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El campo  es requerido',
 
      })
      viewId--;
      return false;
    } else if (isNaN(rentabilidad.value)) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El campo debe ser un numero',
 
      })
      viewId--;
      return false;
    } 
    actualizar_rentabilidad();
    /**
     * PASO 3
     */
  } else if (viewId === 3) {


    const tenedor_promedio = document.getElementById("tenedor_promedio");
    if (tenedor_promedio.value == "") {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El campo  es requerido',
 
      })
      viewId--;
      return false;
    } else if (isNaN(tenedor_promedio.value)) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El campo debe ser un numero',
 
      })
      viewId--;
      return false;
    } 
    document.getElementById("tenedor_promedio2").value=tenedor_promedio.value;
    // calcular promedio semanal
    const objetivoMensual = document.querySelector("#objetivo_mensual").value;
    const consumoPromedio = document.querySelector("#tenedor_promedio").value;
    calcularClientesPorDia(consumoPromedio, objetivoMensual);
      /**
     * PASO 4
     */
  } else if (viewId === 4) {
    const consumoPromedio = document.querySelector("#tenedor_promedio2").value;
    const clienttotal = document.querySelector("#total_clientes_semana").value;
    const meta_alcanzada = clienttotal * consumoPromedio * SEMANAS_MES;
  document.querySelector("#objetivo_mensual").value=Math.round(meta_alcanzada);
  document.querySelector(".tenedor_promedio_p9").innerHTML= "$"+consumoPromedio ;
  document.querySelector(".valor_costo_promedio").innerHTML=  "$"+Math.round((consumoPromedio * 40) /100)  


  



  } else if (viewId === 5) {
   


  
  } else if (viewId === 6) {
    //validate input sueldo_promedio valor_beneficio_promedio
    var sueldo_promedio = document.querySelector("#sueldo_promedio").value;
    var valor_beneficio = document.querySelector("#valor_beneficio_promedio").value;
    if (sueldo_promedio == "" || valor_beneficio == "") {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El campo  es requerido',
 
      })
      viewId--;
      return false;
    } else if (isNaN(sueldo_promedio) || isNaN(valor_beneficio)) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El campo debe ser un numero',
 
      })
      viewId--;
      return false;
    }


    

const metaVentasMensual = document.querySelector("#objetivo_mensual").value;

const input_gastos_empleados=  document.querySelector("#gastos_empleados");
var sueldo_promedio_base = parseInt(document.querySelector("#sueldo_promedio").value);

   ///Obtener todos los input d
const input_sueldos = document.querySelectorAll('input[id^="tsueldo"]');
const input_beneficios = document.querySelectorAll('input[id^="tbeneficio"]');
const input_otros = document.querySelectorAll('input[id^="totros"]');
const input_cant_pers = document.querySelectorAll('.cantidade');
const camposRangeArraysueldos = Array.from(input_sueldos);
const camposRangeArraybeneficios = Array.from(input_beneficios);
const camposRangeArrayotros = Array.from(input_otros);
const camposRangeArraycant = Array.from(input_cant_pers);

for (let campo of camposRangeArraysueldos) {
 campo.addEventListener("input", evento_inputs_personal);
}
for (let campo of camposRangeArraybeneficios) {
  campo.addEventListener("input", evento_inputs_personal);
 }
 for (let campo of camposRangeArrayotros) {
  campo.addEventListener("input", evento_inputs_personal);
 }

 for (let campo of camposRangeArraycant) {
  campo.addEventListener("input", evento_inputs_cantidad);
 }


console.log('metaVentasMensual'+metaVentasMensual)
    const gasto_maximo = Math.floor((25 *  parseInt(metaVentasMensual)) /100);
    console.log('gasto_maximo'+gasto_maximo)
    // Calculamos la cantidad máxima de empleados que se pueden contratar
    var sueldo_promedio =  parseInt(sueldo_promedio_base)+parseInt(valor_beneficio);
    input_gastos_empleados.value=sueldo_promedio;
    $("#sueldo_promedio_final").val(sueldo_promedio)

    const {  cant_cajero,
      cant_cocina,
      cant_meseros,
      cant_administradores,
      empleadosContratados,
      presupuestoRestante } =    distribuirEmpleados(gasto_maximo, sueldo_promedio);


      if(presupuestoRestante>1){
        document.getElementById("cant_otros").value =1;
        $("#tsueldo5").val(presupuestoRestante)
      }
    
// Mostramos los resultados en los campos input correspondientes
document.getElementById("cant_cajeros").value = cant_cajero;
document.getElementById("tsueldo1").value=  parseInt(cant_cajero * sueldo_promedio_base);
document.getElementById("tbeneficio1").value=  parseInt(cant_cajero * valor_beneficio);

document.getElementById("cant_cocina").value = cant_cocina;
var tsueldo2 = cant_cocina * sueldo_promedio_base;

$("#tsueldo2").val(tsueldo2);


document.getElementById("tbeneficio2").value=  parseInt(cant_cocina * valor_beneficio);

document.getElementById("cant_meseros").value = cant_meseros;
document.getElementById("tsueldo3").value=  parseInt(cant_meseros * sueldo_promedio_base);
document.getElementById("tbeneficio3").value=  parseInt(cant_meseros * valor_beneficio);

document.getElementById("cant_administrador").value = cant_administradores;
document.getElementById("tsueldo4").value=  parseInt(cant_administradores * sueldo_promedio_base);
document.getElementById("tbeneficio4").value=  parseInt(cant_administradores * valor_beneficio);
calcula_totales_empleados()
  }
  else if (viewId === 7) {

    var ventasMensual = document.querySelector("#objetivo_mensual").value;
    const gasto_maximo = Math.floor((20 * ventasMensual) /100);
    const arriendo_local = Math.floor((7.5 * gasto_maximo) /100);
    const otros_gastos = Math.floor((7.5 * gasto_maximo) /100);
    let gastado=(arriendo_local+arriendo_local);
    const gastos_restante = Math.floor((gasto_maximo-gastado) /2);

    document.querySelector("#gastogral1").value=arriendo_local;
    document.querySelector("#gastogral2").value=otros_gastos;
    document.querySelector("#gastogral3").value=gastos_restante;
    document.querySelector("#gastogral4").value=gastos_restante;
    document.querySelector("#total_gasto_general").value=gasto_maximo;

  

    


   /**
     * PASO 8
     */
  }  else if (viewId === 8) {
    actualizarGrafico_final()
    $('.nxt__btn').hide();
    enableIconClicks();
  }else if(viewId == 9){

 
  }

 
  progressBar();
  displayForms();

 
}

function enableIconClicks() {
  icons.forEach((icon, index) => {
    icon.style.cursor='pointer';

    icon.addEventListener('click', function() {
      // Suma 1 al índice, ya que viewId comienza desde 1
      goToForm(index + 1);
    });
  });
}

function goToForm(formIndex) {
  viewId = formIndex;
  progressBar();
  displayForms();
}



function click_tenedor_promedio() {
  const tenenedo_promedio_2 =
    document.getElementById("tenedor_promedio2").value;
  const clienttotal = document.querySelector("#total_clientes_semana").value;
  const metaVentasMensual = document.querySelector("#objetivo_mensual").value;
  const consumoPromedio = tenenedo_promedio_2;
  const meta_alcanzada = clienttotal * consumoPromedio * SEMANAS_MES;
  actualizarGrafico(metaVentasMensual, meta_alcanzada);
}

function event_tenedor_promedio(event) {
  const clienttotal = document.querySelector("#total_clientes_semana").value;
  const metaVentasMensual = document.querySelector("#objetivo_mensual").value;
  const consumoPromedio = event.target.value;
  const meta_alcanzada = clienttotal * consumoPromedio * SEMANAS_MES;
  actualizarGrafico(metaVentasMensual, meta_alcanzada);
}

function prevForm() {

 ;
  viewId--;
  console.log(viewId);
  progressBar();
  displayForms();
  for (let i = 0; i < forms.length; i++) {
    if (i === viewId - 1) {
      forms[i].classList.remove("animate__fadeInRight");
           forms[i].classList.add("animate__fadeInLeft");
     
     
    } 
  }

  $('.nxt__btn').show();
}

function progressBar() {
  for (let i = 0; i < icons.length; i++) {
    
    
    if (i < viewId ) {   
      icons[i].classList.add("active");



      console.log('iconactive',icons[i])
    } else {
      icons[i].classList.remove("active");
    }
    icons[i].classList.remove("pactual");
    
    
  }

  icons[viewId-1].classList.add("pactual");


}

function displayForms() {
  for (let i = 0; i < forms.length; i++) {
    if (i === viewId - 1) {
      forms[i].style.display = "block";
      forms[i].classList.remove("animate__fadeInLeft");
      forms[i].classList.add("animate__fadeInRight");
     
    } else {

    
      forms[i].style.display = "none";
    }
  }
}

function init() {
  const sliders = document.getElementsByClassName("tick-slider-input");
  const sliders2 = document.getElementsByClassName("tick-slider-input-2");

  for (let slider of sliders) {
    slider.oninput = onSliderInput;

    updateValue(slider);
    updateValuePosition(slider);
    updateLabels(slider);
    updateProgress(slider);

    setTicks(slider);
  }

  for (let slider of sliders2) {
    slider.oninput = onSliderInput;
    updateValue(slider);
    updateValuePosition(slider);
    updateLabels(slider);
    updateProgress(slider);

    setTicks(slider);
  }
}

function onSliderInput(event) {
  updateValue(event.target);
  updateValuePosition(event.target);
  updateLabels(event.target);
  updateProgress(event.target);
}

function updateValue(slider) {
  let value = document.getElementById(slider.dataset.valueId);

  value.innerHTML = "<div>" + slider.value + "</div>";
}

function updateValuePosition(slider) {
  let value = document.getElementById(slider.dataset.valueId);

  const percent = getSliderPercent(slider);

  const sliderWidth = slider.getBoundingClientRect().width;
  const valueWidth = value.getBoundingClientRect().width;
  const handleSize = slider.dataset.handleSize;

  let left =
    percent * (sliderWidth - handleSize) + handleSize / 2 - valueWidth / 2;

  left = Math.min(left, sliderWidth - valueWidth);
  left = slider.value === slider.min ? 0 : left;

  value.style.left = left + "px";
}

function updateLabels(slider) {
  const value = document.getElementById(slider.dataset.valueId);
  const minLabel = document.getElementById(slider.dataset.minLabelId);
  const maxLabel = document.getElementById(slider.dataset.maxLabelId);

  const valueRect = value.getBoundingClientRect();
  const minLabelRect = minLabel.getBoundingClientRect();
  const maxLabelRect = maxLabel.getBoundingClientRect();

  const minLabelDelta = valueRect.left - minLabelRect.left;
  const maxLabelDelta = maxLabelRect.left - valueRect.left;

  const deltaThreshold = 32;

  if (minLabelDelta < deltaThreshold) minLabel.classList.add("hidden");
  else minLabel.classList.remove("hidden");

  if (maxLabelDelta < deltaThreshold) maxLabel.classList.add("hidden");
  else maxLabel.classList.remove("hidden");
}

function updateProgress(slider) {
  let progress = document.getElementById(slider.dataset.progressId);
  const percent = getSliderPercent(slider);

  progress.style.width = percent * 100 + "%";
}

function getSliderPercent(slider) {
  const range = slider.max - slider.min;
  const absValue = slider.value - slider.min;

  return absValue / range;
}

function setTicks(slider) {
  let container = document.getElementById(slider.dataset.tickId);
  const spacing = parseFloat(slider.dataset.tickStep);
  const sliderRange = slider.max - slider.min;
  const tickCount = sliderRange / spacing + 1; // +1 to account for 0

  for (let ii = 0; ii < tickCount; ii++) {
    let tick = document.createElement("span");

    tick.className = "tick-slider-tick";

    container.appendChild(tick);
  }
}

function onResize() {
  const sliders = document.getElementsByClassName("tick-slider-input");
  const sliders2 = document.getElementsByClassName("tick-slider-input-2");

  for (let slider of sliders) {
    updateValuePosition(slider);
  }

  for (let slider of sliders2) {
    updateValuePosition(slider);
  }
}

function actualizarSumaCampos() {
  // Sumar los valores de los campos de entrada
  const sumaValores = camposRangeArray.reduce(
    (acumulador, campo) => acumulador + parseInt(campo.value),
    0
  );
  const sumaValoresClientes = camposRangeArrayClientes.reduce(
    (acumulador, campo) => acumulador + parseInt(campo.value),
    0
  );
  // Actualizar el elemento HTML que muestra la suma
  const sumaCamposElement = document.getElementById("sumaTotal");
  const sumaCamposElementCliente = document.getElementById("clienttotal");

  sumaCamposElement.value = Math.round(sumaValores);
  sumaCamposElementCliente.value = Math.round(sumaValoresClientes);

  // Verificar si la suma es mayor a 100
  if (sumaValores > 100) {
    VALIDACION.pasa=false;
    VALIDACION.msg= "La suma de los campos  de porcentaje no puede ser mayor a 100% <br> Puedes ajustar el porcetaje segun se requiera";

    mostrarEmoji(
      false,
      "La suma de los campos  de porcentaje no puede ser mayor a 100% <br> Puedes ajustar el porcetaje segun se requiera"
    );
    //alert('La suma de los campos no puede ser mayor a 100');
  } else {
    VALIDACION.pasa=true;
    mostrarEmoji(true);
  }
}

function actualizarTotalesSumaCampos(id_campo_actual) {
  // Sumar los valores de los campos de entrada
  const clienttotal = document.querySelector("#clienttotal");

  for (let campo of camposRangeClientes) {
    if (id_campo_actual !== campo.dataset.id) {
      const porcentaje = Math.round((campo.value * 100) / clienttotal.value);

  
      const porcentajeInputc = document.querySelector(
        "#porcentaje_c" + campo.dataset.id
      );
      porcentajeInput.value = porcentaje;


      porcentajeInputc.textContent  = porcentaje;


    }
    actualizarSumaCampos();
  }

  // Actualizar el elemento HTML que muestra la suma
}

function actualizar_tabla_paso_4() {
  for (let index = 1; index < 8; index++) {
    var valor_cliente_1 = document.getElementById("clientes_l" + index).value;
    var porcentaje_cliente_1 = document.getElementById(
      "porcentaje_m" + index
    ).value;

    document.getElementById("clientes_c" + index).value = valor_cliente_1;
    document.getElementById("porcentaje_c" + index).textContent  = porcentaje_cliente_1;
  }
  var sumaTotal = document.getElementById("sumaTotal").value;
  document.getElementById("sumaTotal2").textContent  = sumaTotal;

  var clienttotal = document.getElementById("clienttotal").value;
  document.getElementById("clienttotal2").value = clienttotal;
  const consumoPromedio = document.querySelector("#tenedor_promedio").value;

  document.querySelector("#tenedor_promedio2").value = consumoPromedio;
}

function actualizarTotalesSumaClientes(id_campo_actual) {
  // Sumar los valores de los campos de entrada
  const clienttotal = document.querySelector("#clienttotal");

  for (let campo of camposRange) {
    if (id_campo_actual !== campo.dataset.id) {
      const porcentaje = Math.round((campo.value * clienttotal.value) / 100);
      console.log(campo.value + "x" + clienttotal.value);
      console.info(porcentaje);

      const porcentajeInput = document.querySelector(
        "#clientes_l" + campo.dataset.id
      );

      const porcentajeInput_c = document.querySelector(
        "#clientes_c" + campo.dataset.id
      );
      porcentajeInput.value = porcentaje.toFixed(2);
      porcentajeInput.oninput = onSliderInput;

      porcentajeInput_c.value = porcentaje.toFixed(2);
      porcentajeInput_c.oninput = onSliderInput;

      updateValue(porcentajeInput);
      updateValuePosition(porcentajeInput);
      updateLabels(porcentajeInput);
      updateProgress(porcentajeInput);
      setTicks(porcentajeInput);
      porcentajeInput.oninput = onSliderInput;

      updateValue(porcentajeInput_c);
      updateValuePosition(porcentajeInput_c);
      updateLabels(porcentajeInput_c);
      updateProgress(porcentajeInput_c);
      setTicks(porcentajeInput_c);
      porcentajeInput_c.oninput = onSliderInput;
    }
  }

  // Actualizar el elemento HTML que muestra la suma
}



// Función para actualizar la suma de los campos de entrada
function actualizarSumaCamposClientes() {
  // Sumar los valores de los campos de entrada
  const sumaValores = camposRangeArrayClientes.reduce(
    (acumulador, campo) => acumulador + parseInt(campo.value),
    0
  );

  // Actualizar el elemento HTML que muestra la suma
  const sumaCamposElement = document.querySelector("#clienttotal");
  const sumaCamposElement2 = document.querySelector("#clienttotal2");

  sumaCamposElement.value = sumaValores;
  sumaCamposElement2.value = sumaValores;
}

function mostrarEmoji(respuesta, msj = "") {
  const emojiElement = document.getElementById("emoji");
  const emojiTextElement = document.getElementById("emoji-text");
  emojiElement.innerHTML='' 
  if (respuesta) {
    emojiElement.style.display = "none";
    emojiElement.style.display = "block";
    emojiElement.innerHTML = emojione.toImage("🙂");
    emojiTextElement.innerHTML = msj;
  } else {
    emojiElement.style.display = "none";
    emojiElement.style.display = "block";
    emojiElement.innerHTML = emojione.toImage("😡");
    emojiTextElement.innerHTML = msj + ".";
  }
}

function actualizar_rentabilidad() {
  const rentabilidad = document.querySelector("#rentabilidad").value;
  const valor_ganancia = document.querySelector(".valor_ganancia");
  const valor_venta = document.querySelector(".valor_venta");

  document.querySelector("#objetivo_mensual").value = Math.round(
    rentabilidad * 5
  );
  document.querySelector(".valor_ganancia2").innerHTML = rentabilidad;
  document.querySelector(".valor_ganancia3").innerHTML = rentabilidad;
  valor_ganancia.innerHTML = `${rentabilidad}`;
  valor_venta.innerHTML = `${rentabilidad * 5}`;
}

function actualizarClienteTabla2(event) {
  const porcentaje = Math.round(event.target.value);
  console.log(" function actualizarClienteTabla2");
  const valorCliente = Math.round((porcentaje * totalClientes2.value) / 100);
  const clienteInput = document.querySelector(
    "#clientes_l" + event.target.dataset.id
  );
  const clienteInput_2 = document.querySelector(
    "#clientes_c" + event.target.dataset.id
  );
  const sumaCamposElement = document.getElementById("sumaTotal2");

  clienteInput.value = valorCliente;
  clienteInput_2.value = valorCliente;
  const sumaValoresClientes = camposRangeArrayClientes2.reduce(
    (acumulador, campo) => acumulador + parseInt(campo.value),
    0
  );
  const sumaCamposElementCliente = document.getElementById("clienttotal2");
  sumaCamposElementCliente.value = Math.round(sumaValoresClientes);

  const sumaValores = camposRangeArray2.reduce(
    (acumulador, campo) => acumulador + parseInt(campo.value),
    0
  );
  sumaCamposElement.text = Math.round(sumaValores);

  const consumoPromedio = document.getElementById("tenedor_promedio2");
  const SEMANAS_MES = 4;
  const metaVentasMensual = document.querySelector("#objetivo_mensual").value;
  const meta_alcanzada = totalClientes2.value * consumoPromedio * SEMANAS_MES;
  actualizarGrafico(metaVentasMensual, meta_alcanzada);
  // Verificar si la suma es mayor a 100
  if (sumaValores > 100) {
    VALIDACION.pasa=false;
    VALIDACION.msg= "La suma de los campos  de porcentaje no puede ser mayor a 100% <br> Puedes ajustar el porcetaje segun se requiera";

    mostrarEmoji(
      false,
      "La suma de los campos  de porcentaje no puede ser mayor a 100% <br> Puedes ajustar el porcetaje segun se requiera"
    );
    //alert('La suma de los campos no puede ser mayor a 100');
  } else {
    mostrarEmoji(true);
    VALIDACION.pasa=false;
  }
  for (let campo of camposRange2) {
    if (event.target.dataset.id !== campo.dataset.id) {
      const porcentaje = Math.round((campo.value * clienttotal2.value) / 100);
      const porcentajeInput = document.querySelector(
        "#clientes_l" + campo.dataset.id
      );
      const porcentajeInput_c = document.querySelector(
        "#clientes_c" + campo.dataset.id
      );
      porcentajeInput.value = porcentaje;
      porcentajeInput_c.value = porcentaje;
    }
  }
}

async function calcularTotales(inputs) {
  let suma = 0;
  for (const input of inputs) {
    console.log(input.id,input.value)
    const valor = parseInt(input.value) || 0;
    suma += valor;
  }
  console.log(suma)
  return suma;
}

// Calculo de porcentajes
async function calcularPorcentajes(inputs, suma) {
  let total_porcentaje = 0;
  for (const input of inputs) {
    const valor = parseInt(input.value) || 0;
    const porcentaje = (valor / suma) * 100;

    const idPorcentaje = "porcentaje-" + input.id;

  total_porcentaje += parseFloat(isNaN(porcentaje) ? 0 : porcentaje.toFixed(2));
   document.getElementById(idPorcentaje).textContent = isNaN(porcentaje) ? "0%" : porcentaje.toFixed(0) + "%";
  }
  return total_porcentaje;
}
// Función principal para calcular totales y porcentajes
async function calcular() {

  const totalClientesSemana = document.getElementById("total_clientes_semana");
  const totalPorcentajeSemana = document.getElementById("total_porcentaje_semana");
  var inputsc = document.querySelectorAll(".clientes-dia");
  const suma = await calcularTotales(inputsc);
  totalClientesSemana.value = suma;

  const total_porcentaje = await calcularPorcentajes(inputsc, suma);
  totalPorcentajeSemana.textContent = Math.round(total_porcentaje) + "%";

  const SEMANAS_MES = 4;
  const consumoPromedio = document.getElementById("tenedor_promedio");
  const metaVentasMensual = document.querySelector("#objetivo_mensual").value;
  const meta_alcanzada =suma * consumoPromedio.value * SEMANAS_MES;

  console.log(metaVentasMensual, meta_alcanzada)
  actualizarGrafico(metaVentasMensual, meta_alcanzada);

  if (meta_alcanzada < metaVentasMensual) {
    VALIDACION.pasa=false;
    mostrarEmoji(
      false,
      "Incrementa el numero de clientes  por dia para alcanzar tu objetivo"
    );
  } else {
    VALIDACION.pasa=true;
    mostrarEmoji(true);
  }



}

const inputsc = document.querySelectorAll(".clientes-dia");

// Agregar event listener a cada input con la clase "clientes-dia"
inputsc.forEach((input) => {
  input.addEventListener("keyup", calcular);
});





// Función para actualizar el valor de clientes correspondiente al input de porcentaje
function actualizarCliente(event) {
  const porcentaje = Math.round(parseFloat(event.target.value));
  const valorCliente = Math.round((porcentaje * totalClientes.value) / 100);
  const clienteInput = document.querySelector(
    "#clientes_l" + event.target.dataset.id
  );
  const clienteInput_2 = document.querySelector(
    "#clientes_c" + event.target.dataset.id
  );
  clienteInput.value = valorCliente;
  clienteInput_2.value = valorCliente;
  actualizarTotalesSumaClientes(event.target.dataset.id);
  clienteInput.oninput = onSliderInput;

  updateValue(clienteInput);
  updateValuePosition(clienteInput);
  updateLabels(clienteInput);
  updateProgress(clienteInput);
  setTicks(clienteInput);

  actualizarSumaCampos();
}

// Función para actualizar todos los porcentajes de acuerdo al valor total de clientes
function actualizarPorcentajes() {
  const total = parseInt(totalClientes.value);
  const porcentajeSuma = 0;
  for (let i = 0; i < clientes.length; i++) {
    const valorCliente = parseInt(clientes[i].value);
    const porcentaje = (valorCliente / total) * 100;
    porcentajes[i].value = porcentaje.toFixed(2);
    porcentajeSuma += porcentaje;
  }
  actualizarSumaCampos();
}

function calcularClientesPorDia(consumoPromedio, metaVentasMensual) {
  const DIAS_LABORABLES_SEMANA = 5;
  const SEMANAS_MES = 4;
  const ventasDiarias =
    metaVentasMensual / (DIAS_LABORABLES_SEMANA * SEMANAS_MES);
  const clientesPorDiaRedondeado = Math.ceil(ventasDiarias / consumoPromedio);
  const totalClientesSemana = clientesPorDiaRedondeado * DIAS_LABORABLES_SEMANA;
  const porcentaje = (clientesPorDiaRedondeado * 100) / totalClientesSemana;
  //document.querySelector("#clienttotal").value = totalClientesSemana;
  document.querySelector("#total_clientes_semana").value = totalClientesSemana;

  console.log("porcentaje" + porcentaje);
  console.log("clientesPorDiaRedondeado" + clientesPorDiaRedondeado);
  /*document.getElementById("clientes_l1").value = clientesPorDiaRedondeado;
  document.getElementById("clientes_l2").value = clientesPorDiaRedondeado;
  document.getElementById("clientes_l3").value = clientesPorDiaRedondeado;
  document.getElementById("clientes_l4").value = clientesPorDiaRedondeado;
  document.getElementById("clientes_l5").value = clientesPorDiaRedondeado;*/

  document.getElementById("lunes").value = clientesPorDiaRedondeado;
  document.getElementById("martes").value = clientesPorDiaRedondeado;
  document.getElementById("miercoles").value = clientesPorDiaRedondeado;
  document.getElementById("jueves").value = clientesPorDiaRedondeado;
  document.getElementById("viernes").value = clientesPorDiaRedondeado;
  //hacer todos los input de porcentaje
  document.getElementById("porcentaje-lunes").textContent  = porcentaje+"%";
  document.getElementById("porcentaje-martes").textContent  = porcentaje+"%";
  document.getElementById("porcentaje-miercoles").textContent  = porcentaje+"%";
  document.getElementById("porcentaje-jueves").textContent  = porcentaje+"%";
  document.getElementById("porcentaje-viernes").textContent  = porcentaje+"%";
  document.getElementById("porcentaje-sabado").textContent  =  "0%";
  document.getElementById("porcentaje-domingo").textContent  = "0%";


  const meta_alcanzada = totalClientesSemana * consumoPromedio * SEMANAS_MES;
 actualizarGrafico(metaVentasMensual, meta_alcanzada);
  /*for (let index = 1; index < 6; index++) {
   // var porcentajeInput = document.querySelector("#porcentaje_m" + index);
    var clienteInput = document.querySelector("#clientes_l" + index);

    updateValue(clienteInput);
    updateValuePosition(clienteInput);
    updateLabels(clienteInput);
    updateProgress(clienteInput);

    setTicks(porcentajeInput);
    updateValue(porcentajeInput);
    updateValuePosition(porcentajeInput);
    updateLabels(porcentajeInput);
    updateProgress(porcentajeInput);
    setTicks(porcentajeInput);
  }*/

// actualizarSumaCampos();
}

function actualizarGrafico_final() {
 var costo_promedio=  $("#costo_promedio").val()
  var total_gasto_general=  $("#total_gasto_general").val()
  var gastos_empleados=  $("#gastos_empleados").val()
  const objetivo_mensual  = document.querySelector("#objetivo_mensual").value;
  var  monto_costo = Math.floor((costo_promedio* objetivo_mensual) /100)
  var porcentaje_gasto=  Math.floor((total_gasto_general*100) / objetivo_mensual);
  var porcentaje_gasto_personal=  Math.floor((gastos_empleados*100) / objetivo_mensual);
 var porcentaje_utilidad = 100 - porcentaje_gasto_personal-porcentaje_gasto-costo_promedio;
 var monto_utilidad = Math.floor((porcentaje_utilidad * objetivo_mensual) /100);
 var nuevosDatos=[costo_promedio,porcentaje_gasto,porcentaje_gasto_personal,porcentaje_utilidad];

 $(".titulo_utilidad").html("Utilidad")
 $(".titulo-porcentaje").html(porcentaje_utilidad+"%")
 $(".titulo-cantidad").html("$"+monto_utilidad)
 var newObjectiveLabel =objetivo_mensual;

 const newData = {
  objetivo: 100,
  costo: parseInt(costo_promedio),
  gastosGenerales:porcentaje_gasto,
  gastosPersonal:porcentaje_gasto_personal,
  utilidad:porcentaje_utilidad
};
const newTooltips = {
  Objetivo: "$"+objetivo_mensual,
  Costo:costo_promedio+"%",
  "Gastos generales": porcentaje_gasto+"%",
  "Gastos de personal": porcentaje_gasto_personal+"%",
  Utilidad: porcentaje_utilidad+"%"
};

 updateChartData(newData,newTooltips)
  //chartplanfinanciero.update();
}
function updateChartData(newData,newTooltips) {
  // Asume que newData es un objeto con la siguiente estructura:
  // { objetivo: number, costo: number, gastosGenerales: number, gastosPersonal: number, utilidad: number }
  
  tooltips = newTooltips; // Actualiza los tooltips

  chartplanfinanciero.data.datasets[0].data = [newData.objetivo];
  chartplanfinanciero.data.datasets[1].data = [null, newData.costo];
  chartplanfinanciero.data.datasets[2].data = [null, newData.gastosGenerales];
  chartplanfinanciero.data.datasets[3].data = [null, newData.gastosPersonal];
  chartplanfinanciero.data.datasets[4].data = [null, newData.utilidad];

  chartplanfinanciero.update(); // Actualiza el gráfico con los nuevos datos
}

function actualizarGrafico(objetivo, plan) {
  let backgroundColor = "rgba(75, 192, 192, 0.5)"; // verde por defecto
  if (plan < objetivo) {
    backgroundColor = "rgba(255, 99, 132, 0.5)"; // rojo si el plan es menor que el objetivo
  }

  chart.data.datasets[0].data = [objetivo, plan];
  chart.data.datasets[0].backgroundColor[1] = backgroundColor;
  chart.options.plugins.tooltip.callbacks.label = function (context) {
    const label = context.dataset.label || "";

    if (label) {
      return label + ": " + context.formattedValue;
    } else {
      return context.formattedValue;
    }
  };

  chart.update();
}

$(document).on("click", ".number-spinner button", function () {
  var btn = $(this),
    oldValue = btn.closest(".number-spinner").find("input").val().trim(),
    newVal = 0;

  if (btn.attr("data-dir") == "up") {
    newVal = parseInt(oldValue) + 1;
  } else {
    if (oldValue > 1) {
      newVal = parseInt(oldValue) - 1;
    } else {
      newVal = 1;
    }
  }
  btn.closest(".number-spinner").find("input").val(newVal);
});


function actualizarGraficoCosto(nuevoCostoPromedio) {
  // Actualizar los datos del gráfico
  const costo = nuevoCostoPromedio >= 0 ? nuevoCostoPromedio : 0;
  const objetivo = 100 - costo;
  const datos = [nuevoCostoPromedio,objetivo];
  chartCosto.data.datasets[0].data = datos;

  // Actualizar el label del dataset "Costo"
  chartCosto.data.datasets[0].label = `Tu Costo (${costo}%)`;
  // Actualizar el color de la barra de costo promedio
  const backgroundColor = [];

  backgroundColor.push("rgba(75, 192, 192, 0.5)"); // Verde
  backgroundColor.push("rgba(255, 99, 132, 0.5)"); // Rojo

  chartCosto.data.datasets[0].backgroundColor = backgroundColor;

  // Refrescar el gráfico
  chartCosto.update();
}

function imprimirpdf(){

  $('.buttons').hide();

var contenidoPDF = '';
var canvas = document.getElementById('myChart');
var chartImage = canvas.toDataURL();
chartImage = '<img with="40%" src="' + chartImage + '" >';
$(".imagen-grafico").html(chartImage);

var canvas_costo_promedio = document.getElementById('chart_costo_promedio');
var chartImageCosto_promedio  = canvas_costo_promedio.toDataURL();
chartImageCosto_promedio = '<img with="40%" src="' + chartImageCosto_promedio + '" >';
$(".imagen-grafico-costo").html(chartImageCosto_promedio);


var canvas_plan_promedio = document.getElementById('chartplanfinanciero');
var chartImageplan  = canvas_plan_promedio.toDataURL();
chartImageplan = '<img with="40%" src="' + chartImageplan + '" >';
$(".imagen-grafico-chartplanfinanciero").html(chartImageplan);


// Iterar a través de cada etiqueta <fieldset> y agregar su contenido a la variable
$('.imprimirpdf').each(function() {
  contenidoPDF += '<div style="page-break-after:always">' + $(this).html() + '</div>';
});


var opt = {
  margin:       0.1,
  filename:     'plan_financiero.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2 },
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
};

// New Promise-based usage:
html2pdf().set(opt).from(contenidoPDF).save();
/*html2pdf().set(opt).from(contenidoPDF).toPdf().then(function(pdf) {
  // Aquí tienes el PDF generado como un objeto ArrayBuffer
  // Puedes enviarlo mediante AJAX
});*/


// Old monolithic-style usage:
//html2pdf(contenidoPDF, opt);
$('.buttons').show();
}

function distribuirEmpleados(presupuestoRestante, sueldoBase) {
  const maxEmpleados = Math.floor(parseInt(presupuestoRestante) / parseInt(sueldoBase)); // Calculamos el número máximo de empleados que se pueden contratar
console.log(maxEmpleados,presupuestoRestante,sueldoBase)
  // Distribución inicial
  let cant_cajero = 1;
  let cant_cocina = 1;
  let cant_meseros = Math.min(maxEmpleados - 2, cant_cajero * 4 + 2);
  let cant_administradores = 0;
  let empleadosContratados = 0;

  empleadosContratados = cant_cajero + cant_cocina + cant_meseros + cant_administradores;

  // Mientras queden empleados por contratar y el número de empleados contratados no supere el máximo posible, seguimos distribuyendo
 while (empleadosContratados < maxEmpleados && presupuestoRestante >= sueldoBase) {
    // Asignamos un mesero por cada cajero
    cant_meseros += cant_cajero;
    empleadosContratados += cant_cajero;
    
    // Asignamos un administrador por cada dos cajeros
    if (cant_cajero >= 2) {
      cant_administradores += Math.floor(cant_cajero / 2);
      empleadosContratados += Math.floor(cant_cajero / 2);
    }
    
    // Si aún quedan empleados por contratar, aumentamos la cantidad de cajeros y recalculamos los meseros
    if (empleadosContratados < maxEmpleados) {
      cant_cajero++;
      cant_meseros = Math.min(maxEmpleados - cant_administradores - cant_cocina - cant_cajero, cant_cajero * 4 + 2);
      empleadosContratados++;
    }
  }
  if(cant_meseros < 0){
    
    cant_meseros=0;
  }
  
  return {
    cant_cajero,
    cant_cocina,
    cant_meseros,
    cant_administradores,
    empleadosContratados,
    presupuestoRestante: presupuestoRestante - (sueldoBase * empleadosContratados),
  };
}


function calcula_totales_empleados(modificar_total=true) {
  const input_sueldos = document.querySelectorAll('input[id^="tsueldo"]');

const camposRangeArraysueldos = Array.from(input_sueldos);


let idkey=1;
var total_global=0;
for (let campo of camposRangeArraysueldos) {
  let cant = $(".cantidade"+idkey).val();

  if(isNaN(cant)){
    cant =0;
  }

  let tbeneficio =parseInt($("#tbeneficio"+idkey).val())
  if(isNaN(tbeneficio)){
    tbeneficio =0;
  }
  let otros= parseInt($("#totros"+idkey).val())
  if(isNaN(otros)){
    otros =0;
  }
  if(isNaN(campo.value)){
    campo.value =0;
  }
 var totalfila= (parseInt(campo.value) + tbeneficio + otros)
 total_global+=totalfila;
 $("#ttotale"+idkey).val(totalfila)



 idkey++

}

if(modificar_total){
  $("#gastos_empleados").val(total_global)
}

}

function evento_inputs_personal(){
  calcula_totales_empleados()
  $("#checkdistribuiraut").prop("checked", false);

}

function evento_inputs_cantidad(event){
    var cant= event.target.value;
    var idkey= event.target.dataset.id
    if(isNaN(cant)){
      cant =0;
    }
   var tsueldo= $("#tsueldo"+idkey).val();

    let tbeneficio =parseInt($("#tbeneficio"+idkey).val())
    if(isNaN(tbeneficio)){
      tbeneficio =0;
    }
    var totalfila= (parseInt(tsueldo) * cant);
    var totalbeneficio= (tbeneficio * cant);
 
    $("#tsueldo"+idkey).val(totalfila);
    $("#tbeneficio"+idkey).val(totalbeneficio)
    
    $("#checkdistribuiraut").prop("checked", false);


  calcula_totales_empleados()
}

function change_input_empleado(event) {
  let  valor_gastos= parseInt(event.target.value);
  actuliza_valor_tabla_gastos(valor_gastos);
}





function actuliza_valor_tabla_gastos(valor_gastos) {


 var checkdistribuiraut = $('#checkdistribuiraut').is(":checked");
 var sueldo_promedio_base = parseInt(document.querySelector("#sueldo_promedio").value);
 const valor_beneficio_promedio = parseInt(document.querySelector("#valor_beneficio_promedio").value);
 let sueldo_promedio_finalInput = sueldo_promedio_base+valor_beneficio_promedio;
 if(checkdistribuiraut){
 
 
  const {  cant_cajero,
    cant_cocina,
    cant_meseros,
    cant_administradores,
    empleadosContratados,
    presupuestoRestante } =  distribuirEmpleados(valor_gastos,parseInt(sueldo_promedio_finalInput))
    document.getElementById("cant_otros").value=0
    $("#tsueldo5").val(0)
    if(presupuestoRestante>1){
      document.getElementById("cant_otros").value =1;
      $("#tsueldo5").val(presupuestoRestante)
    }
  
// Mostramos los resultados en los campos input correspondientes
document.getElementById("cant_cajeros").value = cant_cajero;
document.getElementById("tsueldo1").value=  parseInt(cant_cajero * sueldo_promedio_base);
document.getElementById("tbeneficio1").value=  parseInt(cant_cajero * valor_beneficio_promedio);

document.getElementById("cant_cocina").value = cant_cocina;
var tsueldo2 = cant_cocina * sueldo_promedio_base;

$("#tsueldo2").val(tsueldo2);


document.getElementById("tbeneficio2").value=  parseInt(cant_cocina * valor_beneficio_promedio);

document.getElementById("cant_meseros").value = cant_meseros;
document.getElementById("tsueldo3").value=  parseInt(cant_meseros * sueldo_promedio_base);
document.getElementById("tbeneficio3").value=  parseInt(cant_meseros * valor_beneficio_promedio);

document.getElementById("cant_administrador").value = cant_administradores;
document.getElementById("tsueldo4").value=  parseInt(cant_administradores * sueldo_promedio_base);
document.getElementById("tbeneficio4").value=  parseInt(cant_administradores * valor_beneficio_promedio);
calcula_totales_empleados(false)
var total_global= parseInt($("#gastos_empleados").val());
var objetivo_mensual =  parseInt(document.querySelector("#objetivo_mensual").value);
var porcentaje_costo=  Math.floor(total_global * 100)/objetivo_mensual;
const gasto_maximo = Math.floor((25 * objetivo_mensual) /100);
if (porcentaje_costo > 25) {
  mostrarEmoji(
    false,
    "Tu gasto estan en el  "+porcentaje_costo+"% Está por encima del 25% de la industria que sería $"+gasto_maximo
  ); 

}else{
  mostrarEmoji(true,"")
}

 }
  
}

var iddfila=4;
function agregar_fila_gastos() {
  iddfila++;
  let html=`
  <tr id="fila${iddfila}">
  <td>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
      <button onclick="eliminar_fila_gasto('fila${iddfila}')" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>
      </button>
        <span class="input-group-text"></span>

      </div>
      <input type="text" class="form-control"  id="textotrogastosg${iddfila}" value="">
    </div>
  </td>

  <td>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>

      </div>
      <input type="text" class="form-control"   id="gastogral${iddfila}"  value="0">
    </div>
  </td>



</tr>
  `

    $("#tabla_gasto_general > tbody").append(html)
  let campo=  document.getElementById("gastogral"+iddfila)

    campo.addEventListener("input", change_gastos_inputs);
  
}

function change_gastos_inputs(event) {
  calcula_totales_gastos()
}

function eliminar_fila_gasto(fila) {

  $("#"+fila).remove();
  calcula_totales_gastos()
}

const inputs = document.querySelectorAll('.validar_input');

inputs.forEach((input) => {
  input.addEventListener('keyup', (event) => {
    // Obtener el valor actual del input
    const currentValue = event.target.value;

    // Remover cualquier caracter que no sea un número
    const sanitizedValue = currentValue.replace(/[^0-9]/g, '');

    // Actualizar el valor del input con el valor sanitizado
    event.target.value = sanitizedValue;
  });
});

function calcula_totales_gastos() {
  console.log('function calcula_totales_gastos')
  const camposRangeArraygatos = Array.from(document.querySelectorAll('input[id^="gastogral"]'));
    const sumaValores = camposRangeArraygatos.reduce((acumulador, campo) => acumulador + parseInt(campo.value), 0);
  
  
  document.querySelector("#total_gasto_general").value = sumaValores;
  

  const objetivoMensual = parseInt( document.querySelector("#objetivo_mensual").value);
  const gastoMaximo = Math.ceil((sumaValores * 100) / objetivoMensual);
  

  const gastoPromedio =  (20 *objetivoMensual) / 100;
  
  if (gastoMaximo > 20) {
    mostrarEmoji(false, `Tu gasto está en un ${gastoMaximo}%, el valor está por encima del 20% de la industria que sería $${gastoPromedio.toFixed(2)}`);
  }else{
    mostrarEmoji(true,'muy bien!')
  }
}
function event_input_total_semanal(){
  actualizarTotalesSumaClientes(0)
}
function event_input_total_semanal2(event){
  console.log('event_input_total_semanal2')
   const  clienttotal2 =event.target.value;
   const porcentajes = document.querySelectorAll('p[id^="porcentaje-"]');
porcentajes.forEach((elemento) => {
      id_dia_semana=  elemento.id.split("-")[1];
      const numero_clientes = Math.ceil(( parseInt(elemento.textContent) * clienttotal2) / 100);
    document.querySelector("#"+id_dia_semana).value = numero_clientes;

     // const porcentajeInput_c = document.querySelector("#clientes_c" + campo.dataset.id);

      //porcentajeInput_c.value = porcentaje;
    });

    const SEMANAS_MES = 4;
    const consumoPromedio = document.getElementById("tenedor_promedio2");
    const metaVentasMensual = document.querySelector("#objetivo_mensual").value;
    const meta_alcanzada =
    clienttotal2 * consumoPromedio.value * SEMANAS_MES;
  
    actualizarGrafico(metaVentasMensual, meta_alcanzada);

    if (meta_alcanzada < metaVentasMensual) {
      VALIDACION.pasa=false;
      mostrarEmoji(
        false,
        "Incrementa el numero de clientes  por dia para alcanzar tu objetivo"
      );
    } else {
      VALIDACION.pasa=true;
      mostrarEmoji(true);
    }
  
}
var procesado=false;
function enviar_correo() {

  Swal.fire({
    title: '<strong>Ingrese su correo</strong>',
    icon: 'info',
    html:
    `
    <div class="form-group">

    <input type="email" class="form-control" id="email_user" placeholder="name@example.com">
  </div>

    
    
    `,
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText:
      '<i class="fa fa-envelope-ope"></i> Enviar email',
    confirmButtonAriaLabel: 'Enviar',
    cancelButtonText:
      '<i class="fa fa-thumbs-down"></i>',
    cancelButtonAriaLabel: 'Cancelar'
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
     

        if($("email_user").val()==''){
          Swal.fire('Ingrese un correo valido', '', 'info')
        }else{
          $('.buttons').hide();

          var contenidoPDF = '';
         if(!procesado){ 
          var canvas = document.getElementById('myChart');
          var chartImage = canvas.toDataURL();
          chartImage = '<img with="40%" src="' + chartImage + '" >';
          $(".imagen-grafico").html(chartImage);
          
          var canvas_costo_promedio = document.getElementById('chart_costo_promedio');
          var chartImageCosto_promedio  = canvas_costo_promedio.toDataURL();
          chartImageCosto_promedio = '<img with="40%" src="' + chartImageCosto_promedio + '" >';
          $(".imagen-grafico-costo").html(chartImageCosto_promedio);
          
          
          var canvas_plan_promedio = document.getElementById('chartplanfinanciero');
          var chartImageplan  = canvas_plan_promedio.toDataURL();
          chartImageplan = '<img with="40%" src="' + chartImageplan + '" >';
          $(".imagen-grafico-chartplanfinanciero").html(chartImageplan);
        }
          
          // Iterar a través de cada etiqueta <fieldset> y agregar su contenido a la variable
          $('.imprimirpdf').each(function() {
            contenidoPDF += '<div style="page-break-after:always">' + $(this).html() + '</div>';
          });
       
          procesado=true
         // enviar(contenidoPDF)
        }

    } else if (result.isDenied) {

    }
  })


}

function enviar(html) {
  var destinatario = "correo_ejemplo@ejemplo.com";

// Crea un objeto con los datos que enviarás a la API de SendGrid
var data = {"accion": "send_mail",
 "correo": "jhonatanrojasmd@gmail.com",
  "contenidohtml": html,
   "asunto": "Asunto del correo", "nombre_cliente": "", 
"token": "F1A17B7D-3E3A3A77"};
  $.ajax({
    type: "POST",
    url: "procesar.php",
      data: data,
    success: function(response) {
      console.log(response);
    },
    error: function(error) {
      console.error("Error al enviar el correo electrónico: ", error);
    }
  });
  
  
  
  
}