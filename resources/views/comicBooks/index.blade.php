@extends('comicBooks/layout')

@section('content')
@if(session()->get('success'))
    <br>
    <div class="toast toast-success">
        <span>{{session()->get('success')}}</span>
    </div>
@endif
<br>
<div class="col-7" style="font-family: 'lato'; margin-bottom: 2em; margin: auto; min-width: 800px;">
    <div>
        <a href={{route('comicBooks.create')}}><button class="button-light-purple text-white">Add Comic Book</button></a>
    </div>
    <br>
    @if(app('request')->input('sort') == 'byCondition')
        {{$comicBooks->links()->withPath('sort=byCondition')}}
    @endif
    <table class="table table-hover">
        <tr>
            <th>@sortablelink('title', 'Title')</th>
            <th>@sortablelink('volume', 'Volume')</th>
            <th>@sortablelink('issue_number', 'Issue')</th>
            <th><a href={{route('comicBooks.index', ['sort'=>'byDate'])}}>Publication Date</a></th>
            <th><a href={{route('comicBooks.index', ['sort'=>'byCondition'])}}>Condition</a></th>
            <th>@sortablelink('last_name_writer', 'Writer')</th>
            <th>@sortablelink('last_name_artist', 'Artist')</th>
            <th>Details</th>
        </tr>
        @if(app('request')->input('sort') != 'byCondition')
                @foreach($comicBooks as $comicBook)
                    <tr>
                        <td>{{$comicBook->title}}</td>
                        <td>{{$comicBook->volume}}</td>
                        <td>{{$comicBook->issue_number}}</td>
                        <td>{{$comicBook->publication_month}}/{{$comicBook->publication_year}}</td>
                        <td>{{$comicBook->condition}}</td>
                        <td>{{$comicBook->last_name_writer}}</td>
                        <td>{{$comicBook->last_name_artist}}</td>
                        <td><a href={{route("comicBooks.show", $comicBook->id)}}>Show</a></td>
                    </tr>
                @endforeach
                    {!! $comicBooks->appends(\Request::except('page'))->render()!!}
            </table>
            <br>
            <div>     
            {{$comicBooks->links()}}
        @else
            @foreach($comicBooks->getCollection()->toArray() as $comicBook)
                <tr>
                    <td>{{$comicBook['title']}}</td>
                    <td>{{$comicBook['volume']}}</td>
                    <td>{{$comicBook['issue_number']}}</td>
                    <td>{{$comicBook['publication_month']}}/{{$comicBook['publication_year']}}</td>
                    <td>{{$comicBook['condition']}}</td>
                    <td>{{$comicBook['last_name_writer']}}</td>
                    <td>{{$comicBook['last_name_artist']}}</td>
                    <td><a href={{route("comicBooks.show", $comicBook['id'])}}>Show</a></td>
                </tr>
            @endforeach
            </table>
            <br>
            <div>     
            {{$comicBooks->links()->withPath('sort=byCondition')}}
        @endif
        
    </div>
</div>
@endsection