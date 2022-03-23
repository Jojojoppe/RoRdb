<?php

namespace RoRdb\App\Http\Controllers;

use RoRdb\Illuminate\Foundation\Bus\DispatchesJobs;
use RoRdb\Illuminate\Routing\Controller as BaseController;
use RoRdb\Illuminate\Foundation\Validation\ValidatesRequests;
use RoRdb\Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
