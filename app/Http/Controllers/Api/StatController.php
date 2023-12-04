<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GeneralEquipeStatsDomicile;
use App\Models\GeneralEquipeStatsExterieur;
use App\Models\GeneralEquipeStatsGeneral;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function showStatsDom()
    {
        $stats = GeneralEquipeStatsDomicile::all();

        return response()->json($stats);
    }
    public function showStatsExt()
    {
        $stats = GeneralEquipeStatsExterieur::all();

        return response()->json($stats);
    }
    public function showStatsGen()
    {
        $stats = GeneralEquipeStatsGeneral::all();

        return response()->json($stats);
    }
}
