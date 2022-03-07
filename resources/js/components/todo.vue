<template>
    <div class="row g-0 m-0 p-0">
        <div class="col-12 col-md-12 col-lg-6 g-0">
            <div class="to-do-div-new">
                <div class="header px-3 px-sm-3">
                    <div class="">
                        <span>To do</span>
                    </div>
                </div>
                <div id="alrt">
                </div>
                <div class="content">
                    <div class="form-div mx-3 pt-3">
                        <div class="mb-2">
                            <label for="admin-input" class="form-label mb-0">Field service</label>
                            <select id="admin-input" name="admin" class="form-control" @change="onChangeSelect($event)">
                                <option v-for="admin in todos.admins" :value="admin.id">{{ admin.name }}</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="costumer-input" class="form-label mb-0">Customer</label>
                            <select id="costumer-input" name="costumer" class="form-control" @change="onChangeCostumer($event)">
                                <option v-for="costumer in todos.costumers" :value="costumer.id">{{costumer.first_name}}
                                    {{ costumer.last_name }}
                                </option>
                            </select>
                        </div>
                       
                        <div class="mb-2">
                            <label for="desc" class="form-label">Description
                                (Required)</label>
                            <textarea type="text" id="desc" placeholder="Description" class="form-control" rows="3" required></textarea>

                        </div>
                    </div>
                    <div class="button-div mx-3 mt-4">
                        <button @click="assignpendency" class="py-2 px-2 px-sm-3">
                            <span>Assign Pendency</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 g-0">
                <div class="informational-numbers">
                    <div class="header px-3 px-sm-3">
                        <div class="">
                            <span>Informational Numbers</span>
                        </div>
                    </div>
                    <div class="content pt-2">
                        <div class="overflow-div mx-3">
                            <div class="py-2 d-flex number-item my-2 px-2 px-sm-3" v-for="number in numbers">
                                <div class="col my-auto">
                                    <div class="">
                                        <span class="fw-600">{{ number.text }}</span>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <div class="btn " @click="deletenumber(number.id)">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="16.741" height="22.71"
                                             viewBox="0 0 16.741 22.71">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect id="Rectangle_693" data-name="Rectangle 693"
                                                          width="16.741" height="22.71" fill="#0c71c3" />
                                                </clipPath>
                                            </defs>
                                            <g id="Group_767" data-name="Group 767" clip-path="url(#clip-path)">
                                                <path id="Path_345" data-name="Path 345"
                                                      d="M34.214,169.833H48.56c.005.1.013.2.013.289q0,7.809,0,15.617a1.527,1.527,0,0,1-.036.412.687.687,0,0,1-.748.478q-1.783.005-3.565,0H35.142c-.706,0-.928-.223-.928-.934q0-7.757,0-15.513v-.35M45.7,178.215q0-2.876,0-5.751c0-.334-.064-.4-.391-.4q-.455-.007-.911,0c-.345,0-.409.07-.41.412q0,2.082,0,4.164,0,3.682,0,7.365c0,.337.059.4.389.4.286,0,.572,0,.859,0,.423,0,.464-.04.464-.459q0-2.863,0-5.725m-8.6,0q0,2.914,0,5.828c0,.3.056.353.346.356.338,0,.676,0,1.014,0,.223,0,.333-.083.333-.323q-.005-5.841,0-11.682c0-.237-.105-.334-.325-.336-.321,0-.642,0-.962,0-.352,0-.407.059-.407.406q0,2.875,0,5.75m3.443,0q0,2.914,0,5.828c0,.291.06.353.349.356.338,0,.676,0,1.015,0,.224,0,.333-.085.333-.323q0-5.841,0-11.683c0-.237-.1-.335-.324-.336-.321,0-.642,0-.963,0-.349,0-.411.065-.411.406q0,2.875,0,5.75"
                                                      transform="translate(-33.023 -163.922)" fill="#0c71c3" />
                                                <path id="Path_346" data-name="Path 346"
                                                      d="M16.741,4.576H.017a13.711,13.711,0,0,1,.01-1.494A1.318,1.318,0,0,1,1.435,1.895c1.275-.006,2.55,0,3.826,0h.346c0-.284,0-.541,0-.8A1.008,1.008,0,0,1,6.691,0Q8.369,0,10.048,0a1.026,1.026,0,0,1,1.1,1.08c.008.258,0,.516,0,.809h4.053a1.377,1.377,0,0,1,1.534,1.521c0,.387,0,.773,0,1.161"
                                                      transform="translate(-0.001 0)" fill="#0c71c3" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-div mx-3 mt-3">
                            <div class="input-group">
                                <input type="text" name="todo" id="number" class="form-control" v-on:keyup.enter="addnumber">
                                <div style="cursor: pointer" class="add-text px-2 px-sm-3" @click="addnumber">
                                        <span>
                                            Add
                                        </span>
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
            costumer: null,
            readed: false
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
            axios.get('assignpendency?admin=' + this.admin + '&id=' + this.costumer + '&desc=' + document.getElementById('desc').value);
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




