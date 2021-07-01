<template>
  <breeze-authenticated-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Add new card
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden px-6 py-4 shadow-sm sm:rounded-lg">
          <form @submit.prevent="submit">
            <div class="mb-4">
              <tkudo-label for="image" value="Image" />
              <tkudo-input-file
                id="image"
                type="file"
                class="mt-1 block w-full"
                v-model="form.image"
                accept="image/png, image/jpeg"
                autofocus
              />
            </div>
            <div class="mb-4">
              <tkudo-label for="message" value="Message" />
              <tkudo-input
                id="message"
                type="text"
                class="mt-1 block w-full"
                v-model="form.message"
                required
                autofocus
                autocomplete="message"
              />
            </div>
            <tkudo-button
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Send
            </tkudo-button>
          </form>
        </div>
      </div>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated";
import TkudoButton from "@/Components/Button";
import TkudoInput from "@/Components/Input";
import TkudoInputFile from "@/Components/InputFile";
import TkudoLabel from "@/Components/Label";

export default {
  components: {
    BreezeAuthenticatedLayout,
    TkudoButton,
    TkudoInput,
    TkudoInputFile,
    TkudoLabel,
  },
  data() {
    return {
      form: this.$inertia.form({
        message: "",
        image: "",
      }),
    };
  },
};
</script>
