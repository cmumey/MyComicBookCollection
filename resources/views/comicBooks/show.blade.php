@extends('comicBooks/layout')

@section('content')
@if(session()->get('success'))
    <br>
    <div class="toast toast-success">
        <span>{{session()->get('success')}}</span>
    </div>
@endif
<div style="padding-top: 5em; padding-bottom: 3em;">
    <div class="card col-3" style="background-color: var(--light-purple); min-width: 400px; max-width: 500px; display: flex; justify-content: center; margin: auto; border-style: solid; border-color: black; border-width: .15em; border-radius: 1em; box-shadow: 0 0 1em rgba(0, 0, 0, 0.2);">
        <div class="card-image col-7" style="background-color: rgba(53, 85, 104 , .7); margin: auto; margin-top: -1px; border-left: solid black; border-right: solid black; border-width: .15em; box-shadow: 0 0 .65em rgba(0, 0, 0, 0.9);">
            <img src="{{URL::asset('/images/' . $comicBook->title . '.jpg')}}" class="img-responsive" alt="{{$comicBook->title}} cover" style="display: flex; justify-content: center; margin: auto; box-shadow: 0 0 .65em rgba(0, 0, 0, 0.9);">
        </div>
        <div class="card-header" style="color: white; background-color: rgba(53, 85, 104 , .7); text-align: center; border-top: solid; border-bottom: solid; border-color: black; border-width: .15em; box-shadow: 0 0 .5em rgba(0, 0, 0, 0.7);">
            <div class="card-title h2 text-bold" style="margin-bottom: .8em;">{{$comicBook->title}}</div>
        </div>
        <div class="card-body col-7" style="color: white; background-color: rgba(53, 85, 104 , .7); margin: auto; border-bottom-left-radius: 1em; border-bottom-right-radius: 1em; border-style: solid; border-top: none; border-color: black; border-width: .15em; box-shadow: 0 2px .5em rgba(0, 0, 0, 0.7);">
            <p>{{$comicBook->first_name_writer}} {{$comicBook->last_name_writer}} and {{$comicBook->first_name_artist}} {{$comicBook->last_name_artist}}</p>
            <p>Vol. {{$comicBook->volume}}  Iss. {{$comicBook->issue_number}}</p>
            <p>Published {{$comicBook->publication_month}}/{{$comicBook->publication_year}}</p>
            <p>{{$comicBook->condition}} condition</p>
        </div>
        <div class="card-footer" style="margin: auto;">
            <a href={{route('comicBooks.edit', $comicBook->id)}}><button class="button-purple" style="color: white; border-style: solid; border-color: black; border-width: .15em; border-radius: 5px; padding: .5em; box-shadow: inset 0 0 .4em rgba(0, 0, 0, 0.6);">Modify</button></a>
            <a href={{route('comicBooks.index')}} style="color: white; padding-left: 1em;"> Back</a>
        </div>
    </div>
</div>
@endsection
