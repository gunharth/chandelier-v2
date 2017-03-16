<template>
	<tr>
	    <td><a @click.prevent="$router.push('/jobs/' + props.item.id + '/edit')">RB{{props.item.id}}</a></td>
	    <td>{{props.item.client}}</td>
	    <td><input-field @saveChanges="delaySave" v-model="project" field-name="project"></input-field></td>
	    <td>{{props.item.job_status}}</td>
	    <td>{{props.item.order_type}}</td>
	    <td>{{props.item.shipping_date}}</td>
	    <td>{{props.item.payment}}</td>
	    <td>{{props.item.parts_status}}</td>
	    <td>{{props.item.qty_items}}</td>
	    <td><text-field @saveChanges="delaySave" v-model="notes" field-name="notes"></text-field></td>
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
        		id: this.props.item.id,
        		project: this.props.item.project,
        		notes: this.props.item.notes,
        	}
        },
        methods: {

			delaySave: _.debounce(function(name,value) {
				this.$data[name] = value;
				this.save();
			}, 700),

			noDebounce: function() {
		      this.save();
		    },

		    save: function() {

					axios.post('/api/jobs/'+this.id,this.$data)
                    .then(function(response) {
                        if(response.data.saved) {
                            vm.$router.push(vm.redirect)
                        }
                    })
                    .catch(function(error) {
                        Vue.set(vm.$data, 'errors', error.response.data)
                    })


		      //app.saveme = 'saved';
		      //console.log(JSON.stringify(this.$data))
		      //console.log('called paretnt')
		     // setTimeout(function() {
		        //app.saveme = '';
		      //}, 700);
		    }

		},
        components: {
            TextField,
            InputField
        }
    }
</script>