<template>
    <div class="modal-body">

        <FlashMessage :position="'right bottom'"></FlashMessage>

        <form v-on:submit.prevent="requestBooking">
        <div class="row">
            <div class="col-lg-6 input-request-modal">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input
                            type="email" class="form-control" id="email" placeholder="Type your email" required
                            v-model="email">
                </div>
                <div class="form-group">
                    <label for="lastName">Name, Last Name</label>
                    <input
                            type="text" class="form-control" id="lastName" placeholder="Type your name" required
                            v-model="name">
                </div>
                <div class="form-group">
                    <label for="reservationDates">Check In / Check Out</label>
                    <functional-calendar
                            :is-date-range='true'
                            :isModal='true'
                            v-model="reservationDates"
                            class="form-control"
                            placeholder="Anytime"
                            id="reservationDates"
                            name="reservationDates"
                            required
                    ></functional-calendar>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input
                            type="text" class="form-control" id="phone" placeholder="Type phone number" required
                            v-model="phone">
                </div>
            </div>
            <div class="col-lg-6 request-modal-checkbox">
                <p>
                    Select if you need some of our extras and we will send you our offer
                </p>
                <div class="form-group">
                    <input type="checkbox" id="privateChef" name="privateChef" value="Private Chef" hidden v-model="extras">
                    <label for="privateChef">Private Chef</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="babySitter" name="babySitter" value="Babysitter" hidden v-model="extras">
                    <label for="babySitter">Babysitter</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="chauffeur" name="chauffeur" value="Chauffeur" hidden v-model="extras">
                    <label for="chauffeur">Chauffeur</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="yachtCharter" name="yachtCharter" value="Yacht Charter" hidden v-model="extras">
                    <label for="yachtCharter">Yacht Charter</label>
                </div>
                <button type="submit" class="btn btn-primary">Send request</button>
            </div>
        </div>
        </form>
    </div>
</template>

<script>
    const axios = require('axios').default;
    import { FunctionalCalendar } from 'vue-functional-calendar';
    import FlashMessage from '@smartweb/vue-flash-message';

    export default {
        components: {
            FunctionalCalendar
        },
        mounted() {
            console.log('Booking Component')
        },
        data() {
            return {
                email: '',
                reservationDates: {},
                name: '',
                phone: '',
                extras: [],
                flashMessages: FlashMessage
            }
        },
        props: [
            'property', 'calendarKey'
        ],
        methods: {
            requestBooking() {
                axios({
                    method: 'post',
                    url: '/booking-request',
                    data: {
                        email: this.email,
                        name: this.name,
                        startDate: this.reservationDates.dateRange.start ? this.reservationDates.dateRange.start : '',
                        endDate: this.reservationDates.dateRange.end ? this.reservationDates.dateRange.end : '',
                        phone: this.phone,
                        extras: this.extras,
                        propertyId: this.property.id,
                        propertyName: this.property.name,
                    }
                }).then(response => {
                    console.log(response);
                    if (response.status === 200) {
                        this.flashMessage.success({
                            title: 'Request booking sent!',
                            message: response.data.message,
                            x: 0,
                            y: 100,
                            css: 'opacity: 1!important'
                        });
                    }
                }).catch(error => {
                    if (error.response.status === 500) {
                        console.log(error.response.data);
                        this.flashMessage.error({
                            title: 'Something went wrong!',
                            message: error.response.data.message,
                            x: 0,
                            y: 100,
                            css: 'opacity: 1!important'
                        });
                    }
                    this.errors = error.response.data.errors || {};
                });
            },
        },
    }
</script>
