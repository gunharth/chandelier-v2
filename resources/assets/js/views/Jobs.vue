<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template scope="props">
            <tr @click="$router.push('/jobs/' + props.item.id)">
                <td>{{props.item.id}}</td>
                <td>{{props.item.client}}</td>
                <td>{{props.item.client_ref}}</td>
                <td>{{props.item.job_status}}</td>
                <td>{{props.item.order_type}}</td>
                <td>{{props.item.shipping_date}}</td>
                <td>{{props.item.shipping_notes}}</td>
                <td>{{props.item.parts_status}}</td>
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
                    {title: 'client_ref', key: 'client_ref', sort: true},
                    {title: 'job_status', key: 'job_status', sort: true},
                    {title: 'order_type', key: 'order_type', sort: true},
                    {title: 'shipping_date', key: 'shipping_date', sort: true},
                    {title: 'shipping_notes', key: 'shipping_notes', sort: true},
                    {title: 'parts_status', key: 'parts_status', sort: true},
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