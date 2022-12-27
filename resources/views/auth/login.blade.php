<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Login Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/modals/">

    

    

<link href="example/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="example/modals/modals.css" rel="stylesheet">
  </head>



  <body>


<div class="modal modal-signin d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow justify-content-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
          </div>
        </div>
      </div>
     
      <div class="modal-header p-5 pb-4 border-bottom-0">
        
        <h2 class="fw-bold mb-0 text-center">Login Page</h2>
      </div>

      <div class="modal-body p-5 pt-0">
        <form method="post" action="/log">
          @csrf
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
          <small>Belum punya akun? <a class="text-decoration-none" href="/register">Daftar!!</a></small>
        </form>
      </div>
    </div>
  </div>
</div>


    <script src="example/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
