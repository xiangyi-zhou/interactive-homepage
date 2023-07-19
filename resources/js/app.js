require('./bootstrap');

import Homepage from './components/Homepage.vue';

const app = new Vue({
  el: '#app',
  components: {
    Homepage,
  },
});
