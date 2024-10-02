<!doctype html>
<html lang="fr">
<head>
    <title>Les Employés et Équipes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style ('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/monStyle.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Gestion des employés</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/listerEmploye')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister</a></li>
                    <li><a href="{{url('/ajouterEmploye')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Ajouter</a></li>
                    <li class="divider-vertical"></li>
                    <a class="navbar-brand" href="{{url('/')}}">Gestion des équipes</a>
                    <li><a href="{{url('/listerEquipe')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister</a></li>
                    <li><a href="{{url('/ajouterEquipe')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Ajouter</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container" style="margin-top: 60px;">
    @yield('content')
</div>

{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>
