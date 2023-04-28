@extends('backend.layouts.main')
@section('title', __('noticias.index'))

@section('content')
    @forelse($noticias as $noticia)
        @if($loop->iteration % 2 != 0) {{-- Se puede cambiar por 4 --}}
            <div class="row">
        @endif
        <div class="col-md-6">
            <div class="card">
                @if($noticia->imagen)
                    @if(Str::startsWith($noticia->imagen, 'http'))
                        <img src="{{ $noticia->imagen }}" class="card-img-top">
                    @else
                        <img src="{{ asset($noticia->imagen) }}" class="card-img-top">
                    @endif
                @else 
                    <img src="img/t14" alt="no image"><hr>
                @endif
                <div class="card-body">
                    <p class="card-text text-right">
                        <h3 class="card-title text-info">{{ $noticia->titulo }}</h3>
                        <p class="card-text text-left">{{ $noticia->autor }}</p>
                        <p class="card-text">{!! $noticia->cuerpo !!}</p>
                        <div class="card-footer">
                            <div class="row">
                                <a href="{{ route('noticias.show', ['noticia' => $noticia->id]) }}" class="offset-0 btn btn-info">
                                    <img src="{{ asset('img/diamond.svg') }}" width="20" height="20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($loop->iteration % 2 == 0)
        </div>
        <hr>
        @endif
        @empty
        <p class="text-capitalize">No hay noticias</p>
        @endforelse
    </div>
    <hr>
@endsection