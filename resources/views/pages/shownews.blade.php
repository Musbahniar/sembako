@extends('template')

@section('main')
<br />
<div class="container">
   
    <div class="row">
        <div class="col-lg-12 col-sm-6 col-md-8">
            <div class="media">
                <img src="{{ asset('images/news-icon.png') }}" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0">{{ $beritaUtama->judulberita }}</h5>
                    <p>{{ $beritaUtama->isiberita }}</p>
                </div>
            </div>
        </div>
    </div>

    <br />
</div>
@stop