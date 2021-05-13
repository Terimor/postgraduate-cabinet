import AppForm from '../app-components/Form/AppForm';

Vue.component('course-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                description:  '' ,
                credits_amount:  '' ,
                teacher_id:  '' ,
                
            }
        }
    }

});