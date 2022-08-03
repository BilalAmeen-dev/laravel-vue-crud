<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Laravel Vue Crud</span>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <route-link to="/" class="nav-item nav-link">Home</route-link>
                    <route-link to="/add" class="nav-item nav-link">Add Post</route-link>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
<script>
    export default {}
</script>
