<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mensagens</div>

                    <div class="card-body">
                        <div class="alert alert-info" v-if="messages.length <= 0"> Nenhuma mensagem</div>
                       <p v-for="message in messages" :key="message.id">
                           <strong>{{message.title}}</strong><br>
                           {{message.body}}
                           <small>{{message.created_at}}</small>
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:[
            'userId'
        ],
        data(){
          return{
              messages: []
          }
        },
        mounted() {
            console.log(this.userId)
            Echo.channel('message.received.'+this.userId)
            .listen('SendMessage', (e) => {
                this.messages.push(e)
            })
        }
    }
</script>
