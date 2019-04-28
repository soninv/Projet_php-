<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form @submit.prevent="onSubmit">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input v-model="title" type="text" class="form-control" id="title"  required  placeholder="Enter title of the post">
                            </div>
                            <div class="form-group">
                                <label for="text">Text:</label>
                                <textarea v-model="text" class="form-control" rows="5" id="text" required placeholder="Enter the text of your post"></textarea>
                            </div>
                            <div class="form-group">
                                <span>Choose image for the post:</span>
                                <input type="file" @change="uploadImage" required class="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
                title: '',
                text: '',
                file: '',
            }
    },
        mounted() {
            console.log('Router',this.$route.params.category);
        },
        methods : {
             async onSubmit() {
                const formData = new FormData();

                formData.append('title', this.title);
                formData.append('text', this.text);
                formData.append('category', this.$route.params.category);
                formData.append('user_id', this.$userId)
                formData.append('image',this.file);
                
               const { data } =  await axios.post('api/posts',formData);

                //go back to all articles of the category
                
               if(data === 'Saved') {
                   this.$router.push({ path: `/${this.$route.params.category}` })
               }

            },

            uploadImage( { target: { files } } ) {
                this.file = files[0];
            }
        }
    }
</script>