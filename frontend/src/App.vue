<template>

    <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" />
    <div class="wrapper">
      <h2>Графики по эмоциональному состоянию</h2>
      <button @click="getUsers" class="b-t">Генерировать</button>
      <EmoChart :show="show" />
    </div>
</template>



<script setup>
import EmoChart from "@/components/EmoChart.vue";
import { ref} from "vue";

const show = ref(false);
function getUsers() {
  console.log("click", show.value);
  show.value = !show.value;
}
</script>



<style scoped>
header {
  line-height: 1.5;
  max-height: 100vh;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}


</style>
