<?php

namespace App\Http\Controllers\Meta;

use DB;
use Auth;
use Helper;
use Validator;
use App\Models\User;
use App\Models\Holiday;
use App\Models\Product;
use App\Models\LeaveType;
use App\Models\SeoSetting;
use App\Models\HolidayList;
use Illuminate\Support\Str;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use App\Models\LeaveAllocation;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MetaController extends Controller
{

    public function getMeta(Request $request)
    {
        $seodata = SeoSetting::where('id', 1)->first();
        $data = array(
            'title'        => 'Welcome to FuturegenIt',
            'description'  => "{$seodata->index_pages_description}",
            'keywords'     => "{$seodata->index_pages_keywords}",

        );
        return response()->json($data, 200);
    }


    public function metaServicesDetails($slug){

        $seodata = Product::where('slug', $slug)->where('status', 1)->first();

        $data = array(
            'title'        => 'Service Details',
            'description'  => "{$seodata->meta_description}",
            'keywords'     => "{$seodata->meta_keywords}",
            'canonical'    => "{$seodata->canonical}",

        );
        return response()->json($data, 200);

    }

    public function metaServices(Request $request)
    {
        $seodata = SeoSetting::where('id', 1)->first();
        $data = array(
            'title'        => 'Service',
            'description'  => "{$seodata->services_pages_description}",
            'keywords'     => "{$seodata->services_pages_keywords}",

        );
        return response()->json($data, 200);
    }

    public function metaGames(Request $request)
    {

        $seodata = SeoSetting::where('id', 1)->first();

        $data = array(
            'title'        => 'Games List',
            'description'  => "{$seodata->games_pages_description}",
            'keywords'     => "{$seodata->games_pages_keywords}",
        );
        return response()->json($data, 200);
    }

    public function metaVideos(Request $request)
    {
        $seodata = SeoSetting::where('id', 1)->first();
        $data = array(
            'title'        => 'Video List',
            'description'  => "{$seodata->videos_pages_description}",
            'keywords'     => "{$seodata->videos_pages_keywords}",

        );
        return response()->json($data, 200);
    }

    public function metaCourses(Request $request)
    {
        $seodata = SeoSetting::where('id', 1)->first();
        $data = array(
            'title'        => 'Course List',
            'description'  => "{$seodata->course_pages_description}",
            'keywords'     => "{$seodata->course_pages_keywords}",

        );
        return response()->json($data, 200);
    }

    public function findseorow(){
        $data = SeoSetting::where('id', 1)->first();
        return response()->json($data, 200);

    }





}
