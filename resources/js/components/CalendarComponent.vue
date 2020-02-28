<template>
  <div class="container">
    <div class="text-center">
      <div>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-outline-danger btn-lg active">
            <input type="radio" name="options" id="option1" autocomplete="off" checked /> All
          </label>
          <label class="btn btn-outline-danger btn-lg">
            <input type="radio" name="options" id="option2" autocomplete="off" /> Hong Kong
          </label>
          <label class="btn btn-outline-danger btn-lg">
            <input type="radio" name="options" id="option3" autocomplete="off" /> Outside Hong Kong
          </label>
        </div>
      </div>
    </div>
    <div class="row pt-4">
      <div class="col-md-6 pr-5">
        <v-date-picker is-inline ref="calendar" :attributes="attrs" is-expanded color="red" v-model='selectedDate'></v-date-picker>
      </div>
      <div class="col md-6 pl-5">
        <h2>Upcoming Events</h2>
        <div style="height: 235px; overflow: auto;">
          <div class="event-item">
            <a href="#">
              <div class="event-date">
                  <div>
                      <div class="event-days">23-56</div>
                      <div class="event-days">23-56</div>
                  </div>
              </div>
              <div class="event-detail">
                  <div class="event-info"><b>Italy |</b> 29.02.2020 - 02-03.2020 </div>
                  <div class="event-title">MIDO - International Optics, Optometry and Ophthalmology Exhibition, Milan</div>
              </div>
            </a>
          </div>
          
        </div>
      </div>
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
        selectedDate: new Date(),
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
  }
};
</script>

<style lang="scss">
.high-light-hongkong {
  background-color: #ff6666;
  border-radius: 50% !important;
  // border-width: 1px;
  // border-style: solid;
  // opacity: 0.8;
}
.high-light-oversea {
  background-color: #214592;
  border-radius: 50% !important;
  // border-width: 1px;
  // border-style: solid;
  // opacity: 0.8;
}

.high-light {
  background-color: red;
  border-radius: 10px;
  opacity: 0.2;
}

.event-item a{
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
    background: #fb5004;
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
