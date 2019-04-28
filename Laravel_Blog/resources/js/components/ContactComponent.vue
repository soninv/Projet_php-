<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Us</div>
                    <div class="card-body">
                        <form @submit.prevent="onSubmit">
                            <div class="form-group">
                                <label for="title">Name</label>
                                <input v-model="contact.name" type="text" class="form-control" id="title"  required  placeholder="Enter title of the post">
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input v-model="contact.email" type="email" class="form-control" id="title"  required  placeholder="Enter title of the post">
                            </div>
                            <div class="form-group">
                                <label for="text">Message</label>
                                <textarea  v-model="contact.message" class="form-control" rows="5" id="text" required placeholder="Enter the text of your post"></textarea>
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
        data () {
            return {
            contact: {
                name:'',
                email:'',
                message:'',
            }
            }
        },

        methods: {
           async onSubmit() {
               const { data } = await axios.post('api/contact',this.contact);


                //push to home page after save
               if(data === 'Saved') {
                   alert('Your contacts are saved');
                   this.$router.push({ path: '/' })

               }               
            }
        }
    }
</script>