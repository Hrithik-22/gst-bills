@extends('layout.app')

@section('content')
    

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold text-uppercase"> Add Party </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- Start Form  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                    @endif


                    @if(count($errors))                       
                    <div  class="alert alert-danger">
                     {{--$errors is an array $err is like i variable  --}}
                     <strong> Validation errors:</strong>
                     <ul>   
                     @foreach($errors->all() as $err)
                        <li> {{$err}} </li>   
                    
                    @endforeach
                        </ul>
                    </div>
                    @endif
                    <h4 class="header-title text-uppercase"> Basic Info</h4>
                    <hr>
                    <form class="needs-validation" novalidate="" method="POST" action="{{route('create-party')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Type</label>
                                    <select name="party_type" class="form-control border-bottom "
                                        id="validationCustom01" placeholder="Please select Type"
                                       >
                                        <option disabled selected>Select Type</option>
                                        <option value="client">Client</option>
                                        <option value="vendor">Vendor</option>
                                        <option value="employee">Employee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom01">Full Name</label>
                                    <input type="text" class="form-control border-bottom "
                                    name="full_name"
                                        id="validationCustom01" placeholder="Enter client's full name"
                                      >
                                    <div class="invalid-feedback">
                                        Please provide a Full name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Phone/Mobile Number</label>
                                    <input type="text" class="form-control border-bottom "
                                    name="phone_no"
                                        id="validationCustom02" placeholder="Enter phone/mobile number"
                                        >
                                    <div class="invalid-feedback">
                                        Please provide a Number.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="validationCustom03">Address</label>
                                    <input type="text" class="form-control border-bottom "
                                    name="address"
                                        id="validationCustom02" placeholder="Enter Address" >
                                    <div class="invalid-feedback">
                                        Please provide a valid Address.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h4 class="header-title text-uppercase">Bank Details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom04">Account Holder Name</label>
                                    <input type="text" class="form-control border-bottom "
                                    name="account_holder_name"
                                        id="validationCustom04" placeholder="Enter Account Holder name"
                                       >
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom05">Account Number</label>
                                    <input type="text" class="form-control border-bottom "
                                    name="account_no"
                                        id="validationCustom05" placeholder="Enter Account Number"
                                        >
                                    <div class="invalid-feedback">
                                        Please provide a valid Code.
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">Bank Name</label>
                                    <input type="text" class="form-control border-bottom "
                                    name="bank_name"
                                        id="validationCustom02" placeholder="Enter Bank Name"
                                       >
                                    <div class="invalid-feedback">
                                        Please provide a GSTIN No.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="validationCustom02">IFSC Code</label>
                                    <input type="text" class="form-control border-bottom "
                                    name="ifsc_code"
                                        id="validationCustom02" placeholder="Enter IFSC Code"
                                        >
                                    <div class="invalid-feedback">
                                        Please provide a Email.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="validationCustom02">Branch Address</label>
                                <input type="text" class="form-control border-bottom "
                                name="branch_address"
                                    id="validationCustom02" placeholder="Enter Branch Address" >
                                <div class="invalid-feedback">
                                    Please provide a Branch Name.
                                </div>
                            </div>

                            
                        </div>

                        
                        <br>

                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection