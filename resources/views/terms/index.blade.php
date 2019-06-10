@extends('coreui::master')

@section('delRoute', 'Terms')

@section('title', 'Terms')

@section('body')

    @include('layouts.partials.delete-modal')


    @if(session()->get('success'))
        <div class="alert alert-success text-center" role="alert">
            {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    <table class="table table-striped mt-2">
        <thead class="thead-dark">
        <tr>
            <th scope="col" colspan="9">Alle Terms</th>
        </tr>
        </thead>
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Titel</th>
            <th scope="col">Number</th>
            <th scope="col">Description</th>
            <th scope="col">Semester</th>
            <th scope="col" colspan="3"><a class="btn btn-success btn-sm btn-block float-right" href="{{route('terms.create')}}" role="button"><i class="fa fa-plus"></i> Term toevoegen</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($Terms as $term)
            <tr>
                <th scope="row">{{$term['id']}}</th>
                <td>{{$term['image']}}</td>
                <td>{{$sight['title']}}</td>
                <td>{{$sight['number']}}</td>
                <td>{{$sight['description']}}</td>
                <td>{{$sight['semester']}}</td>
                <td><a class="btn btn-sm btn-block btn-secondary" href="{{route('terms.show', $term['id'])}}" role="button"><i class="fa fa-eye"></i> Bekijk</a></td>
                <td> <a class="btn btn-sm btn-block btn-info" href="{{route('terms.edit', $term['id'])}}" role="button"><i class="fa fa-edit"></i> Wijzig</a> </td>
                <td>
                    @include('layouts.partials.delete-button', [
                            'id' => $term->id
                        ])
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>

    {{-- Pagination links --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-0.5">
                {{ $terms->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('js/delete-modal-id-updater.js') }}"></script>
@endpush('js')