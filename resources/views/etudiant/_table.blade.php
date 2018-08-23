<table style="width:100%" border="1">
    <caption>{{trans('etudiant.listeEtudiants')}}</caption>
    <thead>
        <th>{{trans('etudiant.nom')}}</th>
        <th>{{trans('etudiant.prenom')}}</th>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td style="padding:2% 1% 1% 5%">
                <button class="btn btn-info">
                    <a style="color:white" href="{{route('showEtudiant',$etudiant->id)}}">{{trans('commun.details')}}</a>
                </button>
            </td>
            <td style="padding:2% 1% 1% 5%">
                <button class="btn btn-warning" style="color:white">
                    <a style="color:white" href="{{route('editEtudiant',$etudiant->id)}}">{{trans('commun.modifier')}}</a>
                </button>
            </td>
            <td style="padding:2% 1% 1% 5%">
                {!! Form::open(['route' => ['deleteEtudiant',$etudiant->id], 'method' => 'delete']) !!}
                    <button type="submit" class="btn btn-danger">{{trans('commun.suppression')}}</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>