@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
         <form action="{{route('utente.store')}}" method="post">
            {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nº de leitor:</label>
    <input class="form-control form-control-lg{{ $errors->has('registo') ? ' has-error' : '' }}" type="text" placeholder="" name="registo">
    @if ($errors->has('registo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('registo') }}</strong>
                                    </span>
                                @endif
  </div>
  <button type="submit" class="btn btn-primary">Inserir</button>
</form>  
     </div>
     <div class="container">
  <h2>Registo</h2>
  <!--<p>The .table-bordered class adds borders to a table:</p>-->     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nº Leitor</th>
        <th>Data</th>
        <th>Utilizador</th>
      </tr>
    </thead>
    <tbody>
        @foreach($registos as $item)
      <tr>
        <td>{{$item->nLeitor}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->user->name}}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
