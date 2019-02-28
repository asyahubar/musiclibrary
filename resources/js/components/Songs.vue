<template>
    <div>
        <div v-for="artist in artists">
            <h2>{{artist.name}}</h2>
            <hr>
            <el-row>
                <template v-for="album in artist.albums">
                    <el-col :span="8">
                        <el-card :body-style="{ padding: '0px' }">
                            <img :src="album.cover_url" class="image">
                            <div style="padding: 14px;">
                                <h2>{{album.title}} {{album.id}}</h2>
                                <hr>
                                <ul>
                                    <template v-for="song in album.songs">
                                        <i class="fas fa-play"></i>
                                        <li>{{song.title}}</li>
                                    </template>
                                </ul>
                            </div>
                        </el-card>
                    </el-col>
                </template>
            </el-row>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                artists: []
            }
        },
        mounted() {
            this.$nextTick(function () {
                axios.get('api/library')
                    .then(response => {
                        this.artists = response.data;
                        console.log(this.artists);
                        this.$message('All songs fetched');
                    })
            })
        }
    }
</script>
<style>
    .time {
        font-size: 13px;
        color: #999;
    }

    .bottom {
        margin-top: 13px;
        line-height: 12px;
    }

    .button {
        padding: 0;
        float: right;
    }

    .image {
        width: 100%;
        display: block;
    }

    .clearfix:before,
    .clearfix:after {
        display: table;
        content: "";
    }

    .clearfix:after {
        clear: both
    }
</style>