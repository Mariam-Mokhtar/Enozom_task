<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TripStops;
use Illuminate\Http\Request;
use App\Services\TripStopsService;

class TripStopsController extends Controller
{
    private TripStopsService $tripStopsService;

    public function __construct()
    {
        $this->tripStopsService = new TripStopsService();
    }

    public function GetListOfTrips($src,$dest)
    {
       return $this->tripStopsService->GetListOfTrips($src,$dest);
    }
}
