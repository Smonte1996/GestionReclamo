<div>
<div class="row">
<div class="container pt-5 d-flex justify-content-center mb-5">
  <div class="border rounded shadow p-3 col-md-6">
     <div class="rounded float-end pb-3">
         <img src="{{asset('img/LOGO_RANSA_2.png')}}" width="200" alt="{{'Imagen del logo'}}">
      </div>
  <div class="border-bottom shadow-sm pb-4 pt-2 text-white" style="background:#009A3F">
    <div class=" pt-5 px-5 ">
      <h1><P> Queremos mejorar tu experiencia de servicio.
        Déjanos tu reclamo, consulta, sugerencia o felicitación.</P></h1>
    </div>
  </div>
  <form wire:submit.prevent='RegistarReclamo' class="form-control" enctype="multipart/form-data">
  @csrf
    <div >
      <dt class="text-success">Identificacion del cliente</dt>
      <br>
      <p class="text-success">¡ Bríndanos tus datos !</p>
      <br>
    </div>
    <div class="mb-3">
        <label for="Nombres" class="form-label">Nombres Completos*</label>
        <input type="text" class="form-control @error('Nombres') is-invalid @enderror" id="Nombres" wire:model.lazy="Nombres" :value="old('Nombres')"  placeholder="Juan de la Fuente">
        @error('Nombres')
        <small id="NombreshelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo Electronico*</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model.lazy="email" :value="old('email')" placeholder="ejemplo@ejemplo.com">
        @error('email')
        <small id="emailhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="celular" class="form-label">Telefono de contactos*</label>
        <input type="number" class="form-control @error('celular') is-invalid @enderror"  id="celular" wire:model="celular" :value="old('celular')" placeholder="ejemplo:0999999999">
        @error('celular')
        <small id="celularhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="Empresa" class="form-label">Empresa o Razon social a lo que pertenece*</label>
        <input type="text" class="form-control @error('Empresa') is-invalid @enderror" id="Empresa" placeholder="No se permite caracteres especiales con (.,-,*,[],())" wire:model="Empresa" :value="old('Empresa')" >
        @error('Empresa')
        <small id="EmpresahelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="sede" class="form-label">Sede del servicio afectado*</label>
        <select class="form-control @error('sede') is-invalid @enderror " id="sede" wire:model="sede" :value="old('sede')" >
            <option>--Seleccionar--</option>
            @foreach ($sedes as $sede )
            <option value="{{$sede->id}}" >{{$sede->name}}</option>
            @endforeach
        </select>
        @error('sede')
        <small id="sedehelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="servicio" class="form-label">Servicio contratado*</label>
        <select class="form-control @error('servicio') is-invalid @enderror" id="servicio" wire:model="servicio" :value="old('servicio')">
            <option>--Seleccionar--</option>
            @foreach ($servicios as $servicio )
            <option value="{{$servicio->id}}" >{{$servicio->name}}</option>
            @endforeach
        </select>
        @error('servicio')
        <small id="serviciohelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
      @enderror
      </div>

      <div class="mb-3">
        <label for="servicios" class="form-label">Sub-Servicio afectado*</label>
        <select class="form-control @error('sub_servicio') is-invalid @enderror" id="servicios" wire:model="sub_servicio" :value="old('sub_servicio')">
            <option>--Seleccionar--</option>
            @if(!is_null($adicionals))
            @foreach ($adicionals as $adicional )
            <option value="{{$adicional->id}}" >{{$adicional->name}}</option>
            @endforeach
            @endif
        </select>
        @error('sub_servicio')
        <small id="sub_serviciohelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
      @enderror
      </div>

      <div class="mb-3">
        <label for="tipo" class="form-label">Tipo de caso*</label>
        <select class="form-control @error('tipo') is-invalid @enderror" id="tipo" wire:model="tipo" :value="old('tipo')" >
            <option>--Seleccionar--</option>
            @foreach ($tipos as $tipo )
            <option value="{{$tipo->id}}" >{{$tipo->name}}</option>
            @endforeach
        </select>
        @error('tipo')
        <small id="tipohelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
      @enderror
      </div>

      <div class="mb-3">
        <label for="fecha" class="form-label">fecha de Ocurrencia*</label>
        <input type="date" class="form-control @error('fecha') is-invalid @enderror " id="fecha" wire:model="fecha" :value="old('fecha')">
        @error('fecha')
        <small id="fechahelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
      @enderror
      </div>

      <div class="mb-3">
        <label for="titulo" class="form-label">Titulo del caso*</label>
        <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" wire:model="titulo" :value="old('titulo')" >
        @error('titulo')
        <small id="titulohelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion de lo sucedido*</label>
        <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" wire:model="descripcion" :value="old('descripcion')" placeholder="Describir el problema">
        </textarea>
        @error('descripcion')
        <small id="descripcionhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
      @enderror
      </div>

      @if (session()->has('mensaje'))
     <div>
      {{session('mensaje')}}
      </div>    
    @else
      <div class="mb-3">
        <label for="imagen" class="form-label">Por favor adjuntar evidencia si existe algun soporte de la novedad reportada. ejemplo (.jpeg,.png,.jpg,.svg)</label>
        <input type="file" class="form-control @error('imagen') is-invalid @enderror" id="imagen" wire:model="imagen" accept=".jpeg,.png,.jpg,.svg">
        </div>
        @error('imagen')
        <small id="imagenhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
        @enderror
    @endif    
        
        @if ($imagen)
        <div class="card" style="width: 20rem;">
        Preview Imagen:
        <img src="{{ $imagen->temporaryUrl() }}" class="card-img-top"> 
        </div>
       @endif
     
   
     
      <div class="d-grid col-5 mx-auto mt-4">
        <button type="submit" class="btn btn-success" wire:loading.attr='disabled' wire:target='RegistarReclamo' class="disabled:opacity-60"> Enviar </button>
        </div>
    </form>
</div>
</div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Livewire.on('alert', function(message){
    Swal.fire(
      'Gracias',
       message,
      'success'
    )
  })
</script>
@endpush
</div>
