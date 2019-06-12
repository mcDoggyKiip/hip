@extends('coreui::master')

@section('body')
    <div class="tableTests">
        <a class="btn btn-success testsAddButton" href={{ url('/products/create') }}>Add new</a>
        <p>Products<p>
        <table>
            {{-- Head of table --}}
            <tr>
                <td>name</td>
            </tr>

            @foreach($products as $row)
            <tr>
                <td class="bg-dark" style="width: 27vw;">{{ $row->name }}</td>
                <td class="bg-dark">
                    <div class="buttonsTests" style="width: 4vw;">
                        <a style="float: left;margin: 0px 5px 0px 5px;" type="button" class="action-button btn btn-sm btn-primary" href="{{ url('products/ . $row->id . /edit') }}">
                            <i class="far fa-edit"></i>
                        </a>
                        <form method="post" action="{{ url('products/' . $row->id) }}">
                            @method('delete')
                            @CSRF
                            <button type="submit" class="action-button btn btn-sm btn-danger">
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