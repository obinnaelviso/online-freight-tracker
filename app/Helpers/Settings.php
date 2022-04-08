<?php

use App\Http\Traits\SettingsTrait;

class Settings {
    use SettingsTrait;

    public function get($key) {
        return $this->getSetting($key)->value;
    }
}
