@extends('layout')
@include('header')
@section('content')

<head></head>

<body>
    <div class="container">
        <div class="row mt-3">
            <h5>Quotation List</h5>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 col-sm-12">
                <table class="table table-striped" id="tblQuotationList" >
                    <thead>
                        <tr>
                            <th>Id#</th>
                            <th>Created Date</th>
                            <th>View</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/js/user/quotation.js') }}"></script>