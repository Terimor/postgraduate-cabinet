@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.course.actions.edit', ['name' => $course->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <course-form
                :action="'{{ $course->resource_url }}'"
                :data="{{ $course->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.course.actions.edit', ['name' => $course->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.course.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </course-form>

        </div>
    
</div>

@endsection