<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller as Base;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends Base
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
