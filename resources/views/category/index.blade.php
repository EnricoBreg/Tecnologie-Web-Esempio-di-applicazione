@extends('layouts.app')

@section('content')

<div class="container">
    <h1> Tutte le Categorie </h1>
    
    <div class="mt-5"></div>

    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label for="name">Nuova Categoria</label>
                <input type="text" class="form-control" name="name" id="name">
                <small class="form-text text-muted">Inserisci il nome della nuova Categoria</small>
              </div>
        </div>
        <div class="col-md-2">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <a href="" id="add-class-btn" class="btn btn-primary float-md-right mb-2" style="margin-top: 30px;">Aggiungi</a>
        </div>
    </div>
    
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>

          @foreach($categories as $c)
          <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->name }}</td>
            <td><a href="" class="btn btn-outline-danger btn-sm">Elimina</a></td>
          </tr>
          @endforeach

        </tbody>
      </table>

</div>

<script type="text/javascript">

    $('document').ready(function(){
        $('#add-class-btn').bind('click', function(e){
            e.preventDefault();

            var name = $('#name').val();
            var _token = $('#_token').val();
            
            if (name.length > 0) {
                $.ajax({
                    url: "/category", 
                    type: "POST",
                    dataType: "json",
                    data: { 'name': name, '_token': _token },
                    success: function(data) {
                        if (data.status === 'ok') {
                            // Costruisco una nuova riga della tabella
                        }
                    }, 
                    error: function(response, stato) {
                        console.log(stato);
                    }
                });
            }
        });
    });

</script>

@endsection
