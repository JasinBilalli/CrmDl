<template>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 g-0 px-2 order-1 order-md-1">
        <div class="to-do-new wrapper-of-todo mt-3">
            <div class="d-flex justify-content-between" id="#firstDivToggle1a">
            <div class="header d-flex">
                <div class="col-auto my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-ui-radios" viewBox="0 0 16 16">
                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                    </svg>
                </div>
                <div class="txt-01 my-auto ps-2">
                    Aufgaben
                </div>
            </div>
            <div class="fs-5 count px-4 fw-bold">{{cnt}}</div>
        </div>
            <div class="content greyBg p-2">

                        <div class="ovrflw pe-1">
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
                                    <input type="text" placeholder="neue Aufgabe" id="title" name="title" class="form-control m-input" autocomplete="off" v-on:keyup.enter="addtodos" required>
                                </div>
                            </div>
                        </div>
                        <button id="addRow" @click="addtodos"  type="button" class="px-5 py-2 my-2 add-button fw-bold text-center">
                            Neue Erinnerung
                        </button>
            </div>
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
            todos:null,
            cnt: 0
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
                this.cnt = response.data.length;
            })
            var checkbx = document.getElementsByClassName('removeRow');
            for (var checkbox of checkbx) {
                checkbx.checked = true;
            }
        },
        deleteToDo: function (id){
            axios.get('deleteToDoList?id=' + id).then(this.getToDo());
        }
    },

}
</script>
