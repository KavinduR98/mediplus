@extends('layout')
@include('header')
@section('content')

<head>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script> --}}
    <style>
        .dz-image{
        max-height: 150px !important;
        max-width: 120px !important;

        height: 150px !important;
        width: 120px !important;
        
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" id="prescription_form">
            <div class="row mt-2">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="card">
                       <div class="card-body">
                        <label for="image">Image:</label>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="form-label" for="note">Note:</label>
                                <textarea class="form-control" name="txtNote" id="txtNote" cols="30" rows="6"></textarea>
                            </div>
                            <div class="row mb-3">
                                <label for="address">Delivery Address:</label>
                                <textarea class="form-control" name="txtAddress" id="txtAddress" cols="30" rows="3"></textarea>
                            </div>
                            <div class="row">
                                <button type="submit" id="btnSubmit" class="btn btn-success" style="float: right">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <h5 class="mt-3">Prescription List</h5>
        &nbsp;
        <div class="row mb-5">
            <div class="col-md-12 col-sm-12">
                <table class="table table-striped" id="tblPrescriptionList" >
                    <thead>
                        <tr>
                            <th>Id#</th>
                            <th>Delivery Address</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/js/user/uploadPrescription.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>