<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;

use App\Models\Stop;
use App\Models\TripStops;

class TripStopsRepository
{
    /**
     * Generate a new user report.
     */
    public function GetListOfTrips($source_id,$dest_id)
    {
        $trips = DB::table('trip_stops as source')
        ->select('source.trip_id','trains.train_name','source.stop_time as source_stop_time')
        ->join('trip_stops as destination', 'source.trip_id', '=', 'destination.trip_id')
        ->join('trips', 'source.trip_id', '=', 'trips.id') // Join with the 'trips' table
        ->join('trains', 'trips.train_id', '=', 'trains.id') // Join with the 'trains' table
        ->where('source.stop_id', '=', $source_id)
        ->where('destination.stop_id', '=', $dest_id)
        ->whereRaw('source.stop_time < destination.stop_time')
        ->get();

        return $trips;
    }

}
