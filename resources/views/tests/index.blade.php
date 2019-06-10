@extends('coreui::master')

@section('body')
    <div class="tableTests">
        <a class="btn btn-success testsAddButton" href={{ url('/tests/create') }}>Add new</a>
        <p>Tests<p>
        <table class='table'>
                <thead>
                {{-- Head of table --}}
                <tr>
                    <th>name</th>
                    <th>attempt</th>
                    <th>week</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($tests as $test)
                        <tr>
                            <td>{{ $test->week }}</td>
                            <td><a class="btn btn-info btn-sm text-white"
                               href={{ url('/tests/' . $test->id) }}>Details</a></td>
                            <td><a class="update-button btn btn-sm text-white"
                               href="{{ url('/tests/' . $test->id . '/edit') }}">Update</a></td>
                            <td>
                                <form method="POST" action="{{ url("/tests/" . $test->id) }}">
                                    @method('DELETE')
                                    @CSRF
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection('body')