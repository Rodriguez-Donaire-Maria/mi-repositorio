<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Inicio de Sesión</title>
  </head>
  <body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                    <img src="{{ asset('assets/user.png') }}" style="width: 185px;" alt="logo">
                  </div>
                  <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Usuario:</label>
                      <input type="email" name="email" id="form2Example11" class="form-control"/>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example22">Contraseña</label>
                      <input type="password" name="password" id="form2Example22" class="form-control"/>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar Sesión</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                      <a href="{{ route('register') }}" class="btn btn-outline-danger">Registrarse</a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-5 py-2 p-md-6 mx-md-4">
                  <img src="{{ asset('assets/logo1.png') }}" style="width: 400px;" alt="logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
