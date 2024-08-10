<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use App\Models\Item;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\sendmail;
use Carbon\Carbon;
use Browser;
use Session;
use Image;
use Redirect;

class UserController extends Controller
{
    public function home() {
        return response()->json([
            'status' => 'Error',
            'message' => 'Unauthorized'
        ], 401);
    }
    
    public function dashboard() {
        $data['categories'] = $cat = Category::orderBy('id', 'DESC')->get();
        $items = array();
        foreach($cat as $ca) {
            $ch = Item::wherecategory($ca->id)->count();
            if($ch>0) {
                $cm = Item::wherecategory($ca->id)->get();
                $items[$ca->name] = $cm;
            }
        }
        $data['items'] = $items;
        return response()->json([
            'status' => 'Success',
            'message' => 'Retrieved successfully',
            'data' => $data
        ], 200);

    }
    public function submitrequest(Request $request) {
        //Logging data sent
        Log::info("Submitted Data", $request->all());

        $set = Setting::first();
        $user = User::whereid(Auth::guard('user')->user()->id)->first();
        
        //Data validation
        $validate = Validator::make($request->all(), [
            'ct_scan' => ['required', 'string'],
            'mri' => ['required', 'string'],
            'x_ray' => ['required', 'array'],
            'ultrascan' => ['required', 'array'],
        ]);
        if ($validate->fails()) {
            return response()->json([
                'status' => 'Error',
                'message' => $validate->errors()->first()
            ], 400);
            
        }
        else {
            $xray = '';
            $ult = '';
            
            //Organize data received
            foreach($request->x_ray as $xm) {
                $xray .= '<li>'.$xm.'</li>';
            }
            foreach($request->ultrascan as $ultra) {
                $ult .= '<li>'.$ultra.'</li>';
            }
            
            //Structure email parameters 
            $subject = $user->username .' medical data';
            $email = 'peopleoperations@kompletecare.com';
            $msg = 'Hello Operations,<br><br>A new medical record was submitted. Find full information below:<br>
            <h4> X-ray </h4>
            <ul>'.$xray.'</ul>
            <h4> Ultrasound Scan </h4>
            <ul>'.$ult.'</ul><br>
            <h4> CT Scan </h4>
            <p>'.$request->ct_scan.'</p>
            <h4> MRI </h4>
            <p>'.$request->mri.'</p><br><br>
            ';
            
            //Send Email
            Mail::to($email)->send(new sendmail($msg, $set, $subject));

            return response()->json([
                'status' => 'Success',
                'message' => 'Submitted successfully'
            ], 200);
        }

    }

   
    public function logout() {
        Auth::guard('user')->logout();
        
        return response()->json([
            'status' => 'Success',
            'message' => 'Logged out successfully'
        ], 200);
    }
    
}