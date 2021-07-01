<template>
  <breeze-authenticated-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{board.title}}
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <!-- @start Cards -->
            kkkk
            <!-- @end Cards -->
          </div>
        </div>
      </div>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";

export default {
  components: {
    BreezeAuthenticatedLayout
  },
  data() {
    return {
      board: {
        title: 'Mi kudo de ejemplo',
        created_by: 'Juan Lopez',
        recipient: 'Daniel Gallardo',
        card_received: 4,
        created_at: '2021-10-11',
        status: 'Entregado'
      }
    }
  }
};
</script>
