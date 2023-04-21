<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Iniciar sesion practisis</title>
  <link rel="stylesheet" href="./stylelogin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
  <!-- partial:index.partial.html -->

  <section class="vh-100" class="text-center p-5 bg-image vh-100" style="
        background-image: url('fondo.jpg'); 
        background-repeat: no-repeat;
        background-size: cover;

      ;
        ">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="logo m-auto">


              </div>
              <form id="form-login">
                <h3 class="mb-5">Iniciar Sesión</h3>
                <div class="text_base text-center text-info text-muted" id="text_base"></div>
                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control form-control-lg" autocomplete="off" />
                  <label class="form-label" for="email">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" autocomplete="off" />
                  <label class="form-label" for="password">Contraseña</label>
                </div>

                <!-- Checkbox -->


                <button class="btn btn-primary btn-lg btn-block  mb-4 " data-sitekey="6LceCpwlAAAAAJYs71hUQ7gO59eaiij7QdRxnJVX"  type="submit">Iniciar</button>
              </form>
              <hr class="my-4">
              <form action="registrar.php" method="post" id="registrar">
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

                <button class="btn btn-lg btn-block btn-primary"  style="background-color: #dd4b39;" type="submit"><i class="fab fa-plus me-2"></i> Crear una cuenta</button>


              </form>


            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <form action="https://www.practisis.net/index3.php" id='formdatauser' method='post'>
    <input style='display:none;' type='hidden' name='rvus' id='loginuserdata' />
    <input style='display:none;' type='hidden' name='rvpas' id='loginpassdata' />
  </form>
  <!-- partial -->
  <script src="js/mdb.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LceCpwlAAAAAJYs71hUQ7gO59eaiij7QdRxnJVX"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function onSubmit(token) {
      // Manejar la validación del token de reCAPTCHA
      document.getElementById("form-login").submit();
    }
  </script>
  <script>
    document.querySelector('#form-login').addEventListener('submit', function(evt) {
      evt.preventDefault(); // Evitar el comportamiento predeterminado del evento submit

      // Llamar a la función para enviar el formulario
      enviarFormulario();
    });

    function enviarFormulario() {


      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (!email || !password) {
        // Mostrar un mensaje de error si algún campo requerido está vacío
        alert('Por favor complete todos los campos requeridos antes de enviar el formulario.');

        return;
      }
      document.getElementById("text_base").innerHTML = 'Iniciando Sesion...';
      // Obtener el token de reCAPTCHA
      grecaptcha.ready(function() {
        grecaptcha.execute('6LceCpwlAAAAAJYs71hUQ7gO59eaiij7QdRxnJVX', {
            action: 'submit'
          })
          .then(function(token) {
            // Incluir el token de reCAPTCHA en los datos del formulario
              console.log(document.getElementById('campo_datos_gasto_general').value)

            const datos = {
              accion: 'verificar_usuario_practisis',

              email: email,
           
              pass: password,
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
                  document.getElementById("text_base").innerHTML = 'estamos Redireccionado... ';
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


</body>

</html>