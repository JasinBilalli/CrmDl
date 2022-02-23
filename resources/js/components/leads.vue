<template>
    <!doctype html>
    <div class="row">

        <div class="appointments-sm-div col-md-8 col-lg-8 col-12" style="background-color: #F7F7F7; border-radius: 30px !important;">
            <div class="appointments-content py-3">
                <div class="overflow-div1"
                     style="overflow-y: scroll; overflow-x: hidden !important;">
                    <div class="row mx-1" style="height: 73vh !important; ">
                        <div class="col-12 col-md-6 col-lg-6" v-for="lead in leads">
                            <div class="row">
                              <div class="modal fade" :id="lead.slug + 'r'" data-bs-backdrop="static"
                                  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                  aria-hidden="true">
                                  <div class="modal-dialog modaldialogg">
                                      <form action="rejectedleads" method="post">
                                          <input type="hidden" name="_token" :value="csrf">
                                          <div class="modal-content" style="border-radius: 24px !important;">
                                              <div class="modal-header mx-4 pt-4" style="border-bottom: none !important;">
                                                  <button type="button" :id="lead.slug + 'r.123'" @click="closeFunc(this)" class="btn-close" data-bs-dismiss="modal"
                                                          aria-label="Close" style="opacity: 1 !important;"></button>
                                              </div>
                                              <div class="modal-body mx-5">
                                                <div class="row mb-3">
                                                  <h5 class="modal-title" id="staticBackdropLabel"><b>Reject Lead</b></h5>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-12 col-12">
                                                    <input type="hidden" :value="lead.id" name="leadsid">
                                                    <select class="form-select" style="background-color: #EFEFEF !important; border: none !important;" name="reason">
                                                        <option value="Falsche nummer">Falsche nummer</option>
                                                        <option value="Hat schon gewechselt">Hat schon gewechselt</option>
                                                        <option value="Kein interesse">Kein interesse</option>
                                                        <option value="Krank">Krank</option>
                                                        <option value="Kunde bereits terminiert">Kunde bereits terminiert</option>
                                                        <option value="Nicht Brauchbar">Nicht Brauchbar</option>
                                                        <option value="Nicht erreicht">Nicht erreicht</option>
                                                        <option value="Online Offerte">Online Offerte</option>
                                                        <option value="Spater Anrufen">Spater Anrufen</option>
                                                        <option value="Terminiert">Terminiert</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer row mx-5 mb-4" style="border-top: none !important; display: block; padding-top: 0 !important;">
                                                <button type="submit" class="btn w-25" style="background-color: #4EC590; color: #fff !important;"><b>Save</b></button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                                     <div class="modal fade" :id="lead.slug" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="background: #f8f8f8; border-radius: 43px">
                                            <div class="modal-header mx-3 pt-4" style="border-bottom: none !important;">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1 !important;"></button>
                                            </div>
                                            <div class="modal-body p-3">
                                                <div v-if="role == 'fs'" class="row mx-3 my-auto">
                                                  <div class="col-12 col-md-4 my-auto">
                                                    <span class="fs-4 fw-bold text-dark">
                                                      {{ lead.first_name }}
                                                    </span>
                                                  </div>
                                                  <div class="col-6 col-md-4 py-3 my-auto">
                                                    <div class="d-flex justify-content-center">
                                                      <a :href="'tel:' + lead.telephone" class="btn fw-bold fs-5 py-2 w-100"
                                                        style="background-color:#4EC590;color: #fff; border-radius: 8px;">
                                                          Call
                                                      </a>
                                                    </div>
                                                  </div>
                                                  <div class="col-6 col-md-4 py-3 my-auto">
                                                    <div class="d-flex justify-content-start">
                                                      <a :href="'pendingreject/' + lead.id + '/1'" class="btn fw-bold fs-5 py-2 w-100"
                                                        style="background-color:#E50A10;color: #fff; border-radius: 8px;">
                                                        Reject
                                                      </a>
                                                    </div>
                                                  </div>
                                                       <div class="row mx-4">
                                                  <hr class="text-black mx-3" style="color: #707070 !important; height: 2px; margin: 0 !important; opacity: 0.8;">
                                                </div>
                                                </div>
                                                <br>

                                                <br>
                                                <div class="mt-3">
                                                    <div class="mx-3 pb-3 row">
                                                      <div class="col-md-6 col-12">
                                                        <div class="text-dark text-left p-3 h-100" style="border-radius: 15px; background:white;">
                                                            <div class="py-2">
                                                              <h5><b>Herkunft vom Lead</b></h5>
                                                            </div>

                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Platform:</b> <span style="color: #88889D;"> {{ lead.campaign }}</span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Kampagne:</b> <span style="color: #88889D;"> {{ lead.kampagne }}</span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Grund:</b> <span style="color: #88889D;"> {{ lead.grund }}</span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Teilnahme:</b> <span style="color: #88889D;"> {{ lead.teilnahme }}</span></span><br>
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 col-12 px-2">
                                                        <div class="text-dark text-left p-3" style="border-radius: 15px; background:white;">
                                                            <div class="py-1">
                                                              <h5><b>Angaben</b></h5>
                                                            </div>

                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Gerburstdatum:</b> <span style="color: #88889D;"> {{ lead.birthdate }}</span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Haushalt:</b> <span style="color: #88889D;"> {{ lead.number_of_persons }}</span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Telefon:</b> <span style="color: #88889D;"> {{ lead.telephone }}</span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>PLZ, Ort:</b> <span style="color: #88889D;"> {{ lead.postal_code }}, {{lead.city}} </span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Krankenkasse:</b> <span style="color: #88889D;"> {{ lead.krankenkasse }} </span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Bewertung KK:</b> <span style="color: #88889D;"> {{ lead.bewertung }} </span></span><br>
                                                            </div>
                                                            <div class="py-1">
                                                              <span style="color: #000; font-weight: 500;"><b>Wichtig:</b> <span style="color: #88889D;"> {{ lead.wichtig }} </span></span><br>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer" style="border-top: none !important; display: block;">
                                                <div v-if="role == 'fs'" class="row mx-4 pb-4">
                                                  <div class="col-3">
                                                    <button type="button" class="btn w-100" style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;" data-bs-dismiss="modal"><b>Close</b></button>
                                                  </div>
                                                  <div class="col-3">
                                                    <a :href="'pendingreject/' + lead.id + '/0'">
                                                      <button class="btn fw-bold fs-6 w-100"
                                                              style="background-color:#FF860D !important;color: #fff !important; border-radius: 8px !important;">
                                                          Pending
                                                      </button>
                                                    </a>
                                                  </div>
                                                  <div class="col-3">
                                                    <button class="btn fw-bold fs-6 w-100" data-bs-dismiss="modal"  data-bs-toggle="modal"
                                                          :data-bs-target="'#' + lead.slug + 'r'"
                                                          style="background-color:#E50A10 !important; color: #fff !important; border-radius: 8px !important;">
                                                      Reject
                                                    </button>
                                                  </div>
                                                  <div class="col-3">
                                                    <a :href="'alead/' + lead.id" class="btn fw-bold fs-6  w-100"
                                                    style="background-color:#4EC590 !important;color: #fff !important; border-radius: 8px !important;">
                                                      Go
                                                    </a>
                                                  </div>
                                                </div>
                                                <div v-else class="text-center">
                                                                     <button @click="getit2(lead.id)" type="button" class="py-2 px-5 fw-bold border-0 "
                            data-bs-toggle="modal"
                            data-bs-target="#asign"
                            style="background-color: #63D4A4; color: #fff; border-radius: 13px;">
                        Assign
                    </button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-1 pe-0 my-3 text-end">
                                <div v-if="role != 'fs'">
                                    <input type="checkbox" :value="lead.id" name="jep" @change="getit($event)">
                                </div>
                            </div>
                            <div class="col my-3"  v-if="role != 'fs'">
                                <div class="whiteee p-3">
                                    <div class="namme mb-2">
                                        <span v-if="lead.wantsonline == 1" class="fs-4 fw-bold">{{lead.first_name }} {{ lead.last_name }} (Online)</span>
                                        <span v-else class="fs-4 fw-bold">{{ lead.first_name }} {{lead.last_name }}</span>
                                    </div>
                                    <div class="adresse row">
                                        <div class="col-4 pe-0">
                                            <span class="">Adresse:</span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500 ">{{ lead.address }}</span>
                                        </div>
                                    </div>
                                    <div class="haushalt row">
                                        <div class="col-4 pe-0">
                                            <span class="">Haushalt:</span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500">{{ lead.number_of_persons }} Personen</span>
                                        </div>
                                    </div>
                                    <div class="grund row">
                                        <div class="col-4 pe-0">
                                            <span class="">Grund:</span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500"> {{ lead.grund }}</span>
                                        </div>
                                    </div>
                                    <div class="kampagne row">
                                        <div class="col-4 pe-0">
                                            <span class="">Kampagne: </span>
                                        </div>
                                        <div class="col ps-0">
                                            <span class="grayyy1 fw-500"> {{ lead.kampagne }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grayyy" style="cursor: pointer;">
                                    <div class="lead-offnen text-center py-2"  data-bs-toggle="modal" :data-bs-target="'#' + lead.slug">
                                        <span class="fs-4 fw-bold">Lead öffnen</span>
                                    </div>
                                </div>
                            </div>
                            <div class="py-1 my-2 mx-1"
                                 data-bs-toggle="modal" :data-bs-target="'#' + lead.slug" v-else>
                                <div class="mx-2">
                                    <div class="whiteee p-3">
                                        <div class="namme mb-2">
                                            <span class="fs-4 fw-bold">{{ lead.first_name }} {{ lead.last_name }}</span>
                                        </div>
                                        <div class="adresse row">
                                            <div class="col-4 pe-0">
                                                <span class="">Adresse:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500 ">{{ lead.address }}</span>
                                            </div>
                                        </div>
                                        <div class="haushalt row">
                                            <div class="col-4 pe-0">
                                                <span class="">Haushalt:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500">{{
                                                        lead.number_of_persons
                                                    }} Personen</span>
                                            </div>
                                        </div>
                                        <div class="grund row">
                                            <div class="col-4 pe-0">
                                                <span class="">Grund:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500">{{ lead.grund }}</span>
                                            </div>
                                        </div>
                                        <div class="kampagne row">
                                            <div class="col-4 pe-0">
                                                <span class="">Kampagne:</span>
                                            </div>
                                            <div class="col ps-0">
                                                <span class="grayyy1 fw-500">{{ lead.kampagne }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grayyy" style="cursor: pointer;">
                                    <div class="lead-offnen text-center py-2 mx-2" data-toggle="modal" :data-target="'#' + lead.slug">
                                        <span class="fs-4 fw-bold">Lead öffnen</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="role != 'fs'" class=" py-2">
                <div class="button-div mx-5 my-2">
                    <button type="submit" class="py-2 px-5 fw-bold border-0 "
                            data-bs-toggle="modal"
                            data-bs-target="#asign"
                            style="background-color: #63D4A4; color: #fff; border-radius: 13px;">
                        Assign
                    </button>
                </div>
                <div class="modal fade" id="asign" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content p-3" style="border-radius: 23px !important;">
                            <div class="modal-header" style="border-bottom: none !important;">
                                <h5 class="modal-title" id="exampleModalLabel">Assign Leads</h5>
                                <button type="button" class="btn-close" style="opacity: 1 !important;" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <label for="" style="font-weight: 500 !important;">Field service</label>
                                <select class="form-select" style="border: none !important; background-color: #EFEFEF" @change="changeadmin($event)">
                                    <option v-for="admin in admins" :value="admin.id">{{ admin.name }}</option>
                                </select>

                            </div>
                            <div class="modal-footer" style="display: block !important; border-top: none !important;">
                               <button @click="assign" class="btn" style="background-color: #4EC590 !important; color: #fff !important; border-radius: 8px !important;"><b>Assign</b></button>
                                <button type="button" @click="reloadthis()" class="btn" data-bs-dismiss="modal" style="background-color: #6C757D !important; color: #fff !important; border-radius: 8px !important;"><b>Close</b>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

            <div class="col-md-4 col-lg-4 col-12">
              <div class="lead-statistics-header mt-2 mx-3 py-3">
                            <div class="header mx-4 my-2">
                                <span class="fs-4 fw-bold">Lead Statistics</span>
                            </div>
                        </div>
                        <hr class="text-black" style="color: #fff !important; height: 4px; margin: 0 !important; opacity: 1;">
                        <div class="lead-statistics  mx-3 pt-3">
                            <div class="content  overflow-divvv" style="height: 80vh; overflow: auto;">
                                <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="39" height="39" viewBox="0 0 39 39">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_435" data-name="Rectangle 435" width="17.261"
                                                      height="17.215" fill="#88889d"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_975" data-name="Group 975" transform="translate(-1519 -216)">
                                            <g id="Ellipse_386" data-name="Ellipse 386" transform="translate(1519 216)"
                                               fill="none" stroke="#88889d" stroke-width="2">
                                                <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                            </g>
                                            <g id="Group_966" data-name="Group 966"
                                               transform="translate(1530.266 227.459)">
                                                <g id="Group_644" data-name="Group 644" transform="translate(0 0)"
                                                   clip-path="url(#clip-path)">
                                                    <path id="Path_1482" data-name="Path 1482"
                                                          d="M8.692.081a33.358,33.358,0,0,1,4.149.03c2.711.342,4.2,1.807,4.338,4.51a75.707,75.707,0,0,1-.092,8.539,4.156,4.156,0,0,1-3.993,3.95c-2.971.139-5.958.14-8.929,0A4.141,4.141,0,0,1,.158,13.181,69.412,69.412,0,0,1,.124,4.412C.321,1.623,2.181.121,5.005.021,6.233-.022,7.463.014,8.692.014c0,.022,0,.045,0,.067m6.991,8.565h0c0-1.151.017-2.3,0-3.453-.042-2.335-1.265-3.568-3.614-3.6q-3.412-.046-6.825,0c-2.4.028-3.633,1.233-3.674,3.626q-.059,3.412,0,6.827c.041,2.4,1.263,3.608,3.656,3.657,1.751.035,3.5.025,5.256.022a17.393,17.393,0,0,0,2.115-.07,3.174,3.174,0,0,0,3.08-3.4c.035-1.2.006-2.406.006-3.609"
                                                          transform="translate(0 0)" fill="#88889d"/>
                                                    <path id="Path_1483" data-name="Path 1483"
                                                          d="M16.078,11.687A4.431,4.431,0,1,1,11.652,16.1a4.378,4.378,0,0,1,4.426-4.414m.037,7.294a2.837,2.837,0,0,0,2.846-2.9,2.88,2.88,0,1,0-5.76.066,2.84,2.84,0,0,0,2.913,2.836"
                                                          transform="translate(-7.458 -7.481)" fill="#88889d"/>
                                                    <path id="Path_1484" data-name="Path 1484"
                                                          d="M33.975,9.188a1.018,1.018,0,0,1,1.158-.9.976.976,0,0,1,.886,1.091,1.029,1.029,0,0,1-1.118.952,1.044,1.044,0,0,1-.927-1.144"
                                                          transform="translate(-21.743 -5.298)" fill="#88889d"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                </span> <span class="fs-5 fw-500 ps-2">
                                    Instagram: {{instagram}}
                                </span>
                                </div>

                                <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                        <g id="Group_976" data-name="Group 976" transform="translate(-1519 -273)">
                                            <g id="Ellipse_384" data-name="Ellipse 384" transform="translate(1519 273)"
                                               fill="none" stroke="#88889d" stroke-width="2">
                                                <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                            </g>
                                            <path id="Path_1922" data-name="Path 1922"
                                                  d="M7.032,4.474a1.227,1.227,0,0,1,1.14-1,5.118,5.118,0,0,1,.678-.04c.553-.01,1.1-.005,1.653-.005.06,0,.121-.01.191-.015V.135c-.2-.025-.387-.055-.578-.065C9.207.044,8.3-.031,7.394.014A4.23,4.23,0,0,0,4.219,1.5,4.326,4.326,0,0,0,3.27,3.646a8.592,8.592,0,0,0-.1,1.2c-.015.819-.005,1.637-.005,2.456,0,.211,0,.211-.2.211-.924,0-1.848,0-2.773-.005C.04,7.5,0,7.548,0,7.689Q.008,9.347,0,11c0,.141.045.176.181.176.929-.005,1.858,0,2.793,0h.181v9.162H6.967V11.18h.181c.929,0,1.858-.005,2.788,0,.141,0,.181-.045.2-.176.1-.784.2-1.567.3-2.351.045-.347.09-.688.136-1.035,0-.03-.005-.06-.005-.111h-.2c-1.075,0-2.155-.005-3.23,0-.136,0-.186-.03-.181-.176.005-.743-.005-1.487.005-2.235a3.242,3.242,0,0,1,.07-.623"
                                                  transform="translate(1533.105 282.378)" fill="#88889d"/>
                                        </g>
                                    </svg>

                                </span> <span class="fs-5 fw-500 ps-2">
                                    Facebook: {{facebook}}
                                </span>
                                </div>

                                <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                        <g id="Group_977" data-name="Group 977" transform="translate(-1519 -331)">
                                            <g id="Ellipse_385" data-name="Ellipse 385" transform="translate(1519 331)"
                                               fill="none" stroke="#88889d" stroke-width="2">
                                                <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                            </g>
                                            <path id="Path_1923" data-name="Path 1923"
                                                  d="M0,10.4a10.4,10.4,0,1,1,10.4,10.4A10.4,10.4,0,0,1,0,10.4m9.745-9A4.572,4.572,0,0,0,7.293,3.81,9.923,9.923,0,0,0,6.78,4.943a16.491,16.491,0,0,0,2.965.373ZM5.521,4.6a11.54,11.54,0,0,1,.625-1.4,8.763,8.763,0,0,1,.776-1.212A9.114,9.114,0,0,0,3.964,3.963,10.767,10.767,0,0,0,5.521,4.6ZM4.56,9.745a17.35,17.35,0,0,1,.567-3.909A11.826,11.826,0,0,1,3.093,4.97a9.055,9.055,0,0,0-1.77,4.775H4.56ZM6.379,6.184a16.015,16.015,0,0,0-.52,3.562H9.745V6.615a17.552,17.552,0,0,1-3.367-.431m4.666.43V9.745H14.93a16.09,16.09,0,0,0-.518-3.562,17.655,17.655,0,0,1-3.367.431ZM5.86,11.045a15.924,15.924,0,0,0,.518,3.562,17.7,17.7,0,0,1,3.367-.43V11.045Zm5.185,0v3.13a17.551,17.551,0,0,1,3.367.431,16,16,0,0,0,.52-3.562Zm-4.265,4.8a10.153,10.153,0,0,0,.513,1.133,4.581,4.581,0,0,0,2.452,2.41V15.476a16.491,16.491,0,0,0-2.965.373ZM6.923,18.8a8.652,8.652,0,0,1-.777-1.212,11.551,11.551,0,0,1-.625-1.4,10.87,10.87,0,0,0-1.557.637A9.114,9.114,0,0,0,6.922,18.8Zm-1.8-3.851a17.352,17.352,0,0,1-.568-3.909H1.323a9.044,9.044,0,0,0,1.77,4.775,11.8,11.8,0,0,1,2.034-.867M13.868,18.8a9.1,9.1,0,0,0,2.956-1.976,10.856,10.856,0,0,0-1.555-.637,11.444,11.444,0,0,1-.625,1.4,8.763,8.763,0,0,1-.776,1.212m-2.824-3.33v3.916A4.572,4.572,0,0,0,13.5,16.98a9.923,9.923,0,0,0,.513-1.133,16.38,16.38,0,0,0-2.965-.372Zm4.619-.521a11.8,11.8,0,0,1,2.034.867,9.044,9.044,0,0,0,1.77-4.775H16.232a17.352,17.352,0,0,1-.568,3.909m3.8-5.208A9.044,9.044,0,0,0,17.7,4.97a11.8,11.8,0,0,1-2.034.867,17.412,17.412,0,0,1,.568,3.909ZM14.644,3.2a11.747,11.747,0,0,1,.626,1.4,10.779,10.779,0,0,0,1.554-.637,9.1,9.1,0,0,0-2.956-1.975A8.727,8.727,0,0,1,14.644,3.2M14.01,4.943A10.214,10.214,0,0,0,13.5,3.81,4.577,4.577,0,0,0,11.045,1.4V5.314a16.491,16.491,0,0,0,2.965-.373Z"
                                                  transform="translate(1527.891 340.378)" fill="#88889d"/>
                                        </g>
                                    </svg>


                                </span> <span class="fs-5 fw-500 ps-2">
                                    Sanascout: {{sanascout}}
                                </span>
                                </div>
                                <a href="leadhistory" style="text-decoration: none; color: black;">
                                   <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" fill="#88889d" class="bi bi-hourglass" viewBox="0 0 16 16">
                                      <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702c0 .7-.478 1.235-1.011 1.491A3.5 3.5 0 0 0 4.5 13v1h7v-1a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351v-.702c0-.7.478-1.235 1.011-1.491A3.5 3.5 0 0 0 11.5 3V2h-7z"/>
                                    </svg>

                                </span> <span class="fs-5 fw-500 ps-2">
                                  History of leads!
                                </span>
                                </div>
                                </a>
                                <a href="rleads" style="text-decoration: none; color: black;">
                                    <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26"  fill="#88889d" class="bi bi-clipboard-x" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                                      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                    </svg>


                                </span> <span class="fs-5 fw-500 ps-2">
                                  Rejected Leads!
                                </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>

    </div>





</template>

<script>
export default {
    data() {
        return {
            leads: null,
            admin: null,
            admins: null,
            array: [],
            role: null,
            instagram: null,
            facebook: null,
            sanascout: null
        };
    },
    mounted(){
        this.getleads();
    },
    methods: {
        reloadthis:function(){
            location.reload();
        },
        closeFunc: function(id){
          $('.modal-backdrop').remove();
          // $('#'+id).modal('hide');

        },
        getleads: function () {
            axios.get("getleads").then((response) => {
                this.leads = response.data.leads.data;
                this.admins = response.data.admins;
                this.admin = response.data.admins[0].id;
                this.role = response.data.admin[0];
                this.instagram = response.data.instagram;
                this.facebook = response.data.facebook;
                this.sanascout = response.data.sanascout;
            });
        },
        getit: function (event) {
            if (event.target.checked) {
                this.array.push(parseInt(event.target.value));
            } else {
                this.array.pop(parseInt(event.target.value));
            }
        },
        getit2:function(id){
            this.array.push(id)
        },
        assign: function () {
            axios
                .get(
                    "assigntofs" + "/" + this.admin + "?array=" + this.array.toString()
                )
                .then(this.getleads(), this.array = [], this.hiq(),location.reload());
        },
        changeadmin(event) {
            this.admin = parseInt(event.target.value);
        },
        arrpush(val) {
            this.array.push(val);
        },
        hiq() {
            var checkboxes = document.getElementsByName('jep');
            for (var checkbox of checkboxes) {
                checkbox.checked = false;
            }

        }
    },

    props: {
        csrf: {
            default: () => window.data.csrf_token,
        },

    },
};
</script>

