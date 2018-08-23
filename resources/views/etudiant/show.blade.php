@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-info">{{trans('etudiant.detailsEtudiant')}}</div>

                <div class="panel-body">
                    <p>Id:  {{$etudiant->id}}</p>
                    <p>{{trans('etudiant.nom')}}: {{$etudiant->nom}}</p>
                    <p>{{trans('etudiant.prenom')}}: {{$etudiant->prenom}}</p>
                </div>
                <div class="panel-footer">
                        <a href="{{route('home')}}" class="btn btn-default">
                            {{trans('commun.retourpageprecedente')}}
                            <i class="glyphicon glyphicon-circle-arrow-left"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
