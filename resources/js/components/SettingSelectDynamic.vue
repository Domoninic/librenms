<!--
  - SettingSelect2.vue
  -
  - Description-
  -
  - This program is free software: you can redistribute it and/or modify
  - it under the terms of the GNU General Public License as published by
  - the Free Software Foundation, either version 3 of the License, or
  - (at your option) any later version.
  -
  - This program is distributed in the hope that it will be useful,
  - but WITHOUT ANY WARRANTY; without even the implied warranty of
  - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  - GNU General Public License for more details.
  -
  - You should have received a copy of the GNU General Public License
  - along with this program.  If not, see <http://www.gnu.org/licenses/>.
  -
  - @package    LibreNMS
  - @link       http://librenms.org
  - @copyright  2021 Tony Murray
  - @author     Tony Murray <murraytony@gmail.com>
  -->

<template>
    <div>
        <librenms-select class="form-control"
                :value="value"
                :route-name="'ajax.select.' + this.options.target"
                :placeholder="this.options.placeholder"
                :allow-clear="this.options.allowClear"
                :required="required"
                :disabled="disabled"
                @change="$emit('change', $event)"
        >
        </librenms-select>
    </div>
</template>

<script>
import BaseSetting from "./BaseSetting.vue";
import LibrenmsSelect from "./LibrenmsSelect.vue";

export default {
    name: "SettingSelectDynamic",
    components: {LibrenmsSelect},
    mixins: [BaseSetting]
}
</script>

<style scoped>

</style>
