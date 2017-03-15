<template>
	<div class="form-group">
        <input class="form-control" @keyup="sendChangeRequest" v-model="textdata">
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
        	sendChangeRequest() {
        		this.$emit('saveChanges', this.textdata);
        	}
        }
    }
</script>