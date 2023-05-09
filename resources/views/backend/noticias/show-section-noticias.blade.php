@extends('backend.layouts.main')
@section('title', __('noticias.index'))

@section('content')
<div class="mx-3">
<h2 class="mt-4 mb-3">Mostrando 20 noticias</h2>
    @forelse($noticias as $noticia)
        <div class="card mb-3" >{{-- style="max-width: 540px;" --}}
            <div class="row g-0">
                <div class="col-md-3" class="d-flex" style="display:flex;">
                    @if($noticia->imagen)
                        @if(Str::startsWith($noticia->imagen, 'http'))
                            <img src="{{ $noticia->imagen }}" style="">{{--object-fit: cover;overflow-x: hidden;  --}}
                        @else
                            <img src="{{ asset($noticia->imagen) }}" style="object-fit: cover;overflow-x: hidden;">{{-- card-img-top --}}
                        @endif
                    @else 
                        {{-- <div style="display:flex;"> --}}
                            <img src="img/t14" alt="no image" class="img-fluid rounded-start card-img-top"  style="object-fit: cover;overflow-x: hidden;">
                        {{-- </div> --}}
                    @endif
                </div>
                <div class="col-md-9 ps-5">
                    <div class="card-body">
                    <h3 class="card-title text-info">{{ $noticia->titulo }}</h3>
                    {{-- <p class="card-text text-left">{{ $noticia->autor }}</p> --}}
                    <p class="card-text">{!! $noticia->cuerpo !!}</p>
                    <p class="card-text"><small class="text-muted">{{ ($noticia->id -2) }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mb-4 text-primary">
            <p>Quedan {{ ($noticia->id - 3) }} noticias</p>
        </div>
        @empty
        <p class="text-capitalize">No hay noticias</p>
        @endforelse
    </div>
</div>
@endsection