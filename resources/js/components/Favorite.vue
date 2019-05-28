<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(post)">
            <font-awesome-icon   :icon="['fas', 'heart']"/>
        </a>
        <a href="#" v-else @click.prevent="favorite(post)">
            <font-awesome-icon  :icon="['far', 'heart']" />
        </a>
    </span>
</template>
<script>
    export default{
        props : ['post', 'favorited'],

        data: function () {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = !!this.isFavorite;
        },

        computed: {
            isFavorite() {
                return this.favorited
            },
        },

        methods: {
            favorite(post){
                axios.post('/favorite/'+post)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(post){
                axios.post('/unfavorite/'+post)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>
