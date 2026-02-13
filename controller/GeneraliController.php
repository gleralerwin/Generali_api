<?php
class GeneraliController {

    public function getGeneraliForm(){
        include_once(__DIR__ . '/../view/generaliForm.php');
    }

    public function generali_login(){

        $data = 'client_id=F9BBB18F-8746-49A0-9156-7D9683F246E0&client_secret=00497712-B97E-466B-A089-D6A28C8A18AC&grant_type=password&login_type=prepaid';
   
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://uatportal.generali.com.ph:1370/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        // CURLOPT_POSTFIELDS => 'client_id=F9BBB18F-8746-49A0-9156-7D9683F246E0&client_secret=00497712-B97E-466B-A089-D6A28C8A18AC&grant_type=password&
        // login_type=prepaid',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded','Accept: application/json')
        ));

        $response = curl_exec($curl);
        $res = json_decode($response, TRUE);
        $access_token = $res['access_token'];
        curl_close($curl);
        return $access_token;
    }

    public function generali_save(
        $policyno,
        $refno,
        $fname,
        $mname,
        $lname,
        $suffix,
        $date_of_birth,
        $gender,
        $cstatus,
        $effectivity,
        $expiry,
        $mobile,
        $email,
        $premium,
        $blname,
        $bfname,
        $bmname,
        $relation)
    {
        $generaliLogin = $this->generali_login();
        $authorization = 'Authorization: Bearer '. $generaliLogin;

        $origdata = 'policyno='.$policyno.'&referenceno='.$refno.'&firstname='.$fname.'&miname='.$mname.'&lastname='.$lname.'&suffix='.$suffix.'&birthdate='.$date_of_birth.'&gender='.$gender.'&civilstatus='.$cstatus.'&effectivity='.$effectivity.'&expiry='.$expiry.'&mobileno='.$mobile.'&emailaddress='.$email.'&premium='.$premium.'&beneficiarylastname='.$blname.'&beneficiaryfirstname='.$bfname.'&beneficiaryminame='.$bmname.'&relation='.$relation;

        $curl = curl_init();
				curl_setopt_array($curl, array(
				CURLOPT_URL => 'https://uatportal.generali.com.ph:1370/members/prepaid/save',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => $origdata,
				CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded','Accept: application/json',$authorization),
		));

        $response = curl_exec($curl);
        $res = json_decode($response, true);
        
        $success = $res['success'] ?? null;
        $data = $res['data'] ?? null;
        $paging = $res['paging'] ?? null;
        $requested_on = $res['requested_on'] ?? null;

        $error_code = $res['code'] ?? null;
        $error_reason = $res['reason'] ?? null;

        error_log("Full API Response: " .$response);
        error_log("API Success: " .json_encode($success));
        error_log("Status Code: " .json_encode($error_code));
        error_log("Reason: " .json_encode($error_reason));
        return $response;
    }

}
?>