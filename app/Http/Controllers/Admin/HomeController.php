<?php
namespace App\Http\Controllers\Admin;
use App\Models\Keijiban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
}
