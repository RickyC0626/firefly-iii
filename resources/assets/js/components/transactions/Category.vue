<!--
  - Category.vue
  - Copyright (c) 2019 james@firefly-iii.org
  -
  - This file is part of Firefly III (https://github.com/firefly-iii).
  -
  - This program is free software: you can redistribute it and/or modify
  - it under the terms of the GNU Affero General Public License as
  - published by the Free Software Foundation, either version 3 of the
  - License, or (at your option) any later version.
  -
  - This program is distributed in the hope that it will be useful,
  - but WITHOUT ANY WARRANTY; without even the implied warranty of
  - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  - GNU Affero General Public License for more details.
  -
  - You should have received a copy of the GNU Affero General Public License
  - along with this program.  If not, see <https://www.gnu.org/licenses/>.
  -->

<template>
  <div class="form-group" v-bind:class="{ 'has-error': hasError()}">
    <div class="col-sm-12 text-sm">
      {{ $t('firefly.category') }}
    </div>
    <div class="col-sm-12">
      <div class="input-group">
        <input
            spellcheck="false"
            ref="input"
            :value="value"
            autocomplete="off"
            class="form-control"
            data-role="input"
            name="category[]"
            type="text"
            v-bind:placeholder="$t('firefly.category')"
            v-bind:title="$t('firefly.category')"
            @input="handleInput"
            v-on:keypress="handleEnter"
            v-on:submit.prevent>
        <span class="input-group-btn">
            <button
                class="btn btn-default"
                type="button"
                v-on:click="clearCategory"><i class="fa fa-trash-o"></i></button>
        </span>
      </div>
      <typeahead
          v-model="name"
          :async-function="aSyncFunction"
          :open-on-empty=true
          :open-on-focus=true
          ref="typea"
          :target="target"
          item-key="name"
          v-on:input="selectedItem"
      >
        <template slot="item" slot-scope="props">
          <li v-for="(item, index) in props.items" :class="{active:props.activeIndex===index}">
            <a role="button" @click="props.select(item)">
              <span v-html="betterHighlight(item)"></span>
            </a>
          </li>
        </template>
      </typeahead>
      <ul v-for="error in this.error" class="list-unstyled">
        <li class="text-danger">{{ error }}</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Category",
  props: {
    value: String,
    inputName: String,
    error: Array,
    accountName: {
      type: String,
      default: ''
    },
  },
  data() {
    return {
      categoryAutoCompleteURI: null,
      name: null,
      target: null,
      acKey: null,
    }
  },
  ready() {
    this.name = this.accountName;
    this.acKey = 'name';
  },
  mounted() {
    this.target = this.$refs.input;
    this.categoryAutoCompleteURI = document.getElementsByTagName('base')[0].href + "api/v1/autocomplete/categories?query=";
  },
  methods: {
    hasError: function () {
      return this.error.length > 0;
    },
    betterHighlight: function (item) {
      var inputValue = this.$refs.input.value.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, '\\$&');
      var escapedName = this.escapeHtml(item.name);
      return escapedName.replace(new RegExp(("" + inputValue), 'i'), '<b>$&</b>');
    },
    aSyncFunction: function (query, done) {
      axios.get(this.categoryAutoCompleteURI + query)
          .then(res => {
            done(res.data);
          })
          .catch(err => {
            // any error handler
          })
    },
    escapeHtml: function (string) {

      let entityMap = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#39;',
        '/': '&#x2F;',
        '`': '&#x60;',
        '=': '&#x3D;'
      };

      return String(string).replace(/[&<>"'`=\/]/g, function fromEntityMap(s) {
        return entityMap[s];
      });

    },

    handleInput(e) {
      if (typeof this.$refs.input.value === 'string') {
        this.$emit('input', this.$refs.input.value);
        return;
      }
      this.$emit('input', this.$refs.input.value.name);

    },
    clearCategory: function () {
      //props.value = '';
      this.name = '';
      this.$refs.input.value = '';
      this.$emit('input', this.$refs.input.value);
      // some event?
      this.$emit('clear:category')
    },
    selectedItem: function (e) {
      if (typeof this.name === 'undefined') {
        return;
      }
      // emit the fact that the user selected a type of account
      // (influencing the destination)
      this.$emit('select:category', this.name);

      if (typeof this.name === 'string') {
        this.$emit('input', this.name);
        return;
      }
      this.$emit('input', this.name.name);
    },
    handleEnter: function (e) {
// See reference nr. 1
      if (e.keyCode === 13) {
        //e.preventDefault();
      }
    }
  }
}
</script>
