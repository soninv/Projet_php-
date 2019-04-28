<template>
    <div class="container">
        <div class="row justify-content-center">
          <h1 class="display-3">Economics posts</h1>
          <router-link class="btn btn-info btn-create-post align-self-center"  to="/create/post/economics" exact>Create Post</router-link>
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

import getPostsMixin from '../mixins/getPostsMixin';


    export default {
        mixins: [getPostsMixin],

    }
</script>