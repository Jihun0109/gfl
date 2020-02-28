<template>
  <div class="row d-flex">
    <div class="col-12 col-sm-6" v-bind:class="{'order-2': flag, 'pl-0': flag, 'pr-0':!flag}">
      <div class="col-12" style="padding:0;">
        <a v-bind:href="detail_url">
          <img class="product-image" v-bind:src="'../storage/' + object['image']" alt />
        </a>
      </div>
    </div>
    <div
      class="col-12 col-sm-6 pl-4 d-flex flex-column"
      v-bind:class="{'pl-5': flag, 'pr-4': !flag}"
    >
      <div style="height:100%">
        <h3 class="my-3">
          <b>{{data.title}}</b>
        </h3>
        <small>{{data.start_date}}</small>
        <!-- <div v-html="data.description | truncate(300, '...')"> </div> -->
        <div class>{{data.description | truncate(300, '...')}}</div>
      </div>
      <div class="pb-4">
        <a
          v-bind:href="detail_url"
          type="button "
          class="btn btn-sm btn-primary"
          style="bottom: 20px;"
        >Read More</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data", "pos"],
  mounted() {
    console.log("EVent Item", this.pos);
    this.object = this.data;
    this.flag = this.pos % 2 == 1;
    if (window.innerWidth < 576) this.flag = false;
    console.log(this.object.type);
    if (this.object.type === "webbinary")
      this.detail_url = "events/detail/" + this.data.id;
    else if (this.object.type === "event")
      this.detail_url = "events/detail/" + this.data.id;
  },
  data() {
    return {
      object: {},
      flag: false,
      detail_url: ""
    };
  }
};
</script>

<style lang="scss" scoped>
.test {
  background-color: red;
}
.event-holder {
  display: flex;
  flex-direction: column;
  // margin: 0 0 30px;
  text-align: left;
  animation: addPosts linear 0.3s;
  animation-iteration-count: 1;
  min-height: 255px;
  padding: 0;
}
.event-holder .img-holder {
  background-color: #008480;
  background-position: top left;
  background-size: cover;
  transition: background 0.3s;
  background-attachment: scroll;
  min-height: 255px;
  height: 100%;
  width: 100%;
  padding: 0;
  position: relative;
}
.event-holder .img-holder img {
  width: 100%;
}

.event-holder .text-holder {
  padding: 0;
}

.detail-link {
  text-transform: none;
  display: inline-block;
  width: auto;
  font-weight: 400;
  letter-spacing: 0;
  font-size: 14px;
  border: none;
  border-radius: 50px;
  margin: 10px 0 0;
  background-color: red;
}
</style>