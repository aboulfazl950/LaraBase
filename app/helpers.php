<?php

use Carbon\Carbon;

if (!function_exists('generateFileName')) {
    function generateFileName($name)
    {
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;
        $hour = Carbon::now()->hour;
        $minute = Carbon::now()->minute;
        $second = Carbon::now()->second;
        $microsecond = Carbon::now()->microsecond;
        return $year . '_' . $month . '_' . $day . '_' . $hour . '_' . $minute . '_' . $second . '_' . $microsecond . '_' . $name;
    }
}

if (!function_exists('friendlyTime')) {
    function friendlyTime($time, $current_time = null) {

        if (!$current_time) {
            $current_time = time();
        }

        $diff = abs((int)$current_time - (int)$time);

        $minute = 60;
        $hour = $minute * 60;
        $day = $hour * 24;

        if ($diff < $minute) {
            return __("time.friendlytime:justnow");
        }

        if ($diff < $hour) {
            $granularity = ':minutes';
            $diff = round($diff / $minute);
        } else if ($diff < $day) {
            $granularity = ':hours';
            $diff = round($diff / $hour);
        } else {
            $granularity = ':days';
            $diff = round($diff / $day);
        }

        if ($diff == 0) {
            $diff = 1;
        }

        $future = ((int)$current_time - (int)$time < 0) ? ':future' : '';
        $singular = ($diff == 1) ? ':singular' : '';

        return __("time.friendlytime{$future}{$granularity}{$singular}",['diff' => $diff]);
    }
}
