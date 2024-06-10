<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\throwException;

class AuthController extends Controller
{
    public function identify(Request $request)
    {   
        $attrs=$request->validate([
            'Email'=>'required|email',
            'Password'=>'required',
        ]);

        $this->keyToLower($attrs);

        if(! Auth::attempt($attrs)){
            throw ValidationException::withMessages([
                'Email' => 'Email or Password is incorrect',
            ]);
        }

        $request->session()->regenerate();

        return redirect(route('home'));
    }

    public function register(Request $request)
    {   

        $request->validate(
            ['Password_confirmation'=>'required']
        );

        $valid_data =$request->validate([
        'Name' => 'required|max:25',
        'Password' => 'required|max:25|confirmed',
        'Email' => 'required|unique:users|email',
        ]);
         
        $this->keyToLower($valid_data);

        $user = User::create($valid_data);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function destroy_session(){//for logging OUt

        Auth::logout();

        return redirect()->route('login');
    }


    private function keyToLower(& $arr){
        $keys = array_keys($arr);
        for($i=0;$i<count($keys);$i++){
            $old = $keys[$i];
            $new = strtolower($old);
            $arr[$new] = $arr[$old];
            unset($arr[$old]);
        }
    }

}
