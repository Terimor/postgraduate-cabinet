<div class="form-group row align-items-center" :class="{'has-danger': errors.has('first_name'), 'has-success': fields.first_name && fields.first_name.valid }">
    <label for="first_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.teacher.columns.first_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.first_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('first_name'), 'form-control-success': fields.first_name && fields.first_name.valid}" id="first_name" name="first_name" placeholder="{{ trans('admin.teacher.columns.first_name') }}">
        <div v-if="errors.has('first_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('first_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('last_name'), 'has-success': fields.last_name && fields.last_name.valid }">
    <label for="last_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.teacher.columns.last_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.last_name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('last_name'), 'form-control-success': fields.last_name && fields.last_name.valid}" id="last_name" name="last_name" placeholder="{{ trans('admin.teacher.columns.last_name') }}">
        <div v-if="errors.has('last_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('last_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('patronymic'), 'has-success': fields.patronymic && fields.patronymic.valid }">
    <label for="patronymic" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.teacher.columns.patronymic') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.patronymic" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('patronymic'), 'form-control-success': fields.patronymic && fields.patronymic.valid}" id="patronymic" name="patronymic" placeholder="{{ trans('admin.teacher.columns.patronymic') }}">
        <div v-if="errors.has('patronymic')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('patronymic') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': fields.email && fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.teacher.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': fields.email && fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.teacher.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('phone_number'), 'has-success': fields.phone_number && fields.phone_number.valid }">
    <label for="phone_number" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.teacher.columns.phone_number') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.phone_number" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone_number'), 'form-control-success': fields.phone_number && fields.phone_number.valid}" id="phone_number" name="phone_number" placeholder="{{ trans('admin.teacher.columns.phone_number') }}">
        <div v-if="errors.has('phone_number')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone_number') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('degree'), 'has-success': fields.degree && fields.degree.valid }">
    <label for="degree" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.teacher.columns.degree') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.degree" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('degree'), 'form-control-success': fields.degree && fields.degree.valid}" id="degree" name="degree" placeholder="{{ trans('admin.teacher.columns.degree') }}">
        <div v-if="errors.has('degree')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('degree') }}</div>
    </div>
</div>


