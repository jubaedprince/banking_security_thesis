@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Account Holder</div>

                <div class="panel-body">
                    Name: {{$user->name}} <br>
                    Email: {{$user->email}} <br>
                    National Id: {{$user->national_id}} <br>
                    Mobile Number: {{$user->mobile_number}} <br>
                    Address: {{$user->address}} <br>
                    Date of Birth: {{$user->date_of_birth}} <br>
                    Balance BDT: {{$user->bankAccount->balance}}

                    @if(count($user->relatedTransactions())>0)
                        <h3>History</h3>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>From</th>
                                <th>To</th>
                                <th>Amount</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->relatedTransactions() as $transaction)
                                <tr>
                                    <td>{{App\User::find($transaction->from_user_id)->name}}</td>
                                    <td>{{App\User::find($transaction->to_user_id)->name}}</td>
                                    <td>{{$transaction->amount}}</td>
                                    <td>{{$transaction->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>
@endsection