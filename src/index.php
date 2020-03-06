<?php
namespace IPFSoftwares\ResponseFormatter;

class Formatter
{
    /** Define constants */
    public const statusOk = 200;
    public const statusNoContent = 204;
    public const statusUnAuthorized = 401;
    public const statusBadRequest = 400;
    public const statusForbidden = 403;
    public const statusNotFound = 404;
    public const statusUnkown = 500;

    private $res;
    private $status;
    private $message;
    private $metadata;
    private $data;

    function __construct($res, $status, $message,  $metadata, $data) {
        $this->res = $res; 
        $this->status = $status;
        $this->message = $message; 
        $this->metadata = $metadata; 
        $this->data = $data; 
  }

    public function format()
    {
        if (($this->status == self::statusOk) || ($this->status == self::statusNoContent)) {
            
            return response()->json($this->data);
        }else {
            return response()->json($this->message);
        }
    }
}