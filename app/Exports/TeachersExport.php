<?php

namespace App\Exports;

use App\Models\Teacher;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TeachersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Teacher::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.teacher.columns.id'),
            trans('admin.teacher.columns.first_name'),
            trans('admin.teacher.columns.last_name'),
            trans('admin.teacher.columns.patronymic'),
            trans('admin.teacher.columns.email'),
            trans('admin.teacher.columns.phone_number'),
            trans('admin.teacher.columns.degree'),
        ];
    }

    /**
     * @param Teacher $teacher
     * @return array
     *
     */
    public function map($teacher): array
    {
        return [
            $teacher->id,
            $teacher->first_name,
            $teacher->last_name,
            $teacher->patronymic,
            $teacher->email,
            $teacher->phone_number,
            $teacher->degree,
        ];
    }
}
