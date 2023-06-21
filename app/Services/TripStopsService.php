<?php

namespace App\Services;

use App\Repositories\TripStopsRepository;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class TripStopsService
{
    private TripStopsRepository $tripStopsRepository;


    public function __construct()
    {
        $this->tripStopsRepository = new TripStopsRepository();
    }

    public function GetListOfTrips($src,$dest)
    {
        $From_Station_Id = $src;
        $To_Station_Id = $dest;
        $all_trips = $this->tripStopsRepository->GetListOfTrips($From_Station_Id, $To_Station_Id);

        if (count($all_trips) != 0) {
            return response()->json([
                'Data' => $all_trips
            ], 200);
        } else {
            return response()->json([
                'Error' => 'No Trips found'
            ], 404);
        }
    }
}
