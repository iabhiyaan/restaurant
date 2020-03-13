<template>
  <div class="section">
    <div class="table table-hover table-striped">
      <thead>
        <tr>
          <th>Name &amp; description</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item,i) in items" :key="i">
          <td>
            <strong>{{ item.name }}</strong>
            <p>{{item.description }}</p>
          </td>
          <td>
            <span>{{ item.price }}</span>
          </td>
        </tr>
      </tbody>
    </div>
  </div>
</template>

<script>
export default {
  props: ["items"]
};
</script>

<style>
</style>
