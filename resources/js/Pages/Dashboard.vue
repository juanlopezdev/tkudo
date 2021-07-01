<template>
  <breeze-authenticated-layout>
    <template #header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Dashboard
        </h2>

        <inertia-link
          :href="route('boards.create')"
          class="btn-primary btn-primary--success"
        >
          New Board
        </inertia-link>
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <!-- @start Boards -->
            <tkudo-board :board="board"></tkudo-board>
            <tkudo-board :board="board"></tkudo-board>
            <tkudo-board :board="board"></tkudo-board>
            <tkudo-board :board="board"></tkudo-board>
            <!-- @end Boards -->
          </div>
        </div>
      </div>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import TkudoButton from "@/Components/Button";
import TkudoBoard from "@/Components/Board";

export default {
  components: {
    BreezeAuthenticatedLayout,
    TkudoBoard,
    TkudoButton,
  },
  data() {
    return {
      board: {
        title: "Mi kudo de ejemplo",
        created_by: "Juan Lopez",
        recipient: "Daniel Gallardo",
        card_received: 4,
        created_at: "2021-10-11",
        status: "Entregado",
      },
    };
  },
};
</script>
