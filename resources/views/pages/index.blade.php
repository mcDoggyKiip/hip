@extends('coreui::master')

@section('body')
    <div class="tablePages">
        <a class="btn btn-success pagesAddButton" href={{ url('/pages/create') }}>Add new</a>
        <p>Pages<p>
        <table>
            {{-- Head of table --}}
            <tr>
                <td>id</td>
                <td>titke</td>
                <td>text</td>
                <td>Actions</td>
            </tr>

            @foreach($pages as $row)
            <tr>
                <td class="bg-dark" style="width: 27vw;">{{ $row->id }}</td>
                <td class="bg-dark" style="width: 27vw;">{{ $row->titke }}</td>
                <td class="bg-dark" style="width: 27vw;">{{ $row->text }}</td>
                <td class="bg-dark">
                    <div class="buttonsPages" style="width: 4vw;">
                        <a style="float: left;margin: 0px 5px 0px 5px;" type="button" class="action-button btn btn-sm btn-primary" href="{{ url('pages/ . $row->id . /edit') }}">
                            <i class="far fa-edit"></i>
                        </a>
                        <form method="post" action="{{ url('pages/' . $row->id) }}">
                            @method('delete')
                            @CSRF
                            <button type="button" class="action-button btn btn-sm btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection('body')