<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Cuenta</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/mdb.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />


</head>

<body>
  <!-- Section: Design Block -->
  <section class="text-center p-5 bg-image vh-100" style="
        background-image: url('fondo.jpg');
        height: 100vh;
        ">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
  
        height: 20hv;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong pt-5" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
      <div class="card-body py-5 px-md-5">
        <style>
          .logo {
            color: white;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-image: url(logo.png);
            display: grid;
            grid-template-areas: "main";
            padding: var(--size-4);
            min-height: 15vh;
            width: 50%;
            font-family: var(--font-sans);
          }
        </style>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="logo m-auto">


            </div>
            <h2 class="fw-bold mb-5">Registrar Cuenta</h2>
            <div class="text_base text-center text-info" id="text_base"></div>
            <form id="form-registrar">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="nombre" class="form-control" required />
                    <label class="form-label" for="nombre">Nombre</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="apellido" class="form-control" required />
                    <label class="form-label" for="apellido">Apellido</label>
                  </div>
                </div>
              </div>

              <div class="row">

                <!-- Email input -->
                <div class="col-md-6  mb-4">
                  <div class=" form-outline">
                    <input type="email" id="email" class="form-control" required autocomplete="off" />
                    <label class="form-label" for="email">Email </label>
                  </div>
                </div>

                <div class="col-md-6  mb-4">
                  <div class=" form-outline">
                    <input type="celular" id="celular" class="form-control" required />
                    <label class="form-label" for="celular">Celular </label>
                  </div>
                </div>


                <!-- Password input -->



              </div>
              <div class="col-md-12 mb-4">
                <div class=" form-outline">
                  <input type="password" id="password" class="form-control" required autocomplete="off" />
                  <label class="form-label" for="password">Contraseña</label>
                </div>
              </div>
              <div class="row">

                <!-- Email input -->
                <div class="col-md-6  mb-4">
                  <div class=" form-outline">
                    <input type="text" id="nombre_negocio" class="form-control" required />
                    <label class="form-label" for="nombre_negocio">Nombre del Negocio </label>
                  </div>
                </div>


                <!-- Password input -->

                <div class="col-md-6 mb-4">
                  <div class=" form-outline">
                    <select id="conociste" name="conociste" class=" mdb-select md-form colorful-select form-select"
                      required>
                      <option value="" disabled selected>¿Por donde nos conociste?
                      </option>

                      <option value="Buscador Internet">Buscador Internet</option>
                      <option value="Recomendación">Recomendación</option>
                      <option value="Redes Sociales">Redes Sociales</option>
                      <option value="Publicidad Internet">Publicidad Internet</option>
                      <option value="Seminario">Seminario</option>
                      <option value="Ya Tengo una Cuenta">Ya Tengo una Cuenta</option>
                      <option value="Curso/Universidad">Curso/Universidad</option>
                    </select>



                  </div>
                </div>


              </div>
              <?php $campo_datos_gasto_general= isset($_REQUEST['campo_datos_gasto_general']) ? $_REQUEST['campo_datos_gasto_general'] : ''; ?>
              <?php $datos_tabla_empleado= isset($_REQUEST['datos_tabla_empleado']) ? $_REQUEST['datos_tabla_empleado'] : ''; ?>
              <input type="hidden" id="campo_datos_gasto_general" name="campo_datos_gasto_general" value='<?php echo $campo_datos_gasto_general?>' >
                <input type="hidden" id="datos_tabla_empleado" name="datos_tabla_empleado" value='<?php  echo $datos_tabla_empleado ?>' >

              <input type="hidden" name="clientes_mes" value="<?php echo isset($_REQUEST['clientes_mes']) ? $_REQUEST['clientes_mes'] : ''; ?>" id="clientes_mes">
                <input type="hidden" name="form_objetivo" value="<?php echo isset($_REQUEST['form_objetivo']) ? $_REQUEST['form_objetivo'] : ''; ?>" id="form_objetivo">
                <input type="hidden" name="form_utilidad" value="<?php echo isset($_REQUEST['form_utilidad']) ? $_REQUEST['form_utilidad'] : ''; ?>" id="form_utilidad">
                <input type="hidden" name="form_gasto_general" id="form_gasto_general" value="<?php echo isset($_REQUEST['form_gasto_general']) ? $_REQUEST['form_gasto_general'] : ''; ?>">
                <input type="hidden" name="form_gasto_personal" id="form_gasto_personal" value="<?php echo isset($_REQUEST['form_gasto_personal']) ? $_REQUEST['form_gasto_personal'] : ''; ?>">
                <input type="hidden" name="form_tenedor_promedio" id="form_tenedor_promedio" value="<?php echo isset($_REQUEST['form_tenedor_promedio']) ? $_REQUEST['form_tenedor_promedio'] : ''; ?>">
                <input type="hidden" name="form_costo" id="form_costo" value="<?php echo isset($_REQUEST['form_costo']) ? $_REQUEST['form_costo'] : ''; ?>">


              <!-- Submit button -->
              <button type="button" class="btn btn-primary btn-block mb-4 g-recaptcha"
                data-sitekey="6LceCpwlAAAAAJYs71hUQ7gO59eaiij7QdRxnJVX" onclick="  enviarFormulario();">

                Registrar
              </button>


            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <form action="https://www.practisis.net/index3.php" id='formdatauser' method='post'>
    <input style='display:none;' type='hidden' name='rvus' id='loginuserdata' />
    <input style='display:none;' type='hidden' name='rvpas' id='loginpassdata' />
  </form>
  <!-- Section: Design Block -->
  <script src="js/mdb.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LceCpwlAAAAAJYs71hUQ7gO59eaiij7QdRxnJVX"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function onSubmit(token) {
      // Manejar la validación del token de reCAPTCHA
      document.getElementById("form-registrar").submit();
    }
  </script>
  <script>
    document.querySelector('#form-registrar').addEventListener('submit', function (evt) {
      evt.preventDefault(); // Evitar el comportamiento predeterminado del evento submit

      // Llamar a la función para enviar el formulario
      enviarFormulario();
    });
    function enviarFormulario() {

      const nombre = document.getElementById('nombre').value;
      const apellido = document.getElementById('apellido').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const nombreNegocio = document.getElementById('nombre_negocio').value;
      const conociste = document.getElementById('conociste').value;
      const celular = document.getElementById('celular').value;
      if (!nombre || !apellido || !email || !password || !nombreNegocio || !conociste || !celular) {
        // Mostrar un mensaje de error si algún campo requerido está vacío
        alert('Por favor complete todos los campos requeridos antes de enviar el formulario.');

        return;
      }
      document.getElementById("text_base").innerHTML = 'Registrando...';
      // Obtener el token de reCAPTCHA
      grecaptcha.ready(function () {
        grecaptcha.execute('6LceCpwlAAAAAJYs71hUQ7gO59eaiij7QdRxnJVX', { action: 'submit' })
          .then(function (token) {
            // Incluir el token de reCAPTCHA en los datos del formulario
            const datos = {
              accion: 'crear_sistema_practisis',
              nombre: nombre,
              apellido: apellido,
              email: email,
              pass: password,
              repass: password,
              celular: celular,
              empresa: nombreNegocio,
              conociste: conociste,
              es_matematicas_restaurant:true,
              version: 2,
              token: token,
              campo_datos_gasto_general: document.getElementById('campo_datos_gasto_general').value,
              datos_tabla_empleado: document.getElementById('datos_tabla_empleado').value,
              clientes_mes: document.getElementById('clientes_mes').value,
              form_objetivo: document.getElementById('form_objetivo').value,
              form_utilidad: document.getElementById('form_utilidad').value,
              form_gasto_general: document.getElementById('form_gasto_general').value,
              form_gasto_personal: document.getElementById('form_gasto_personal').value,
              form_tenedor_promedio: document.getElementById('form_tenedor_promedio').value,
              form_costo: document.getElementById('form_costo').value,
            };
            // Enviar los datos del formulario vía AJAX con Axios
            axios.post('https://www.practisis.net/registro/bases_sistemas.php', datos, {
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              }
            })
              .then(respuesta => {
                // Manejar la respuesta del servidor
                if (respuesta.data.resultado) {
                  // Redireccionar al sistema
                  document.getElementById("text_base").innerHTML = 'Base de datos creada, estamos Redireccionado... ';
                  document.getElementById("loginuserdata").value = email;
                  document.getElementById("loginpassdata").value = password;
                  document.getElementById("formdatauser").submit();
                } else if (respuesta.data.resultado == false) {
                  // Mostrar un mensaje de error si el correo electrónico ya está registrado

                  document.getElementById('text_base').innerHTML = respuesta.data.msg;

                } else {
                  document.getElementById('text_base').innerHTML = 'Ocurrio un error en el servidor, intente nuevamente';
                }
              })
              .catch(error => {
                // Manejar el error de la petición
                console.error(error);
              });
          });
      });
    }
  </script>


  </script>
</body>

</html>