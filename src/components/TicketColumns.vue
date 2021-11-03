<template>
  <div id="content">
    <div class="column-block"> <!--  id="backlog-block" -->
      <div class="column-block-content">
        <h1 class="title">Backlog</h1>
          <div style="display: grid;">
            <span v-for="(ticket, id) in tickets" :key="id" :style="{order: ticket.position}">
              <div class="card" v-if="ticket.column == 0" v-bind:class="ticket.color" >
                <div class="card-content">
                  <h4>{{ ticket.title }}</h4>
                  <p>{{ ticket.content }}</p>
                  <span v-if="ticket.badges.length > 0" class="badge-container">
                    <span class="badge" v-for="badge in ticket.badges" :key="badge" >{{ badge.title }}</span>
                  </span>
                </div>
              </div>
            </span>
          </div>
      </div>
    </div>

    <div class="column-block"> <!--  id="to-do-block" -->
      <div class="column-block-content">
        <h1 class="title">To do</h1>
        <div style="display: grid;">
          <span v-for="(ticket, id) in tickets" :key="id" :style="{order: ticket.position}">
            <div class="card" v-if="ticket.column == 1" v-bind:class="ticket.color" >
              <div class="card-content">
                <h4>{{ ticket.title }}</h4>
                <p>{{ ticket.content }}</p>
                <span v-if="ticket.badges.length > 0" class="badge-container">
                  <span class="badge" v-for="badge in ticket.badges" :key="badge" >{{ badge.title }}</span>
                </span>
              </div>
            </div>
          </span>
        </div>
      </div>
    </div>

    <div class="column-block"> <!-- id="in-progress-block" -->
      <div class="column-block-content">
        <h1 class="title">In progress</h1>
        <div style="display: grid;">
          <span v-for="(ticket, id) in tickets" :key="id" :style="{order: ticket.position}">
            <div class="card" v-if="ticket.column == 2" v-bind:class="ticket.color" >
              <div class="card-content">
                <h4>{{ ticket.title }}</h4>
                <p>{{ ticket.content }}</p>
                <span v-if="ticket.badges.length > 0" class="badge-container">
                  <span class="badge" v-for="badge in ticket.badges" :key="badge" >{{ badge.title }}</span>
                </span>
              </div>
            </div>
          </span>
        </div>
      </div>
    </div>

    <div class="column-block"> <!-- id="designed-block" -->
      <div class="column-block-content">
        <h1 class="title">Designed</h1>
        <div style="display: grid;">
          <span v-for="(ticket, id) in tickets" :key="id" :style="{order: ticket.position}">
            <div class="card" v-if="ticket.column == 3" v-bind:class="ticket.color" >
              <div class="card-content">
                <h4>{{ ticket.title }}</h4>
                <p>{{ ticket.content }}</p>
                <span v-if="ticket.badges.length > 0" class="badge-container">
                  <span class="badge" v-for="badge in ticket.badges" :key="badge" >{{ badge.title }}</span>
                </span>
              </div>
            </div>
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['tickets']
}

</script>

<style scoped>

#content {
  display: flex;
  justify-content: space-between;
  margin-top: 3%;
  align-items: flex-start;
  flex-wrap: wrap;
}

.column-block {
  background-color: #262626;
  display: table;
  flex-basis: 24%;
  border-radius: 10px;
}

.column-block-content {
  margin: 6%;
}

.column-block-content > h1 {
  margin-top: 13%;
}

.column-block-content:first-child {
  margin-top: -4%;
}

.card {
  font-family: "SF-ProDisplay-light";
  font-size: 14px;
  width: 100%;
  margin-top: 4%;
  border-radius: 10px;
  display: table;
}

.card-content {
  margin: 8%;
}

p {
  font-family: "SF-ProDisplay-thin";
  margin-top: -5%;
  font-size: 13px;
  opacity: 0.9;
}

.badge-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  gap: 10px;
}

.badge {
  font-family: "SF-ProDisplay-ultra-light";
  background-color: transparent;
  outline: none;
  border: 1px solid #DADBF3;
  color: white;
  opacity: 0.9;
  border-radius: 2px;
  padding: 3px;
  padding-left: 7px;
  padding-right: 7px;
}

.pink {
  background-color: #C340A1;
}

.purple {
  background-color: #6A6DCD;
}

.red {
  background-color: #D93535;
}

.blue {
  background-color: #307FE2;
}

.green {
  background-color: #00A88B;
}


</style>