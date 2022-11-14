<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SiteSettingsRequest;
use App\Models\Repositories\SiteSettingRepository;
use App\Models\Languages;
use Illuminate\Support\Str;
use File;

class SiteSettingController extends Controller
{
    protected $site_setting;

    public function __construct(SiteSettingRepository $site_setting)
    {
        $this->site_setting = $site_setting;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        $languages = Languages::where('status','Active')->get();
        return View('admin.site_setting.index',compact('languages'));
    }

    /**
     * Process the Form Data.
     *$
     * @return redirect
     */
    public function process(SiteSettingsRequest $request)
    {
        $site_settings =  $this->site_setting->getByCol(1);

        //echo "<pre>"; print_r($site_settings); echo "</pre>"; exit;

        $data = array();
        foreach($request->all() as $key=>$val)
        {
            if($val != "" && $key != "_token" && $key != "logo_image")
            $data[$key] = $val;
        elseif($key == "logo_image")
            $data[$key] = str_replace(url('/'),'',$val);

       if($val != "" && $key != "_token" && $key != "logo_image_inner_pages")
                $data[$key] = $val;
        elseif($key == "logo_image_inner_pages")
                $data[$key] = str_replace(url('/'),'',$val);
        }

        /*if($file = $request->file('logo_image'))
        {
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension() ?: 'png';
            $folderName      = '/uploads/site_settings/';
            $destinationPath = public_path() . $folderName;
            $safeName        = Str::random(10).'.'.$extension;
            $file->move($destinationPath, $safeName);

            //delete old pic if exists
            if(isset($site_settings->logo_image) &&  File::exists(public_path() . $folderName.$site_settings->logo_image))
            {
                File::delete(public_path() . $folderName.$site_settings->logo_image);
            }

            $data['logo_image'] = $safeName;
        }*/

        $this->site_setting->update(1,$data);
        return back()->withSuccess(trans('admin/site_settings.success'));
    }
}
