<?php 

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . '' : 'just now';
}

if(isset($_GET['id'])){

    //getting view button data from joblist.php
    $jobid = mysqli_real_escape_string($conn, $_GET['id']);
    
    //joining query for "jobs" and "employer_info" tables
    $sql = "SELECT job.*, employer.name, employer.logo, employer.email, employer.company_profile FROM job LEFT JOIN employer ON job.employer = employer.eId WHERE job.jId = '$jobid'";
    
    $result = mysqli_query($conn, $sql);
    
    $job = mysqli_fetch_assoc($result);
    
    mysqli_free_result($result);
    mysqli_close($conn);
    
}

