<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template scope="props">
            <tr>
                <td><a @click.prevent="$router.push('/jobs/' + props.item.id + '/edit')">RB{{props.item.id}}</a></td>
                <td>{{props.item.client}}</td>
                <td>{{props.item.project}}</td>
                <td>{{props.item.job_status}}</td>
                <td>{{props.item.order_type}}</td>
                <td>{{props.item.shipping_date}}</td>
                <td>{{props.item.payment}}</td>
                <td>{{props.item.parts_status}}</td>
                <td>{{props.item.qty_items}}</td>
                <td><text-field :value="props.item.notes"></text-field></td>
            </tr>
        </template>
    </data-viewer>
</template>
<script>
    import DataViewer from '../../components/DataViewer'
    import TextField from '../../components/TextField'

    export default {
        name: 'Jobs',
        data() {
            return {
                title: 'All Jobs',
                source: '/api',
                create: '/customer/create',
                thead: [
                    {title: 'Job #', key: 'id', sort: true},
                    {title: 'Client', key: 'client', sort: true},
                    {title: 'Project', key: 'project', sort: true},
                    {title: 'Job Status', key: 'job_status', sort: true},
                    {title: 'Order Type', key: 'order_type', sort: true},
                    {title: 'Shipping Date', key: 'shipping_date', sort: true},
                    {title: 'Payment', key: 'payment', sort: true},
                    {title: 'Parts Status', key: 'parts_status', sort: true},
                    {title: 'Qty Items', key: 'qty_items', sort: true},
                    {title: 'notes', key: 'notes', sort: true},
                ],
                filter: [
                    'id', 'client'
                ]
            }
        },
        components: {
            DataViewer,
            TextField
        }
    }
</script>