<?php

namespace App\Exports;

use App\Models\Course;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CoursesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Course::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.course.columns.id'),
            trans('admin.course.columns.name'),
            trans('admin.course.columns.description'),
            trans('admin.course.columns.credits_amount'),
            trans('admin.course.columns.teacher_id'),
        ];
    }

    /**
     * @param Course $course
     * @return array
     *
     */
    public function map($course): array
    {
        return [
            $course->id,
            $course->name,
            $course->description,
            $course->credits_amount,
            $course->teacher_id,
        ];
    }
}
