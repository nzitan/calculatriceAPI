<?php

namespace App\Model;
//Model de réponse, un status 0 indique que le process s'est bien passé un status 1 qu'il y a eu une erreur.
class ResponseModel
{
    public int $status;
    public string $message;

    public function __construct(int $status, string $message)
    {
        $this->status  = $status;
        $this->message = $message;
    }
}