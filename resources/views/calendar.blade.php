{{--@extends('template.navbar')--}}
{{--@section('content')--}}

{{--     <div class="row">--}}
{{--         <div class="col-md-7 col-lg-7">--}}
{{--            <calendar class="calendar-divider"></calendar>--}}
{{--</div>--}}
{{--<div class="col-md-5 col-lg-5">--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFBE1cuoGyzaiyvog5Zi6-tBvRwyXHiz8"></script>--}}

{{--<div class="gmap_canvas d-flex justify-content-center">--}}

{{--    <div id="map" style="z-index: 0 !important;width: 100% !important; height:70vh !important; border-radius: 15px !important;"></div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--      <div class="col-12 col-sm-12 col-md-12 col-lg-5 g-0 m-3">--}}
{{--          <div class="container">--}}
{{--              <div class="notice-box my-3">--}}
{{--                  <div class="mx-4 py-3">--}}
{{--                                <span class="fs-5 fw-600 title-div">--}}
{{--                                    Personal Appointment--}}
{{--                                </span>--}}
{{--                  </div>--}}
{{--                  <div class="notice-box-content mx-4"--}}
{{--                       style="height: 28vh; overflow-x: hidden; overflow-y: scroll;">--}}
{{--                      @foreach($personalApp as $perApp)--}}
{{--                          <div class="py-2 my-2 mx-2"--}}
{{--                               style="background-color: #fff; border-radius: 15px; color: #000;">--}}
{{--                              <div class="mx-3 ">--}}
{{--                                  <div class="row">--}}
{{--                                      <div class="col">--}}
{{--                                                <span class="fw-bold fs-5" style="font-family: 'Montserrat';">--}}
{{--                                                    {{$perApp->title}}--}}
{{--                                                </span>--}}
{{--                                      </div>--}}
{{--                                      <div class="col-1 text-end">--}}
{{--                                          <svg xmlns="http://www.w3.org/2000/svg" width="5" height="13"--}}
{{--                                               viewBox="0 0 5 13">--}}
{{--                                              <g id="Group_528" data-name="Group 528"--}}
{{--                                                 transform="translate(-0.239 0)">--}}
{{--                                                  <circle id="Ellipse_6" data-name="Ellipse 6" cx="2.5" cy="2.5"--}}
{{--                                                          r="2.5" transform="translate(0.239 0)" fill="#000" />--}}
{{--                                                  <circle id="Ellipse_7" data-name="Ellipse 7" cx="2.5" cy="2.5"--}}
{{--                                                          r="2.5" transform="translate(0.239 8)" fill="#000" />--}}
{{--                                              </g>--}}
{{--                                          </svg>--}}
{{--                                      </div>--}}
{{--                                  </div>--}}
{{--                                  <div class="">--}}
{{--                                            <span style="font-family: 'Montserrat';">--}}
{{--                                                Address: {{$perApp->address}}--}}
{{--                                            </span>--}}
{{--                                  </div>--}}
{{--                                  <div class="">--}}
{{--                                            <span style="font-family: 'Montserrat';">--}}
{{--                                                Date: {{$perApp->date}}--}}
{{--                                            </span>--}}
{{--                                  </div>--}}
{{--                                  <div class="">--}}
{{--                                            <span style="font-family: 'Montserrat';">--}}
{{--                                                Time: {{$perApp->time}}--}}
{{--                                            </span>--}}
{{--                                  </div>--}}
{{--                                  <div class="">--}}
{{--                                            <span style="font-family: 'Montserrat';">--}}
{{--                                                Comment: {{$perApp->comment}}--}}
{{--                                            </span>--}}
{{--                                  </div>--}}
{{--                              </div>--}}
{{--                          </div>--}}
{{--                      @endforeach--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}



{{--    <script type="text/javascript">--}}
{{--        var locations = [--}}
{{--            <?php--}}
{{--            foreach ($maps as $row3) {--}}
{{--                echo '["' . $row3->first_name . '", ' . $row3->latitude . ', ' . $row3->longitude . '],';--}}
{{--            }--}}
{{--            ?>--}}
{{--        ];--}}
{{--        var map = new google.maps.Map(document.getElementById('map'), {--}}
{{--            zoom: 4,--}}
{{--            center: new google.maps.LatLng(42.6026, 20.9030),--}}
{{--            mapTypeId: google.maps.MapTypeId.ROADMAP--}}
{{--        });--}}
{{--        var infowindow = new google.maps.InfoWindow();--}}
{{--        var marker;--}}
{{--        var i;--}}
{{--        for (i = 0; i < locations.length; i++) {--}}
{{--            marker = new google.maps.Marker({--}}
{{--                position: new google.maps.LatLng(locations[i][1], locations[i][2]),--}}
{{--                map: map--}}
{{--            });--}}
{{--            google.maps.event.addListener(marker, 'click', (function (marker, i) {--}}
{{--                return function () {--}}
{{--                    infowindow.setContent(locations[i][0]);--}}
{{--                    infowindow.open(map, marker);--}}
{{--                }--}}
{{--            })(marker, i));--}}
{{--        }--}}
{{--    </script>--}}



{{--@endsection--}}
{{--<style>--}}
{{--    .mapouter {--}}
{{--        position: relative;--}}
{{--    }--}}
{{--    .gmap_canvas {--}}
{{--        overflow: hidden;--}}
{{--        background: none !important;--}}
{{--    }--}}
{{--    .scroll-2 {--}}
{{--        height: 380px !important;--}}
{{--    }--}}
{{--    .calendar-divider {--}}
{{--        background-color: #efefef !important;--}}
{{--        border-radius: 15px !important;--}}
{{--    }--}}
{{--   .fw-600 {--}}
{{--         font-weight: 600;--}}
{{--     }--}}
{{--    .notice-box {--}}
{{--        background-color: #FFEBE5;--}}
{{--        border-radius: 35px;--}}
{{--    }--}}
{{--    .person-box-1 {--}}
{{--        background-color: #fff;--}}
{{--        border-radius: 15px;--}}
{{--    }--}}
{{--    .input-group select {--}}
{{--        border-radius: 7px !important;--}}
{{--        box-shadow: none !important;--}}
{{--    }--}}
{{--    .calendar-box {--}}
{{--        background-color: #EFEFEF;--}}
{{--        border-radius: 35px;--}}
{{--    }--}}
{{--    .person-box {--}}
{{--        color: #fff;--}}
{{--        font-weight: 600;--}}
{{--        border-radius: 15px;--}}
{{--        background-color: #4EC590;--}}
{{--    }--}}
{{--    .title-div {--}}
{{--        color: #5F5F5F;--}}
{{--        font-weight: 600;--}}
{{--    }--}}
{{--    body{--}}
{{--        overflow-x: hidden !important;--}}
{{--    }--}}
{{--</style>--}}
{{--<style>--}}
{{--    /*Per Notification */--}}
{{--    .coloriii a{--}}
{{--        color: black !important;--}}
{{--    }--}}
{{--</style>--}}
