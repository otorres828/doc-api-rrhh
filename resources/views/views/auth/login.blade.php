<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>RRHH - Login</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('login.css') }}">

</head>

<body class="text-center">
    <div class="container ">

        <div class="pt-10 form-signin">
            <form  method=post name="login">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Inicia sesion 😉</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com"
                            require>
                        <label for="floatingInput">Correo electronico</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" require>
                        <label for="floatingPassword">Contraseña</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Recordarme
                        </label>
                    </div>
                    <a type="submit" class="w-100 btn btn-lg btn-success mb-2" value='Iniciar sesion'href="javascript:enviar_formulario()">Iniciar Sesion</a>

                    <p class="mt-5 mb-3 text-muted">&copy; 2022 TESISTAS-UCAB</p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javaScript">
    function enviar_formulario(){
        $(document).ready(function() {                
            $.ajax({
                method:"post",
                url: "http://localhost:8000/api/iniciar-sesion",
                data: {
                        email: document.getElementById("email").value,
                        password: document.getElementById("password").value,
                    },
                    success:function (respuesta) {
                     if(!respuesta.error){
                            console.log(respuesta);   
                            sessionStorage.setItem('access_token',JSON.stringify(respuesta.access_token));

                            // window.sessionStorage.setItem('access_token',respuesta.access_token);
                            window.localStorage.setItem('access_token',respuesta.access_token); 
                     
                            window.location.href = "{{ route('trabajadores') }}";
  
                        }
                    }
                })
               
            })
        }
    </script>
</body>

</html>
