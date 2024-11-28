<?php

namespace App\Http\Controllers\Meta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Helper;
use App\Models\Holiday;
use App\Models\User;
use App\Models\LeaveType;
use App\Models\SeoSetting;
use App\Models\HolidayList;
use App\Models\LeaveAllocation;
use App\Models\LeaveRequest;
use Illuminate\Support\Str;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use DB;

class MetaController extends Controller
{

    public function getMeta(Request $request)
    {
        $seodata = SeoSetting::where('id', 1)->first();
        $data = array(
            'title'        => 'Welcome to FunflixHD',
            'description'  => "{$seodata->index_pages_description}",
            'keywords'     => "{$seodata->index_pages_keywords}",

        );
        return response()->json($data, 200);
    }

    public function metaCategory(Request $request)
    {
        $seodata = SeoSetting::where('id', 1)->first();
        $data = array(
            'title'        => 'Category List',
            'description'  => "{$seodata->category_pages_description}",
            'keywords'     => "{$seodata->category_pages_keywords}",

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
