@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Account Registration Form</h3>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="fullNameInput">Full Name</label>
                                <input type="text" class="form-control" id="fullNameInput" placeholder="Eg: Md Rakibul Islam">
                            </div>

                            <div class="form-group">
                                <label for="emailInput">Email address</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="Eg: rakibul@gmail.com">
                            </div>

                            <div class="form-group">
                                <label for="nationalIdInput">National ID No.</label>
                                <input type="text" class="form-control" id="nationalIdInput" placeholder="Eg:124234232323234">
                            </div>

                            <div class="form-group">
                                <label for="dateOfBirthInput">Date of Birth</label>
                                <input type="date" class="form-control" id="dateOfBirthInput">
                            </div>

                            <div class="form-group">
                                <label for="mobileNumberInput">Mobile Number</label>
                                <input type="text" class="form-control" id="mobileNumberInput" placeholder="Eg:0167422323">
                            </div>

                            <div class="form-group">
                                <label for="addressInput">Address</label>
                                <input type="text" class="form-control" id="addressInput" placeholder="Eg: 142 Janata Housing, Mirpur-1, Dhaka-1214, Bangladesh">
                            </div>

                            <div class="form-group">
                                <label for="balanceInput">Balance (BDT)</label>
                                <input type="text" class="form-control" id="balanceInput" placeholder="Eg: 299">
                            </div>

                            <button type="submit" class="btn btn-default">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
