<template>
    <div class="row my-2">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0 pe-3">
            <div class="to-do-div">
                <div class="accordion accordion-flush mx-3" id="accordionFlush1">
                    <div class="accordion-item my-1 py-2" style="background-color: #F7F7F7;">
                        <div class="p-3">
                            <span style="background-color: #F7F7F7; font-family: 'Montserrat';" class="col text-dark fw-bold fs-5">
                                To Do
                            </span>
                        </div>
                        <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                        <br>
                        <div id="alrt">
                            </div>

                        <div class="mx-3" style=" font-family: 'Montserrat';">
                            Admin
                            <select name="admin" class="form-control mb-3" style="border: transparent !important; font-family: 'Montserrat';" @change="onChangeSelect($event)">
                                <option v-for="admin in todos.admins" :value="admin.id">{{ admin.name }}</option>
                            </select>

                            Costumer
                            <select name="costumer" class="form-control mb-3" style="border: transparent !important; font-family: 'Montserrat';" @change="onChangeCostumer($event)">
                                <option v-for="costumer in todos.costumers" :value="costumer.id">{{
                                        costumer.first_name
                                    }}
                                    {{ costumer.last_name }}
                                </option>
                            </select>
                            Title
                            <input type="text" id="title" class="form-control">
                            Description (Required)
                            <textarea type="text" id="desc" placeholder="Description" class="form-control mb-3" style="border: transparent !important; font-family: 'Montserrat';"></textarea>
                        </div>
                        <div class="py-2 mx-3">
                            <button @click="assignpendency" class="btn mt-1" style="background-color: #4EC590; color: #fff !important; font-family: 'Montserrat';">Assign pendency</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0 ps-3">
            <div class="">
                <div class="internal-nr-div pb-2">
                    <div class="accordion accordion-flush mx-3 " id="accordionFlush4">
                        <div class="accordion-item my-1 py-2"
                             style="background-color: #F7F7F7;">
                            <div class="p-3">
                                <span style="background-color: #F7F7F7; font-family: 'Montserrat';" class="col text-dark fw-bold fs-5">
                                Informational Numbers
                                 </span>
                            </div>
                            <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                            <div id="flush-collapse4" class="accordion-collapse collapse show pt-3"
                                 aria-labelledby="flush-heading4" data-bs-parent="#accordionFlush4">
                                <div class="accordion-body p-0 mx-3 overflow-div3 pe-3"
                                     style="background-color: #F7F7F7; font-family: 'Montserrat'; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 310px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                    <div class="py-2 my-2 mx-2" v-for="number in numbers"
                                         style="background-color: #fff; border-radius: 15px; color: #000;">
                                        <div class="mx-3 ">
                                            <div class="row ">
                                                <div class="col">
                                                    <span class="fw-bold fs-5 text-color123">
                                                        {{ number.text }}
                                                    </span>
                                                </div>
                                                <div class="col-2 text-end g-0 pe-2">
                                                    <button @click="deletenumber(number.id)"
                                                            class="border-0  p-0 text-center bg-white text-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                             height="16" fill="currentColor" class="bi bi-trash"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd"
                                                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <div class="input-group my-3">
                                        <input style="size: auto; font-family: 'Montserrat'" class="form-control" name="todo" id="number"
                                               v-on:keyup.enter="addnumber"
                                               type="text">
                                        <button @click="addnumber" class="btn" style="background-color: #4EC590; color: #fff !important; font-family: 'Montserrat';">Add</button>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</template>
<script>
export default {
    mounted() {
        this.fetchnumbers();
        this.fetchtasks();
        this.defaultvalue();

    },


    data() {
        return {
            todos: null,
            numbers: null,
            admin: null,
            costumer: null
        }
    },
    methods: {
        onChangeSelect(event) {
            this.admin = parseInt(event.target.value);
        },
        onChangeCostumer(event) {
            this.costumer = parseInt(event.target.value);
        },

        addnumber: function () {
            var val = document.getElementById('number')
            axios.get('addnumber?number=' + val.value).then(this.fetchnumbers
            );
            val.value = "";
        },
        defaultvalue: function () {
            this.costumer = this.todos.costumers[0].id;
        },
        assignpendency: function () {
            var title = document.getElementById('title').value;
            axios.get('assignpendency?admin=' + this.admin + '&id=' + this.costumer + '&desc=' + document.getElementById('desc').value + '&title=' + title);
            document.getElementById('alrt').innerHTML = "";
            document.getElementById('alrt').innerHTML += ' <div class="alert alert-success" role="alert"> Pendency was assigned successfully</div>';
        },
        fetchnumbers() {
            axios.get('numbers').then((response) => {
                this.numbers = response.data;
            });
        },
        deletenumber: function (val) {
            axios.get('deletenumber?id=' + val).then(
                this.fetchnumbers
            );
        },
        fetchtasks: function () {
            axios.get('todos').then((response) => {
                this.todos = response.data,
                this.admin = response.data.admins[0].id,
                this.costumer = response.data.costumers[0].id
            });
        }
    },

}

</script>




