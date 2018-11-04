import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
import Login from '../components/Login/Login'

const routes =[
    {path: '/login', component:Login}
];


const router = new VueRouter({
    routes,
    hasbang:false,
    mode:'history'
});

export default router