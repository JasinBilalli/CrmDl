<template>

    <div class="informational-nr-div mx-2 mt-3">
        <div class="d-flex justify-content-between">
            <div class="informational-nr-header d-flex">
                <div class="col-auto my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor"
                         class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </div>
                <div class="txt-01 my-auto ps-2">
                    Informative Anzahl
                </div>
            </div>
            <div class="fs-5 count px-4 fw-bold">{{cnt}}</div>
        </div>
        <div class="informational-nr-content">
            <div class="wrapper p-2">
                <div class="info-nr-overflow-div px-2" >
                    <div class="info-nr-item my-2 p-2 bg-white d-flex justify-content-between" v-for="numberi in numbers">
                        <div class="col-auto px-2 my-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        <div class="ps-2 col">
                            <div class="fw-bold">{{ numberi.costumer }} ({{ numberi.number }})</div>
                            <div class=""><i>{{numberi.comment}}-{{ numberi.number }}</i></div>
                            <div class="">{{ numberi.text }}</div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class=" ">
                                <div class="btn " @click="deletenumber(numberi.id)">
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
                </div>
            </div>

            <div class="p-2">
                <button type="button" class="info-nr-button py-2 w-100 btn text-white" data-bs-toggle="modal"
                        data-bs-target="#numberModal">Kontakt Hinzufügen
                </button>
            </div>
        </div>
        <div class="modal fade" id="numberModal" data-bs-backdrop="static"
             data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel"
             aria-hidden="true">
            <div class="modal-dialog modaldialogg">
                <div class="modal-content" style="border-radius: 24px !important;">
                    <div class="modal-header mx-4 pt-4"
                         style="border-bottom: none !important;">
                        <button type="button"
                                class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"
                                style="opacity: 1 !important;"></button>
                    </div>
                    <div class="modal-body mx-5">
                        <input type="hidden" name="leadsid">
                        <div class="row mb-3">
                            <h5 class="modal-title"><b>Abgelehnt Lead</b></h5>
                        </div>
                        <div class="row py-1 ">
                            <div class="col-12">
                                <label for="name" class="col-form-label">Vorname: </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="position" class="col-form-label">Position: </label>
                                <input type="text" name="position" id="position" class="form-control" >
                            </div>
                            <div class="col-12">
                                <label for="company_name" class="col-form-label">Name der Firma:: </label>
                                <input type="text" name="position" id="company_name" class="form-control" >
                            </div>
                            <div class="col-12">
                                <label for="number" class="col-form-label">Anzahl: </label>
                                <input type="number" name="todo" id="number" class="form-control" v-on:keyup.enter="addnumber">
                            </div>
                            <div class="modal-footer m-0"
                                 style="border-top: none !important; display: block;margin:0 !important;">
                                <button @click="addnumber"  type="submit" class="btn w-100 m-0 my-3"
                                        style="background-color: #0C71C3; color: #fff !important;">
                                    <b>
                                        Hinzufügen</b></button>
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
;
    },
    data() {
        return {
            todos: null,
            numbers: null,
            admin: null,
            costumer: null,
            readed: false,
            cnt:0
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
            var valName = document.getElementById('name')
            var valPosition = document.getElementById('position')
            var valNumber = document.getElementById('number')
            var valCompanyName = document.getElementById('company_name')


            axios.get('addnumber?number=' + valNumber.value + '&name=' + valName.value + '&position=' + valPosition.value + '&company_name=' + valCompanyName.value ).then(location.reload());

            valNumber.value = "";
            valName.value = "";
            valPosition.value = "";
        },

        assignpendency: function () {
            axios.get('assignpendency?admin=' + this.admin + '&id=' + this.costumer + '&desc=' + document.getElementById('desc').value);
            document.getElementById('alrt').innerHTML = "";
            document.getElementById('alrt').innerHTML += ' <div class="alert alert-success" role="alert"> Pendency was assigned successfully</div>';
        },
        fetchnumbers() {
            axios.get('numbers').then((response) => {
                this.numbers = response.data;
                this.cnt = response.data.length;
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
