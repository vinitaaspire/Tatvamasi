<?php
function formatDays($days)
{
    $daysArray = explode(',', $days);
    $shortFormDays = [];

    foreach ($daysArray as $day) {
        // Get the first two characters of each day and convert to uppercase
        $shortFormDays[] = strtoupper(substr(trim($day), 0, 3));
    }

    // Remove duplicate entries
    $uniqueShortFormDays = array_unique($shortFormDays);

    return implode(' ', $uniqueShortFormDays);
}

function formatTimings($timing)
{
    // Decode the JSON string into an array
    $timingArray = json_decode($timing, true);

    if (empty($timingArray)) {
        return ''; // Handle empty input
    }

    $startTimes = [];
    $endTimes = [];

    // Loop through each timing entry
    foreach ($timingArray as $entry) {
        $startTimes[] = $entry['start_time'];
        $endTimes[] = $entry['end_time'];
    }

    $firstStartTime = reset($startTimes);
    $lastEndTime = end($endTimes);

   
    $formattedResult = $firstStartTime . ' - ' . $lastEndTime;

    return $formattedResult;
}





function getSetting(){
    $setting = App\Models\Setting::first();
    return  $setting;
}
function latestpost(){
    $latestPost = App\Models\Blog::active()->take(2)->get();
    return  $latestPost;
}


function findSmallestValueAfterDash($data)
{
    $prices = [];

    // Split the data by comma and loop through each entry
    $entries = explode(',', $data);
    foreach ($entries as $entry) {
        // Extract the value after the dash
        $parts = explode('-', trim($entry));
        if (count($parts) === 2) {
            $price = intval(trim($parts[1]));
            $prices[] = $price;
        }
    }

    // Find the minimum value
    $minPrice = min($prices);

    return $minPrice;
}


function formatTime($time) {
    $formattedTime = $time;
    if (strlen($time) === 5) {
        $hours = intval(substr($time, 0, 2));
        $minutes = substr($time, 3);
        $period = $hours >= 12 ? 'PM' : 'AM';
        $hours = $hours % 12 || 12;
        $formattedTime = $hours . ':' . $minutes . ' ' . $period;
    }
    return $formattedTime;
}
