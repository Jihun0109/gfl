<template>
  <div class="row d-flex">
    <div class="col-12 col-sm-6" v-bind:class="{'order-2': flag, 'pl-0': flag, 'pr-0':!flag}">
      <div class="col-12 view overlay zoom" style="padding:0;">
        <a v-bind:href="detail_url" style="z-index:5;">
          <img class="product-image" v-bind:src="'../storage/' + object['image']" alt />
        </a>
        <div class="mask justify-content-center" style="background-color: rgba(244,67,54,0.6);">
          <!-- <p class="text-white row align-items-center">Detail</p> -->
          <a v-bind:href="detail_url" style="position: absolute;width:100%; height:100%"></a>
        </div>
      </div>
    </div>
    <div
      class="col-12 col-sm-6 pl-4 d-flex flex-column"
      v-bind:class="{'pl-5': flag, 'pr-4': !flag}"
    >
      <a class="nav-item" v-bind:href="detail_url" style="text-decoration:none;color:#555;">
        <div style="height:100%">
          <h3 class="mt-3">
            <b>{{data.title}}</b>
          </h3>
          <span class="mb-3">{{data.start_date}}</span>
          <!-- <div v-html="data.description | truncate(300, '...')"> </div> -->
          <h5 class="pt-3">{{data.description | truncate(300, '...')}}</h5>
        </div>
      </a>
      <div class="p-4 text-center">
        <a
          v-bind:href="detail_url"
          type="button "
          class="btn btn-default"
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