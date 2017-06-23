<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\User;

class SectionController extends Controller
{

    /* LLama la vista de las Secciones para el público */
    public function index(Section $section)
    {
        $listSection = $section->getListSection();

        return view('section', compact('listSection'));
    }

    /* Llama la vista de las Secciones para el administrador */
    public function indexAdmin(Section $section, User $user)
    {

        $listSection = $section->getListSection();
        $listUser = $user->getUsersIDName();

        return view('sectionAdmin', compact('listSection', 'listUser'));
    }

    /* Agrega una nueva sección */
    public function addSection(Request $request, Section $section)
    {
        $section->insertSection($request->name, $request->inCharge);

        return redirect('SeccionesAdmin');
    }

    /* Eliminar una sección */
    public function deleteSection(Section $section, $id)
    {
        $section->deleteSection($id);
        return redirect('SeccionesAdmin');
    }

    /* Mostrar Vista Sección */
    public function editSectionView(Section $section, User $user, $id)
    {
        $listSection = $section->getSection($id);
        $listUser = $user->getUsersIDName();

        return view('sectionEdit', compact('listSection', 'listUser')); 
    }

    public function editSection(Request $request, Section $section, $id)
    {
        $section->editSection($request->name, $request->inCharge, $id);

        return redirect('SeccionesAdmin');
    }
}
