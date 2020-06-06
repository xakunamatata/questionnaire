@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>{{$questionnaire->title}}</h1>
                <form action="/questionnaire/public/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="post">
                    @csrf
                    @foreach($questionnaire->questions as $key=>$question)
                        <div class="card mt-2">
                            <div class="card-header"><strong>{{$key + 1}}</strong> {{$question->question}}</div>
                            @error("responses.$key.answer_id")
                            <small class="form-text text-danger ml-2">{{$message}}</small>
                            @enderror
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach($question->answers as $answer)
                                        <label for="answer{{$answer->id}}">
                                            <li class="list-group-item">
                                                <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}"
                                                       {{(old("responses.$key.answer_id") == $answer->id) ? 'checked': ''}}
                                                       class="mr-2" value="{{$answer->id}}">
                                                {{$answer->answer}}

                                                <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
                                            </li>
                                        </label>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach

                    <div class="card mt-2">
                        <div class="card-header">Your information</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input type="text" class="form-control" id="name" name="survey[name]" value="{{old('survey.name')}}">
                                @error('survey.name')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="survey[email]" value="{{old('survey.email')}}">
                                @error('survey.email')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark mt-2">Complete survey</button>
                </form>

            </div>
        </div>
    </div>
@endsection
