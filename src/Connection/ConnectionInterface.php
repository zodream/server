<?php
namespace Zodream\Server\Connection;

interface ConnectionInterface {
    /**
     * Sends data on the connection.
     *
     * @param string $send_buffer
     * @return void|boolean
     */
    public function send($send_buffer);


    /**
     * Close connection.
     *
     * @param $data
     * @return void
     */
    public function close($data = null);
}