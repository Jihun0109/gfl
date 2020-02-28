<template>
  <div class="row d-flex">
    <div class="col-12 col-sm-6" v-bind:class="{'order-2': flag, 'pl-0': flag, 'pr-0':!flag}">
      <div class="col-12" style="padding:0;">
        <img class="product-image" v-bind:src="'../storage/' + object['image']" alt />
      </div>
    </div>    
    <div class="col-12 col-sm-6 pl-4" v-bind:class="{'pl-5': flag, 'pr-4': !flag}">
      <h3 class="my-3">{{data.title}}</h3>
      <div v-html="data.description"> </div>
      <div class="col-md-6">
          <a v-bind:href="'events/detail/' + data.id" type="button " class="btn btn-block btn-outline-danger">Read More</a>
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
    this.flag = this.pos%2 == 1;
    if (window.innerWidth < 576)
        this.flag = false;
    console.log(this.flag);
  },
  data() {
    return {
      object: {},
      flag: false,
    };
  }
};
</script>

<style lang="scss" scoped>
.test {
    background-color:  red;
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


</style>