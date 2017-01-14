<!DOCTYPE html>
<html>
    <head>
        <title>Добавить товар</title>
        <script src="{{asset("js/jquery-3.1.1.min.js")}}"></script>
        <script src="{{asset("js/bootstrap.min.js")}}"></script>
        <script src="{{asset("js/functions.js")}}"></script>
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
        <link rel="stylesheet" href="{{asset("css/bootstrap-theme.min.css")}}"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <h1>Олег лох</h1>
            <form id="item-form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="file" name="preview[]"/><br>
                   <input type="file" name="preview[]"/><br>
                <button class="btn btn-default btn-lg btn_save_item" type="submit">Сохранить товар</button>
            </form>
        </div>
    </body>

</html>
