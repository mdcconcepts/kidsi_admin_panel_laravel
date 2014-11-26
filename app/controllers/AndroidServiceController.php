<?php

/**
 * This Controller is used to controll Android Services
 * @author Codelord <dev1@mdcconcepts.in>
 */
class AndroidServiceController extends BaseController {

    /**
     * @param type $Server_Name This is surver name as parameter
     */
    public function checkServerConnection($Server_Name) {

        $host = $Server_Name;
        $port = 80;
        $waitTimeoutInSeconds = 1;
        try {
            if ($fp = fsockopen($host, $port, $errCode, $errStr, $waitTimeoutInSeconds)) {
                $response["success"] = 1;
                $response["message"] = "Server Connection successful!";
                echo json_encode($response);
            } else {
                $response["success"] = 0;
                $response["message"] = "Cant connect to Server";
                die(json_encode($response));
            }
            fclose($fp);
        } catch (Exception $exc) {
            $response["success"] = 0;
            $response["message"] = "Cant connect to Server";
            $response["error"] = $exc;
            die(json_encode($response));
        }
    }

    public function checkTeachAuth($username, $password) {
        $user = User::where('username', '=', $username)->where('password', '=', Hash::make($password));
        if ($user->count()) {
            $user = $user->first();
            $response["success"] = 1;
            $response["message"] = "Login Successful !";
            $response["User"] = $exc;
            die(json_encode($response));
        }
        $response["success"] = 0;
        $response["message"] = "Cant connect to Server";
        $response["error"] = $exc;
        die(json_encode($response));
    }

}

?>