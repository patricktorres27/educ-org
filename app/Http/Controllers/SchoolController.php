<?php

namespace App\Http\Controllers;

use App\DataTables\SchoolsDataTable;
use App\DataTables\SchoolsDataTableEditor;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SchoolsDataTable $dataTable)
    {
        return $dataTable->render('schools.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SchoolsDataTableEditor $editor, Request $request)
    {
        return $editor->process(request());
    }
}
