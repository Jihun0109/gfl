<template>
    <div class="">
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
                            <label class="btn btn-outline-danger active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked /> All
                            </label>
                            <label class="btn btn-outline-danger">
                                <input type="radio" name="options" id="option2" autocomplete="off" /> Blogs
                            </label>
                            <label class="btn btn-outline-danger">
                                <input type="radio" name="options" id="option3" autocomplete="off" /> Events
                            </label>
                            <label class="btn btn-outline-danger">
                                <input type="radio" name="options" id="option2" autocomplete="off" /> News &
                                Announcements
                            </label>
                            <label class="btn btn-outline-danger">
                                <input type="radio" name="options" id="option2" autocomplete="off" /> Reports & Insights
                            </label>
                        </div>
                    </div>
                </div>
                <div class="pt-3" ref="container">
                    
                </div>
                <div class="d-flex justify-content-center py-4">
                    <a v-on:click="load" class="btn btn-sm btn-success" ref="loadmore" style="color:white;">Show more entries</a>
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
        data() {
            return {
                next_link : '',
            };
        },
        methods: {
            load() {
                axios.get(this.next_link?this.next_link:'api/events', ).
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

                    //this.$refs.loadmore.href = data.next_page_url;
                    if (data.next_page_url === null){
                        this.$refs.loadmore.style.display = 'none';
                    } else {
                        this.next_link = data.next_page_url?data.next_page_url:'';
                    }
                });
            }
        },
        created() {
            this.load();
        }
    }
</script>
