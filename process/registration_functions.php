<?php
$fname = '';
$mname = '';
$lname = '';
$gender = '';
$address_line1 = '';
$address_line2 = '';
$birth_date = '';
$civil_status = '';
$contact_no = '';
$country = '';
$department = '';
$designation = '';
$email_address = '';
$employee_status = '';
$pay_date = '';
$social_media_account_id = '';
$municipality ='';
$state_province = '';
$zip_code = '';
$pic_path ='';
$suffix = '';
$employee_no = '';

if (isset($_GET['id'])) {
    include 'process/db_connection.php';
    $conn = OpenCon();
    $id = $_GET['id'];
    $sql = "SELECT * FROM `personal_infotbl` WHERE id  = $id;";
    $result = mysqli_fetch_assoc($conn->query($sql));
    $fname = $result['fname'];
    $mname = $result['mname'];
    $gender = $result['gender'];
    $lname = $result['lname'];
    $employee_no = $result['employee_no'];
    $suffix = $result['suffix'];
    $pay_date = $result['pay_date'];
    $zip_code = $result['zip_code'];
    $municipality = $result['municipality'];
    $state_province = $result['state_province'];
    $social_media_account_id = $result['social_media_account_id'];
    $address_line1 = $result['address_line1'];
    $address_line2 = $result['address_line2'];
    $birth_date = $result['birth_date'];
    $civil_status = $result['civil_status'];
    $contact_no = $result['contact_no'];
    $country = $result['country'];
    $department = $result['department'];
    $designation = $result['designation'];
    $email_address = $result['email_address'];
    $employee_status = $result['employee_status'];
    $pic_path = $result['picpath'];
    $type = "Update";
}
?>