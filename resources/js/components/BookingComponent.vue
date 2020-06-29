<template>
    <div class="modal-body">
        <div class="row">
            <div class="col-lg-6 input-request-modal">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input
                            type="email" class="form-control" id="email" placeholder="Type your email"
                            v-model="email" required>
                </div>

                <div class="form-group">
                    <label for="lastName">Name, Last Name</label>
                    <input
                            type="text" class="form-control" id="lastName" placeholder="Type your name"
                            v-model="name" required>
                </div>

                <div class="form-group">
                    <span v-if="componentLoaded" class="alert alert-warning">No dates selected!</span>
                    <label for="reservationDates">Check In / Check Out</label>
                    <functional-calendar
                            :is-date-range='true'
                            :isModal='true'
                            v-model="reservationDates"
                            class="form-control"
                            id="reservationDates"
                            name="reservationDates"
                            ref="Calendar"
                            :newCurrentDate="new Date()"
                    ></functional-calendar>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input
                            type="text" class="form-control" id="phone" placeholder="Type phone number"
                            v-model="phone">
                </div>

            </div>
            <div class="col-lg-6 request-modal-checkbox">
                <p>
                    Select if you need some of our extras and we will send you our offer
                </p>
                <div class="form-group">
                    <input type="checkbox" id="privateChef" name="privateChef" value="Private Chef" hidden v-model="extras.chef">
                    <label for="privateChef">Private Chef</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="babySitter" name="babySitter" value="Babysitter" hidden v-model="extras.babysitter">
                    <label for="babySitter">Babysitter</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="chauffeur" name="chauffeur" value="Chauffeur" hidden v-model="extras.chauffeur">
                    <label for="chauffeur">Chauffeur</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="yachtCharter" name="yachtCharter" value="Yacht Charter" hidden v-model="extras.yachtcharter">
                    <label for="yachtCharter">Yacht Charter</label>
                </div>

                <div v-if="formResponse" v-bind:class="classObject" class="alert fade show" role="alert">
                    {{ flashMessage }}
                </div>

                <button type="submit" class="btn btn-primary" v-on:click="requestBooking">Send request</button>
            </div>
        </div>
    </div>

</template>

<script>
    const axios = require('axios').default;
    import { FunctionalCalendar } from 'vue-functional-calendar';
    import { validationMixin } from 'vuelidate'
    const { required, minLength, between } = require('vuelidate/lib/validators');

    export default {
        components: {
            FunctionalCalendar
        },
        mixins: [validationMixin],
        mounted() {
            this.$refs.Calendar.ChooseDate('today');
        },
        data() {
            return {
                email: '',
                reservationDates: {},
                startDate: new Date(),
                name: '',
                phone: '',
                extras: {
                    "chef": 0,
                    "babysitter": 0,
                    "chauffeur": 0,
                    "yachtcharter": 0
                },
                flashMessage: '',
                formResponse: false,
                classObject: {
                    'alert-success': false,
                    'alert-warning': false,
                },
                componentLoaded: false,
                age: 0
            }
        },
        validations: {
            name: {
                required,
                minLength: minLength(4)
            },
            age: {
                between: between(20, 30)
            }
        },
        props: [
            'property', 'calendarKey', 'dateRange',
        ],
        methods: {
            requestBooking(e) {
                axios({
                    method: 'post',
                    url: '/booking-request',
                    data: {
                        email: this.email,
                        name: this.name,
                        startDate: this.reservationDates.dateRange.start,
                        endDate: this.reservationDates.dateRange.end,
                        phone: this.phone,
                        extras: this.extras,
                        propertyId: this.property.id,
                        propertyName: this.property.name,
                    }
                }).then(response => {
                    // console.log(response);
                    if (response.status === 200) {
                        this.flashMessage = response.data.message;
                        this.formResponse = true;
                        this.classObject = 'alert-success';
                        this.componentLoaded = false;
                        e.preventDefault();
                    }
                }).catch(error => {
                    // console.log(error.response.data);
                    if (error.response.status === 500) {
                        this.flashMessage = error.response.data.message;
                        this.formResponse = true;
                        this.classObject = 'alert-warning';
                    }
                    this.errors = error.response.data.errors || {};
                });
            },
        },
    }
</script>
