<template>
    <form action="/search">
        <div class="container-fluid">
            <div class="row">
                <div class="hero-form-select-wrapper col-lg-10">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="countries">Where would you like to stay?</label>
                            <select class="form-control" name="country" id="countries" v-model="country" >
                                <option disabled value="">Select Country</option>
                                <option>Croatia</option>
                                <option>Albania</option>
                                <option>Slovenia</option>
                                <option>Montenegro</option>
                            </select>
                        </div>


                        <div class="form-group col-lg-4">
                            <label for="checkinDates">Check-in / Check-out</label>
                            <functional-calendar
                                    :is-date-range='true'
                                    :isModal='true'
                                    v-model="dates"
                                    class="form-control"
                                    placeholder="Anytime"
                                    id="checkinDates"
                                    name="dates"
                            ></functional-calendar>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="totalGuests">Guests</label>
                            <div class="number-input-group">
                                <span class="input-number-decrement" v-on:click="guests -= 1"><i class="fal fa-minus"></i></span>
                                <input class="input-number" type="text" value="1" min="0" max="30" id="totalGuests" name="guests" v-model="guests" >
                                <span class="input-number-increment" v-on:click="guests += 1"><i class="fal fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-2 p-0">
                    <button class="hero-form-submit" type="submit">
                        <i class="fal fa-search"></i><span>Search</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    const axios = require('axios').default;
    import { FunctionalCalendar } from 'vue-functional-calendar';

    export default {
        components: {
            FunctionalCalendar,
        },
        data() {
            return {
                country: "",
                dates: {},
                guests: 0,
                errors: {},
            }
        },
        mounted() {
            console.log('Search mounted.')
        },
        methods: {
            formSubmit() {

                console.log(this.guests, this.country, this.dates)

                // axios({
                //     method: 'post',
                //     url: '/search',
                //     responseType: 'stream',
                //     data: {
                //         guests: this.guests,
                //         country: this.country,
                //         startDate: this.dates.dateRange.start,
                //         endDate: this.dates.dateRange.end,
                //     }
                // })
                //     .then(response => {
                //     console.log(response.body);
                //     })
                //     .catch(error => {
                //         this.errors = error.response.data.errors || {};
                //     });

                // if (this.country !== "" && this.guests !== 0 && this.dates !== {}) {

                    axios.post('/search', {
                        data: {
                            guests: this.guests,
                            country: this.country,
                            startDate: this.dates.dateRange.start,
                            endDate: this.dates.dateRange.end,
                        }
                    })
                    .then(response => {
                        console.log(response.body);
                    })
                    .catch(error => {
                        this.errors = error.response.data.errors || {};
                    });
                // }
            },
        },
    }
</script>
