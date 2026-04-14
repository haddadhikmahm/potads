<?php

namespace App\Http\Controllers;

use App\Models\MedicalInfo;
use Illuminate\Http\Request;

class MedicalInfoController extends Controller
{
    public function index()
    {
        $infos = MedicalInfo::where('status', 'published')->latest()->paginate(9);
        return view('medical_infos.index', compact('infos'));
    }

    public function show($slug)
    {
        $info = MedicalInfo::where('slug', $slug)->firstOrFail();
        return view('medical_infos.show', compact('info'));
    }
}
