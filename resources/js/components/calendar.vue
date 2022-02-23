<template>
            <div class="mt-2 mx-2 mb-2 calendar-divider">
            <span class="fs-5" style="font-family: 'Montserrat'"><b>Termine</b></span>
            <br><br>
            <div class="row text-center px-1">
                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee p-2 mx-2 " @click="searchapp(lista[0].date)" style="cursor: pointer">
                        <span @click="searchapp(lista[0].date)"
                              class="monthh p-0" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[0].day }} {{ lista[0].month }}, {{ lista[0].year }}</b></span>
                        <br>
                        <span @click="searchapp(lista[0].date)"
                              class="not-this-month  text-center" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[0].dayn }}</b>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee p-2 mx-2" @click="searchapp(lista[1].date)" style="cursor: pointer">
                        <span @click="searchapp(lista[1].date)"
                          class="monthh p-0" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[1].day }} {{ lista[1].month }}, {{ lista[1].year }}</b></span>
                        <br>
                        <span @click="searchapp(lista[1].date)"
                              class="not-this-month  text-center" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[1].dayn }}</b>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee p-2 mx-2" style="cursor: pointer">
                        <span @click="searchapp(lista[2].date)"
                          class="monthh p-0" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[2].day }} {{ lista[2].month }}, {{ lista[2].year }}</b></span>
                        <br>
                        <span @click="searchapp(lista[2].date)"
                              class="not-this-month  text-center" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[2].dayn }}</b>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="g-0 col-md-3 col-3 calendarspan">
                    <div class="dayy this-month dateee p-2 mx-2" style="cursor: pointer">

                          <span @click="searchapp(lista[3].date)"
                                class="monthh p-0" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[3].day }} {{ lista[3].month }}, {{ lista[3].year }}</b>
                          </span>
                        <br>
                        <span @click="searchapp(lista[3].date)"
                              class="not-this-month  text-center" style="font-family: 'Montserrat'; font-size: 15px;"><b>{{ lista[3].dayn }}</b>
                        </span>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-12 row text-center my-3">
                <div class="col-6 col-md-6 g-0" style="color: #4CC590">
                    <i @click="searchfor()" class="dateee px-1 pb-1" style="cursor:pointer; border-radius: 50px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-left fw-bold" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </i>
                </div>
                <div class="col-6 col-md-6" style="color: #4CC590">
                    <i  class="dateee px-1 pb-1" style=" cursor:pointer; border-radius: 50px !important;" @click="searchfor2()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-right fw-bold" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </i>
                </div>
            </div>
            <div class="px-4 pt-4 mb-4" style="height: 300px; background: #00c78c; border-radius: 25px;  overflow:hidden !important; background-color: #F5F4F4; border-radius: 25px; font-family: 'Montserrat';">
                <div class="text-center" v-if="today == null">
                    No appointments for today
                </div>
                <div class="scroll-2 pb-5 pe-3" id="appscroll">
                    <a style="text-decoration: none; " v-if="today != null" v-for="tod in today"  :href="'acceptappointment/'+tod.id">
                        <div  class="mb-2 text-white" style="min-height: 60px;cursor: pointer;">
                            <div class="person-box py-2 px-2">
                                <div class="mx-3 my-auto">
                                <div class="fs-5">
                                    {{tod.first_name}} {{tod.last_name}}
                                </div>
                                    <div style="font-weight: normal !important;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                        {{tod.address}}
                                    </div>

                                </div>

                            </div>
                        </div>
                    </a>
                    <div class="mt-2 text-center p-1" style="background: #DDDADA; border-radius: 20px; cursor: pointer; font-family: 'Montserrat';" @click="loadmore()">
                        Load more <i class="fas fa-caret-down"></i>
                    </div>
                </div>
            </div>
            <br>

        </div>


</template>

<script>
    export default {
        mounted() {
            var a = new Date();
            this.sod = a.getDay();
            this.date_function();
            axios.get('vuedate?page=' + this.lpage).then(
                (response) => { this.lista = response.data;}
            );
            axios.get('todayappointments?page=' + this.apage).then(
                (response) => { this.today = response.data;}
            );
        },

        data(){
            return{
                today: null,
                date: [],
                month: null,
                day: null,
                year: null,
                todayd: null,
                days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday'],
                sot: null,
                sod: null,
                lista: null,
                cnt: 1,
                lpage: 4,
                apage:1,

            }
        },

        methods:{
            date_function: function () {

            var currentDate = new Date();

            var formatted_date = new Date().toJSON().slice(0,10).replace(/-/g,'/');
            this.todayd = formatted_date;
            this.year = parseInt(formatted_date.slice(0,4));
            this.month = parseInt(formatted_date.slice(5,7));
            this.day = parseInt(formatted_date.slice(8,10));


        },

        searchfor2(){
            this.lpage += 4;
            axios.get('vuedate?page=' + this.lpage).then(
                (response) => { this.lista = response.data;}
            );
        },
        searchfor(){
            this.lpage -= 4;
            axios.get('vuedate?page=' + this.lpage).then(
                (response) => { this.lista = response.data;}
            );
        },
        searchapp(vall){
            axios.get('todayappointments?date=' + vall + '?page=' + this.apage).then(
                (response) => { this.today = response.data;}
            );
        },
        loadmore:function(){
            this.apage++;
            axios.get('todayappointments?page=' + this.apage).then(
            (response) => {
                for (let i = 0; i < response.data.length; i++) {this.today.push(response.data[i]);}
                    }
                );
            }
        }
    }

</script>


