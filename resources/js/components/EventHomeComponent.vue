<template>
  <div class>
    <div class="d-flex flex-column">
      <div class="First Heading">
        <div
          class="d-flex justify-content-center pt-5"
          data-aos="zoom-in-up"
          data-aos-delay="100"
          data-aos-duration="800"
        >
          <h1>GFL Events & Insights</h1>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <div class="px-md-4 col-md-10">
            <calendar-component></calendar-component>
          </div>
        </div>
        <div class="text-center mt-5">
          <div class="justify-content-center">
            <div class="btn-group btn-group-toggle">
              <label class="btn btn-outline-danger" v-bind:class="{active : type =='all'}">
                <input type="radio" value="all" v-model="type" v-on:change="typeClicked" /> All
              </label>
              <label class="btn btn-outline-danger" v-bind:class="{active : type =='blogs'}">
                <input type="radio" value="blogs" v-model="type" v-on:change="typeClicked" /> Blogs
              </label>
              <label class="btn btn-outline-danger" v-bind:class="{active : type =='events'}">
                <input type="radio" value="events" v-model="type" v-on:change="typeClicked" /> Events
              </label>
              <label class="btn btn-outline-danger" v-bind:class="{active : type =='news'}">
                <input type="radio" value="news" v-model="type" v-on:change="typeClicked" /> News &
                Announcements
              </label>
              <label class="btn btn-outline-danger" v-bind:class="{active : type =='reports'}">
                <input type="radio" value="reports" v-model="type" v-on:change="typeClicked" /> Reports & Insights
              </label>
            </div>
          </div>
        </div>
        <div class="mt-3 mt-sm-5" ref="container"></div>
        <div class="row justify-content-center py-5 mt-md-4">
          <a
            v-on:click="load"
            class="btn btn-lg btn-danger"
            ref="loadmore"
            style="color:white;"
          >Show more entries</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CalendarComponent from "./CalendarComponent.vue";
import EventComponent from "./EventComponent.vue";
import Vue from "vue";

export default {
  components: {
    CalendarComponent,
    EventComponent
  },
  data() {
    return {
      next_link: "",
      type: "all"
    };
  },
  methods: {
    typeClicked() {
      console.log("type=", this.type);
      this.next_link = "";
      this.$refs.container.innerHTML = "";
      this.load();
    },
    load() {
      axios
        .get(this.next_link ? this.next_link : "api/events/" + this.type)
        .then(({ data }) => {
          data.data.forEach((element, index) => {
            var EventClass = Vue.extend(EventComponent);
            var event = new EventClass({
              propsData: { data: element, pos: index }
            });
            event.$mount();
            this.$refs.container.appendChild(event.$el);
            event.$el.classList.add("animated", "zoomin");
            console.log(element);
          });

          //this.$refs.loadmore.href = data.next_page_url;
          if (data.next_page_url === null) {
            this.$refs.loadmore.style.display = "none";
          } else {
            this.next_link = data.next_page_url ? data.next_page_url : "";
          }
        });
    }
  },
  created() {
    this.load();
  }
};
</script>
