<template>
  <div id="app">
    <TicketColumns
      v-bind:tickets="tickets"
    />
  </div>
</template>

<script>
import './assets/style/stylesheet.css'
import TicketColumns from './components/TicketColumns.vue'
import axios from 'axios'
export default {
  name: 'App',
  data: function() {
    return {
      tickets: [],
      url: {
        tickets: 'http://127.0.0.1:8000/api/tickets',
      }
    }
  },
  created: function () {
    axios.get(this.url.tickets).then((response) =>{
      console.log(response)
      this.tickets = response.data.data
    })
  },
  components: {
    TicketColumns
  }
}
</script>
