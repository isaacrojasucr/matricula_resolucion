<?php

namespace App\Http\Controllers\Sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use App\User;

class SectionController extends Controller
{

    /* LLama la vista de las Secciones para el público */
    public function index(Section $section)
    {
        $listSection = $section->getListSection();

        return view('sections.section', compact('listSection'));
    }
}
