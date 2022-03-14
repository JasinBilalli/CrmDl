<template>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 g-0 px-2">
        <div class="to-do-headerrrrr ps-2 fw-bold my-2">TO DO</div>
        <div class="container-fluid greyBg py-3 px-2">
            <form method="post" action="">
                <div class="ovrflw pe-1" style="height: 400px;overflow-y: auto;">
                    <div class="input-group mb-2" v-for="todo in todos">
                        <div class="row g-0">
                            <div class="col-auto text-center" >
                                <label class="container1" >
                                    <input  type="checkbox"
                                           class="removeRow" @click="deleteToDo(todo.id)">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" :value="todo.title"  class="form-control m-input" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="row mb-3 g-0">
                            <div class="col-auto text-center" >
                                <label class="container1" >
                                    <input id="removeRow" type="checkbox"
                                           class="removeRow">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Enter title" id="title" name="title" class="form-control m-input" autocomplete="off" v-on:keyup.enter="addtodos">
                        </div>
                    </div>
                </div>
                <button id="addRow" @click="addtodos"  type="button" class="px-5 py-2 my-2 add-button fw-bold text-center">Add new to
                    list</button>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        this.getToDo()
    },
    data(){
        return {
            todos:null
        }
    },
    methods: {
        addtodos: function (){
            var title = document.getElementById('title');
            axios.get('addToDoList?title=' + title.value).then(this.getToDo());
            title.value = "";

        },
        getToDo(){
            axios.get('getToDo').then((response) => {
                this.todos = response.data;
            })
        },
        deleteToDo: function (id){
            axios.get('deleteToDoList?id=' + id).then(this.getToDo());
        }
    },

}
</script>
