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
    <div class="row" align="center">
        @foreach ($berita as $berita)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/newspaper.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->judulberita }}</h5>
                    <p class="card-text">{{ substr($berita->beritasingkat,0,30) }}</p>
                    <a href="{{ url('news/'. $berita->id )}}" class="btn btn-primary btn-sm">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br /><br />
</div>
@stop