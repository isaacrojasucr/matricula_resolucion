<?php

namespace App\Http\Controllers\Sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use App\User;

class SectionAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* Llama la vista de las Secciones para el administrador */
    public function indexAdmin(Section $section, User $user)
    {

        $listSection = $section->getListSection();
        $listUser = $user->getUsersIDName();

        return view('sections.sectionAdmin', compact('listSection', 'listUser'));
    }

    /* Agrega una nueva sección */
    public function addSection(Request $request, Section $section)
    {
        $section->insertSection($request->name, $request->inCharge);

        return redirect('admin/secciones');
    }

    /* Eliminar una sección */
    public function deleteSection(Section $section, $id)
    {
        $section->deleteSection($id);
        return redirect('admin/secciones');
    }

    /* Mostrar Vista Sección */
    public function editSectionView(Section $section, User $user, $id)
    {
        $listSection = $section->getSection($id);
        $listUser = $user->getUsersIDName();

        return view('sections.sectionEdit', compact('listSection', 'listUser')); 
    }

    public function editSection(Request $request, Section $section, $id)
    {
        $section->editSection($request->name, $request->inCharge, $id);

        return redirect('admin/secciones');
    }
}
