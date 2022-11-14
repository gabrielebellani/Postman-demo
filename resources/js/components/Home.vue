<template>
    <div>
        <div class="d-flex justify-content-center align-items-center">
            <router-link to="/about">About</router-link>


        </div>
        <div class="container">
            <div class="alert alert-danger" v-if="showError">

            </div>

            <div v-if="loading" class="text-center">
                Ottengo post...
            </div>
            <div v-else-if="posts.length===0" class="text-center">
                Non sono presenti post
            </div>
            <div class="row row-cols-4" v-else>
                <div class="col" v-for="(post, index) in posts">
                    <SinglePost :post="post"></SinglePost>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import SinglePost from "./SinglePost.vue";
import axios from "axios";
export default {
    name: "Home",
    components: {SinglePost},
    data() {
        return {
            showError: false,
            loading: true,
            posts: []
        }
    },
    async mounted() {
        this.posts = await this.getPosts();
    },
    methods: {
        async getPosts(){
            await axios.get('/api/posts/all').then((response)=> {
                if(response.status===200){
                    this.loading = false
                    this.posts = response.data
                }
            }).catch((e)=>{
                console.log(e)
                this.showError = true
            })
        }
    }
}
</script>

<style scoped>

</style>
