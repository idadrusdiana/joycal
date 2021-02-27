var controller = new Vue({
    el: "#controller",
    data: {
        step: 1,
        result: {},
        post_data: {},
        url: window.location.href
    },
    mounted: function () {
        this.start();
    },
    methods: {
        start() {
            const _this = this;
            Vue.nextTick(function () {
                jQuery.extend(jQuery.validator.messages, {
                    required: 'この項目は必須です。',
                    remote: 'bla bla bla'
                });                
                $('.phone-input').mask('000-000-0000'); 
                $('.show-pdf').on('click', function (e) {
                    e.preventDefault();
                    $($(this).attr('data-src')).toggle()
                });

                $('#form-input').validate({
                    errorClass: 'is-invalid text-danger',
                    rules: {
                        address_postcode:  "required",
                        address_street:  "required",
                        adress_city:  "required",
                        adress_district:  "required",
                        annual_income:  "required",
                        annual_income_of_household:  "required",
                        birth_date:  "required",
                        birth_japan_year: "required",
                        birth_month:  "required",
                        birth_year:  "required",
                        email:  "required",
                        employment_status: "required",
                        ext_name_mei:  "required",
                        ext_name_surname:  "required",
                        family_structure:  "required",
                        gender: "required",
                        industry: "required",
                        length_of_service:  "required",
                        marital_status: "required",
                        name_first:  "required",
                        name_last:  "required",
                        occupation: "required",
                        office_name:  "required",
                        phone_number:  "required",
                        residence: "required",
                        residence_year:  "required",
                        work_name:  "required",
                        work_phone:  "required",
                        confirmation_transmission: "required",
                        consent_for_shared_use: "required",
                        consent_personal_information: "required",
                        consent_proxy_input: "required",
                        details_of_application: "required"
                    },
                    messages: {
                        confirmation_transmission: {
                            required: ""
                        },
                        consent_for_shared_use: {
                            required: ""
                        },
                        consent_personal_information: {
                            required: ""
                        },
                        consent_proxy_input: {
                            required: ""
                        },
                        details_of_application: {
                            required: ""
                        },
                        birth_date: {
                            required: ""
                        },
                        birth_japan_year:{
                            required: ""
                        },
                        birth_month: {
                            required: ""
                        },
                        birth_year: {
                            required: ""
                        }
                    },
                    submitHandler: function(form) {
                        var data = new FormData(form);

                        Vue.nextTick(function () {
                            $('.line-progress').css('width', '50%');
                        });
                        var object = {};
                        data.forEach(function(value, key){
                            object[key] = value;
                        });
                        _this.result = object;
                        _this.post_data = object;
                        _this.step = 2;    
                    }
                    
                });
            });
        },
        submitResult() {
            const _this = this;
            axios.post(document.querySelector('#form-input').getAttribute('action'), _this.post_data).then(function (response) {
                
                _this.step = 3;
                Vue.nextTick(function () {
                    $('.line-progress').css('width', '100%');
                });

                window.history.pushState('page2', 'Title', window.location.href + 'thanks');
            });
        },
        goHome() {
            window.location.href = this.url;
        }
    }
});