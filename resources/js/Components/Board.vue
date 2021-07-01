<template>
  <div
    class="
      max-w-md
      mx-auto
      bg-white
      rounded-xl
      shadow-md
      overflow-hidx|den
      md:max-w-full
      mb-4
    "
  >
    <div class="md:flex">
      <div class="md:flex-shrink-0 md:w-1/4">
        <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1478098711619-5ab0b478d6e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=448&q=80" alt="A cat"
        />
      </div>
      <div class="md:w-3/4 p-8">
        <div class="flex justify-between">
          <h3 class="text-xl"><b>{{ board.title }}</b></h3>
          <tkudo-button> View </tkudo-button>
        </div>
        <div class="md:flex md:flex-wrap">
          <div class="md:w-1/2">
            <label><b>Created by</b></label>
            <p>{{ board.created_by }}</p>
          </div>
          <div class="md:w-1/2">
            <label><b>Recipient</b></label>
            <p>{{ board.recipient }}</p>
          </div>
          <div class="md:w-1/2">
            <label><b>Card received</b></label>
            <p>{{ board.card_received }}</p>
          </div>
          <div class="md:w-1/2">
            <label><b>Created at</b></label>
            <p>{{ board.created_at }}</p>
          </div>
          <div class="md:w-1/2">
            <label><b>status</b></label>
            <p>{{ board.status }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import TkudoButton from "@/Components/Button";

export default {
  components: {
    TkudoButton,
  },

  props: {
    board: {
      type: Object,
      required: true,
    },
  },
};
</script>