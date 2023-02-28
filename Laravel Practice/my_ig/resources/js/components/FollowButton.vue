<template>
    <div class="container">
        <button class="btn btn-primary mb-3" @click="follow" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
     props: ['userId','follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function(){
            return {
                status:this.follows,
            }
        },
        methods:{

            follow(){
                axios.post('/follow/' + this.userId)
                //
                .then(response=>{
                    this.status= ! this.status;
                    console.log(response.data);
                });
            }
        },
        computed:{
            buttonText(){
                return (this.status) ? 'Following ✔' : 'Follow 😻';
            }
        }
    }
</script>
