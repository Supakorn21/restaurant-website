<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function general()
    {
        $id = 1;

        $general_setting = GeneralSetting::find($id);

        return view('admin.settings.general', [
            'general_setting' => $general_setting
        ]);
    }
    public function saveGeneral()
    {
        $id = 1;
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'logo_image_url' => [],
            'address_1' => ['required', 'string'],
            'address_2' => [],
            'city' => ['required', 'string'],
            'province' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
        ]);

        $general_setting = GeneralSetting::find($id);
        $general_setting->site_title = request('site_title');
        $general_setting->logo_image_url = request('logo_image_url');
        $general_setting->address_2 = request('address_2');
        $general_setting->city = request('city');
        $general_setting->province = request('province');
        $general_setting->zipcode = request('zipcode');
        $general_setting->phone_number = request('phone_number');
        $general_setting->save();
        return redirect('/admin/settings/general');
    }
}