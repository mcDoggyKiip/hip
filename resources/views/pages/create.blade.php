@extends('coreui::master')

@section('body')

<div class="formPages">
    <form method="POST" action={{ url("/pages") }} >

        @CSRF
        <div class="row">
            <div class="form-group col-sm">
                <label for="pageNumber">Page number<span class="text-danger">*</span></label>
                <input type="number" class="form-control bg-dark" id="pageNumber" name="Number" required style="border: 0px solid;color:white"> 
            </div>

            <div class="form-group col-sm">
                <label for="fileLocation">File location<span class="text-danger">*</span></label>
                <input type="string" class="form-control bg-dark" id="fileLocation" name="fileLocation" required style="border: 0px solid;color:white">
            </div>

            <div class="form-group col-sm">
                <label for="description">Description<span class="text-danger">*</span></label>
                <input type="string" class="form-control bg-dark" id="description" name="description" required style="border: 0px solid;color:white">
            </div>

            <button type="submit" class="form-control btn btn-success">Add</button>
        </form> 
    </div>
</div>

@endsection('body')