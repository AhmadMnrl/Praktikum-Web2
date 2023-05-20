<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('skill.formskill');
    }
    public function hasil(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'lokasi'=>'required',
            'skill'=>'required',
            'jenis_kelamin'=>'required',
            'email'=>'required'
        ]);
        return view('skill.skillhasil', ['value' => $request]);
    }
}
