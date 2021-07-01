<template>
  <breeze-authenticated-layout>
    <template #header>
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ board.title }}
        </h2>

        <inertia-link
          :href="route('boards.create')"
          class="btn-primary btn-primary--success"
        >
          Add Card
        </inertia-link>
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div
            class="p-6 bg-white border-b border-gray-200 grid grid-cols-4 gap-4"
          >
            <tkudo-card :card="card"></tkudo-card>
            <tkudo-card :card="card"></tkudo-card>
            <tkudo-card :card="card"></tkudo-card>
            <tkudo-card :card="card"></tkudo-card>
            <tkudo-card :card="card"></tkudo-card>
            <tkudo-card :card="card"></tkudo-card>
            <tkudo-card :card="card"></tkudo-card>
            <tkudo-card :card="card"></tkudo-card>
          </div>
        </div>
      </div>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import TkudoCard from "@/Components/Card";

export default {
  components: {
    BreezeAuthenticatedLayout,
    TkudoCard,
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
      card: {
        id: 1,
        image: "https://picsum.photos/640/400/?random",
        user: {
          name: "Juan Lopez",
        },
        message: "Hola amigo espero lo hayas pasado de refurifunflay",
        created_at: "2020-10-20 12:00:10",
      },
    };
  },
};
</script>
