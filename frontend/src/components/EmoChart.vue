
<template>

  <div v-if="show">

    <Bar  v-if="data[0]" v-bind:data="data[0]" :options="options" />
    <Bar  v-if="data[1]" v-bind:data="data[1]" :options="options" />
    <Bar  v-if="data[2]" v-bind:data="data[2]" :options="options" />
    <Bar  v-if="data[3]" v-bind:data="data[3]" :options="options" />
  </div>

</template>

<script setup>
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale
} from 'chart.js'


import {Bar} from 'vue-chartjs'
import {onMounted, ref} from "vue";
ChartJS.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend)


defineProps({
  show: Boolean
})

let data = ref([
]);
let options = {
  responsive: true
}

const getUsersApi = async () => {
  try {
    const uri = "http://localhost:8000/api/users/all"
    const res = await fetch(uri);
    return await res.json();

  } catch(error) {
    console.error(error);
  }

}


function handleUsers (users) {
  let result = [];
  const colors = ["red","green","blue","orange", "yellow"];
  for(let selection in users) {
    let dataset = [];
    let index = 0;
    if(selection === "best") {
      for (let property in users[selection]["e_i"]) {
        dataset = [...dataset,{
          data:  users[selection]["e_i"][property],
          label: [users[selection]["name"][property]],
          backgroundColor: colors[index]
        }];
        index++;

      }
    } else {
      for (let property in users[selection]) {
        dataset = [...dataset,{
          data:  users[selection][property],
          label: property,
          backgroundColor: colors[index]
        }];
        index++;
      }
    }

    let content = {
      labels: ['Низкий', 'Ниже Среднего', 'Средний', "Выше среднего", "Высокий"],
      datasets: dataset,
    };
    result = [...result, content]
  }
  return result;

}

function getGenderUsers() {
  getUsersApi().then(result => data.value = handleUsers(result)).catch(error => console.log(error));
}
onMounted(() => getGenderUsers());
getGenderUsers()

</script>


