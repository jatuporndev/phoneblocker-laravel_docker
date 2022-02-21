<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\phone;

class PhoneController extends Controller
{
    public function index()
    {
        $phone = Phone::all(); 
        return response()->json($phone);
    }

}

