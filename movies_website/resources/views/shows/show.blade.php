<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Details</title>
</head>

<body>

<div class="content">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="col-md-12 text-center">
                    <h5>Info about show with ID: {{$show->id}}</h5>
                </div>
                <div class="col-md-6 offset-3 mt-5 text-center">
                    {{$show->title}}
                </div>

                <div class="row">
                    <div class="col">
                        <img src="{{Storage::url($show->poster)}}" width="400">
                    </div>

                    <div class="col">
                        <div class="col-md-6 offset-3 mt-5">
                            {{$show->description}}
                        </div>

                        <div class="col-md-6 offset-3 mt-5">
                            <b>Air date:</b> {{$show->air_date}}
                        </div>

                        <div class="col-md-6 offset-3 mt-5">
                            <b>Ending date:</b> {{$show->ending_date}}
                        </div>

                        <div class="col-md-6 offset-3 mt-5">
                            <b>Runtime:</b> {{$show->runtime}}
                        </div>

                        <div class="col-md-6 offset-3 mt-5">
                            <b>Rating:</b> {{$show->rating}}
                        </div>

                        <div class="col-md-6 offset-3 mt-5">
                            <b>Tag:</b> {{$show->tag->name}}
                        </div>

                        <div class="col-md-6 offset-3 mt-5">
                            <b>Producer:</b> {{$show->producer->lastname}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 offset-3 mt-5">
                    <b>Genres:</b>
                    <ul>
                        @foreach($show->genres as $genre)
                            <li>{{$genre->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 offset-3 mt-5">
                    <b>Actors:</b>
                    <ul>
                        @foreach($show->actors as $actor)
                            <li>{{$actor->lastname}}</li>
                        @endforeach
                    </ul>
                </div>

                <p class="text-center mt-5">
                    <a href="{{route('shows.index')}}" class="btn btn-primary">Back</a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>

</html>


