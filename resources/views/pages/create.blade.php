@extends('coreui::master')

@section('body')

<div class="formPages">
    <form method="POST" action={{ url("/pages") }} >

        @CSRF
        <div class="row">
            <div class="form-group col-sm">
                <label for="pageId">Page ID<span class="text-danger">*</span></label>
                <input type="number" class="form-control bg-dark" id="pageId" name="id" required style="border: 0px solid;color:white"> 
            </div>

            <div class="form-group col-sm">
                <label for="filetitke">File titke<span class="text-danger">*</span></label>
                <input type="string" class="form-control bg-dark" id="fileTitke" name="fileTitke" required style="border: 0px solid;color:white">
            </div>

            <div class="form-group col-sm">
                <label for="text">Text<span class="text-danger">*</span></label>
                <input type="string" class="form-control bg-dark" id="text" name="text" required style="border: 0px solid;color:white">
            </div>

            <button type="submit" class="form-control btn btn-success">Add</button>
        </form> 
    </div>
</div>

@endsection('body')