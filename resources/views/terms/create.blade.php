@extends('coreui::master')

@section('title', 'Term toevoegen')

@section('body')

    <div class="container-fluid">
        <div class="card mt-3">
            <h5 class="card-header text-secondary bg-dark">
                Term toevoegen
            </h5>
            <div class="card-body bg-secondary">

                <form method="POST" action={{ route("terms.store") }}>

                    @csrf

                    <div class="col">
                        <div class="form-group">
                            <label for="image">Image <strong style="color: red">&#42;</strong></label>
                            <input required type="text" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}} " id="image" name="image" placeholder="Vul hier een image in">
                            <span class="text-danger">@if($errors->has('image')){{$errors->get('image')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="title">Title <strong style="color: red">&#42;</strong></label>
                            <input required type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}} " id="title" name="title" placeholder="Vul hier een titel in">
                            <span class="text-danger">@if($errors->has('title')){{$errors->get('title')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="number">Number <strong style="color: red">&#42;</strong></label>
                            <input required type="number" class="form-control {{$errors->has('number') ? 'is-invalid' : ''}} " id="number" name="number" placeholder="Vul hier een nummer in">
                            <span class="text-danger">@if($errors->has('number')){{$errors->get('number')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description <strong style="color: red">&#42;</strong></label>
                            <input required type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}} " id="description" name="description" placeholder="Vul hier je description in">
                            <span class="text-danger">@if($errors->has('description')){{$errors->get('description')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester <strong style="color: red">&#42;</strong></label>
                            <input required type="number" class="form-control {{$errors->has('semester') ? 'is-invalid' : ''}} " id="semester" name="semester" placeholder="Vul hier een semester in">
                            <span class="text-danger">@if($errors->has('semester')){{$errors->get('semester')[0]}}@else &nbsp; @endif</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Voeg toe</button>
                            <a class="btn btn-dark float-right" href="{{route('terms.index')}}"
                               role="button"><i class="fa fa-arrow-alt-circle-left"></i> Ga terug</a>
                        </div>
                    </div>
                </form>

@endsection