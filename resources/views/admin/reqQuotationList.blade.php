@extends('layout')
@include('header')


<head></head>

<body>
    <div class="row m-3">
        <div class="row">
            <h5>Request Quotations List</h5>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 col-sm-12">
                <table class="table table-striped" id="tblReqQuotationList" >
                    <thead>
                        <tr>
                            <th>Id#</th>
                            <th>Customer Name</th>
                            <th>Phone</th>
                            <th>Created Date</th>
                            <th>Quotation Status</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/js/admin/reqQuotation.js') }}"></script>