<template>
	<div class="form-group">
        <textarea class="form-control" @keyup="debounceMe" v-model="textdata"></textarea>
    </div>
</template>

<script>
	//import Vue from 'vue'
    //import axios from 'axios'

    export default {
        props: ['value'],
        data: function() {
        	return {
        		textdata: this.value
        	}
        },
        methods: {

			debounceMe: _.debounce(function() {
				this.saveMe();
			}, 700),

			noDebounce: function() {
		      this.saveMe();
		    },

		    saveMe: function() {
		      //app.saveme = 'saved';
		      console.log(this.textdata)
		      setTimeout(function() {
		        //app.saveme = '';
		      }, 700);
		    }

		}
    }
</script>