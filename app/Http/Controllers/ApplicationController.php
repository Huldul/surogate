<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;

class ApplicationController extends Controller
{
    public function add(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Правила для имени
            'number' => 'required|string|max:20', // Правила для номера телефона
            'comment' => 'required|string|max:500', // Правила для комментария
        ]);

        Applications::create([
            'name'=> $request->input('name'),
            'number'=> $request->input('number'),
            'comment'=> $request->input('comment'),
        ]);
        return redirect()->back()->with('success', 'Заявка успешно отправленна');
    }
}
