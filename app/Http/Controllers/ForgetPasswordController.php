<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Support\Facades\Crypt;
use App\Models\EmailTemplate;
use App\Models\SiteSetting;
use Lang;

class ForgetPasswordController extends Controller
{
    public  function generateRandomString($length = 20){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        return $randomString;
    }
        public function sendforgetpasswordemail($email){
			$adminemail = SiteSetting::first()->site_email;
                  $verify_token =  $this->generateRandomString(100);
                  $data = array();
                  $data['verify_token'] = $verify_token;
                  $cmd = DB::table('users')
                         ->where('email', $email)
                         ->update(['verify_token' => $verify_token]);
            if($cmd){
                $user = DB::table('users')
                 ->where('email', '=',$email)
                 ->select('users.first_name','users.last_name','users.email')
                 ->first();
                 if ($user) {
                   
                    if(env('APP_ENV') == 'local')
                    {
                        $email_temp = new EmailTemplate();
                        $email_temp = $email_temp->where('slug', "account-password-recovery")->first();
                        /// email template replace for content
                        $search_content  = [
                            "@lang('general.site_name')",
                        ];
                        $replace_content = [
                            Lang::get('general.site_name'),
                        ];
                        /// email template replace for subject
                        $search_subject  = [
                            "Lang::get('general.site_name')"
                        ];

                        $replace_subject = [
                            Lang::get('general.site_name')
                        ];
                        // get and replace content and subject
                        $emailContent = str_replace($search_content, $replace_content, $email_temp['email_template_content']);
                        $emailSubject = str_replace($search_subject, $replace_subject, $email_temp['email_template_title']);
                        Mail::send('emails.forget_password', ['emailContent' => $emailContent,'verify_token' => $verify_token], function ($m) use ($user, $emailSubject, $adminemail) {
                            $m->to($user->email, 'User');
                            $m->from($adminemail, 'Admin');
                            $m->subject($emailSubject);
                        });
                    }
                 }else{
                    return redirect('/login')->with('message','Something went wrong'); 
                 }
		   			echo (json_encode("Check Your Email"));
      } else{
        return redirect('/login')->with('message','Something went wrong'); 
      }
    }
    public function forget($verify_token){
      $result =  DB::table('users')
                 ->where('verify_token', '=',$verify_token)
                 ->select('users.id')->first();

      if(!empty($result)){
        $data = array();
        $data['verify_token'] = $verify_token;
       return view('frontend.template.resetpassword',$data);
      } else{
         return redirect('/login')->with('message','Link Expired.');
      }
    }
    public function reset_submit(Request $get){
      // dd($get);
        $userpassword = Crypt::encryptString($get->password);
        // dd($test);
        if($get->verify_token){
              $cmd = DB::table('users')
                     ->where('verify_token', $get->verify_token)
                     ->update(['password' => $userpassword,'verify_token' => '']);
              if($cmd){
                return redirect('/login')->with('message','Password Has been Reset Successfully.'); 
              } else{
                return redirect('/login')->with('message','Something Went Wrong'); 
              } 
        }else{

            return redirect('/login')->with('message','Link Expired.');
        }
    }
    
}
