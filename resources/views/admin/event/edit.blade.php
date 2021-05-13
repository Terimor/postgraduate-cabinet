@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.event.actions.edit', ['name' => $event->title]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <event-form
                :action="'{{ $event->resource_url }}'"
                :data="{{ $event->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.event.actions.edit', ['name' => $event->title]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.event.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </event-form>

        </div>
    
</div>

@endsection