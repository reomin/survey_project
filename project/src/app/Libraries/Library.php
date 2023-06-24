<?php

namespace App\Libraries;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class Libraries 
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
