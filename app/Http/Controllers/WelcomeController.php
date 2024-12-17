<?php

namespace App\Http\Controllers;

use App\Models\Cms\Client;
use App\Models\Cms\Testimonial;
use App\Models\Resource\Service;
use App\Models\Resource\Slider;
use App\Models\Resource\Training;
use App\Repositories\System\DocumentResourceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function welcome()
    {


        return view('welcome')
;
    }
}
