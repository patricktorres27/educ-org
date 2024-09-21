<?php

declare(strict_types=1);

namespace App\DataTables;

use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\DataTablesEditor;

class SchoolsDataTableEditor extends DataTablesEditor
{
    protected $model = School::class;

    /**
     * Get create action validation rules.
     */
    public function createRules(): array
    {
        return [
            'short_name' => 'required|max:20',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'number' => 'required|max:255',
            'website' => 'required||max:255',
        ];
    }

    /**
     * Get edit action validation rules.
     */
    public function editRules(Model $model): array
    {
        return [
            'short_name' => 'required|max:20',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'number' => 'required|max:255',
            'website' => 'required||max:255',
        ];
    }
}
