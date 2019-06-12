@extends('coreui::master')

@section('body')

<div class="formTests">
    <form method="POST" action={{ url("/products") }} >

        @CSRF
        <div class="row">
            <div class="form-group col-sm">
                <label for="testType">product naam<span class="text-danger">*</span></label>
                <input type="string" class="form-control bg-dark" id="name" name='name' required style="border: 0px solid;color:white"> 
            </div>
            <button type="submit" class="form-control btn btn-success">Toevoegen</button>
        </form> 
    </div>
</div>

@endsection('body')