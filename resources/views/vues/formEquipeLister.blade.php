@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="blanc">
            <h1>Liste de mes Equipes</h1>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Designation</th>
            </tr>
            </thead>
            @foreach ($mesEquipes as $uneEquipe)
                <tr>
                    <td>{{$uneEquipe->Id}}</td>
                    <td>{{$uneEquipe->CodeEq}}</td>
                    <td>{{$uneEquipe->DesiEq}}</td>
                    <td style="text-align: center;">
                        <a href="{{url('/modifierEquipe')}}/{{$uneEquipe->Id}}">
                            <span class="glyphicon glyphicon-pencil"
                                  data-toggle="tooltip" data-placement="top" title="Lister">
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
            <BR><BR>
        </table>
    </div>
