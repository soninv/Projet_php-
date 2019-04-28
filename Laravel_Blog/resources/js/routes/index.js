const VueRouter = require('vue-router').default;

Vue.use(VueRouter)


const router = new VueRouter({
    mode: 'hash',
    routes: [{
            path: '/',
            component: require('../components/HomeComponent.vue').default
        },
        {
            path: '/sport',
            component: require('../components/SportComponent.vue').default
        },
        {
            path: '/economics',
            component: require('../components/EconomicComponent.vue').default
        },
        {
            path: '/politics',
            component: require('../components/PoliticsComponent.vue').default
        },
        {
            path: '/contact',
            component: require('../components/ContactComponent.vue').default
        },
        {
            path: '/create/post/:category',
            component: require('../components/CreatePost.vue').default
        },
        {
            path: '/post/:id/:author',
            component: require('../components/PostDetails.vue').default
        },
        {
            path: '/edit/post/:id/:category',
            component: require('../components/EditPost.vue').default
        },

    ]
})

module.exports = router;
