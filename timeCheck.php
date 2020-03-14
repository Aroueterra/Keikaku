<?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    $dayTerm = ($hour > 17) ? "Konbanwa" : (($hour > 12) ? "Konnichiwa" : "Ohayou");
    echo $dayTerm ."!";
