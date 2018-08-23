@if(isset($etudiant))
    
    {!! Form::model($etudiant, ['route' => ['updateEtudiant',$etudiant->id],'method'=> 'put','class' => 'form-inline'])!!}
@else
   
   {!! Form::open(['route' => 'addEtudiant','class' => 'form-inline']) !!}
@endif
        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                {!! Form::label("lnom", trans('etudiant.nom')) !!}
                {!! Form::text('nom') !!}        
                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                {!! Form::label("lprenom", trans('etudiant.prenom')) !!}
                {!! Form::text('prenom') !!}        
                {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
        </div>
        <button type="submit" class="btn btn-primary">{{trans('commun.enregistrer')}}</button>        
    {!! Form::close() !!}



