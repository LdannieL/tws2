<template>
<div class="comments">
    <h3>Leave Your Comment</h3>
    <!-- From -->
    <div class="leave-coment-form" v-if="user">
        <form class="form" name="form">
                <input type="text" name="name" placeholder="Name" required="" disabled :value="user.name">
                <input type="email" name="email" placeholder="Email" required="" disabled :value="user.email">
                <textarea class="input" placeholder="Your comment here..." required v-model="message"></textarea>
                <span class="input" v-if="errorComment" style="color:red">{{errorComment}}</span>
                <input type="submit" @click="saveComment" value="Submit Comment">
        </form>
    </div>
    <div class="leave-coment-form" v-else>
        <form class="form" name="form">
            <div class="form-row">
                <a href="/login"><textarea
                  class="input"
                  placeholder="Your comment here..."
                  required></textarea></a>
            </div>
        </form>
    </div>
    <!-- Comments List -->
    <div class="comments-grids">
        <h3>Our Recent Comments</h3>
    </div>
    <div class="comments-grids" v-if="comments" v-for="(comment,index) in commentsData">
        <!-- Comment -->
        <div v-if="!spamComments[index] || !comment.spam" class="comments-grid">
            <!-- Comment Avatar -->
            <div class="comments-grid-left">
                <img :src="'/storage/'+ comment.avatar" class="img-responsive">
            </div>

            <!-- Comment Box -->
            <div class="comments-grid-right">
                    <h4><a href="#">{{ comment.name }}</a></h4>
                    <ul>
                        <li>{{ comment.date }}<i>|</i></li>
                        <li>Votes: {{ comment.votes }}<i>|</i>
                            <a v-if="!comment.votedByUser" v-on:click="voteComment(comment.commentid,'directcomment',index,0,'up')">Up Votes<i>|</i></a>
                            <a v-if="!comment.votedByUser" v-on:click="voteComment(comment.commentid,'directcomment',index,0,'down')">Down Votes<i>|</i></a>
                        </li>
                        <li>
                            <a v-on:click="spamComment(comment.commentId,'directcomment',index,0)">Spam</a><i>|</i>
                        </li>
                        <li>
                            <a v-on:click="openComment(index)">Reply</a>
                        </li>
                    </ul>
                    <p>{{ comment.comment }}</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- From -->
            <div class="leave-coment-form comment-v" v-if="commentBoxs[index]">
                <form class="form" name="form">
                    <input type="text" name="name" placeholder="Name" required="" disabled :value="user.name">
                    <input type="email" name="email" placeholder="Email" required="" disabled :value="user.email">
                    <textarea class="input" placeholder="Your comment here..." required v-model="message"></textarea>
                    <span class="input" v-if="errorReply" style="color:red">{{ errorReply }}</span>
                    <input type="submit"  v-on:click="replyComment(comment.commentid,index)" value="Submit Comment">
                </form>
            </div>
            <!-- Comment - Reply -->
            <div v-if="comment.replies">
                <div class="comments-grids" v-for="(replies,index2) in comment.replies">
                    <div v-if="!spamCommentsReply[index2] || !replies.spam" class="comments-grid reply">

                        <!-- Comment Avatar -->
                        <div class="comments-grid-left comment-avatar">
                            <img :src="'/storage/'+ replies.avatar" class="img-responsive">
                        </div>

                        <!-- Comment Box -->
                        <div class="comments-grid-right">
                                <h4><a href="#">{{ replies.name }}</a></h4>
                                <ul>
                                    <li>{{ replies.date }}<i>|</i></li>
                                    <li>Total votes: {{ replies.votes }}<i>|</i>
                                        <a v-if="!replies.votedByUser" v-on:click="voteComment(replies.commentid,'replycomment',index,index2,'up')">Up Votes<i>|</i></a>
                                        <a v-if="!replies.votedByUser" v-on:click="voteComment(comment.commentid,'replycomment',index,index2,'down')">Down Votes<i>|</i></a>
                                    </li>
                                    <li>
                                        <a v-on:click="spamComment(replies.commentid,'replycomment',index,index2)">Spam</a><i>|</i>
                                    </li>
                                    <li>
                                        <a v-on:click="replyCommentBox(index2)">Reply</a>
                                    </li>
                                </ul>
                                <p>{{ replies.comment }}</p>
                            </div>
                            <div class="clearfix"> </div>

                        <!-- From -->
                        <div class="leave-coment-form reply" v-if="replyCommentBoxs[index2]">
                            <form class="form" name="form">
                                <input type="text" name="name" placeholder="Name" required="" disabled :value="user.name">
                                <input type="email" name="email" placeholder="Email" required="" disabled :value="user.email">
                                <textarea class="input" placeholder="Your comment here..." required v-model="message"></textarea>
                                <span class="input" v-if="errorReply" style="color:red">{{ errorReply }}</span>
                                <input type="submit"  v-on:click="replyComment(comment.commentid,index)" value="Submit Comment">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
var _ = require('lodash');

export default {
    props: ['commentUrl'],
    data() {
        return {
            comments: [],
            commentreplies: [],
            comments: 0,
            commentBoxs: [],
            message: null,
            replyCommentBoxs: [],
            commentsData: [],
            viewcomment: [],
            show: [],
            spamCommentsReply: [],
            spamComments: [],
            errorComment: null,
            errorReply: null,
            user: window.App.user
        }
    },
    http: {
        headers: {
            'X-CSRF-TOKEN': window.App.csrfToken
        }
    },
    methods: {
        fetchComments() {
            this.$http.get('/comments/' + this.commentUrl).then(res => {

                this.commentData = res.data;
                this.commentsData = _.orderBy(res.data, ['votes'], ['desc']);
                this.comments = 1;
            });
            
        },
        showComments(index) {
            if (!this.viewcomment[index]) {
                Vue.set(this.show, index, "hide");
                Vue.set(this.viewcomment, index, 1);
            } else {
                Vue.set(this.show, index, "view");
                Vue.set(this.viewcomment, index, 0);
            }
        },
        openComment(index) {
            if (this.user) {
                if (this.commentBoxs[index]) {
                    Vue.set(this.commentBoxs, index, 0);
                } else {
                    Vue.set(this.commentBoxs, index, 1);
                }
            }

        },
        replyCommentBox(index) {
            if (this.user) {
                if (this.replyCommentBoxs[index]) {
                    Vue.set(this.replyCommentBoxs, index, 0);
                } else {
                    Vue.set(this.replyCommentBoxs, index, 1);
                }
            }

        },
        saveComment() {
            if (this.message != null && this.message != ' ') {
                this.errorComment = null;
                this.$http.post('/comments', {
                    post_id: this.commentUrl,
                    comment: this.message,
                    users_id: this.user.id
                }).then(res => {

                    if (res.data.status) {
                        this.commentsData.push({ "commentid": res.data.commentId, "name": this.user.name, "comment": this.message, "votes": 0, "reply": 0, "replies": [] });
                        this.message = null;
                    }

                });
            } else {
                this.errorComment = "Please enter a comment to save";
            }
        },
        replyComment(commentId, index) {
            if (this.message != null && this.message != ' ') {
                this.errorReply = null;
                this.$http.post('/comments', {
                    comment: this.message,
                    users_id: this.user.id,
                    reply_id: commentId
                }).then(res => {

                    if (res.data.status) {
                        if (!this.commentsData[index].reply) {
                            this.commentsData[index].replies.push({ "commentid": res.data.commentId, "name": this.user.name, "comment": this.message, "votes": 0 });
                            this.commentsData[index].reply = 1;
                            Vue.set(this.replyCommentBoxs, index, 0);
                            Vue.set(this.commentBoxs, index, 0);
                        } else {
                            this.commentsData[index].replies.push({ "commentid": res.data.commentId, "name": this.user.name, "comment": this.message, "votes": 0 });
                            Vue.set(this.replyCommentBoxs, index, 0);
                            Vue.set(this.commentBoxs, index, 0);
                        }
                        this.message = null;
                    }

                });
            } else {
                this.errorReply = "Please enter a comment to save";
            }
        },
        voteComment(commentId, commentType, index, index2, voteType) {
            if (this.user) {
                this.$http.post('/comments/' + commentId + '/vote', {
                    users_id: this.user.id,
                    vote: voteType
                }).then(res => {

                    if (res.data) {
                        if (commentType == 'directcomment') {
                            if (voteType == 'up') {
                                this.commentsData[index].votes++;
                            } else if (voteType == 'down') {
                                this.commentsData[index].votes--;
                            }
                        } else if (commentType == 'replycomment') {
                            if (voteType == 'up') {
                                this.commentsData[index].replies[index2].votes++;
                            } else if (voteType == 'down') {
                                this.commentsData[index].replies[index2].votes--;
                            }
                        }
                    }

                });
            }

        },
        spamComment(commentId, commentType, index, index2) {
            console.log("spam here");
            if (this.user) {

                this.$http.post('/comments/' + commentId + '/spam', {
                    users_id: this.user.id,
                }).then(res => {
                    if (commentType == 'directcomment') {
                        Vue.set(this.spamComments, index, 1);
                        Vue.set(this.viewcomment, index, 1);
                    } else if (commentType == 'replycomment') {
                        Vue.set(this.spamCommentsReply, index2, 1);
                    }
                });

            }

        },
    },
    mounted() {
       console.log("mounted");
       this.fetchComments();
    }

}
</script>