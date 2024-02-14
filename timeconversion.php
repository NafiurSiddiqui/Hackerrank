function timeConversion($s) {
    $format = substr($s, -2); // Get the format (AM or PM)
    $time = substr($s, 0, -2); // Remove the format part

    list($hour, $minutes, $seconds) = explode(':', $time);

    if ($format == 'PM') {
        // Convert to 24-hour format
        $hour = ($hour == 12) ? 12 : ($hour + 12);
    } else {
        // Handle midnight (12:00:00AM)
        $hour = ($hour == 12) ? 0 : $hour;
    }

    // Format the result
    $formattedTime = sprintf('%02d:%02d:%02d', $hour, $minutes, $seconds);
    echo "Converted time: $formattedTime";
}

// Example usage:
timeConversion('07:00:00PM'); // Output: Converted time: 19:00:00
