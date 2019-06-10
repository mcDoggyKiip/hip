@extends('coreui::master')

@section('body')

@section('upRoute', 'terms.update')

<form method="POST" action="{{route('terms.update', $term['id'])}}">

    @method('PATCH')
    {{csrf_field()}}

    <div class="container-fluid">
        <div class="card mt-3">
            <h5 class="card-header text-secondary bg-dark">
                Term #{{$term['id']}} wijzigen
            </h5>
            <div class="card-body bg-secondary">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="image">Image <strong style="color: red">&#42;</strong></label>
                            <input required type="text" name="image" id="image" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}} "
                                   value="{{$term['image']}}">
                            <span class="text-danger">@if($errors->has('image')){{$errors->get('image')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="title">Title <strong style="color: red">&#42;</strong></label>
                            <input required type="text" name="title" id="title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}} "
                                   value="{{$term['title']}}">
                            <span class="text-danger">@if($errors->has('title')){{$errors->get('title')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="number">Number <strong style="color: red">&#42;</strong></label>
                            <input required type="number" name="number" id="number" class="form-control {{$errors->has('number') ? 'is-invalid' : ''}} "
                                   value="{{$term['number']}}">
                            <span class="text-danger">@if($errors->has('number')){{$errors->get('number')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description <strong style="color: red">&#42;</strong></label>
                            <input required type="text" name="description" id="description" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                                   value="{{$term['description']}}">
                            <span class="text-danger">@if($errors->has('description')){{$errors->get('description')[0]}}@else &nbsp; @endif</span>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester <strong style="color: red">&#42;</strong></label>
                            <input required type="number" name="semester" id="semester" class="form-control {{$errors->has('semester') ? 'is-invalid' : ''}} "
                                   value="{{$term['semester']}}">
                            <span class="text-danger">@if($errors->has('semester')){{$errors->get('semester')[0]}}@else &nbsp; @endif</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group" style="float:left">
                            @include('layouts.partials.edit-modal', ['id' => $term->id])
                        </div>
                        <a class="btn btn-dark float-right" href="{{route('terms.index')}}" role="button"><i class="fa fa-arrow-circle-left"></i> Ga
                            terug</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>

@endsection
