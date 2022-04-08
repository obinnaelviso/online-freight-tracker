<?php

use App\Models\Setting;

function settings_phone() {
    $settings = new Settings;
    return $settings->get(Setting::PHONE);
}

function settings_office_address() {
    $settings = new Settings;
    return $settings->get(Setting::OFFICE_ADDRESS);
}
