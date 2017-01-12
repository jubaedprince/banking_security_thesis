@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Account Admin</div>

                    <div class="panel-body">
                        Admin Name: {{$user->name}} <br>
                    </div>

                </div>

                @foreach($users as $u)
                    <div class="panel panel-default">
                        <div class="panel-heading">Account Holder</div>

                        <div class="panel-body">
                            Account Name: {{$u->name}} <br>
                            Email: {{$u->email}} <br>
                            Balance: {{$u->bankAccount->balance}} <br>

                            @if(count($u->relatedTransactions())>0)
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
                                @foreach($u->relatedTransactions() as $transaction)
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
                            <form method="POST" action="/admin/balance/add">
                                {{csrf_field()}}
                                <input type="number" name="balance">
                                <input type="hidden" name="email" value="{{$u->email}}">
                                <button type="submit">Add Balance</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection