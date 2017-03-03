<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template scope="props">
            <tr @click="$router.push('/customer/' + props.item.id)">
                <td>{{props.item.id}}</td>
                <td>{{props.item.client}}</td>
            </tr>
        </template>
    </data-viewer>
</template>
<script>
    import DataViewer from '../components/DataViewer.vue'

    export default {
        name: 'Jobs',
        data() {
            return {
                title: 'Jobs',
                source: '/api',
                create: '/customer/create',
                thead: [
                    {title: 'ID', key: 'id', sort: true},
                    {title: 'Client', key: 'client', sort: true},
                ],
                filter: [
                    'id', 'client'
                ]
            }
        },
        components: {
            DataViewer
        }
    }
</script>