<template>
  <div class="container">
    <div class="text-center">
      <div>
        <div
          class="btn-group btn-group-toggle my-5"
          data-aos="zoom-in-up"
          data-aos-delay="100"
          data-aos-duration="800"
        >
          <label
            for="all"
            class="btn btn-outline-danger btn-lg"
            v-bind:class="{active: region=='all'}"
          >
            <input type="radio" value="all" id="all" v-model="region" v-on:change="regionClicked" />
            All
          </label>
          <label
            for="hongkong"
            class="btn btn-outline-danger btn-lg"
            v-bind:class="{active: region=='hongkong'}"
          >
            <input
              type="radio"
              value="hongkong"
              id="hongkong"
              v-model="region"
              v-on:change="regionClicked"
            />
            Hong Kong
          </label>
          <label
            for="other"
            class="btn btn-outline-danger btn-lg"
            v-bind:class="{active: region=='other'}"
          >
            <input
              type="radio"
              value="other"
              id="other"
              v-model="region"
              v-on:change="regionClicked"
            />
            Outside Hong Kong
          </label>
        </div>
      </div>
    </div>
    <div class="row pt-4 mb-4">
      <div class="col-md-6 pr-5" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="800">
        <v-date-picker
          is-inline
          ref="calendar"
          :attributes="attrs"
          is-expanded
          v-model="selectedDate"
          :min-date="new Date()"
          @dayclick="selectDay"
        ></v-date-picker>
      </div>
      <div
        class="col md-6 pl-5 mt-4 mt-md-0"
        data-aos="zoom-in-up"
        data-aos-delay="100"
        data-aos-duration="800"
      >
        <h2>Upcoming Events</h2>
        <div style="height: 235px; overflow: auto;">
          <div
            v-for="event in upcomings"
            :key="event.id"
            class="event-item"
            v-bind:id="'event-' + event.id"
          >
            <a v-bind:href="'events/detail/' + event.id">
              <div v-bind:class="{'high-light-oversea': !event.hongkong}" class="event-date">
                <div>
                  <div class="event-days">
                    {{ event.start_day }}-{{
                    event.end_day
                    }}
                  </div>
                  <div class="event-days">{{ event.month }}</div>
                </div>
              </div>
              <div class="event-detail">
                <div class="event-info">
                  <b>{{ event.country }} |</b>
                  {{ event.start_date }} -
                  {{ event.end_date }}
                </div>
                <div class="event-title">{{ event.title }}</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="justify-content-center row">
      <div class="high-light-hongkong rounded-circle mt-2 mr-3" style="width: 8px; height: 8px;"></div>Hong Kong
      <div class="high-light-oversea rounded-circle mt-2 mx-3" style="width: 8px; height: 8px;"></div>Outside Hong Kong
    </div>
  </div>
</template>

<script>
import VCalendar from "v-calendar";
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      region: "all",
      upcomings: {},
      selectedDate: "",
      attrs: [
        {
          dot: {
            class: "high-light-hongkong"
          },
          dates: new Date()
        },
        {
          dot: {
            class: "high-light-oversea"
          },
          dates: new Date()
        },
        {
          highlight: {
            class: "high-light"
          },
          dates: new Date()
        }
      ]
    };
  },
  created() {
    this.loadUpcoming();
  },
  methods: {
    selectDay(obj) {
      console.log("selectDay", obj);
      if (
        obj.attributes &&
        obj.attributes.length &&
        obj.attributes[0].customData
      ) {
        let event_id = obj.attributes[0].customData.id;
        console.log(event_id);
        let element = document.getElementById("event-" + event_id);
        //element.scrollIntoView();
        element.parentNode.scrollTop = element.offsetTop;
      }
    },
    regionClicked() {
      console.log(this.region);
      this.loadUpcoming();
    },
    loadUpcoming() {
      axios.get("api/upcoming/" + this.region).then(({ data }) => {
        console.log(data);
        this.upcomings = data;
        this.attrs = [];
        for (let i = 0; i < data.length; i++) {
          let event = data[i];
          let start_date = new Date(event.start_date);
          let end_date = event.end_date ? new Date(event.end_date) : start_date;

          let dot = {
            dot: {
              class: event.hongkong
                ? "high-light-hongkong"
                : "high-light-oversea"
            },
            dates: start_date,
            event: event.id
          };

          if (event.end_date) {
            for (
              let d = start_date;
              d <= end_date;
              d.setDate(d.getDate() + 1)
            ) {
              let dot = {
                dot: {
                  class: event.hongkong
                    ? "high-light-hongkong"
                    : "high-light-oversea"
                },
                dates: new Date(d),
                customData: event
              };
              this.attrs.push(dot);
            }
          } else this.attrs.push(dot);
        }
      });
    }
  }
};
</script>

<style lang="scss">
.high-light-hongkong {
  background-color: #e3342f !important;
  //border-radius: 50% !important;
  // border-width: 1px;
  // border-style: solid;
  // opacity: 0.8;
}
.high-light-oversea {
  background-color: #214592 !important;
  //border-radius: 50% !important;
  // border-width: 1px;
  // border-style: solid;
  // opacity: 0.8;
}

.high-light {
  //background-color: red;
  //border-radius: 10px;
  //opacity: 0.2;
}

.event-item a {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  -webkit-align-content: center;
  align-content: center;
  -webkit-align-items: center;
  align-items: center;
  padding: 10px 20px 10px 0;
  color: #1a1a1a;
  text-decoration: none;
}

.event-item .event-date {
  width: 60px;
  height: 60px;
  color: #fff;
  background: #e3342f;
  text-align: center;
  -webkit-flex: 0 0 auto;
  flex: 0 0 auto;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-align-content: center;
  align-content: center;
  -webkit-align-items: center;
  align-items: center;
  margin-right: 15px;
}

.event-item .event-date .days {
  display: block;
}

.event-item .details {
  width: 100%;
}

.event-item .details .info {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: flex-start;
  justify-content: flex-start;
  -webkit-align-content: center;
  align-content: center;
  -webkit-align-items: center;
  align-items: center;
  margin-bottom: 5px;
}

.event-item .details .title {
}
</style>
