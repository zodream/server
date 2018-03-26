<?php
namespace Zodream\Server;

use Zodream\Http\Uri;

class Server {

    /**
     * @var resource
     */
    protected $context;
    /**
     * @var Uri
     */
    protected $uri;

    public function __construct($socketName = '', $contextOption = []) {
        if (empty($socketName)) {
            return;
        }
        $this->uri = $socketName instanceof Uri ? $socketName : new Uri($socketName);
        $this->context = stream_context_create($contextOption);
    }


    public function run() {

    }

    public static function listen($socketName = '', $contextOption = []) {
        return new static($socketName, $contextOption);
    }
}