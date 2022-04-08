<?php

namespace App\Http\Traits;

use App\Models\Setting;

trait SettingsTrait {
    protected function getSetting($key) {
        $setting = Setting::where('key', $key)->first();
        if (!$setting) {
            $setting = Setting::create([
                'key' => $key,
            ]);
        }
        return $setting;
    }

    protected function updateSetting($key, $value) {
        $setting = $this->getSetting($key);
        $setting->value = $value;
        $setting->save();
    }
}
