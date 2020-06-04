<?php
namespace IPFSoftwares\ResponseFormatter;

use Illuminate\Support\Facades\Facade;

class Formatter extends Facade
{
    /** Define constants */

    public const statusOk = 200;
    public const statusNoContent = 204;
    public const statusUnAuthorized = 401;
    public const statusBadRequest = 400;
    public const statusForbidden = 403;
    public const statusNotFound = 404;
    public const statusUnkown = 500;


    /** Declare constructor parametors */

    private $status;
    private $message;
    private $metadata;
    private $data;

    function __construct($message,  $metadata, $data, $status) {
        $this->status = $status;
        $this->message = $message; 
        $this->metadata = $metadata; 
        $this->data = $data; 
    }

    public function format()
    {
        if (($this->status == self::statusOk) || ($this->status == self::statusNoContent)) {
            
            return response()->json([
                'message' => $this->message,
                'metadata' => $this->metadata,
                'data' => $this->data,
            ], $this->status);
        }else {
            return response()->json([
                'message' => $this->message
            ], $this->status);
        }
    }
}