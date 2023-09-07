@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <section class="py-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-4">Benvenuti nel mio Portfolio</h1>
                    <p>Mi chiamo Gioele Iacovella e sono uno Stronzo con esperienza nel campo di casa. Negli ultimi mesi, ho
                        lavorato su diversi progetti interessanti che dimostrano le mie competenze e la mia passione per il
                        coding.</p>
                    <p>Per saperne di più su di me e esplorare i progetti che ho realizzato, ti invito a visitare la mia
                        pagina dedicata ai progetti.</p>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Scopri i Miei Progetti</a>
                </div>
                <div class="col-md-6">
                    <!-- aggiungere un'immagine di me qui -->
                </div>
            </div>
        </section>
    </div>
@endsection
