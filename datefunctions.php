<?php

function getMonthAbbreviation($month)
// Function to obtain the abbreviation of the month in Spanish
{
    $months = array(
        'Jan' => 'Ene',
        'Feb' => 'Feb',
        'Mar' => 'Mar',
        'Apr' => 'Abr',
        'May' => 'May',
        'Jun' => 'Jun',
        'Jul' => 'Jul',
        'Aug' => 'Ago',
        'Sep' => 'Sep',
        'Oct' => 'Oct',
        'Nov' => 'Nov',
        'Dec' => 'Dic'
    );
    return $months[$month];
}

function formatDate($strdate)
{
    $time_date = strtotime($strdate);

    $formatted_date = date("Y", $time_date) . ' ' . getMonthAbbreviation(date("M", $time_date)) . ' ' . date("d", $time_date);

    return $formatted_date;
}
