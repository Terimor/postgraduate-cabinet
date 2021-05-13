import AppForm from '../app-components/Form/AppForm';

Vue.component('teacher-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                first_name:  '' ,
                last_name:  '' ,
                patronymic:  '' ,
                email:  '' ,
                phone_number:  '' ,
                degree:  '' ,
                
            }
        }
    }

});