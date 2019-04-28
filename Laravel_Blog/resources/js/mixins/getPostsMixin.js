const Mixin = {
    data() {
        return {
            posts:[],
        }
    },
    created () {
        this.getPosts(this.$route.path.slice(1))
    },
    methods: {
        async getPosts(category) {
            const {data:{ posts } } = await axios.get(`api/posts?category=${category}`);
            console.log(posts);
            this.posts = posts;
        },

        
    }
}

export default Mixin;
