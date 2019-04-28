<template>
    <div class="container">
        <div v-if="post.user_id == $userId">
            <router-link class="btn btn-primary"  :to="`/edit/post/${this.post.id}/${this.post.category}`" exact>Edit Details</router-link>
            <button @click="deletePost" type="button" class="btn btn-danger">Delete Post</button>
        </div>
        <div class="row justify-content-center">
                <div class="card" style="width: 25rem;">
                <img :src="post.image" class="card-img-top">
                <div class="card-body">
                    <h2>Written by: <span style="color:orange;">{{author}} <span v-if="post.user_id == $userId" style="color:grey;font-size:20px;">(Your Post)</span></span></h2>
                    <h5 class="card-title">{{post.title}}</h5>
                    <p class="card-text">{{post.text}}</p>
                </div>
        </div>
            </div>
        </div>
</template>
<script>
    export default {
        data() {
            return {
                post:{},
                author:this.$route.params.author
            }
        },
       created() {
           this.getPostDetails(this.$route.params.id)
       },
       methods: {
        async getPostDetails(id) {
        const {data: { post } } = await axios.get(`api/posts/${id}`);
        this.post = post;
        },

           async deletePost() {
              const { data } =  await axios.delete(`api/posts/${this.post.id}`);
              
              if(data === 'Deleted') {
                  alert(`Post ${this.post.title} is deleted`);

                  //go back to all posts of the category

                 this.$router.push({ path: `/${this.post.category}` })

              }
           }
       }
    }
</script>