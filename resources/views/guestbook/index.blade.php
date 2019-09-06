<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Input Guest</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap cdn -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{url('/input-guestbook/store')}}" method="post">
                        <h3>Input Guest</h3>
                        <label> Nama : </label>
                        <input type="text" name="nama" class="form-control">
                        <label> No Telp : </label>
                        <input type="text" name="no_telp" class="form-control">
                        <label> Instansi : </label>
                        <input type="text" name="instansi" class="form-control">
                        <label> Alamat : </label>
                        <textarea name="alamat" cols="30" rows="10" class="form-control"></textarea>
                        <br>
                        {{csrf_field()}}
                        <button class="btn btn-success"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
