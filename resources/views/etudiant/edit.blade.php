@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">{{trans('etudiant.titremodification')}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('etudiant._form')
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
