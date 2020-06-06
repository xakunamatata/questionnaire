@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$questionnaire->title}}</div>

                    <div class="card-body">
                        <p>{{$questionnaire->purpose}}</p>
                        <a href="/questionnaire/public/questionnaires/{{$questionnaire->id}}/questions/create" class="btn btn-outline-success">Add question</a>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
