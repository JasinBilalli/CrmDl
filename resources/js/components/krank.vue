<template>
    <div class="col-6 text-start">
        <div class=" plus-div  my-1">
            <div class="svg-div d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" onclick="addContentFunct1()"
                     id="add-btn1" width="35"
                     class="img-fluid" viewBox="0 0 35 35"
                     style="cursor: pointer;background-color: #EFEFEF; border: 1.2px solid #707070; border-radius: 10px; padding:4px;">
                    <g id="Group_757" data-name="Group 757"
                       transform="translate(-458 -858)">
                        <line id="Line_43" data-name="Line 43" y2="34"
                              transform="translate(475.5 858.5)" fill="none"
                              stroke="#707070" stroke-linecap="round" stroke-width="2"/>
                        <path id="Path_345" data-name="Path 345" d="M34,0H0"
                              transform="translate(458.5 875.5)"
                              fill="none" stroke="#707070" stroke-linecap="round"
                              stroke-width="2"/>
                    </g>
                </svg>
                <div class="mx-3 my-auto">
                                                  <span>
                                                    Sich mit einem anderen verbinden !
                                                  </span>
                </div>
            </div>
        </div>

        <div id="alrt1">
        </div>
        <div class="added-content mx-3 pb-3 mb-3" id="added-content1" style="display: none;">
            <div class="to-do-content p-4"
                 style="background-color: #EFEFEF; border-radius: 13px;">
                <div class="py-2">

                    <label for="">Das Familienmitglied:</label>
                    <select class="form-select" aria-label="Default select example" @change="onChangeSelect($event)">
                        <option v-for="fam in family" :value="fam.id">{{fam.first_name}} {{fam.last_name}}</option>
                    </select>
                </div>


                <div class="py-2 d-flex justify-content-between">
                    <button type="button" class="btn col-auto text-dark  rounded" onclick="saveContentFunct1()" id="save-btn"
                            style="background-color: #fff;border:1px solid #000">
                        Abbrechen
                    </button>
                    <button @click="linkthat()" onclick="saveContentFunct1()" type="button" class="btn col-auto  text-white  rounded" id="save-btn"
                            style="background-color: #5f5f5f;">
                        Verknüpfung
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        this.getfamily();
    },
    data(){
        return{
family:null,
            val:null
        }
    },
    props:{
      lead_id:{},
      fam_id:{},
        url:{},
    },
    methods:{
        getfamily :function(){
            axios.get(this.url + 'fmembers/' + this.fam_id + '/' + this.lead_id).then((response) => {
                this.family = response.data;
                this.val = response.data[0].id;
            });
         },
        linkthat:function(){
            axios.get(this.url + 'linkthat/' + this.val + '/' + this.fam_id);
        },
        onChangeSelect(event) {
            this.val = parseInt(event.target.value)
        },
    }
}
</script>
