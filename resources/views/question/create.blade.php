@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new question</div>

                    <div class="card-body">
                        <form action="/questionnaire/public/questionnaires/{{$questionnaire->id}}/questions" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question">Enter Question</label>
                                <input type="text" class="form-control" name="question[question]" id="question" value="{{old('question.question')}}">
                                @error('question.question')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                           <div class="form-group">
                               <fieldset>
                                   <legend>Choices</legend>
                                   <div>
                                       <div class="form-group">
                                           <label for="answer1">Choice 1</label>
                                           <input type="text" class="form-control" name="answers[][answer]" id="answer1" value="{{old('answers.0.answer')}}">
                                           @error('answers.0.answer')
                                           <small class="form-text text-danger">{{$message}}</small>
                                           @enderror
                                       </div>
                                   </div>
                                   <div>
                                       <div class="form-group">
                                           <label for="answer2">Choice 2</label>
                                           <input type="text" class="form-control" name="answers[][answer]" id="answer2" value="{{old('answers.1.answer')}}">
                                           @error('answers.1.answer')
                                           <small class="form-text text-danger">{{$message}}</small>
                                           @enderror
                                       </div>
                                   </div>
                                   <div>
                                       <div class="form-group">
                                           <label for="answer3">Choice 3</label>
                                           <input type="text" class="form-control" name="answers[][answer]" id="answer3" value="{{old('answers.2.answer')}}">
                                           @error('answers.2.answer')
                                           <small class="form-text text-danger">{{$message}}</small>
                                           @enderror
                                       </div>
                                   </div>
                                   <div>
                                       <div class="form-group">
                                           <label for="answer4">Choice 4</label>
                                           <input type="text" class="form-control" name="answers[][answer]" id="answer4" value="{{old('answers.3.answer')}}">
                                           @error('answers.3.answer')
                                           <small class="form-text text-danger">{{$message}}</small>
                                           @enderror
                                       </div>
                                   </div>
                               </fieldset>
                           </div>
                            <button type="submit" class="btn btn-success">Create Question</button>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
