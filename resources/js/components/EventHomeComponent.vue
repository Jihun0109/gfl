<template>
    <div class="container">
        <div class="d-flex flex-column">            
            <div class="First Heading">
                <div class="d-flex justify-content-center pt-5">
                    <h1>GFL Events & Insights</h1>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-md-12">
                        <calendar-component></calendar-component>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <div class="col-md-8">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-danger btn-lg active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked /> All
                            </label>
                            <label class="btn btn-outline-danger btn-lg">
                                <input type="radio" name="options" id="option2" autocomplete="off" /> Blogs
                            </label>
                            <label class="btn btn-outline-danger btn-lg">
                                <input type="radio" name="options" id="option3" autocomplete="off" /> Events
                            </label>
                            <label class="btn btn-outline-danger btn-lg">
                                <input type="radio" name="options" id="option2" autocomplete="off" /> News &
                                Announcements
                            </label>
                            <label class="btn btn-outline-danger btn-lg">
                                <input type="radio" name="options" id="option2" autocomplete="off" /> Reports & Insights
                            </label>
                        </div>
                    </div>
                </div>
                <div class="pt-3" ref="container">
                    
                </div>
            </div>
        </div>        
    </div>   
</template>

<script>
import CalendarComponent from './CalendarComponent.vue';
import EventComponent from './EventComponent.vue';
import Vue from 'vue'

    export default {
        components: {
            CalendarComponent,
            EventComponent
        },
        methods: {
            load() {
                axios.get('api/events', ).
                then(({ data }) => {
                    
                    data.data.forEach((element, index) =>  {
                        var EventClass = Vue.extend(EventComponent);
                        var event = new EventClass({
                            propsData: { data: element, pos: index }
                        });
                        event.$mount();
                        this.$refs.container.appendChild(event.$el);
                        console.log(element);
                    });
                });
            }
        },
        created() {
            this.load();
        }
    }
</script>
