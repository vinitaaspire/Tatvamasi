<?php
function formatDays($days)
{
    $daysArray = explode(',', $days);
    $formattedDays = [];

    foreach ($daysArray as $day) {
        switch ($day) {
            case 1:
                $formattedDays[] = 'Mon';
                break;
            case 2:
                $formattedDays[] = 'Tue';
                break;
            case 3:
                $formattedDays[] = 'Wed';
                break;
            case 4:
                $formattedDays[] = 'Thu';
                break;
            case 5:
                $formattedDays[] = 'Fri';
                break;
            case 6:
                $formattedDays[] = 'Sat';
                break;
            case 7:
                $formattedDays[] = 'Sun';
                break;
                // Add more cases if needed for additional days
        }
    }

    return implode(', ', $formattedDays);
}

function formatTimings($timing)
{
    $timingArray = explode(',', $timing);

    $startTimes = [];
    $endTimes = [];

    foreach ($timingArray as $timeRange) {
        // Split the time range into start and end times
        list($startTime, $endTime) = explode(' - ', trim($timeRange));

        // Collect start and end times
        $startTimes[] = $startTime;
        $endTimes[] = $endTime;
    }

    // Find the earliest start time and the latest end time
    $formattedTimings = min($startTimes) . ' - ' . max($endTimes);

    return $formattedTimings;
}



function getSetting(){
    $setting = App\Models\Setting::first();
    return  $setting;
}
function latestpost(){
    $latestPost = App\Models\Blog::active()->take(2)->get();
    return  $latestPost;
}
