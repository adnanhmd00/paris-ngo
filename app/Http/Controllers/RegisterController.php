<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Corporate;
use App\Models\User;
use Session;
use Hash;
use Str;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $inputs = $request->all();
        if(!empty($inputs)){
            $users = new User;
            $users->name = isset($inputs['name']) ? $inputs['name'] : '';
            $users->email = isset($inputs['email']) ? $inputs['email'] : '';
            $users->phone = isset($inputs['phone']) ? $inputs['phone'] : '';
            $users->password = isset($inputs['password']) ? Hash::make($inputs['password']) : '';
            if($users->save()){
            $credentials = $request->only('email', 'password');
                if(Auth::attempt($credentials)) {
                    return redirect()->intended('/');
                }  
            }
        }
    }

	public function sendOtp(Request $request){
		$otp = rand(100000, 999999);
		if(Auth::guard('corporate')->user()){
            $user = Auth::guard('corporate')->user();
        }elseif(Auth::user()){
            $user = Auth::user();
        }
        Session::put('OTP', $otp);
		$phone = $user->phone;
		$authKey = "327291AVnDZUSxOgoq5ea3f8f3P1";
		$mobileNumber = "9569096496";
		$senderId = "OWOIND";
		$message = "Forget password code".$otp;
		$route = 4;
		$postData = array(
		'authkey' => $authKey,
		'mobiles' => $mobileNumber,
		'message' => $message,
		'sender' => $senderId,
		'route' => $route,
		'DLT_TE_ID' => "1007658279244956698"
		);


		$url = "https://api.msg91.com/api/sendhttp.php/api/sendhttp.php?for_panel_id=1&mobiles=".$phone."&authkey=327291AVnDZUSxOgoq5ea3f8f3P1&DLT_TE_ID=1007658279244956698&route=4&sender=OWOIND&message=Welcome%2Bto%2BOWO%2B%0A%0A%2BThis%2Bis%2Bmobile%2Bnumber%2Bverification%2Bfrom%2BOWO%2B%0A%0A%2BPlease%2Benter%2Bthe%2BOTP%3A".$otp."&encrypt=0";

		$curl = curl_init();
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,

		CURLOPT_CUSTOMREQUEST => "GET",
		));
		$response = curl_exec($curl);
		curl_close($curl);
	}

    public function verifyOtp(Request $request){
		$response = array();
		$enteredOtp = $request->input('otp');
        if(Auth::guard('corporate')->user()){
            $userId = Auth::guard('corporate')->user()->id;  //Getting UserID.
        }elseif(Auth::user()){
            $userId = Auth::user()->id;  //Getting UserID.
        }
		if($userId == "" || $userId == null){
			$response['error'] = 1;
			$response['message'] = 'You are logged out, Login again.';
			$response['loggedIn'] = 0;
		}else{
			$OTP = $request->session()->get('OTP');
			\Log::info('OTP'. $OTP);
			if($OTP === $enteredOtp){
                if(Auth::guard('corporate')->user()){
                    Corporate::where('id', $userId)->update(['verified' => 1]);
                    return redirect()->route('home');
                }elseif(Auth::user()){
                    User::where('id', $userId)->update(['verified' => 1]);
                    return redirect()->route('home');
                }
				Session::forget('OTP');
				$response['error'] = 0;
				$response['verified'] = 1;
				$response['loggedIn'] = 1;				
				$response['message'] = "Your Number is Verified.";				
			}else{
				$response['error'] = 1;
				$response['verified'] = 0;
				$response['loggedIn'] = 1;				
				$response['message'] = "OTP does not match.";	
			}
		}
		echo json_encode($response);
	}
}