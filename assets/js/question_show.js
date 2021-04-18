const Counter = {
  el: '#app-answers',
  delimiters: ['${', '}'],
  props: {
    dataAnswers: {
      type: Array,
      required: true
    }
  },
  data() {
    return {
      counter: 10,
      votes: 6,
      answers: []
    }
  },
  mounted() {
    this.answers = JSON.parse(this.$el.attributes['answers'].value)
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

Vue.createApp(Counter).mount('#app-answers')