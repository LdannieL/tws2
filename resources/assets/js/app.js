
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueResource from "vue-resource";
window.Vue = require('vue');
// window.$ = window.jQuery = require('./vendor/jquery/jquery');
window.$ = window.jQuery = require('../../../public/js/jquery-2.1.4.min.js');

Vue.use(VueResource);
// Vue.component('comment', require('./components/Comments.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('comment', require('./components/Comments.vue'));
Vue.component('search', require('./components/Search.vue'));

const app = new Vue({
    el: '#app'
});

// const app = new Vue({
//     el: '#app'
// });

/**
 * Next, we will create a fresh Vue application instance and attach it to the
 * page. Then, you may begin adding components to this application or customize
 * the JavaScript scaffolding to fit your unique needs.
 */

// class Post {
//     constructor(title, slug, image) {
//         this.title = title;
//         this.slug = slug;
//         this.image = image;
//     }
// }
// const app = new Vue({
//     el: "#app",
//     data: {
//         keyword: 'magento',
//         postList: []
//     },
//     mounted : function(){
//   		this.getItems();
//   	},
//     methods: {
//       getItems: function(){
//             axios.get('/ssearch').then(response => {
//             this.postList = response.data;
//             //window.location = response.data.redirect;
//           });
//       }
//     },
//     computed: {
//         filteredList() {
//           	return this.postList.posts.filter(post => {
//             	return post.title.toLowerCase().includes(this.keyword.toLowerCase());
//             });
//  //            return this.items.filter(item => {
// 	// return item.propertyYouWantToFilter.indexOf(this.filter) > -1
//  //    })
//           	// return this.postList.filter(post=>{
//            //  	// return post.title.toLowerCase().includes(this.keyword.toLowerCase()) || post.body.toLowerCase().includes(this.keyword.toLowerCase());
//            //  	// return post.title.toLowerCase().includes(this.keyword.toLowerCase());
//            //  	return post.title;
//            //  });
//         }
//     }
// });


// const app = new Vue({
//     el: "#app",
//     data: {
//         showModal: true,
//         keyword: '',
//         newItem: {
//             'title': '',
//             'link': '',
//             'image': ''
//         },
//         postList: []
//     },
//     mounted : function(){
//   		this.getItems();
//   },
//     methods: {
//       getItems: function(){
//             axios.get('/searchresults').then(response => {
//             this.postList = response.data;
//           });
//       },
//         addItem() {
//             console.log("fdf");
//             var input = this.newItem;
//             if (input['title'] == '' || input['image'] == '' || input['link'] == '') {
//                 console.log("no input");
//             } else {
//                 console.log(input);
//                 axios.post('/vueitems', input)
//                     .then(response => {
//                         this.newItem = {
//                             'title': '',
//                             'link': '',
//                             'image': ''
//                         };
//                         this.postList.push(input),
//                         this.showModal= false
//                     });
//             }
//         }
//     },
//     computed: {
//         filteredList() {
//           return this.postList.filter(post=>{
//               return post.title.toLowerCase().includes(this.keyword.toLowerCase());
//             });
//         }
//     }
// });
