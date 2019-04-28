<template>
    <div class="container">
    <h1>Welcome, {{$userName}}</h1>
        <div class="row justify-content-center">
            
                <div class="posts_container">
                    <div class="card" style="width: 18rem;" v-for="post in posts">
                    <img :src="post.image" class="card-img-top">
                    <div class="card-body">
                        <h2>Written by: <span style="color:orange;">{{post.user.name}} <span v-if="post.user_id == $userId" style="color:grey;font-size:20px;">(Your Post)</span></span></h2>
                        <h5 class="card-title">{{post.title}}</h5>
                        <p class="card-text">{{`${post.text.slice(0,160)}...`}}</p>
                        <router-link class="btn btn-primary"  :to="`/post/${post.id}/${post.user.name}`" exact>View Details</router-link>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                posts:[]
            }
        },
        created() {
            this.getLastPosts()
        },

        methods:  {
            async getLastPosts() {
                const { data }= await axios.get('/api/posts/getLast');
                this.posts = data;
            }
        },
    }
</script>
