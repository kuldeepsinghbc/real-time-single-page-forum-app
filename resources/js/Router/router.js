import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
import Login from '../components/Login/Login'
import Signup from '../components/Login/Signup'
import Forum from '../components/Forum/Forum'
import Read from '../components/Forum/Read'
import Create from '../components/Forum/Create'
import Logout from '../components/Login/Logout'

const routes =[
    {path: '/login', component:Login},
    {path: '/logout', component:Logout},
    {path: '/signup', component:Signup},
    {path: '/forum', component:Forum, name:'forum'},
    {path: '/ask', component:Create},
    {path: '/question/:slug', component:Read, name:'read'},
];


const router = new VueRouter({
    routes,
    hasbang:false,
    mode:'history'
});

export default router
