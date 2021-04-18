/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

import Vue from 'vue';

// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.css';

// start the Stimulus application
// import './bootstrap';

import App from './components/App';

const mountEl = document.querySelector('#app');

new Vue({
  render: createElement => {
    const context = {
      props: { answers: JSON.parse(mountEl.attributes['answers'].value) },
    };
    return createElement(App, context);
  }
}).$mount('#app');
