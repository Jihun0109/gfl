<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
use App\Event;
use Carbon\Carbon;
use Illuminate\Support\Str;

class APIController extends Controller
{
    public function events(Request $request, $locale, $type)
    {
        // webbinary, event, blog, report, news
        $page = $request->input('page');
        $events;

        $limit = 2;
        if ($type == 'all') {
            $events = Event::select('id','image','title','description','start_date', 'type')
                            ->latest()->paginate($limit);
        } else if ($type == 'events') {
            $events = Event::where('type','event')->select('id','image','title','description','start_date', 'type')
                            ->latest()->paginate($limit);
        } else if ($type == 'blogs'){
            $events = Event::where('type','blog')->select('id','image','title','description','start_date', 'type')
                            ->latest()->paginate($limit);
        } else if ($type == 'news'){
            $events = Event::where('type','news')->select('id','image','title','description','start_date', 'type')
                            ->latest()->paginate($limit);            
        } else if ($type == 'reports'){
            $events = Event::where('type','report')->select('id','image','title','description','start_date', 'type')
                            ->latest()->paginate($limit);
            
        } else if ($type == 'webbinaries'){
            $events = Event::where('type','webbinary')->select('id','image','title','description','start_date', 'type')
                            ->latest()->paginate($limit);
        } else {
            return array();
        }

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

    public function upcoming(Request $request, $Locale, $region)
    {        
        $region_param = strtolower($region);
        $is_hongkong = $region_param === "hongkong" || $region_param === "hong kong";
        $is_all = $region_param === "all";

        $events;
        
        if ($is_hongkong){
            $events = Event::where('type','event')
                            ->where('country','LIKE', '%'.'Hong Kong'.'%')
                            ->orderBy('start_date','ASC')
                            ->get();
        } else if ($is_all){
            $events = Event::where('type','event')                            
                            ->orderBy('start_date','ASC')
                            ->get();
        } else {
            $events = Event::where('type','event')
                            ->where('country','NOT LIKE', '%'.'Hong Kong'.'%')
                            ->orderBy('start_date','ASC')
                            ->get();
        }

        $events = $events->map(function($event, $key) use ($Locale){
            $country = explode('//', $event->country);
            $title = explode('//', $event->title);
            if ($Locale == 'en'){
                $event->country = $country[0];
                $event->title = $title[0];
            } else {
                $event->country = $country[1]??$country[0];
                $event->title = $title[1]??$title[0];
            }

            $event['month'] = Carbon::parse($event->start_date)->format('M');
            $event['start_day'] = Carbon::parse($event->start_date)->format('d');
            $event['end_day'] = $event->end_date ? Carbon::parse($event->end_date)->format('d'):$event['start_day'];
            
            $country = strtolower($event->country);
            $event['hongkong'] = Str::startsWith($country, 'hong') || Str::startsWith($event->country, '香港');
            return $event;
        });
        return $events;
    }
    public function test()
    {
        return "Test";
    }
}
