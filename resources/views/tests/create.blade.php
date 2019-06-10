@extends('coreui::master')

@section('body')

<div class="formTests">
    <form method="POST" action={{ url("/tests") }} >

        @CSRF

        <div class="form-group">
            <label for="testType">test type<span class="text-danger">*</span></label>
            <input autofocus type="number" class="form-control" id="testType" name='testType'
                placeholder="Enter test type here" required>
        </div>

        <div class="form-group">
            <label for="attempt">Attempt<span class="text-danger">*</span></label>
            <input autofocus type="number" class="form-control" id="attempt" name='attempt'
                placeholder="Enter attempt here" required>
        </div>

        <div class="form-group">
            <label for="week">Week<span class="text-danger">*</span></label>
            <input autofocus type="number" class="form-control" id="week" name='week'
                placeholder="Enter week here" required>
        </div>

        <button type="submit" class="form-control btn btn-success">Add</button>
    </form>
</div>

@endsection('body')