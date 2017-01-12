<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankAccountController extends Controller
{
    public function create()
    {
        return view('bank-account.create');
    }

    public function processAdminLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => true])) {
            // Authentication passed...
            return redirect()->to('admin/dashboard');
        }
        else{
            return "You are not an admin";
        }
    }

    public function addBalance(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->bankAccount->balance = $user->bankAccount->balance + $request->balance;
        $user->bankAccount->save();
        return redirect()->back();
    }

    public function adminDashboard()
    {
        $user = Auth::user();
        $users = User::all()->except(1);
        return view('admin.dashboard', compact('user', 'users'));
    }

    public function sendMoney(Request $request)
    {
        $from = User::where('email', $request->from)->first();
        $to = User::where('email', $request->to)->first();

        $from->bankAccount->balance = $from->bankAccount->balance - $request->amount;

        if($from->bankAccount->balance <0){
            return response()->json(['error'=>true]);
        }else{
            $to->bankAccount->balance = $to->bankAccount->balance + $request->amount;
            $from->bankAccount->save();
            $to->bankAccount->save();
            DB::table('transactions')->insert(['from_user_id'=>$from->id, 'to_user_id'=>$to->id, 'amount'=>$request->amount, 'created_at'=>Carbon::now()]);
            return response()->json(['success'=>true]);
        }




    }
}
