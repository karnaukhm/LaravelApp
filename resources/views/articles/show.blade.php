<html>
<head>
    {!! HTML::style('css/bootstrap-theme.min.css')  !!}
    {!! HTML::style('css/bootstrap.min.css')        !!}
    <title>Blog Application Using aravel 5.1</title>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h2> {{$articles[0]->title}} </h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-2"></div>
  <article class="col-xs-8 center-block">

        <p>  {{$articles[0]->body}}  </p>
  </article>
    <div class="col-xs-2"></div>
</div>
<div class="row">
<div class="col-xs-2"></div>
<footer class="center-block">
    <p class="text-center">&copy; Karnaukh Mikhail 2015</p>
</footer>
<div class="col-xs-2"></div>
    {!! HTML::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
</div>
</div>
</body>
</html>