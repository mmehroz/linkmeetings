<?php
function getTemplates() {
    $full_path = base_path().'/resources/views/frontend/template';
    $templates['default'] = 'Default';

    foreach (glob(base_path().'/resources/views/frontend/template/*.php') as $filename) {
        $comment_pattern = '/\*.*?\*/';
        $file = file_get_contents($filename);
        preg_match($comment_pattern,$file,$templateFile);
        $templateFile = @explode( ':', str_replace('*','', $templateFile[0]) , 2);

        if(trim($templateFile[0])=="Template Name" && $templateFile[1]!=""){
            $pos = strrpos($filename, "/");

            if($pos !== false){
                $filename = substr($filename,$pos+1,strlen($filename)-$pos);
                $filename = str_replace('.blade.php', '', $filename);
                $templateName = str_replace('.blade.php','',$filename);
            }

            if($filename!="default.blade.php"){
                $templates[$filename] = $templateFile[1];
            }
        }
    }

    return $templates;
}

function print_b($data)
{
    echo "<pre>"; print_r($data); echo "</pre>";
}

function echo_b($data)
{
    echo $data . "<hr />";
}

function getlanguage()
{
    $code = (Session::get('applocale') != "") ? Session::get('applocale') : 'en';
    return \App\Models\Languages::where('iso_639-1',$code)->where('status','Active')->first();
}


function isUserLoggedIn()
{
    if (\Sentinel::check()) {
        $user = \Sentinel::getUser();
		$user_id        = $user->id;
        $first_name     = $user->first_name;
        $last_name      = $user->last_name;
        $email          = $user->email;
		$image          = $user->username;
        $role           = $user->roles()->get()->first()->slug;

        return [
            'user_id'       => $user_id,
            'full_name'     => trim($first_name . ' ' .  $last_name),
            'first_name'    => $first_name,
            'last_name'     => $last_name,
            'email'         => $email,
			'image'         => $image,
            'role'          => $role,
        ];
    }
    else
    {
        return FALSE;
    }
}

function RedirectLoggedUser()
{
    $to = FALSE;
    $user = isUserLoggedIn();

    if($user)
    {
        $role = $user['role'];
        if($role == 'admin')
            $to = route('dashboard');
        elseif($role == 'hotel')
            $to = route('hotel_dashboard');
        elseif($role == 'dmc')
            $to = route('dmc_dashboard');
        elseif($role == 'customer')
            $to = route('customer_sent-rfp-acc');
    }

    return $to;
}

if (!function_exists('getUserDevice')) {
    /**
     * Checks for mobile device
     *
     * @return string
     */
    function getUserDevice()
    {
        /*$cases = "/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone";
        $cases .= "|pie|tablet|up\.browser|up\.link|webos|wos)/i";
        return preg_match($cases, $_SERVER["HTTP_USER_AGENT"]);
        */
        $aMobileUA = array(
            '/windows phone 10/i'   =>  array('type' => 'phone', 'name' =>'Windows Phone 10', 'image' => 'device-windows-dekstop.png'),
            '/windows phone 8/i'    =>  array('type' => 'phone', 'name' =>'Windows Phone 8', 'image' => 'device-windows-dekstop.png'),
            '/windows phone os 7/i' =>  array('type' => 'phone', 'name' =>'Windows Phone 7', 'image' => 'device-windows-dekstop.png'),
            '/iphone/i'             =>  array('type' => 'iphone', 'name' =>'iPhone', 'image' => 'device-iphone.png'),
            '/ipod/i'               =>  array('type' => 'ipod', 'name' =>'iPod', 'image' => 'device.png'),
            '/ipad/i'               =>  array('type' => 'ipad', 'name' =>'iPad', 'image' => 'device-ipad.png'),
            '/android/i'            =>  array('type' => 'mobile', 'name' =>'Android', 'image' => 'device-windows-phone.png'),
            '/blackberry/i'         =>  array('type' => 'mobile', 'name' =>'BlackBerry', 'image' => 'device-blackberry-bold.png'),
            '/webos/i'              =>  array('type' => 'mobile', 'name' =>'Mobile', 'image' => 'device-mac.png'),
            '/windows nt 10/i'      =>  array('type' => 'desktop', 'name' =>'Windows 10', 'image' => 'device-windows-dekstop.png'),
            '/windows nt 6.3/i'     =>  array('type' => 'desktop', 'name' =>'Windows 8.1', 'image' => 'device-windows-dekstop.png'),
            '/windows nt 6.2/i'     =>  array('type' => 'desktop', 'name' =>'Windows 8', 'image' => 'device-windows-dekstop.png'),
            '/windows nt 6.1/i'     =>  array('type' => 'desktop', 'name' =>'Windows 7', 'image' => 'device-windows-dekstop.png'),
            '/windows nt 6.0/i'     =>  array('type' => 'desktop', 'name' =>'Windows Vista', 'image' => 'device-windows-dekstop.png'),
            '/windows nt 5.2/i'     =>  array('type' => 'desktop', 'name' =>'Windows Server 2003/XP x64', 'image' => 'device-windows-dekstop.png'),
            '/windows nt 5.1/i'     =>  array('type' => 'desktop', 'name' =>'Windows XP', 'image' => 'device-windows-dekstop.png'),
            '/windows xp/i'         =>  array('type' => 'desktop', 'name' =>'Windows XP', 'image' => 'device-windows-dekstop.png'),
            '/windows nt 5.0/i'     =>  array('type' => 'desktop', 'name' =>'Windows 2000', 'image' => 'device-windows-dekstop.png'),
            '/windows me/i'         =>  array('type' => 'desktop', 'name' =>'Windows ME', 'image' => 'device-windows-dekstop.png'),
            '/win98/i'              =>  array('type' => 'desktop', 'name' =>'Windows 98', 'image' => 'device-windows-dekstop.png'),
            '/win95/i'              =>  array('type' => 'desktop', 'name' =>'Windows 95', 'image' => 'device-windows-dekstop.png'),
            '/win16/i'              =>  array('type' => 'desktop', 'name' =>'Windows 3.11', 'image' => 'device-windows-dekstop.png'),
            '/macintosh|mac os x/i' =>  array('type' => 'desktop', 'name' =>'Mac OS X', 'image' => 'device-mac.png'),
            '/mac_powerpc/i'        =>  array('type' => 'desktop', 'name' =>'Mac OS 9', 'image' => 'device-mac.png'),
            '/linux/i'              =>  array('type' => 'desktop', 'name' =>'Linux', 'image' => 'device-mac.png'),
            '/ubuntu/i'             =>  array('type' => 'desktop', 'name' =>'Ubuntu', 'image' => 'device-mac.png'),
            '/intel mac OS/i'       =>  array('type' => 'desktop', 'name' => 'iMac', 'image' => 'device-mac.png'),
        );

        $is_tablet = array(
            '/tablet/i'            =>  array('type' => 'tablet', 'name' =>'Android', 'image' => 'device-android-tab.png'),
        );

        //Return true if Mobile User Agent is detected
        foreach($aMobileUA as $sMobileKey => $sMobileOS){
            if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){

                if($sMobileOS['name'] == 'Android')
                {
                    if(preg_match($is_tablet, $_SERVER['HTTP_USER_AGENT']))
                    {
                        $sMobileOS['type'] = 'Tablet';
                    }
                }

                return $sMobileOS;
            }
        }
        //Otherwise return false..
        return false;
    }
}

/*
 *
 * @return IP Address of Visitor
 *
 */
function getVisIpAddr() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

/*
 *
 * @return Array which includes visitor city, country, ip and visitor's local time.
 *
 */
if (!function_exists('getUserLocation')) {

    function getUserLocation(){
        $vis_ip = getVisIPAddr();

        if($vis_ip == '::1')
            $vis_ip = '';

        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $vis_ip));
        if( isset($ipdat->geoplugin_city) && isset($ipdat->geoplugin_countryName) && isset($ipdat->geoplugin_timezone))
        {
            $date = new DateTime("now", new DateTimeZone($ipdat->geoplugin_timezone) );

            return array(
                'country'       => $ipdat->geoplugin_countryName,
                'city'          => $ipdat->geoplugin_city,
                'time'          => $date->format('Y-m-d H:i:s'),
                'ip'            => $ipdat->geoplugin_request
            );
        }
        else return false;
    }
}

if(!function_exists('page_404'))
{
    function page_404()
    {
        return view('error.404');
    }
}

if( !function_exists('getUserByID') ) {
    function getUserByID($user_id ) {
        return \Sentinel::findById($user_id);
    }
}

if (!function_exists('sendEmail')) {
    function sendEmail($emaildata){
        $toemail = $emaildata['toemail'];
        $toname = $emaildata['toname'];
        $fromemail = $emaildata['fromemail'];
        $emailSubject = $emaildata['emailSubject'];
        $emailContent = $emaildata['emailContent'];
      Mail::send('emails.emailbase', ['emailContent' => $emailContent], function ($m) use ($toemail, $toname, $fromemail, $emailSubject) {
            $m->to($toemail, $toname);
            $m->from($fromemail, 'Admin');
            $m->subject($emailSubject);
        });
    }

}