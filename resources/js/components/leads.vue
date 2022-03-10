<template>
    <div v-if="gati">
        <section v-if="role == 'fs'">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-12 col-md-12 col-lg-9 g-0 ">
                        <div class="assigned-leads py-1 mx-1">
                            <div class="header ps-3 ps-sm-3 d-flex justify-content-between">
                                <div class="fs-5">
                                    <span>Zugewiesene Leads</span>
                                </div>
                                <div class="count px-4 mt-3 h-100">
                                    <span class="fs-5">{{cnt}}</span>
                                </div>
                            </div>
                            <div class="content p-2">
                                <div class="overflow-div row mx-2 mx-sm-3 me-2">
                                    <div class="col-12 col-sm-12 col-md-6 g-0" v-for="lead in leads">
                                        <!--                                    Rejecti Posht-->
                                        <div class="modal fade" :id="lead.slug + 'r'" data-bs-backdrop="static"
                                             data-bs-keyboard="false" tabindex="-1"
                                             aria-labelledby="staticBackdropLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modaldialogg">
                                                <form action="rejectedleads" method="post">
                                                    <input type="hidden" name="_token" :value="csrf">
                                                    <div class="modal-content" style="border-radius: 24px !important;">
                                                        <div class="modal-header mx-4 pt-4"
                                                             style="border-bottom: none !important;">
                                                            <button type="button" :id="lead.slug + 'r.123'"
                                                                    @click="closeFunc(this); reloadthis()"
                                                                    class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                                    style="opacity: 1 !important;"></button>
                                                        </div>
                                                        <div class="modal-body mx-5">
                                                            <div class="row mb-3">
                                                                <h5 class="modal-title" id="staticBackdropLabel"><b>Abgelehnt
                                                                    Lead</b></h5>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <input type="hidden" :value="lead.id"
                                                                           name="leadsid">
                                                                    <select class="form-select"
                                                                            style="background-color: #EFEFEF !important; border: none !important;"
                                                                            name="reason">
                                                                        <option value="Falsche nummer">Falsche nummer
                                                                        </option>
                                                                        <option value="Hat schon gewechselt">Hat schon
                                                                            gewechselt
                                                                        </option>
                                                                        <option value="Kein interesse">Kein interesse
                                                                        </option>
                                                                        <option value="Krank">Krank</option>
                                                                        <option value="Kunde bereits terminiert">Kunde
                                                                            bereits terminiert
                                                                        </option>
                                                                        <option value="Nicht Brauchbar">Nicht
                                                                            Brauchbar
                                                                        </option>
                                                                        <option value="Nicht erreicht">Nicht erreicht
                                                                        </option>
                                                                        <option value="Online Offerte">Online Offerte
                                                                        </option>
                                                                        <option value="Spater Anrufen">Spater Anrufen
                                                                        </option>
                                                                        <option value="Terminiert">Terminiert</option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer m-0"
                                                                     style="border-top: none !important; display: block;margin:0 !important;">
                                                                    <button type="submit" class="btn w-100 m-0 my-3"
                                                                            style="background-color: #0C71C3; color: #fff !important;">
                                                                        <b>Sparen</b></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--                                    Rejecti Nalt Modal-->
                                        <div class="modal fade" :id="lead.slug + 'rc'" data-bs-backdrop="static"
                                             data-bs-keyboard="false" tabindex="-1"
                                             aria-labelledby="staticBackdropLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modaldialogg">
                                                <form action="pending_rejectedlead" method="post">
                                                    <input type="hidden" name="_token" :value="csrf">
                                                    <div class="modal-content" style="border-radius: 24px !important;">
                                                        <div class="modal-header mx-4 pt-4"
                                                             style="border-bottom: none !important;">
                                                            <button type="button" :id="lead.slug + 'r.123'"
                                                                    @click="closeFunc(this); reloadthis()"
                                                                    class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                                    style="opacity: 1 !important;"></button>
                                                        </div>
                                                        <div class="modal-body mx-5">
                                                            <input type="hidden" :value="lead.id" name="leadsid">
                                                            <div class="row mb-3">
                                                                <h5 class="modal-title"><b>Abgelehnt Lead</b></h5>
                                                            </div>
                                                            <div class="row py-1 ">
                                                                <div class="col-12">
                                                                    <label for="inputTxt4" class="col-form-label">Begrundung: </label>
                                                                </div>
                                                                <div class="col-12">
                                                                <textarea type="text" id="inputTxt5" name="reason"
                                                                          class="form-control"
                                                                          aria-describedby="passwordHelpInline"></textarea>
                                                                </div>
                                                                <div class="modal-footer m-0"
                                                                     style="border-top: none !important; display: block;margin:0 !important;">
                                                                    <button type="submit" class="btn w-100 m-0 my-3"
                                                                            style="background-color: #0C71C3; color: #fff !important;">
                                                                        <b>Sparen</b></button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--                                    Pending Modal-->
                                        <div class="modal fade" :id="lead.slug + 'rp'" data-bs-backdrop="static"
                                             data-bs-keyboard="false" tabindex="-1"
                                             aria-labelledby="staticBackdropLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modaldialogg">
                                                <form action="pending_rejectedlead" method="post">
                                                    <input type="hidden" name="_token" :value="csrf">
                                                    <div class="modal-content" style="border-radius: 24px !important;">
                                                        <div class="modal-header mx-4 pt-4"
                                                             style="border-bottom: none !important;">
                                                            <button type="button" :id="lead.slug + 'r.123'"
                                                                    @click="closeFunc(this); reloadthis()"
                                                                    class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                                    style="opacity: 1 !important;"></button>
                                                        </div>
                                                        <div class="modal-body mx-5">
                                                            <input type="hidden" :value="lead.id" name="leadsid">
                                                            <input type="hidden" :value="1" name="pending">
                                                            <div class="row mb-3">
                                                                <h5 class="modal-title"><b>Steht aus Lead</b></h5>
                                                            </div>
                                                            <div class="row py-1 ">
                                                                <div class="col-12">
                                                                    <label for="inputTxt4" class="col-form-label">Begrundung: </label>
                                                                </div>
                                                                <div class="col-12">
                                                                <textarea type="text" id="inputTxt4" name="reason"
                                                                          class="form-control"
                                                                          aria-describedby="passwordHelpInline"></textarea>
                                                                </div>
                                                                <div class="modal-footer col-12"
                                                                     style="border-top: none !important; display: block;margin:0 !important;">
                                                                    <button type="submit" class="btn w-100 m-0 my-3"
                                                                            style="background-color: #0C71C3; color: #fff !important;">
                                                                        <b>Sparen</b></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="modal fade" :id="lead.slug" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content"
                                                     style="background: #f8f8f8; border-radius: 43px">
                                                    <div class="modal-header mx-3 pb-0"
                                                         style="border-bottom: none !important;">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"
                                                                style="opacity: 1 !important;"></button>
                                                    </div>
                                                    <div class="modal-body p-2 p-sm-3">
                                                        <div v-if="role == 'fs'" class="row mx-3 my-auto">
                                                            <div class="col-12 col-md-4 my-auto">
                                                                <span class="fs-4 fw-bold text-dark">
                                                                  {{ lead.first_name }}
                                                                </span>
                                                            </div>
                                                            <div class="col-6 col-md-4 py-3 my-auto">
                                                                <div class="d-flex justify-content-center">
                                                                    <a :href="'tel:' + lead.telephone"
                                                                       class="btn fw-bold fs-5 py-2 w-100"
                                                                       style="background-color:#4EC590;color: #fff; border-radius: 8px;">
                                                                        Anrufen
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-md-4 py-3 my-auto">
                                                                <div class="d-flex justify-content-start">
                                                                    <button class="btn fw-bold fs-5 py-2 w-100"
                                                                            data-bs-dismiss="modal"
                                                                            data-bs-toggle="modal"
                                                                            :data-bs-target="'#' + lead.slug + 'rc'"
                                                                            style="background-color:#E50A10;color: #fff; border-radius: 8px;">
                                                                        Abgelehnt
                                                                    </button>
                                                                    <!--                                                                <a :href="'pendingreject/' + lead.id + '/1'" class="btn fw-bold fs-5 py-2 w-100"-->
                                                                    <!--                                                                   style="background-color:#E50A10;color: #fff; border-radius: 8px;">-->
                                                                    <!--                                                                    Reject-->
                                                                    <!--                                                                </a>-->
                                                                </div>
                                                            </div>
                                                            <div class="row g-0">
                                                                <hr class="text-black mx-3"
                                                                    style="color: #707070 !important; height: 2px; margin: 0 !important; opacity: 0.8;">
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <div class="mx-3 row">
                                                                <div class="col-md-6 col-12 my-2">
                                                                    <div class="text-dark text-left p-3 h-100"
                                                                         style="border-radius: 15px; background:white;">
                                                                        <div class="py-2">
                                                                            <h5><b>Herkunft vom Lead</b></h5>
                                                                        </div>

                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Platform:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.campaign.name
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Kampagne:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.kampagne
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Grund:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.grund
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Teilnahme:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.teilnahme
                                                                                }}</span></span><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12 my-2">
                                                                    <div class="text-dark text-left p-3"
                                                                         style="border-radius: 15px; background:white;">
                                                                        <div class="py-1">
                                                                            <h5><b>Angaben</b></h5>
                                                                        </div>

                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Gerburstdatum:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.birthdate
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Haushalt:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.number_of_persons
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Telefon:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.telephone
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>PLZ, Ort:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.postal_code
                                                                                }}, {{ lead.city }} </span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Krankenkasse:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.krankenkasse
                                                                                }} </span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Bewertung KK:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.bewertung
                                                                                }} </span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Wichtig:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.wichtig
                                                                                }} </span></span><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"
                                                         style="border-top: none !important; display: block;">
                                                        <div v-if="role == 'fs'" class="row mx-4 pb-4">
                                                            <div class="col-6 col-sm-3">
                                                                <button type="button" class="btn m-1 w-100"
                                                                        style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                        data-bs-dismiss="modal"><b>Close</b></button>
                                                            </div>
                                                            <div class="col-6 col-sm-3 ">
                                                                <button class="btn fw-bold  m-1 fs-6 py-2 w-100"
                                                                        data-bs-dismiss="modal" data-bs-toggle="modal"
                                                                        :data-bs-target="'#' + lead.slug + 'rp'"
                                                                        style="background-color:#FF860D !important;color: #fff !important; border-radius: 8px !important;">
                                                                    Steht aus
                                                                </button>
                                                            </div>
                                                            <div class="col-6 col-sm-3">
                                                                <button class="btn fw-bold m-1 fs-6 w-100"
                                                                        data-bs-dismiss="modal" data-bs-toggle="modal"
                                                                        :data-bs-target="'#' + lead.slug + 'r'"
                                                                        style="background-color:#E50A10 !important; color: #fff !important; border-radius: 8px !important;">
                                                                    Abgelehnt
                                                                </button>
                                                            </div>
                                                            <div class="col-6 col-sm-3">
                                                                <a :href="'alead/' + lead.id"
                                                                   class="btn fw-bold fs-6  w-100  m-1"
                                                                   style="background-color:#4EC590 !important;color: #fff !important; border-radius: 8px !important;">
                                                                    Weiter
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="assigned-items p-0 p-sm-2 p-sm-3 m-2" data-bs-toggle="modal"
                                             :data-bs-target="'#' + lead.slug">
                                            <div class="namme mb-2 pt-2 pt-sm-0 px-2 px-sm-0">
                                                <span class="fs-4 fw-bold">{{ lead.first_name }} {{lead.last_name}}</span>
                                            </div>
                                            <div class="adresse row px-2 px-sm-0">
                                                <div class="col-6 pe-0 ">
                                                    <span class="">Adresse:</span>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="grayyy1 fw-500 ">{{ lead.address }}</span>
                                                </div>
                                            </div>
                                            <div class="haushalt row  px-2 px-sm-0">
                                                <div class="col-6 pe-0">
                                                    <span class="">Haushalt:</span>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="grayyy1 fw-500">{{ lead.number_of_persons }}</span>
                                                </div>
                                            </div>
                                            <div class="grund row  px-2 px-sm-0">
                                                <div class="col-6 pe-0">
                                                    <span class="">Grund:</span>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="grayyy1 fw-500">{{ lead.grund }}</span>
                                                </div>
                                            </div>
                                            <div class="kampagne row  px-2 px-sm-0">
                                                <div class="col-6 pe-0">
                                                    <span class="">Kampagne:</span>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="grayyy1 fw-500">{{ lead.kampagne }}</span>
                                                </div>
                                            </div>
                                            <div class="button-div my-2">
                                                <button class="btn px-0 px-sm-5 py-2 py-sm-1 fw-bold hhh" data-toggle="modal"
                                                        :data-target="'#' + lead.slug">
                                                    Lead öffnen
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-3 g-0">
                        <div class="lead-statistics py-1">
                            <div class="header px-3 px-sm-3">
                                <div class="fs-5">
                                    <span>Statistik der Leads</span>
                                </div>
                            </div>
                            <div class="content-wrapper1 mx-1">
                                <div class="content">
                                    <div class="py-2">
                                        <div class="instagram-div my-2 mx-3">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="33" viewBox="0 0 39 39">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect id="Rectangle_435" data-name="Rectangle 435" width="17.261"
                                                          height="17.215" fill="#88889d"/>
                                                </clipPath>
                                            </defs>
                                            <g id="Group_975" data-name="Group 975" transform="translate(-1519 -216)">
                                                <g id="Ellipse_386" data-name="Ellipse 386"
                                                   transform="translate(1519 216)" fill="none" stroke="#88889d"
                                                   stroke-width="2">
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
                                    </span>
                                            <span class="fs-5 fw-500 ps-2">
                                        Instagram: {{ instagram }}
                                    </span>
                                        </div>

                                        <div class="facebook-div my-2 mx-3">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" viewBox="0 0 39 39">
                                            <g id="Group_976" data-name="Group 976" transform="translate(-1519 -273)">
                                                <g id="Ellipse_384" data-name="Ellipse 384"
                                                   transform="translate(1519 273)" fill="none" stroke="#88889d"
                                                   stroke-width="2">
                                                    <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                    <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                                </g>
                                                <path id="Path_1922" data-name="Path 1922"
                                                      d="M7.032,4.474a1.227,1.227,0,0,1,1.14-1,5.118,5.118,0,0,1,.678-.04c.553-.01,1.1-.005,1.653-.005.06,0,.121-.01.191-.015V.135c-.2-.025-.387-.055-.578-.065C9.207.044,8.3-.031,7.394.014A4.23,4.23,0,0,0,4.219,1.5,4.326,4.326,0,0,0,3.27,3.646a8.592,8.592,0,0,0-.1,1.2c-.015.819-.005,1.637-.005,2.456,0,.211,0,.211-.2.211-.924,0-1.848,0-2.773-.005C.04,7.5,0,7.548,0,7.689Q.008,9.347,0,11c0,.141.045.176.181.176.929-.005,1.858,0,2.793,0h.181v9.162H6.967V11.18h.181c.929,0,1.858-.005,2.788,0,.141,0,.181-.045.2-.176.1-.784.2-1.567.3-2.351.045-.347.09-.688.136-1.035,0-.03-.005-.06-.005-.111h-.2c-1.075,0-2.155-.005-3.23,0-.136,0-.186-.03-.181-.176.005-.743-.005-1.487.005-2.235a3.242,3.242,0,0,1,.07-.623"
                                                      transform="translate(1533.105 282.378)" fill="#88889d"/>
                                            </g>
                                        </svg>
                                    </span>
                                            <span class="fs-5 fw-500 ps-2">
                                        Facebook: {{ facebook }}
                                    </span>
                                        </div>

                                        <div class="sana-div my-2 mx-3">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" viewBox="0 0 39 39">
                                            <g id="Group_977" data-name="Group 977" transform="translate(-1519 -331)">
                                                <g id="Ellipse_385" data-name="Ellipse 385"
                                                   transform="translate(1519 331)" fill="none" stroke="#88889d"
                                                   stroke-width="2">
                                                    <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                    <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                                </g>
                                                <path id="Path_1923" data-name="Path 1923"
                                                      d="M0,10.4a10.4,10.4,0,1,1,10.4,10.4A10.4,10.4,0,0,1,0,10.4m9.745-9A4.572,4.572,0,0,0,7.293,3.81,9.923,9.923,0,0,0,6.78,4.943a16.491,16.491,0,0,0,2.965.373ZM5.521,4.6a11.54,11.54,0,0,1,.625-1.4,8.763,8.763,0,0,1,.776-1.212A9.114,9.114,0,0,0,3.964,3.963,10.767,10.767,0,0,0,5.521,4.6ZM4.56,9.745a17.35,17.35,0,0,1,.567-3.909A11.826,11.826,0,0,1,3.093,4.97a9.055,9.055,0,0,0-1.77,4.775H4.56ZM6.379,6.184a16.015,16.015,0,0,0-.52,3.562H9.745V6.615a17.552,17.552,0,0,1-3.367-.431m4.666.43V9.745H14.93a16.09,16.09,0,0,0-.518-3.562,17.655,17.655,0,0,1-3.367.431ZM5.86,11.045a15.924,15.924,0,0,0,.518,3.562,17.7,17.7,0,0,1,3.367-.43V11.045Zm5.185,0v3.13a17.551,17.551,0,0,1,3.367.431,16,16,0,0,0,.52-3.562Zm-4.265,4.8a10.153,10.153,0,0,0,.513,1.133,4.581,4.581,0,0,0,2.452,2.41V15.476a16.491,16.491,0,0,0-2.965.373ZM6.923,18.8a8.652,8.652,0,0,1-.777-1.212,11.551,11.551,0,0,1-.625-1.4,10.87,10.87,0,0,0-1.557.637A9.114,9.114,0,0,0,6.922,18.8Zm-1.8-3.851a17.352,17.352,0,0,1-.568-3.909H1.323a9.044,9.044,0,0,0,1.77,4.775,11.8,11.8,0,0,1,2.034-.867M13.868,18.8a9.1,9.1,0,0,0,2.956-1.976,10.856,10.856,0,0,0-1.555-.637,11.444,11.444,0,0,1-.625,1.4,8.763,8.763,0,0,1-.776,1.212m-2.824-3.33v3.916A4.572,4.572,0,0,0,13.5,16.98a9.923,9.923,0,0,0,.513-1.133,16.38,16.38,0,0,0-2.965-.372Zm4.619-.521a11.8,11.8,0,0,1,2.034.867,9.044,9.044,0,0,0,1.77-4.775H16.232a17.352,17.352,0,0,1-.568,3.909m3.8-5.208A9.044,9.044,0,0,0,17.7,4.97a11.8,11.8,0,0,1-2.034.867,17.412,17.412,0,0,1,.568,3.909ZM14.644,3.2a11.747,11.747,0,0,1,.626,1.4,10.779,10.779,0,0,0,1.554-.637,9.1,9.1,0,0,0-2.956-1.975A8.727,8.727,0,0,1,14.644,3.2M14.01,4.943A10.214,10.214,0,0,0,13.5,3.81,4.577,4.577,0,0,0,11.045,1.4V5.314a16.491,16.491,0,0,0,2.965-.373Z"
                                                      transform="translate(1527.891 340.378)" fill="#88889d"/>
                                            </g>
                                        </svg>
                                    </span>
                                            <span class="fs-5 fw-500 ps-2">
                                         Sanascout: {{ sanascout }}
                                    </span>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <div class="history-div my-2 mx-3">
                                    <span>
                                        <svg id="Group_1118" data-name="Group 1118" xmlns="http://www.w3.org/2000/svg"
                                             width="33" viewBox="0 0 39 39.002">
                                            <path id="Path_1984" data-name="Path 1984"
                                                  d="M9.258,2.484C8.841,2.452,8.422,2.437,8,2.437V0q.72,0,1.436.054l-.18,2.43m4.884,1.1a16.918,16.918,0,0,0-2.4-.729L12.276.473a19.251,19.251,0,0,1,2.744.834L14.143,3.58m3.339,1.731q-.523-.347-1.07-.658l1.2-2.12A19.548,19.548,0,0,1,20,4.126L18.5,6.049c-.331-.258-.67-.5-1.019-.736Zm4.47,4.363a17.094,17.094,0,0,0-1.592-1.94l1.765-1.682A20.336,20.336,0,0,1,23.945,8.27Zm1.813,3.3q-.241-.581-.522-1.141l2.177-1.1a19.342,19.342,0,0,1,1.1,2.652l-2.315.763c-.132-.4-.275-.79-.436-1.177m1.292,6.11a17.171,17.171,0,0,0-.244-2.5l2.4-.414a19.622,19.622,0,0,1,.283,2.852l-2.437.061Zm-.319,3.749c.08-.414.146-.826.2-1.243l2.42.3a19.437,19.437,0,0,1-.561,2.815l-2.35-.651q.168-.6.292-1.221m-2.32,5.8A17.218,17.218,0,0,0,23.6,26.414l2.228.987a19.673,19.673,0,0,1-1.353,2.53l-2.06-1.3m-2.35,2.937q.446-.446.853-.921l1.847,1.592q-.468.545-.977,1.053l-1.723-1.723"
                                                  transform="translate(11.503)" fill="#0c71c3"/>
                                            <path id="Path_1985" data-name="Path 1985"
                                                  d="M19.506,2.437A17.061,17.061,0,1,0,31.571,31.564l1.723,1.723A19.5,19.5,0,1,1,19.506,0Z"
                                                  transform="translate(0 0)" fill="#0c71c3"/>
                                            <path id="Path_1986" data-name="Path 1986"
                                                  d="M8.222,3A1.219,1.219,0,0,1,9.44,4.219v12.7l7.916,4.524a1.219,1.219,0,0,1-1.209,2.116L7.617,18.682A1.218,1.218,0,0,1,7,17.624V4.219A1.219,1.219,0,0,1,8.222,3"
                                                  transform="translate(10.065 4.312)" fill="#0c71c3"/>
                                        </svg>

                                    </span>

                                            <a href="leadhistory" style="text-decoration: none;">
                                        <span class="fs-5 fw-500 ps-2 text-decoration-underline"
                                              style="color: #0c71c3;">
                                            Historie der Leads
                                        </span>
                                            </a>

                                        </div>


                                        <div class="reject-div my-2 mx-3">
                                    <span>
                                        <svg id="Group_1119" data-name="Group 1119" xmlns="http://www.w3.org/2000/svg"
                                             width="33" viewBox="0 0 39 39">
                                            <path id="Path_1987" data-name="Path 1987"
                                                  d="M19.5,36.563A17.063,17.063,0,1,1,36.562,19.5,17.062,17.062,0,0,1,19.5,36.563M19.5,39A19.5,19.5,0,1,0,0,19.5,19.5,19.5,0,0,0,19.5,39"
                                                  transform="translate(0 0)" fill="#b70000"/>
                                            <path id="Path_1988" data-name="Path 1988"
                                                  d="M4.857,4.857a1.217,1.217,0,0,1,1.723,0l0,0,6.45,6.452,6.45-6.452a1.22,1.22,0,0,1,1.726,1.726l-6.452,6.45,6.452,6.45a1.22,1.22,0,0,1-1.726,1.726l-6.45-6.452-6.45,6.452a1.22,1.22,0,1,1-1.726-1.726l6.452-6.45L4.857,6.583a1.217,1.217,0,0,1,0-1.723l0,0"
                                                  transform="translate(6.466 6.467)" fill="#b70000"/>
                                        </svg>

                                    </span>
                                            <a href="rleads" style="text-decoration: none; color: black;">
                                    <span class="fs-5 fw-500 ps-2  text-decoration-underline" style="color: #b70000;">
                                        Abgelehnte Leads
                                    </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section v-else>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12 col-md-12 col-lg-9 g-0">
                        <div class="assigned-leads1 mx-1 py-1 ">
                            <div class="header ps-3 ps-sm-3 d-flex justify-content-between">
                                <div class="fs-5">
                                    <span>Zugewiesene Leads</span>
                                </div>
                                <div class="count px-4 mt-3 h-100">
                                    <span class="fs-5"> {{cnt}} </span>
                                </div>
                            </div>
                            <div class="content p-2">
                                <div class="overflow-div1 p-0 row ms-1 ms-sm-3 me-2">
                                    <div class="col-12 col-sm-12 col-md-6 g-0" v-for="lead in leads">
                                        <div class="modal fade" :id="lead.slug" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content"
                                                     style="background: #f8f8f8; border-radius: 43px">
                                                    <div class="modal-header mx-3 pb-0"
                                                         style="border-bottom: none !important;">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"
                                                                style="opacity: 1 !important;"></button>
                                                    </div>
                                                    <div class="modal-body p-3">
                                                        <div class="row mx-3 my-auto">
                                                            <div class="col-12 col-md-4 my-auto">
                                                                <span class="fs-4 fw-bold text-dark">
                                                                  {{ lead.first_name }} {{ lead.last_name }}
                                                                </span>
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <div class="mt-sm-3 mt-1">
                                                            <div class="mx-3 pb-3 row">
                                                                <div class="col-md-6 col-12 my-2">
                                                                    <div class="text-dark text-left p-3 m-2 h-100"
                                                                         style="border-radius: 15px; background:white;">
                                                                        <div class="py-2">
                                                                            <h5><b>Herkunft vom Lead</b></h5>
                                                                        </div>

                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Platform:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.campaign.name
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Kampagne:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.kampagne
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Grund:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.grund
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Teilnahme:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.teilnahme
                                                                                }}</span></span><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12  my-2">
                                                                    <div class="text-dark text-left p-3 m-2"
                                                                         style="border-radius: 15px; background:white;">
                                                                        <div class="py-1">
                                                                            <h5><b>Angaben</b></h5>
                                                                        </div>

                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Gerburstdatum:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.birthdate
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Haushalt:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.number_of_persons
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Telefon:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.telephone
                                                                                }}</span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>PLZ, Ort:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.postal_code
                                                                                }}, {{ lead.city }} </span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Krankenkasse:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.krankenkasse
                                                                                }} </span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Bewertung KK:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.bewertung
                                                                                }} </span></span><br>
                                                                        </div>
                                                                        <div class="py-1">
                                                                            <span
                                                                                style="color: #000; font-weight: 500;"><b>Wichtig:</b> <span
                                                                                style="color: #88889D;"> {{
                                                                                    lead.wichtig
                                                                                }} </span></span><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"
                                                         style="border-top: none !important; display: block;">
                                                        <div class="text-center">
                                                            <button @click="getit2(lead.id)" type="button"
                                                                    class="py-2 px-5 fw-bold border-0 "
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#asign"
                                                                    style="background-color: #0C71C3; color: #fff; border-radius: 13px;">
                                                                Zuweisen
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-auto mx-1">
                                                <div class="form-check mt-3">
                                                    <input class="form-check-input" type="checkbox" :value="lead.id"
                                                           name="jep" @change="getit($event)"
                                                           id="flexCheckDefault">
                                                </div>
                                            </div>
                                            <div class="col ps-0" data-bs-toggle="modal"
                                                 :data-bs-target="'#' + lead.slug">
                                                <div class="assigned-items  p-0 p-sm-2 p-sm-3 m-2">
                                                    <div class="namme mb-2 pt-2 pt-sm-0 px-2 px-sm-0">
                                                        <span v-if="lead.wantsonline == 1" class="fs-4 fw-bold">{{
                                                                lead.first_name
                                                            }} {{ lead.last_name }} (Online)</span>
                                                        <span v-else class="fs-4 fw-bold">{{
                                                                lead.first_name
                                                            }} {{ lead.last_name }}</span>
                                                    </div>
                                                    <div class="adresse row px-2 px-sm-0">
                                                        <div class="col-6 pe-0 ">
                                                            <span class="">Adresse:</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <span class="grayyy1 fw-500 ">{{ lead.address }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="haushalt row  px-2 px-sm-0">
                                                        <div class="col-6 pe-0">
                                                            <span class="">Haushalt:</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <span class="grayyy1 fw-500">{{ lead.number_of_persons }} Personen</span>
                                                        </div>
                                                    </div>
                                                    <div class="grund  row  px-2 px-sm-0">
                                                        <div class="col-6 pe-0">
                                                            <span class="">Grund:</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <span class="grayyy1 fw-500">{{ lead.grund }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="kampagne row  px-2 px-sm-0">
                                                        <div class="col-6 pe-0">
                                                            <span class="">Kampagne:</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <span class="grayyy1 fw-500">{{ lead.kampagne }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="button-div my-2">
                                                        <button class="btn px-0 px-sm-5 py-2 py-sm-1 fw-bold" data-bs-toggle="modal"
                                                                :data-bs-target="'#' + lead.slug">
                                                            Lead öffnen
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="role != 'fs'" class=" py-2">
                                    <div class="button-div my-auto mx-3 mx-smmoda-5 py-3">
                                        <button type="submit" class="px-5 py-2 fs-4 btn" data-bs-toggle="modal"
                                                data-bs-target="#asign">
                                            Zuweisen
                                        </button>
                                    </div>
                                    <div class="modal fade" id="asign" tabindex="-1" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-3" style="border-radius: 23px !important;">
                                                <div class="modal-header" style="border-bottom: none !important;">
                                                    <h5 class="modal-title" id="exampleModalLabel">Zugewiesene
                                                        Leads</h5>
                                                    <button type="button" class="btn-close"
                                                            style="opacity: 1 !important;" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <label style="font-weight: 500 !important;">Field service</label>
                                                    <select class="form-select"
                                                            style="border: none !important; background-color: #EFEFEF"
                                                            @change="changeadmin($event)">
                                                        <option v-for="admin in admins" :value="admin.id">{{
                                                                admin.name
                                                            }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer"
                                                     style="display: block !important; border-top: none !important;">
                                                    <button @click="assign" class="btn"
                                                            style="background-color: #4EC590 !important; color: #fff !important; border-radius: 8px !important;">
                                                        <b>Assign</b></button>
                                                    <button type="button" @click="reloadthis()" class="btn"
                                                            data-bs-dismiss="modal"
                                                            style="background-color: #6C757D !important; color: #fff !important; border-radius: 8px !important;">
                                                        <b>Close</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-3 g-0">
                        <div class="lead-statistics1 py-1">
                            <div class="header px-3 px-sm-3">
                                <div class="fs-5">
                                    <span>Statistik der Leads</span>
                                </div>
                            </div>
                            <div class="content-wrapper mx-1">
                                <div class="content">
                                    <div class="py-2">
                                        <div class="instagram-div my-2 mx-3">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="33" viewBox="0 0 39 39">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect id="Rectangle_435" data-name="Rectangle 435" width="17.261"
                                                          height="17.215" fill="#88889d"/>
                                                </clipPath>
                                            </defs>
                                            <g id="Group_975" data-name="Group 975" transform="translate(-1519 -216)">
                                                <g id="Ellipse_386" data-name="Ellipse 386"
                                                   transform="translate(1519 216)" fill="none" stroke="#88889d"
                                                   stroke-width="2">
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
                                    </span>
                                            <span class="fs-5 fw-500 ps-2">
                                        Instagram: {{ instagram }}
                                    </span>
                                        </div>

                                        <div class="facebook-div my-2 mx-3">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" viewBox="0 0 39 39">
                                            <g id="Group_976" data-name="Group 976" transform="translate(-1519 -273)">
                                                <g id="Ellipse_384" data-name="Ellipse 384"
                                                   transform="translate(1519 273)" fill="none" stroke="#88889d"
                                                   stroke-width="2">
                                                    <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                    <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                                </g>
                                                <path id="Path_1922" data-name="Path 1922"
                                                      d="M7.032,4.474a1.227,1.227,0,0,1,1.14-1,5.118,5.118,0,0,1,.678-.04c.553-.01,1.1-.005,1.653-.005.06,0,.121-.01.191-.015V.135c-.2-.025-.387-.055-.578-.065C9.207.044,8.3-.031,7.394.014A4.23,4.23,0,0,0,4.219,1.5,4.326,4.326,0,0,0,3.27,3.646a8.592,8.592,0,0,0-.1,1.2c-.015.819-.005,1.637-.005,2.456,0,.211,0,.211-.2.211-.924,0-1.848,0-2.773-.005C.04,7.5,0,7.548,0,7.689Q.008,9.347,0,11c0,.141.045.176.181.176.929-.005,1.858,0,2.793,0h.181v9.162H6.967V11.18h.181c.929,0,1.858-.005,2.788,0,.141,0,.181-.045.2-.176.1-.784.2-1.567.3-2.351.045-.347.09-.688.136-1.035,0-.03-.005-.06-.005-.111h-.2c-1.075,0-2.155-.005-3.23,0-.136,0-.186-.03-.181-.176.005-.743-.005-1.487.005-2.235a3.242,3.242,0,0,1,.07-.623"
                                                      transform="translate(1533.105 282.378)" fill="#88889d"/>
                                            </g>
                                        </svg>
                                    </span>
                                            <span class="fs-5 fw-500 ps-2">
                                        Facebook: {{ facebook }}
                                    </span>
                                        </div>

                                        <div class="sana-div my-2 mx-3">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" viewBox="0 0 39 39">
                                            <g id="Group_977" data-name="Group 977" transform="translate(-1519 -331)">
                                                <g id="Ellipse_385" data-name="Ellipse 385"
                                                   transform="translate(1519 331)" fill="none" stroke="#88889d"
                                                   stroke-width="2">
                                                    <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                    <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                                </g>
                                                <path id="Path_1923" data-name="Path 1923"
                                                      d="M0,10.4a10.4,10.4,0,1,1,10.4,10.4A10.4,10.4,0,0,1,0,10.4m9.745-9A4.572,4.572,0,0,0,7.293,3.81,9.923,9.923,0,0,0,6.78,4.943a16.491,16.491,0,0,0,2.965.373ZM5.521,4.6a11.54,11.54,0,0,1,.625-1.4,8.763,8.763,0,0,1,.776-1.212A9.114,9.114,0,0,0,3.964,3.963,10.767,10.767,0,0,0,5.521,4.6ZM4.56,9.745a17.35,17.35,0,0,1,.567-3.909A11.826,11.826,0,0,1,3.093,4.97a9.055,9.055,0,0,0-1.77,4.775H4.56ZM6.379,6.184a16.015,16.015,0,0,0-.52,3.562H9.745V6.615a17.552,17.552,0,0,1-3.367-.431m4.666.43V9.745H14.93a16.09,16.09,0,0,0-.518-3.562,17.655,17.655,0,0,1-3.367.431ZM5.86,11.045a15.924,15.924,0,0,0,.518,3.562,17.7,17.7,0,0,1,3.367-.43V11.045Zm5.185,0v3.13a17.551,17.551,0,0,1,3.367.431,16,16,0,0,0,.52-3.562Zm-4.265,4.8a10.153,10.153,0,0,0,.513,1.133,4.581,4.581,0,0,0,2.452,2.41V15.476a16.491,16.491,0,0,0-2.965.373ZM6.923,18.8a8.652,8.652,0,0,1-.777-1.212,11.551,11.551,0,0,1-.625-1.4,10.87,10.87,0,0,0-1.557.637A9.114,9.114,0,0,0,6.922,18.8Zm-1.8-3.851a17.352,17.352,0,0,1-.568-3.909H1.323a9.044,9.044,0,0,0,1.77,4.775,11.8,11.8,0,0,1,2.034-.867M13.868,18.8a9.1,9.1,0,0,0,2.956-1.976,10.856,10.856,0,0,0-1.555-.637,11.444,11.444,0,0,1-.625,1.4,8.763,8.763,0,0,1-.776,1.212m-2.824-3.33v3.916A4.572,4.572,0,0,0,13.5,16.98a9.923,9.923,0,0,0,.513-1.133,16.38,16.38,0,0,0-2.965-.372Zm4.619-.521a11.8,11.8,0,0,1,2.034.867,9.044,9.044,0,0,0,1.77-4.775H16.232a17.352,17.352,0,0,1-.568,3.909m3.8-5.208A9.044,9.044,0,0,0,17.7,4.97a11.8,11.8,0,0,1-2.034.867,17.412,17.412,0,0,1,.568,3.909ZM14.644,3.2a11.747,11.747,0,0,1,.626,1.4,10.779,10.779,0,0,0,1.554-.637,9.1,9.1,0,0,0-2.956-1.975A8.727,8.727,0,0,1,14.644,3.2M14.01,4.943A10.214,10.214,0,0,0,13.5,3.81,4.577,4.577,0,0,0,11.045,1.4V5.314a16.491,16.491,0,0,0,2.965-.373Z"
                                                      transform="translate(1527.891 340.378)" fill="#88889d"/>
                                            </g>
                                        </svg>
                                    </span>
                                            <span class="fs-5 fw-500 ps-2">
                                        Sanascout: {{ sanascout }}
                                    </span>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <div class="history-div my-2 mx-3">
                                    <span>
                                        <svg id="Group_1118" data-name="Group 1118" xmlns="http://www.w3.org/2000/svg"
                                             width="33" viewBox="0 0 39 39.002">
                                            <path id="Path_1984" data-name="Path 1984"
                                                  d="M9.258,2.484C8.841,2.452,8.422,2.437,8,2.437V0q.72,0,1.436.054l-.18,2.43m4.884,1.1a16.918,16.918,0,0,0-2.4-.729L12.276.473a19.251,19.251,0,0,1,2.744.834L14.143,3.58m3.339,1.731q-.523-.347-1.07-.658l1.2-2.12A19.548,19.548,0,0,1,20,4.126L18.5,6.049c-.331-.258-.67-.5-1.019-.736Zm4.47,4.363a17.094,17.094,0,0,0-1.592-1.94l1.765-1.682A20.336,20.336,0,0,1,23.945,8.27Zm1.813,3.3q-.241-.581-.522-1.141l2.177-1.1a19.342,19.342,0,0,1,1.1,2.652l-2.315.763c-.132-.4-.275-.79-.436-1.177m1.292,6.11a17.171,17.171,0,0,0-.244-2.5l2.4-.414a19.622,19.622,0,0,1,.283,2.852l-2.437.061Zm-.319,3.749c.08-.414.146-.826.2-1.243l2.42.3a19.437,19.437,0,0,1-.561,2.815l-2.35-.651q.168-.6.292-1.221m-2.32,5.8A17.218,17.218,0,0,0,23.6,26.414l2.228.987a19.673,19.673,0,0,1-1.353,2.53l-2.06-1.3m-2.35,2.937q.446-.446.853-.921l1.847,1.592q-.468.545-.977,1.053l-1.723-1.723"
                                                  transform="translate(11.503)" fill="#0c71c3"/>
                                            <path id="Path_1985" data-name="Path 1985"
                                                  d="M19.506,2.437A17.061,17.061,0,1,0,31.571,31.564l1.723,1.723A19.5,19.5,0,1,1,19.506,0Z"
                                                  transform="translate(0 0)" fill="#0c71c3"/>
                                            <path id="Path_1986" data-name="Path 1986"
                                                  d="M8.222,3A1.219,1.219,0,0,1,9.44,4.219v12.7l7.916,4.524a1.219,1.219,0,0,1-1.209,2.116L7.617,18.682A1.218,1.218,0,0,1,7,17.624V4.219A1.219,1.219,0,0,1,8.222,3"
                                                  transform="translate(10.065 4.312)" fill="#0c71c3"/>
                                        </svg>

                                    </span>
                                            <a href="leadhistory" style="text-decoration: none; color: black;">
                                            <span class="fs-5 fw-500 ps-2 text-decoration-underline"
                                                  style="color: #0c71c3;">
                                            Historie der Leads
                                            </span>
                                            </a>
                                        </div>

                                        <div class="reject-div my-2 mx-3">
                                    <span>
                                        <svg id="Group_1119" data-name="Group 1119" xmlns="http://www.w3.org/2000/svg"
                                             width="33" viewBox="0 0 39 39">
                                            <path id="Path_1987" data-name="Path 1987"
                                                  d="M19.5,36.563A17.063,17.063,0,1,1,36.562,19.5,17.062,17.062,0,0,1,19.5,36.563M19.5,39A19.5,19.5,0,1,0,0,19.5,19.5,19.5,0,0,0,19.5,39"
                                                  transform="translate(0 0)" fill="#b70000"/>
                                            <path id="Path_1988" data-name="Path 1988"
                                                  d="M4.857,4.857a1.217,1.217,0,0,1,1.723,0l0,0,6.45,6.452,6.45-6.452a1.22,1.22,0,0,1,1.726,1.726l-6.452,6.45,6.452,6.45a1.22,1.22,0,0,1-1.726,1.726l-6.45-6.452-6.45,6.452a1.22,1.22,0,1,1-1.726-1.726l6.452-6.45L4.857,6.583a1.217,1.217,0,0,1,0-1.723l0,0"
                                                  transform="translate(6.466 6.467)" fill="#b70000"/>
                                        </svg>

                                    </span>
                                            <a href="rleads" style="text-decoration: none; color: black;">
                                            <span class="fs-5 fw-500 ps-2  text-decoration-underline"
                                                  style="color: #b70000;">
                                            Abgelehnte Leads
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
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
            sanascout: null,
            gati: false,
            cnt: 0
        };
    },
    mounted() {
        this.getleads();
    },
    methods: {
        reloadthis: function () {
            location.reload();
        },
        closeFunc: function (id) {
            $('.modal-backdrop').remove();
            // $('#'+id).modal('hide');

        },
        getleads: function () {
            axios.get("getleads").then((response) => {

                if (response.data != null) {
                    this.leads = response.data.leads.data;
                    this.admins = response.data.admins;

                    if (response.data.admins.length > 0) {
                        this.admin = response.data.admins[0].id;
                    }
                    this.role = response.data.admin[0];
                    this.instagram = response.data.instagram;
                    this.facebook = response.data.facebook;
                    this.sanascout = response.data.sanascout;
                    this.gati = true;
                    this.cnt = response.data.leads.data.length;
                }
            });
        },
        getit: function (event) {
            if (event.target.checked) {
                this.array.push(parseInt(event.target.value));
            } else {
                this.array.pop(parseInt(event.target.value));
            }
        },
        getit2: function (id) {
            this.array.push(id)
        },
        assign: function () {
            axios
                .get(
                    "assigntofs" + "/" + this.admin + "?array=" + this.array.toString()
                )
                .then(this.getleads(), this.array = [], this.hiq(), location.reload());
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

