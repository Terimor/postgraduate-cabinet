<?php

namespace App\Exports;

use App\Models\Event;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EventsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Event::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.event.columns.id'),
            trans('admin.event.columns.date_time'),
            trans('admin.event.columns.title'),
            trans('admin.event.columns.description'),
        ];
    }

    /**
     * @param Event $event
     * @return array
     *
     */
    public function map($event): array
    {
        return [
            $event->id,
            $event->date_time,
            $event->title,
            $event->description,
        ];
    }
}
