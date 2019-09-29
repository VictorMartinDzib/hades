@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Bolsa de trabajo</b></div>
            
                        <div class="card-body">
                        
                        @foreach($vacantes as $vacante)
                        <div class="accordion" id="accordionExample">

  <div class="card" style="background: white">
    <div class="card-header" id="headingTwo" style="background: white">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <table class="table">
            <tr>
                  <td>{{ $vacante['id'] }}</td>
                  <td>{{ $vacante['nombre'] }}</td>
                  <td>{{ $vacante['created_at'] }}</td>
                                    
                  <td><button class="btn btn-success">Me interesa</button></td>
            </tr>
            </table>
        </button>
      </h2>
    </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
            {{ $vacante['requisitos'] }}
            </div>
      </div>
      </div>
      
      </div>
                        
                        @endforeach
                        
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection