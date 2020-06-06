@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new questionnaire</div>

                    <div class="card-body">
                        <form action="/questionnaire/public/questionnaires" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" >
                                @error('title')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="purpose">Purpose</label>
                                <input type="text" class="form-control" name="purpose" id="purpose" >
                                @error('purpose')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Create questionnaire</button>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
