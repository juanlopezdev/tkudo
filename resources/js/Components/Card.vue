<template>
  <article class="bg-white mb-4 rounded-xl shadow-md">
    <img
      :src="card.image"
      :alt="`${card.id}-card-photo`"
      class="rounded-t-xl"
    />
    <div class="p-3">
      <div class="md:flex">
        <label class="md:w-1/2 mb-3"><b>Created by</b></label>
        <p class="md:w-1/2 mb-3">{{ card.user.name }}</p>
      </div>
      <div>
        <label class="mb-3"><b>Message</b></label>
        <p class="mb-3">
          <i>"{{ card.message }}"</i>
        </p>
      </div>
      <div class="border-t-2 border-gray-50 my-3"></div>
      <div class="md:flex justify-end items-center">
        <tkudo-icon-calendar class="mr-3" />
        <small>{{ card.created_at }}</small>
      </div>
    </div>
  </article>
</template>

<script>
import TkudoIconCalendar from "@/Components/Icons/Calendar";

export default {
  components: {
    TkudoIconCalendar,
  },

  props: {
    card: {
      type: Object,
      required: true,
    },
  },
};
</script>