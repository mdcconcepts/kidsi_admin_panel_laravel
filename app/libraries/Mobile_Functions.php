<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This class is used for mobile function
 *
 * @author Codelord
 */
class Mobile_Functions {
    //put your code here

    /**
     * This function is used for checking server connection
     * @param type $ip Server Name
     * @param type $port On Which Port server is run
     * @return boolean true for server connection successfull
     */
    public static function ping($host, $timeout = 1) {
        /* ICMP ping packet with a pre-calculated checksum */
        $package = "\x08\x00\x7d\x4b\x00\x00\x00\x00PingHost";
        $socket = socket_create(AF_INET, SOCK_RAW, 1);
        socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => $timeout, 'usec' => 0));
        socket_connect($socket, $host, null);

        $ts = microtime(true);
        socket_send($socket, $package, strLen($package), 0);
        if (socket_read($socket, 255))
            $result = microtime(true) - $ts;
        else
            $result = false;
        socket_close($socket);

        return $result;
    }

}
