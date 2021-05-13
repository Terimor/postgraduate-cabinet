@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.science-manager.actions.index'))

@section('body')

    <science-manager-listing
        :url="'{{ url('admin/science-managers') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <h3>Науковий керівник - Іванов Іван Іванович</h3>
                    <div>Номер телефону - +380999999999</div>
                    <div>Пошта - ivanov-ivan@gmail.com</div>
                </div>
            </div>
        </div>
    </science-manager-listing>

@endsection
