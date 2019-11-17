<?php
namespace App\Infrastructure;

class Responser {
    protected $type;
    protected $description;
    protected $statusCode;

    public function __construct($errorType, $description) {
        $this->type = $errorType['type'];
        $this->description = $description;
        $this->statusCode = $errorType['code'];
    }
    
    public function respond() {
        return response()->json(['type' => $this->type, 'description'=>$this->description], $this->statusCode);
    }
}
