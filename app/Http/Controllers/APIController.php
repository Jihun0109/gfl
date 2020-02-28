<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\Event;
use Carbon\Carbon;

class APIController extends Controller
{
    public function events(Request $request, $locale)
    {
        $page = $request->input('page');

        $events = Event::select('id','image','title','description','start_date', 'type')
                ->latest()->paginate(2);

        $events = json_decode(json_encode($events), true);
        
        $localeIndex = app()->getLocale() === 'en'?0:1;
        Log::info(app()->getLocale());
        $events['data'] = array_map(function($val) use ($localeIndex){
            if (!$localeIndex){
                $val['title'] = explode('//', $val['title'])[0];
                $val['description'] = explode('//', $val['description'])[0];
                $val['start_date'] = Carbon::create($val['start_date'])->format('M d Y');
                // $val['organizer'] = explode('//', $val['organizer'])[0];
                // $val['support'] = explode('//', $val['support'])[0];
                // $val['location'] = explode('//', $val['location'])[0];
                // $val['presentor_name'] = explode('//', $val['presentor_name'])[0];
                // $val['presentor_title'] = explode('//', $val['presentor_title'])[0];
                // $val['presentor_info'] = explode('//', $val['presentor_info'])[0];
                // $val['tags'] = explode('//', $val['tags'])[0];
            } else {
                $val['title'] = explode('//', $val['title'])[1]??explode('//', $val['title'])[0];
                $val['description'] = explode('//', $val['description'])[1]??explode('//', $val['description'])[0];
                $val['start_date'] = Carbon::create($val['start_date'])->format('Y年m月d日');
                // $val['organizer'] = explode('//', $val['organizer'])[1]??explode('//', $val['organizer'])[0];
                // $val['support'] = explode('//', $val['support'])[1]??explode('//', $val['support'])[0];
                // $val['location'] = explode('//', $val['location'])[1]??explode('//', $val['location'])[0];
                // $val['presentor_name'] = explode('//', $val['presentor_name'])[1]??explode('//', $val['presentor_name'])[0];
                // $val['presentor_title'] = explode('//', $val['presentor_title'])[1]??explode('//', $val['presentor_title'])[0];
                // $val['presentor_info'] = explode('//', $val['presentor_info'])[1]??explode('//', $val['presentor_info'])[0];
                // $val['tags'] = explode('//', $val['tags'])[1]??explode('//', $val['tags'])[0];
            }
            return $val;
        },$events['data']);
        return $events;
    }
}
