<?php

namespace App\Http\Controllers\website;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
            // $validatedData = $request->validate([
            //     'email' => 'required|email|unique:subscriptions',
            // ]);
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:subscriptions',
            ]);

            if ($validator->fails()) {
                return response()->json([
                            'error' => $validator->errors()->all()
                        ]);
            }
            Subscription::create([
                'email'=>$request->email,
            ]);
            return response()->json(['message' => 'Subscription successful']);
    }
}
