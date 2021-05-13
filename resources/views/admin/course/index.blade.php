@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.course.actions.index'))

@section('body')

    <course-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/courses') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.course.actions.index') }}
                        <a class="btn btn-primary btn-sm pull-right m-b-0 ml-2" href="{{ url('admin/courses/export') }}" role="button"><i class="fa fa-file-excel-o"></i>&nbsp; {{ trans('admin.course.actions.export') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">

                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>

                                        <th is='sortable' :column="'id'">{{ trans('admin.course.columns.id') }}</th>
                                        <th is='sortable' :column="'name'">{{ trans('admin.course.columns.name') }}</th>
                                        <th is='sortable' :column="'description'">{{ trans('admin.course.columns.description') }}</th>
                                        <th is='sortable' :column="'credits_amount'">{{ trans('admin.course.columns.credits_amount') }}</th>
                                        <th is='sortable' :column="'teacher_id'">{{ trans('admin.course.columns.teacher_id') }}</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" >

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.name }}</td>
                                        <td>@{{ item.description }}</td>
                                        <td>@{{ item.credits_amount }}</td>
                                        <td>@{{ item.teacher_id }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </course-listing>

@endsection
