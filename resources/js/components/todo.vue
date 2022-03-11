<template>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 g-0">
        <div class="add-a-task-div mx-2 mt-3 mt-sm-0">
            <div class="add-a-task-header d-flex">
                <div class="col-auto my-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor"
                         class="bi bi-list-task" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                        <path
                            d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                        <path fill-rule="evenodd"
                              d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                    </svg>
                </div>
                <div class="ps-2 my-auto txt-01">
                    Pendenz Hinzufügen
                </div>
            </div>
            <div id="alrt">
            </div>
            <div class="add-a-task-content">
                <div class="form-div mx-3 pt-3">
                    <div class="mb-2">
                        <label for="admin-input" class="form-label mb-1">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                 viewBox="0 0 23.258 25.125">
                                                <g id="Group_1" data-name="Group 1" transform="translate(0.15 0.15)">
                                                    <path id="Path_2895" data-name="Path 2895"
                                                          d="M5.275,5.528H4.225a.269.269,0,0,0,0,.538h1.05a.269.269,0,1,0,0-.538"
                                                          transform="translate(-1.118 -1.562)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2896" data-name="Path 2896"
                                                          d="M14.542,5.528H7.713a.269.269,0,1,0,0,.538h6.829a.269.269,0,0,0,0-.538"
                                                          transform="translate(-2.103 -1.562)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2897" data-name="Path 2897"
                                                          d="M5.275,8.84H4.225a.269.269,0,0,0,0,.538h1.05a.269.269,0,1,0,0-.538"
                                                          transform="translate(-1.118 -2.497)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2898" data-name="Path 2898"
                                                          d="M14.542,8.84H7.713a.269.269,0,1,0,0,.538h6.829a.269.269,0,0,0,0-.538"
                                                          transform="translate(-2.103 -2.497)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2899" data-name="Path 2899"
                                                          d="M5.275,12.153H4.225a.269.269,0,1,0,0,.538h1.05a.269.269,0,1,0,0-.538"
                                                          transform="translate(-1.118 -3.434)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2900" data-name="Path 2900"
                                                          d="M12.526,12.153H7.713a.269.269,0,1,0,0,.538h4.813a.269.269,0,1,0,0-.538"
                                                          transform="translate(-2.103 -3.434)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2901" data-name="Path 2901"
                                                          d="M5.275,15.464H4.225a.269.269,0,0,0,0,.538h1.05a.269.269,0,1,0,0-.538"
                                                          transform="translate(-1.118 -4.369)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2902" data-name="Path 2902"
                                                          d="M5.275,18.777H4.225a.269.269,0,1,0,0,.538h1.05a.269.269,0,1,0,0-.538"
                                                          transform="translate(-1.118 -5.305)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2903" data-name="Path 2903"
                                                          d="M5.275,22.088H4.225a.269.269,0,0,0,0,.538h1.05a.269.269,0,1,0,0-.538"
                                                          transform="translate(-1.118 -6.24)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2904" data-name="Path 2904"
                                                          d="M16.092,8.817V1.035A1.035,1.035,0,0,0,15.058,0H1.034A1.035,1.035,0,0,0,0,1.035V20.852a1.035,1.035,0,0,0,1.034,1.035H8.69a8.049,8.049,0,1,0,7.4-13.07M1.034,21.348a.5.5,0,0,1-.5-.5V1.035a.5.5,0,0,1,.5-.5H15.058a.5.5,0,0,1,.5.5V8.752c-.215-.018-.43-.033-.649-.033-.059,0-.116.007-.174.009V2.279A1.036,1.036,0,0,0,13.7,1.244H2.24A1.036,1.036,0,0,0,1.2,2.279v16.9A1.036,1.036,0,0,0,2.24,20.214h5.4a8.054,8.054,0,0,0,.651,1.134ZM9.2,11.1H5.61a.269.269,0,0,0,0,.538h3.1a8.085,8.085,0,0,0-1.144,1.839H5.61a.269.269,0,1,0,0,.538H7.351a8,8,0,0,0-.441,1.837H5.61a.269.269,0,1,0,0,.538H6.872c-.006.129-.02.256-.02.386a7.989,7.989,0,0,0,.551,2.9H2.24a.5.5,0,0,1-.5-.5V2.279a.5.5,0,0,1,.5-.5H13.7a.5.5,0,0,1,.5.5V8.755A8.031,8.031,0,0,0,9.2,11.1m5.7,13.191a7.514,7.514,0,1,1,7.516-7.515A7.523,7.523,0,0,1,14.9,24.287"
                                                          transform="translate(0 0)" fill="#535253" stroke="#535253"
                                                          stroke-width="0.3" />
                                                    <path id="Path_2905" data-name="Path 2905"
                                                          d="M19.775,18.243a2.548,2.548,0,1,0,2.548,2.548,2.551,2.551,0,0,0-2.548-2.548m0,4.557a2.01,2.01,0,1,1,2.01-2.01,2.012,2.012,0,0,1-2.01,2.01"
                                                          transform="translate(-4.867 -5.154)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                    <path id="Path_2906" data-name="Path 2906"
                                                          d="M19.635,16.1a4.369,4.369,0,0,0-.787,0,3.765,3.765,0,0,0-3.036,2.065,4.08,4.08,0,0,0,.068,3.93l3.13,5.472a.268.268,0,0,0,.466,0L22.6,22.09a4.084,4.084,0,0,0,.067-3.93A3.763,3.763,0,0,0,19.635,16.1m2.5,5.725L19.243,26.89l-2.9-5.064a3.551,3.551,0,0,1-.059-3.413A3.237,3.237,0,0,1,18.9,16.636c.115-.01.231-.017.347-.017s.229.005.343.016a3.233,3.233,0,0,1,2.606,1.773,3.549,3.549,0,0,1-.055,3.416"
                                                          transform="translate(-4.334 -4.543)" fill="#535253"
                                                          stroke="#535253" stroke-width="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                            <span class="ps-1 fw-600">Berater</span>
                        </label>
                        <select id="admin-input" name="admin" class="form-control" @change="onChangeSelect($event)">
                            <option v-for="admin in todos.admins" :value="admin.id">{{ admin.name }}</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="admin-input" class="form-label mb-1">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                 viewBox="0 0 22.958 18.296">
                                                <g id="Group_3" data-name="Group 3" transform="translate(-60 -201.145)">
                                                    <path id="Path_2907" data-name="Path 2907"
                                                          d="M18,32.073c-.186-.015-.373-.028-.559-.047a9.828,9.828,0,0,1-2.752-.632A4.613,4.613,0,0,1,13.14,30.3a.171.171,0,0,1-.039-.113c.021-.758.028-1.516.074-2.272a4.316,4.316,0,0,1,.411-1.661,3.13,3.13,0,0,1,1.632-1.494,8.7,8.7,0,0,1,2.128-.585.353.353,0,0,1,.333.1,1.745,1.745,0,0,0,1.5.464,1.485,1.485,0,0,0,1.067-.516.206.206,0,0,1,.225-.066,12.276,12.276,0,0,1,1.893.478,3.458,3.458,0,0,1,1.7,1.235,3.657,3.657,0,0,1,.576,1.556,19.312,19.312,0,0,1,.136,2.748.238.238,0,0,1-.066.138,4.734,4.734,0,0,1-2.337,1.355,10.366,10.366,0,0,1-2.637.376c-.1,0-.2.015-.3.023Zm2.587-6.86c-.037.019-.07.032-.1.05a2.812,2.812,0,0,1-1.409.418,2.674,2.674,0,0,1-1.674-.415.508.508,0,0,0-.412-.08,7.351,7.351,0,0,0-1.364.412,2.228,2.228,0,0,0-1.434,1.768,15.593,15.593,0,0,0-.192,2.1.818.818,0,0,0,.461.818l.06.036a6.014,6.014,0,0,0,2.406.718c.765.068,1.537.084,2.306.095a10.219,10.219,0,0,0,3.059-.37,3.68,3.68,0,0,0,1.357-.664.486.486,0,0,0,.22-.524,1.422,1.422,0,0,1-.009-.211c-.046-.6-.08-1.192-.145-1.785a2.438,2.438,0,0,0-.39-1.13,2.859,2.859,0,0,0-1.813-1.087.254.254,0,0,0-.168.06.482.482,0,0,1-.661-.084l-.1-.12"
                                                          transform="translate(52.528 187.368)" fill="#535253" />
                                                    <path id="Path_2908" data-name="Path 2908"
                                                          d="M19,9.168a5.292,5.292,0,0,1,.275-1.877,2.7,2.7,0,0,1,2.478-1.8,6.59,6.59,0,0,1,1.461.041,2.637,2.637,0,0,1,2.184,1.957,6.581,6.581,0,0,1,.193,2.24,3.946,3.946,0,0,1-.741,2.15,3.215,3.215,0,0,1-1.83,1.328,2.773,2.773,0,0,1-2.623-.632,3.853,3.853,0,0,1-1.381-2.8c-.006-.1-.015-.2-.018-.3s0-.2,0-.3m5.688.056a5.494,5.494,0,0,0-.156-1.381A1.741,1.741,0,0,0,23.2,6.485a3.988,3.988,0,0,0-1.743-.013A1.7,1.7,0,0,0,20.1,7.759a6.206,6.206,0,0,0-.18,1.13,3.656,3.656,0,0,0,.406,2.154,2.168,2.168,0,0,0,2.27,1.3,1.726,1.726,0,0,0,.429-.106A2.3,2.3,0,0,0,24,11.463a3.419,3.419,0,0,0,.687-2.239"
                                                          transform="translate(49.167 198.025)" fill="#535253" />
                                                    <path id="Path_2909" data-name="Path 2909"
                                                          d="M38.226,6.616a2.593,2.593,0,0,1-2.361-1.509,4.032,4.032,0,0,1-.436-2.269,4.043,4.043,0,0,1,.293-1.4A2.2,2.2,0,0,1,37.71.046,6.04,6.04,0,0,1,38.9.057,2.144,2.144,0,0,1,40.795,1.57a4.526,4.526,0,0,1-.123,3.414,2.956,2.956,0,0,1-1.633,1.534,2.3,2.3,0,0,1-.813.1m1.9-3.426c-.037-.353-.058-.709-.115-1.058a1.377,1.377,0,0,0-1.1-1.124A3.733,3.733,0,0,0,37.65,1a1.376,1.376,0,0,0-1.191,1.143,5.655,5.655,0,0,0-.067,1.61,2.271,2.271,0,0,0,.751,1.518,1.547,1.547,0,0,0,1.5.382,1.834,1.834,0,0,0,1.106-.885,2.949,2.949,0,0,0,.381-1.577"
                                                          transform="translate(39.8 201.132)" fill="#535253" />
                                                    <path id="Path_2910" data-name="Path 2910"
                                                          d="M10.486,3.054a4.29,4.29,0,0,1-.542,2.163A2.961,2.961,0,0,1,8.476,6.49a.982.982,0,0,1-.338.086,6.649,6.649,0,0,1-1.075-.016,2.144,2.144,0,0,1-1-.509A3.14,3.14,0,0,1,4.924,4.126a4.724,4.724,0,0,1,.166-2.6A2.211,2.211,0,0,1,7.146.026,4.769,4.769,0,0,1,8.478.068a2.249,2.249,0,0,1,1.836,1.854c.086.371.117.755.173,1.132m-.972.17c-.014-.234-.024-.468-.042-.7-.009-.116-.027-.232-.044-.348A1.388,1.388,0,0,0,8.314.995,3.746,3.746,0,0,0,7.043.986a1.282,1.282,0,0,0-1.16,1.089,5.425,5.425,0,0,0-.092,1.607A2.29,2.29,0,0,0,6.5,5.218a1.532,1.532,0,0,0,1.274.467,1.78,1.78,0,0,0,1.307-.837,2.592,2.592,0,0,0,.431-1.624"
                                                          transform="translate(57.252 201.145)" fill="#535253" />
                                                    <path id="Path_2911" data-name="Path 2911"
                                                          d="M7.88,17.026l-.158-.051c-.415-.134-.829-.271-1.246-.4a.231.231,0,0,0-.152.022,3.932,3.932,0,0,1-.923.363,2.487,2.487,0,0,1-1.566-.18.342.342,0,0,1-.063-.031.831.831,0,0,0-.843-.078,7.133,7.133,0,0,0-1.084.435,1.359,1.359,0,0,0-.653.765A5.677,5.677,0,0,0,.914,19.5c-.01.207,0,.414,0,.621a.549.549,0,0,0,.3.507,4.731,4.731,0,0,0,1.41.52,14.074,14.074,0,0,0,2.668.234c.077,0,.154.016.256.027l-.252.916c-.2-.009-.406-.017-.608-.028a13.764,13.764,0,0,1-1.934-.186A5.706,5.706,0,0,1,.692,21.34a3.175,3.175,0,0,1-.551-.485A.542.542,0,0,1,0,20.521c0-.495,0-.992.035-1.485a7.39,7.39,0,0,1,.175-1.143,2.545,2.545,0,0,1,1.674-1.845,9.462,9.462,0,0,1,1.727-.463.36.36,0,0,1,.187.037.37.37,0,0,1,.129.1,1.419,1.419,0,0,0,1.963-.046.269.269,0,0,1,.315-.088c.382.095.767.181,1.152.263a.415.415,0,0,1,.367.378c.038.257.1.511.156.8"
                                                          transform="translate(60 192.264)" fill="#535253" />
                                                    <path id="Path_2912" data-name="Path 2912"
                                                          d="M35.045,17.007c.044-.237.1-.457.122-.679a.544.544,0,0,1,.506-.52c.322-.06.641-.137.958-.219a.409.409,0,0,1,.433.126,1.073,1.073,0,0,0,.551.315,1.387,1.387,0,0,0,1.428-.385.231.231,0,0,1,.253-.078,11.469,11.469,0,0,1,1.7.456,2.677,2.677,0,0,1,1.8,2.331c.069.573.1,1.151.139,1.727a3.959,3.959,0,0,1-.016.409.614.614,0,0,1-.176.4,3.422,3.422,0,0,1-1.465.913,8.912,8.912,0,0,1-2.27.442c-.432.034-.866.049-1.3.075-.076,0-.106-.018-.126-.095-.073-.282-.158-.562-.243-.861.257,0,.513,0,.77,0a10.064,10.064,0,0,0,2.551-.314,4.509,4.509,0,0,0,.819-.307,2.869,2.869,0,0,0,.5-.382.135.135,0,0,0,.041-.1,12.287,12.287,0,0,0-.183-1.98c-.022-.1-.05-.2-.078-.294a1.491,1.491,0,0,0-.785-.944,5.556,5.556,0,0,0-1.416-.475.217.217,0,0,0-.129.031,3.455,3.455,0,0,1-.9.356,2.518,2.518,0,0,1-1.588-.191,1.52,1.52,0,0,0-.455-.2,1.293,1.293,0,0,0-.471.122c-.288.1-.575.2-.862.3-.028.01-.058.014-.113.027"
                                                          transform="translate(40.013 192.272)" fill="#535253" />
                                                </g>
                                            </svg>

                                        </span>
                            <span class="ps-1 fw-600">Kunde</span>
                        </label>
                        <select id="costumer-input" name="costumer" class="form-control" @change="onChangeCostumer($event)">
                            <option></option>
                            <option v-for="costumer in todos.costumers" :value="costumer.id">{{costumer.first_name}}
                                {{ costumer.last_name }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-2">
                                    <label for="admin-input" class="form-label mb-1">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="#707070" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"></path>
                                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"></path>
                                            </svg>
                                        </span>
                                        <span class="ps-1">
                                            Task
                                        </span>
                                    </label>
                                    <input class="form-control" id="task" type="text">
                                </div>
                    <div class="mb-2">
                        <label for="desc" class="form-label">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="#707070"
                                                 class="bi bi-card-text" viewBox="0 0 16 16">
                                                <path
                                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                                <path
                                                    d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                                            </svg>
                                        </span>
                            <span class="ps-1 fw-600">Beschreibung (erforderlich)</span>
                        </label>
                        <textarea type="text" id="desc" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
                <div class="button-div mx-3 pt-1 pb-3">
                    <button @click="assignpendency" class="py-2 px-2 px-sm-3 assign-pdnc text-white btn">
                        <span>Pendenz Zuordnen</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

<!--    <div class="row g-0 m-0 p-0">-->
<!--        <div class="col-12 col-md-12 col-lg-6 g-0">-->
<!--            <div class="to-do-div-new">-->
<!--                <div class="header px-3 px-sm-3">-->
<!--                    <div class="">-->
<!--                        <span>To do</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div id="alrt">-->
<!--                </div>-->
<!--                <div class="content">-->
<!--                    <div class="form-div mx-3 pt-3">-->
<!--                        <div class="mb-2">-->
<!--                            <label for="admin-input" class="form-label mb-0">Field service</label>-->
<!--                            <select id="admin-input" name="admin" class="form-control" @change="onChangeSelect($event)">-->
<!--                                <option v-for="admin in todos.admins" :value="admin.id">{{ admin.name }}</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="mb-2">-->
<!--                            <label for="costumer-input" class="form-label mb-0">Customer</label>-->
<!--                            <select id="costumer-input" name="costumer" class="form-control" @change="onChangeCostumer($event)">-->
<!--                                <option v-for="costumer in todos.costumers" :value="costumer.id">{{costumer.first_name}}-->
<!--                                    {{ costumer.last_name }}-->
<!--                                </option>-->
<!--                            </select>-->
<!--                        </div>-->

<!--                        <div class="mb-2">-->
<!--                            <label for="desc" class="form-label">Description-->
<!--                                (Required)</label>-->
<!--                            <textarea type="text" id="desc" placeholder="Description" class="form-control" rows="3" required></textarea>-->

<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="button-div mx-3 mt-4">-->
<!--                        <button @click="assignpendency" class="py-2 px-2 px-sm-3">-->
<!--                            <span>Assign Pendency</span>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        </div>-->

</template>
<script>
export default {
    mounted() {
        this.fetchnumbers();
        this.fetchtasks();

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
 
        assignpendency: function () {
            axios.get('assignpendency?admin=' + this.admin + '&id=' + this.costumer + '&desc=' + document.getElementById('desc').value + '&task=' + document.getElementById('task').value);
            document.getElementById('alrt').innerHTML = "";
            document.getElementById('alrt').innerHTML += '<div class="alert alert-success alert-dismissible fade show m-3" role="alert">\n' +
                '                    <strong>Pendency was assigned successfully</strong>\n' +
                '                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\n' +
                '                </div>';
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
                this.admin = response.data.admins[0].id
                
            });
        }
    },

}

</script>




