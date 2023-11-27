<template>
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded"
        :class="[color === 'light' ? 'bg-white' : 'bg-emerald-900 text-white']">
        <div class="block w-full overflow-x-auto">
            <!-- Projects table -->
            <table class="items-center w-full bg-transparent border-collapse">
                <thead>
                    <tr>
                        <th v-for="(todo, index) in header" :key="index"
                            class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            :class="[color === 'light' ? 'bg-blueGray-50 text-blueGray-500 border-blueGray-100' : 'bg-emerald-800 text-emerald-300 border-emerald-700']">
                            {{ todo }}
                        </th>
                    </tr>

                </thead>
                <tbody>
                    <tr v-for="todo in obj">
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            {{ todo.from }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            <i class="fas fa-circle text-emerald-500 mr-2"></i>
                            {{ todo.to }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                            <span class="mr-2">{{ parseFloat(todo.amount).toLocaleString('es-CO') }}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            obj: JSON.parse(this.dataJson)
        };
    },
    components: {},
    props: {
        header: Array,
        dataJson: Array,
        color: {
            default: "light",
        },
    },
};
</script>
