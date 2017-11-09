<?php
/**
 * Created by PhpStorm.
 * User: eugene
 * Date: 06.11.17
 * Time: 21:29
 */

namespace Less15\Classes;


class Logger
{
    private $logger;
    public function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function log($text){
        $this->logger->log($text);
    }
    public function setInstance(ILogger $logger){
        $this->logger = $logger;
    }
}