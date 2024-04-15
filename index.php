<?php

// Check if the required POST parameters are set
// if (isset($_POST["sessionId"]) && isset($_POST["serviceCode"]) && isset($_POST["phoneNumber"]) && isset($_POST["text"])) {
    $sessionId = $_POST["sessionId"];
    $serviceCode = $_POST["serviceCode"];
    $phoneNumber = $_POST["phoneNumber"];
    $text = $_POST["text"];

    $response = ""; // Initialize response variable

    // Your logic for handling different text inputs
    if ($text == "") {
        $response = "CON Choose an option below. \n";
        $response .= "1. Village health team member (VHT) \n";
        $response .= "2. Health inspector \n";
        $response .= "3. Main hospital";
    } elseif ($text == "1") {
        $response = "CON Choose an option below \n";
        $response .= "1. Fill Weekly Report \n";
        $response .= "2. Fill Referral Form \n";
        $response .= "3. Patient Registration \n";
        $response .= "4. Training Management \n";
        $response .= "5. Disease Outbreak Reporting \n";
        $response .= "6. Training Management:";
    } elseif ($text == "1*1") {
        $response .= "Fill VHT Registration Form";
    } elseif ($text == "1*2") {
        $response .= "Fill Weekly Report \n";
    } elseif ($text == "1*3") {
        $response = "CON Choose an option below \n";
        $response .= "1. Create and submit referral form. \n";
        $response .= "2. Receive confirmation from the main hospital with appointment details.";
    } elseif ($text == "1*4") {
        $response = "CON Choose an option below \n";
        $response .= "1. Register new patient. \n";
        $response .= "2. •	Track patient history and progress.";
    } elseif ($text == "1*5") {
        $response = "CON Choose an option below \n";
        $response .= "1. Access information on upcoming training programs and modules \n";
        $response .= "2. Register for and track completion of training courses.";
    } elseif ($text == "1*6") {
        $response = "CON Choose an option below \n";
        $response .= "1. Report suspected or confirmed disease outbreak.\n";
        $response .= "2. Receive immediate response and instructions from health authorities.";
    }

    // Set the correct Content-type header
    header('Content-type: text/plain');
    echo $response;
// } else {
//     // Return an error response if POST parameters are missing
//     echo "POST parameters missing";
// }

?>
