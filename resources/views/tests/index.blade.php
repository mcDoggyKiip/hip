@extends('coreui::master')

@section('body')
    <div class="tableTests">
        <a class="btn btn-success testsAddButton" href={{ url('/tests/create') }}>Add new</a>
        <p>Tests<p>
            <table>
                {{-- Head of table --}}
                <tr>
                    <td>name</td>
                    <td>attempt</td>
                    <td>week</td>
                    <td>Actions</td>
                </tr>
                <tr>
                    <td class="bg-dark" style="width: 27vw;">1</td>
                    <td class="bg-dark" style="width: 27vw;">2</td>
                    <td class="bg-dark" style="width: 27vw;">3</td>
                    <td class="bg-dark">
                        <a style="float: left;" type="button" class="action-button btn btn-sm btn-primary" href="{{ url('tests//edit') }}">
                            <i class="far fa-edit"></i>
                        </a>
                        <form method="post" action="{{ url('tests/') }}">
                                @method('delete')
                                @CSRF
                                <button type="button" class="action-button btn btn-sm btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                        </form>
                    </td>
                </tr>
            </table>
    </div>
@endsection('body')