@extends('comicBooks/layout')

@section('content')
    @if ($errors->any())
        <br>
        <div class="toast toast-error">
            <p>{{$errors->all()[0]}}</p> 
        </div>      
    @endif
    <div class="col-5 background-light-blue" style="min-width: 600px; border: solid; border-top: none; border-width: .2em; margin: auto; border-bottom-left-radius: 1em; border-bottom-right-radius: 1em;">
        <h2 class="hero hero-sm" style="color: black; text-align: center;">Add a New Comic Book</h2>
        <div style="text-align: center; display: flex; justify-content: center; padding-bottom: 2em;">
            <form method="POST" action={{route('comicBooks.store')}} class="col-9">
                @csrf
                <div class="form-horizontal container">
                
                
                    <div class="form-group">
                        <div class="col-4">
                            <label class="form-label" for="title" style="text-align: left;">Title</label>
                        </div>
                        <div class="col-4">
                            <input type="text" name="title" placeholder="Title" maxlength="65535" value="{{old('title')}}">
                        </div>
                    </div>
                
                
                    <div class="form-group">
                        <div class="col-4">
                            <label class="form-label" for="volume" style="text-align: left;">Volume</label>
                        </div>
                        <div class="col-4">
                            <input type="text" name="volume" placeholder="Volume" maxlength="10" value="{{old('volume')}}">
                        </div>
                    </div>
                
                
                    <div class="form-group">
                        <div class="col-4">
                            <label class="form-label" for="issue_number" style="text-align: left;">Issue</label>
                        </div>
                        <div class="col-4">
                            <input type="text" name="issue_number" placeholder="Issue" maxlength="10" value="{{old('issue_number')}}">
                        </div>
                    </div>
                
                
                    <div class="form-group">
                        <div class="col-4">
                            <label class="form-label" for="publication_date" style="text-align: left;">Publication Date</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select" name="publication_month">
                                <option value="1" @if(old('publication_month') == "1") selected @endif>JAN</option>
                                <option value="2" @if(old('publication_month') == "2") selected @endif>FEB</option>
                                <option value="3" @if(old('publication_month') == "3") selected @endif>MAR</option>
                                <option value="4" @if(old('publication_month') == "4") selected @endif>APR</option>
                                <option value="5" @if(old('publication_month') == "5") selected @endif>MAY</option>
                                <option value="6" @if(old('publication_month') == "6") selected @endif>JUN</option>
                                <option value="7" @if(old('publication_month') == "7") selected @endif>JUL</option>
                                <option value="8" @if(old('publication_month') == "8") selected @endif>AUG</option>
                                <option value="9" @if(old('publication_month') == "9") selected @endif>OCT</option>
                                <option value="10" @if(old('publication_month') == "10") selected @endif>SEP</option>
                                <option value="11" @if(old('publication_month') == "11") selected @endif>NOV</option>
                                <option value="12" @if(old('publication_month') == "12") selected @endif>DEC</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <select class="form-select" name="publication_year">
                                @foreach(range(2021, 1837) as $year)
                                        <option value="{{$year}}" {{old('publication_year') == $year ? "selected" : ''}}>{{$year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                
                    <div class="form-group">
                        <div class="col-4">
                            <label class="form-label" for="condition" style="text-align: left;">Condition</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select" name="condition">
                                <option value="MT" @if(old('condition') == "MT") selected @endif>Mint</option>
                                <option value="NM" @if(old('condition') == "NM") selected @endif>Near Mint</option>
                                <option value="VF" @if(old('condition') == "VF") selected @endif>Very Fine</option>
                                <option value="FN" @if(old('condition') == "FN") selected @endif>Fine</option>
                                <option value="VG" @if(old('condition') == "VG") selected @endif>Very Good</option>
                                <option value="GD" @if(old('condition') == "GD") selected @endif>Good</option>
                                <option value="FA" @if(old('condition') == "FA") selected @endif>Fair</option>
                                <option value="PO" @if(old('condition') == "PO") selected @endif>Poor</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="col-4">
                            <label class="form-label" for="writer" style="text-align: left;">Writer</label>
                        </div>
                        <div class="col-4">
                            <input type="text" name="first_name_writer" placeholder="First" maxlength="65535" value="{{old('first_name_writer')}}">
                        </div>
                        <div class="col-4">
                            <input type="text" name="last_name_writer" placeholder="Last" maxlength="65535" value="{{old('last_name_writer')}}">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="col-4">
                            <label class="form-label" for="artist" style="text-align: left;">Artist</label>
                        </div>
                        <div class="col-4">
                            <input type="text" name="first_name_artist" placeholder="First" maxlength="65535" value="{{old('first_name_artist')}}">
                        </div>
                        <div class="col-4">
                            <input type="text" name="last_name_artist" placeholder="Last" maxlength="65535" value="{{old('last_name_artist')}}">
                        </div>
                    </div>
                
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="button-light-purple text-white" >Add Book</button>
                    <a href={{route('comicBooks.index')}} style="color: black; padding-left: 1em;"> Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection