import Vue from 'vue'
import Router from 'vue-router'
import VueResourse from 'vue-Resource'
import Hello from '@/components/Hello'
import Header from '@/components/Header'
import Main from '@/components/Main'
import Cui from '@/components/admin/Cui'
import Buttons from '@/components/admin/Buttons'
import Treeview from '@/components/admin/Treeview'
import Jqueryui from '@/components/admin/Jqueryui'
import Nestablelist from '@/components/admin/Nestablelist'
import Tables from '@/components/admin/Tables'
import Jqgrid from '@/components/admin/Jqgrid'
import Formwizard from '@/components/admin/Formwizard'
import Formelements from '@/components/admin/Formelements'
import Wysiwyg from '@/components/admin/Wysiwyg'
import Dropzone from '@/components/admin/Dropzone'
import Widgets from '@/components/admin/Widgets'
import Calendar from '@/components/admin/Calendar'
import Gallery from '@/components/admin/Gallery'
import Profile from '@/components/admin/Profile'
import Inbox from '@/components/admin/Inbox'
import Login from '@/components/admin/Login'
import update from '@/components/admin/update'
Vue.use(Router)
Vue.use(VueResourse)
export default new Router({
  routes: [
    {
      path: '/',
      name: 'Main',
      component: Main

    },
    
    {
    	//路由配置地址
      path: '/hello',
      name: 'Hello',
      //跟最顶的一样
      component: Hello
    },

    {
    	//路由配置地址
      path: '/Cui',
      name: 'Cui',
      //跟最顶的一样
      component: Cui
    },
    
    {
    	//路由配置地址
      path: '/Buttons',
      name: 'Buttons',
      //跟最顶的一样
      component: Buttons
    },

     {
    	//路由配置地址
      path: '/Treeview',
      name: 'Treeview',
      //跟最顶的一样
      component: Treeview
    },

       {
    	//路由配置地址
      path: '/Jqueryui',
      name: 'Jqueryui',
      //跟最顶的一样
      component: Jqueryui
    },

     {
    	//路由配置地址
      path: '/Nestablelist',
      name: 'Nestablelist',
      //跟最顶的一样
      component: Nestablelist
    },

    {
      //路由配置地址
      path: '/Tables',
      name: 'Tables',
      //跟最顶的一样
      component: Tables
    },

     {
      //路由配置地址
      path: '/Jqgrid',
      name: 'Jqgrid',
      //跟最顶的一样
      component: Jqgrid
    },

    {
      //路由配置地址
      path: '/Formwizard',
      name: 'Formwizard',
      //跟最顶的一样
      component: Formwizard
    },

  {
      //路由配置地址
      path: '/Formelements',
      name: 'Formelements',
      //跟最顶的一样
      component: Formelements
    }, 
     {
      //路由配置地址
      path: '/Wysiwyg',
      name: 'Wysiwyg',
      //跟最顶的一样
      component: Wysiwyg
    },

 {
      //路由配置地址
      path: '/Dropzone',
      name: 'Dropzone',
      //跟最顶的一样
      component: Dropzone
    },

    {
      //路由配置地址
      path: '/Widgets',
      name: 'Widgets',
      //跟最顶的一样
      component: Widgets
    },
    

 {
      //路由配置地址
      path: '/Calendar',
      name: 'Calendar',
      //跟最顶的一样
      component: Calendar
    }, 

    {
      //路由配置地址
      path: '/Gallery',
      name: 'Gallery',
      //跟最顶的一样
      component: Gallery
    },
{
      //路由配置地址
      path: '/Profile',
      name: 'Profile',
      //跟最顶的一样
      component: Profile
    },

    {
      //路由配置地址
      path: '/Inbox',
      name: 'Inbox',
      //跟最顶的一样
      component: Inbox
    },

     {
      //路由配置地址
      path: '/Login',
      name: 'Login',
      //跟最顶的一样
      component: Login
    },
    {
      //路由配置地址
      path: '/update',
      name: 'update',
      //跟最顶的一样
      component: update
    },



  ]
})
