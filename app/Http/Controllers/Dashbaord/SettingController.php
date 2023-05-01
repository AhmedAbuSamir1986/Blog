<?php

namespace App\Http\Controllers\Dashbaord;

use App\Http\Controllers\Controller;
use App\Http\Trait\UploadImage;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    use UploadImage;
    public function index()
    {
        $setting = Setting::first();
        $this->authorize('view', $setting);
        return view('dashboard.settings');
    }
    public function update(Request $request, Setting $setting)
    {
        $data = [
            'logo' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
        ];

        foreach(config('app.languages') as $key => $value) {
            $data[$key.'*.title'] = 'nullable|string';
            $data[$key.'*.content'] = 'nullable|string';
            $data[$key.'*.address'] = 'nullable|string';
        }

        $validateData = $request->validate($data);
        
        $setting->update($request->except('logo','favicon', '_token'));
        
        if ($request->has('logo')) {
            $setting->update(['logo'=>$this->upload($request->logo)]);
         }

         if ($request->has('favicon')) {
            $setting->update(['favicon'=>$this->upload($request->favicon)]);
         }
        
        return redirect()->route('dashboard.settings');
    }
}
