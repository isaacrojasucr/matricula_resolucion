<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{

    public function index(Section $section)
    {

        $listSection = $section->getListSection();

        return view('section', compact('listSection', 'managers'));
    }

    public function indexAdmin(Section $section)
    {

        $listSection = $section->getListSection();

        return view('sectionAdmin', compact('listSection', ''));
    }

    public function addSection(Request $request, Section $section)
    {
        $section->insertSection($request->name, $request->inCharge, $request->email, $request->number);

        return redirect('SeccionesAdmin');
    }

    public function deleteSection($id)
    {
        //$section->deleteSection($id);
        //return redirect('SeccionesAdmin');
        return view('test', compact('id'));
    }
}
