<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <card-component>
          <template slot="title">My menu items</template>
          <template slot="main">
            <div class="section">
              <multiselect v-model="category" :options="categories"></multiselect>
            </div>
            <menu-group :items="currentMenuItems"></menu-group>
          </template>
        </card-component>
      </div>
      <div class="col-md-4">
        <card-component>
          <template slot="title">Add menu items</template>
          <template slot="body">Form will come here</template>
        </card-component>
      </div>
    </div>
  </div>
</template>

<script>
import _ from "lodash";
import Multiselect from "vue-multiselect";
import MenuGroup from "./MenuGroups.vue";
export default {
  props: ["items"],
  components: {
    Multiselect,
    MenuGroup
  },
  created() {
    _.forEach(this.items, (item, key) => {
      this.categories.push(key);
    });
  },
  data() {
    return {
      category: null,
      categories: []
    };
  },
  computed: {
    currentMenuItems() {
      return this.items[this.category];
    }
  }
};
</script>

<style>
</style>
