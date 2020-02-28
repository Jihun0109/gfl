<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use DB;
use App\TblHomeSlide;
use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'EVENT'])->get();
        
        return view('events.index')->with('slides', $slides);
    }

    public function detail(Request $request, $Locale, $event_id)
    {
        $event = Event::where('id',$event_id)
                ->select('*',DB::raw('HOUR(TIMEDIFF(end_time, start_time)) as duration'))
                ->first();
        
        $description = explode('//', $event->description);
        $agenda = explode('//', $event->agenda);
        $organizer = explode('//', $event->organizer);
        $support = explode('//', $event->support);
        $location = explode('//', $event->location);
        $presentor_name = explode('//', $event->presentor_name);
        $presentor_title = explode('//', $event->presentor_title);
        $presentor_info = explode('//', $event->presentor_info);
        $tags = explode('//', $event->tags);

        if (app()->getLocale() == 'en'){
            $event->description = $description[0];
            $event->agenda = $agenda[0];
            $event->organizer = $organizer[0];
            $event->support = $support[0];
            $event->start_date = Carbon::create($event->start_date)->format('M d Y');
            $event->end_date = $event->end_date?Carbon::create($event->end_date)->format('M d Y'):$event->start_date;
            $event->location = $location[0];
            $event->presentor_name = $presentor_name[0];
            $event->presentor_title = $presentor_title[0];
            $event->presentor_info = $presentor_info[0];
            $event->tags = $tags[0];
        }
        else if (app()->getLocale() == 'cn'){
            $event->description = $description[1]??$description[0];
            $event->agenda = $agenda[1]??$agenda[0];
            $event->organizer = $organizer[1]??$organizer[0];
            $event->support = $support[1]??$support[0];
            $event->start_date = Carbon::create($event->start_date)->format('Y年m月d日');
            $event->end_date = $event->end_date?Carbon::create($event->end_date)->format('Y年m月d日'):$event->start_date;
            $event->location = $location[1]??$location[0];
            $event->presentor_name = $presentor_name[1]??$presentor_name[0];
            $event->presentor_title = $presentor_title[1]??$presentor_title[0];
            $event->presentor_info = $presentor_info[1]??$presentor_info[0];
            $event->tags = $tags[1]??$tags[0];
        }

        $event->agenda = explode('**', $event->agenda);
        $event->tags = explode(',', $event->tags);
        $event->tags = explode('，', $event->tags[0]);
        
        return view('events.detail')->with('event', $event);
    }
}
