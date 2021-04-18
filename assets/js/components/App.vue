<template>
  <div>
    <h1>fasdas</h1>
    <ul class="list-unstyled">
      <li v-for="(answer,index) in answers" :key="index" class="mb-4">
        <div class="d-flex justify-content-center">
          <div class="mr-2 pt-2">
            <img src="/images/tisha.png" width="50" height="50">
          </div>
          <div class="mr-3 pt-2">
            {{ answer }}
            <p>-- Mallory</p>
          </div>
          <div id="counter">
            <div class="vote-arrows flex-fill pt-2 js-vote-arrows" style="min-width: 90px;">
              <a class="vote-up" href="#" data-direction="up" @click="vote('up')"><i class="far fa-arrow-alt-circle-up"></i></a>
              <a class="vote-down" href="#" data-diretction="down" @click="vote('down')"><i class="far fa-arrow-alt-circle-down"></i></a>
              <span>+ <span class="js-vote-total">{{ votes }}</span></span>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "App",
  // el: '#app',
  delimiters: ['${', '}'],
  props: {
    answers: {
      type: String | Array,
      required: false
    }
  },
  data() {
    return {
      counter: 10,
      votes: 6,
      // answers: []
    }
  },
  methods: {
    async vote(direction) {
      const response = await fetch('/comments/10/vote/' + direction, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json;charset=utf-8'
        }
      });

      response.json()
        .then((res) => {
          this.votes = res.votes
        }).catch((e) => {
        console.log(e)
      });
    }
  }
}
</script>

<style scoped>

</style>