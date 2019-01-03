<template>
    <div v-bind:class="defineColor">
        <div class="panel-heading">{{ title }}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props : [
            'title','color'
        ],
        computed:{
            defineColor : function(){
                return "panel " + (this.color || "panel-default");
            }
        }
    }
</script>

<style type="text/css">
    .panel-blue {
        border-color: #d6e9c6;
    }
    .panel-blue > .panel-heading {
        color: #f7f7f7;
        background-color: #0d4a96;
        border-color: #d6e9c6;
    }
</style>
