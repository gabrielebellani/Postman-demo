<template>
    <div class="single-post">
        <div class="card">
            <div class="card-header">
                <h3>{{post.title}}</h3>
                <img class="post-featured-image" :src="post.featured_image">
            </div>
            <div class="card-body">
                <p>{{post.content}}</p>
            </div>
            <div class="card-footer">
                <span>Post Actions</span>
            </div>
        </div>
    </div>
</template>

<script>
export default{
    name: "SinglePost",
    props: {
        post: Object
    }
}
</script>

<style scoped>

</style>
