<template>
    <div class="w3-row center">
      <div class="w3-card-8 w3-col m3 w3-margin w3-animate-zoom card"  v-for="post in filteredList">
          <a v-bind:href="'/post/'+ post.slug" target="_blank">
          <img v-bind:src="'/storage/'+ post.image"/>
            {{ post.title }}
          </a>
      </div>
    </div>
</template>

<script>
// class Post {
//     constructor(title, slug, image) {
//         this.title = title;
//         this.slug = slug;
//         this.image = image;
//     }
// }

export default {
    props: ['keyword'],
    data() {
        return {
            // keyword: '',
            postList: []
        }
    },
    // watch: {
    //     // whenever keyword changes, this function will run
    //     keyword: function(value) {
    //       this.keyword = value;
    //     }
    // },
    // data: {
    //     keyword: '',
    //     postList: []
    // },
    mounted : function(){
         this.getItems();
     },
    methods: {
        getItems: function(){
            // let vm = this;
            axios.get('/ssearch').then(response => {
                // alert(response.data.keyword);
                this.postList = response.data.posts;
                //var keyword = this.keyword;
            //this.keyword = vm.keyword;
            // this.keyword = "magento";
            // this.keyword = response.data.keyword;
            //window.location = response.data.redirect;
            });
        },
        // filteredList: function () {
        //     // var keyword = this.keyword;
        //     //var that = this;
        //     return this.postList.filter(function (post) {
        //         return post.title.toLowerCase().includes(this.keyword.toLowerCase());
        //     });
        // }
    },
    computed: {
        filteredList() {
            // return this.postList.posts;
           
            // return this.postList.posts.filter(function (value) {
              
            //     return value.name.indexOf(that.searchname) >= 0;
            // })
            // return this.postList.posts.filter(post => {
            //     return post.title.toLowerCase().includes(this.keyword.toLowerCase());
            // });
            //this.keyword = "magento";
            return this.postList.filter(post => {
                return post.title.toLowerCase().includes(this.keyword.toLowerCase()) || 
                        post.body.toLowerCase().includes(this.keyword.toLowerCase());
            });
        }
        // filteredList: function () {
        //     // var keyword = this.keyword;
        //     // var vm = this;
        //     // return this.postList.filter(function (post) {
        //     //     return post.title.toLowerCase().includes(vm.keyword.toLowerCase()) || post.body.toLowerCase().includes(vm.keyword.toLowerCase());
        //     // });
        //    var vm = this;
        //     return this.postList.filter(function (post) {
        //         return post.title.toLowerCase().includes(vm.keyword.toLowerCase()) || post.body.toLowerCase().includes(vm.keyword.toLowerCase());
        //     });
        // }
    }
}
</script>