<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function interndashboard()
    {
        $today = date("Y-m-d");
        $thisMonth = date("m") * 1;
        $thisYear = date("Y");
        $nik = Auth::user()->nik;
        $presensiToday = DB::table('presensi')->where('nik', $nik)->where('date_attendance', $today)->first();
        $historyThisMonth = DB::table('presensi')
            ->where('nik', $nik)
            ->whereRaw('MONTH(date_attendance)="' . $thisMonth . '"')
            ->whereRaw('YEAR(date_attendance)="' . $thisYear . '"')
            ->orderBy('date_attendance')
            ->get();

        $rekapPresensi = DB::table('presensi')
            ->selectRaw(
                '
        SUM(CASE 
            WHEN (TIME(in_hour) >= "07:01" AND TIME(in_hour) <= "07:15") THEN 1
            ELSE 0
        END) as jmlterlambat_shift1,
        SUM(CASE 
            WHEN (TIME(in_hour) > "07:15") THEN 1
            ELSE 0
        END) as jmltidakhadir_shift1,
        SUM(CASE 
            WHEN (TIME(in_hour) >= "14:01" AND TIME(in_hour) <= "14:15") THEN 1
            ELSE 0
        END) as jmlterlambat_shift2,
        SUM(CASE 
            WHEN (TIME(in_hour) > "14:15") THEN 1
            ELSE 0
        END) as jmltidakhadir_shift2,
        (SUM(CASE 
            WHEN (TIME(in_hour) >= "07:01" AND TIME(in_hour) <= "07:15") THEN 1
            ELSE 0
        END) + SUM(CASE 
            WHEN (TIME(in_hour) >= "14:01" AND TIME(in_hour) <= "14:15") THEN 1
            ELSE 0
        END)) as jmlterlambat,
        COUNT(*) - (SUM(CASE 
            WHEN (TIME(in_hour) > "07:15") THEN 1
            ELSE 0
        END) + SUM(CASE 
            WHEN (TIME(in_hour) > "14:15") THEN 1
            ELSE 0
        END)) as jmlhadir'
            )
            ->where('nik', $nik)
            ->whereRaw('MONTH(date_attendance)="' . $thisMonth . '"')
            ->whereRaw('YEAR(date_attendance)="' . $thisYear . '"')
            ->first();



        $nameMonth = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        $rekapizin = DB::table('pengajuan_izin')
            ->where('nik', $nik)
            ->selectRaw('SUM(IF(status="i",1,0)) as jmlizin,SUM(IF(status="s",1,0)) as jmlsakit')
            ->whereRaw('MONTH(date_izin)="' . $thisMonth . '"')
            ->whereRaw('YEAR(date_izin)="' . $thisYear . '"')
            ->first();

        return view('intern.dashboard', compact('presensiToday', 'historyThisMonth', 'nameMonth', 'thisMonth', 'thisYear', 'rekapPresensi', 'rekapizin'));
    }
}
