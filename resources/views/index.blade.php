<!DOCTYPE html>
<html>
<head>
<title>Магазин</title>
<script src="{{asset("js/jquery-3.1.1.min.js")}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
<link rel="stylesheet" href="{{asset("css/bootstrap-theme.min.css")}}"/>
<link rel="stylesheet" href="{{asset("css/style.css")}}"/>
<script src="{{asset("js/jquery.cookie.js")}}"></script>
<script src="{{asset("js/functions.js")}}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar  navbar-default">
     <div class="container">
     <p class="navbar-text">Магазин</p>
     <!-- корзина -->
     <a href="/basket" class="navbar-link navbar-text navbar-right">
            <span style="font-size:1.5em;" class="glyphicon glyphicon-shopping-cart basket"></span>
                <span class="badge pull-right count_order">0</span>
     </a>
     </div>
</nav>
<div class="container">
     <div class="row">
     @foreach($items as $item)
         <div class="col-md-3">
         <div class="thumbnail">
         <img height=100 src="{{explode(';',$item->preview)[0]}}" alt="">     <!-- первая картинка в поле preview в базе -->
              <div class="caption">
                   <h3>{{$item->title}}</h3>
                   <p>Цена:<span class="price">{{$item->price}}</span> руб.</p>
                   <p><a href="#" class="btn btn-primary buy-btn" id="{{$item->id}}" role="button">Купить</a> <a href="/show/{{$item->id}}" class="btn btn-default" role="button">Подробнее</a></p>
             </div>
         </div>
         </div>
      @endforeach
</div>
</div>
    <script type="text/javascript">
            count_order();
    </script>
</body>
</html>