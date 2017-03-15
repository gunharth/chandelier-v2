<template>
	<tr>
	    <td><a @click.prevent="$router.push('/jobs/' + props.item.id + '/edit')">RB{{props.item.id}}</a></td>
	    <td>{{props.item.client}}</td>
	    <td><input-field @saveChanges="debounceMe" v-model="textdata"></input-field></td>
	    <td>{{props.item.job_status}}</td>
	    <td>{{props.item.order_type}}</td>
	    <td>{{props.item.shipping_date}}</td>
	    <td>{{props.item.payment}}</td>
	    <td>{{props.item.parts_status}}</td>
	    <td>{{props.item.qty_items}}</td>
	    <td><text-field :value="props.item.notes"></text-field></td>
	</tr>
</template>

<script>
	//import Vue from 'vue'
    //import axios from 'axios'
    import TextField from './TextField'
    import InputField from './InputField'

    export default {
        props: ['props'],
        data: function() {
        	return {
        		textdata: this.props.item.project
        	}
        },
        methods: {

			debounceMe: _.debounce(function(data) {
				this.textdata = data;
				this.saveMe();
			}, 700),

			noDebounce: function() {
		      this.saveMe();
		    },

		    saveMe: function() {
		      //app.saveme = 'saved';
		      console.log(this.textdata)
		      console.log('called paretnt')
		      setTimeout(function() {
		        //app.saveme = '';
		      }, 700);
		    }

		},
        components: {
            TextField,
            InputField
        }
    }
</script>