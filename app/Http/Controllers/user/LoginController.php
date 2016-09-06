<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Repository\user\UserRepistory;
use App\User;


class LoginController extends Controller
{

    public function __construct(UserRepistory $user)
    {

    }
	public function index()
	{
		return view('welcome');
	}
    public function login()
    {
    	return view('home.login');
    }

    public function postLogin(Request $request)
    {
    	$this->validate($request,[
    			'username'=>'required',
    			'password'=>'required'
    		]);

    	if(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
    	{
    		return redirect()->route('welcome');
    	}
    	return redirect()->back();
    	 // return $this->login($request);
    }

    public function imageUpload(Request $request)
    {
    	$files = $request->file('image');
    	dd($files);

    	if($files)
    	{
    		foreach($files as $file){
    			Storage::put($file->getClientOriginalName(), file_get_contents($file));
    		}
    	}
    	
    }

    public function redirectToProvider()
     {
         return Socialite::driver('facebook')->redirect();
        
    }

    public function handleProviderCallback()
    {
         try {
            $user = Socialite::driver('facebook')->user();
             } 
        catch (Exception $e) {
            return redirect('auth/facebook');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);
        $userData = Auth::user();
        
        // return redirect()->route('/');
         return view('social.home',compact('userData'));
    }
    
    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('social_id', $facebookUser->id)->first();

        if ($authUser){
            return $authUser;
        }
        $newfile = 'uploads/facebook/'.$user->name.'.jpg';
        $file=$user->avatar_original;
         if($file){
                if (!copy($file, $newfile)) {
                    echo "failed to copy $file";
                } else {
                    echo "Copied Profile Picture";
                }
            }


        return User::create([
            'fullname' => $facebookUser->name,
            'username' => isset($facebookUser->email) ? $facebookUser->email : '',
            'login_type' => 'facebook',
            'social_id' => $facebookUser->id,
            'profile_picture' => $newfile,
            // 'avatar' => $facebookUser->avatar
        ]);
    }

}
