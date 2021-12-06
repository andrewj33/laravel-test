<template>
    <div class="container w-4/12 mx-auto space-y-6">
        <div class="rounded shadow-md p-2" v-for="post in posts" :key="post.id">
            <div class="text-md"><strong>{{post.name}}</strong></div>
            <div class="flex flex-row">
                <div class="text-sm align-bottom">Created {{post.created_at}} - Updated {{post.updated_at}}</div>
            </div>
            <div class="text-md">{{post.description}}</div>
        </div>    
    </div>
</template>
<script>
    const default_layout = "default";

    export default {
        name: 'Posts',
        props: {
            posts: {
                type: Array,
                required: true
            }
        }
    }
</script>




