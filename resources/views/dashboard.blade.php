<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Metronic | Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        Dashboard
                      </div>
                      <div class="col-md-6 d-flex flex-row-reverse">
                        <a class="btn btn-danger btn-sm" href="{!! route('logout') !!}">Logout</a>
                      </div>
                    </div>
                  </div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      {{ Auth::user()->name }} are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
