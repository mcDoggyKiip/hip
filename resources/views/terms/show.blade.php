@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush


@section('title', 'Bekijk term')

@section('delRoute', 'terms')

@section('body')

    @include('layouts.partials.delete-modal')

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h5 class="card-header text-secondary bg-dark">
                        Term #{{$term['id']}}
                        <div class="float-right">
                            <td>
                                @include('layouts.partials.delete-button', [
                            'id' => $term->id])
                            </td>
                        </div>
                    </h5>
                    <div class="card-body bg-secondary">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Image</h5>
                                    <p class="card-text">
                                        {{$term['image']}}
                                    </p>

                                    <h5 class="card-title">
                                        Title
                                    </h5>
                                    <p class="card-text">
                                        {{$term['title']}}
                                    </p>

                                    <h5 class="card-title">
                                        Number
                                    </h5>
                                    <p class="card-text">
                                        {{$term['number']}}
                                    </p>

                                    <h5 class="card-title">
                                        Description
                                    </h5>
                                    <p class="card-text">
                                        {{$term['description']}}
                                    </p>

                                    <h5 class="card-title">
                                        Semester
                                    </h5>
                                    <p class="card-text">
                                        {{$term['semester']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">

                            <div class="col col-3">
                                <a class="btn btn-info" href="{{route('terms.edit', $term['id'])}}" role="button"><i class="fa fa-edit"></i> Wijzig</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-dark float-right" href="{{route('terms.index')}}"
       role="button"><i class="fa fa-arrow-alt-circle-left"></i> Ga terug</a>

@endsection

@push('js')
    <script src="{{ asset('js/delete-modal-id-updater.js') }}"></script>
@endpush('js')