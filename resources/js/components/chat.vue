<template>
 <div class="container-fluid my-3">
        <div class="row ">
            <div class="col-lg-12 g-0">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="search-notif fixed-top " style="width:320px">
                            <div class="row px-2 g-0">
                                <div class="col g-0">
                                    <div class="d-flex p-2" style="align-items: center;">
                                        <div class="input-group">
                                            <div class="my-auto btn search-icon ps-3 pe-2">
                                                <span class="">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search Notifications">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto my-auto">
                                    <div class="message-page-button text-end pe-2">
                                        <button class="btn  bg-white" style="font-weight: 500;"
                                            onclick="showMssgFunct()">
                                            Messages
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="px-2 sectionn "
                            style="width: 319px; margin-bottom: 119px; bottom: 0; position: fixed;">
                            <ul class="list-unstyled chat-list overflow-11 my-2 pe-1"
                                style="overflow: auto; height: 90vh; padding-top: 120px;">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                                <li class="clearfix py-2 px-0">
                                    <!-- <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">  -->
                                    <div class="about">
                                        <div class="name">Lorem Ipsum</div>
                                        <div class="status py-1"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit
                                        </div>
                                        <div class="status-time">
                                            Yesterday, 13:30pm
                                        </div>
                                    </div>
                                </li>
                                <hr class="m-0 g-0 p-0">
                            </ul>
                        </div>
                        <div class="new-message-divv fixed-bottom d-flex justify-content-center">
                            <div class="">
                                <button class="btn-dark bg-white button-new-msg px-3 py-2 btn text-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 28.789 29.329">
                                        <g id="Group_1070" data-name="Group 1070" transform="translate(0)">
                                            <path id="Path_1959" data-name="Path 1959"
                                                d="M28.721,1.257A.915.915,0,0,0,27.531.066L.865,10.733a1.375,1.375,0,0,0-.229,2.436l9.158,5.825,2.8,4.41a.917.917,0,0,0,1.549-.983l-2.524-3.963L25.361,4.722l-3.472,8.685a.916.916,0,1,0,1.686.717l.013-.035ZM24.065,3.426,10.33,17.163,2.374,12.1,24.065,3.426"
                                                transform="translate(0)" fill="#535353" />
                                            <path id="Path_1960" data-name="Path 1960"
                                                d="M21.536,15.416A6.416,6.416,0,1,1,15.121,9a6.417,6.417,0,0,1,6.416,6.416M15.121,11.75a.917.917,0,0,0-.917.917V14.5H12.371a.917.917,0,1,0,0,1.833H14.2v1.833a.917.917,0,1,0,1.833,0V16.332H17.87a.917.917,0,0,0,0-1.833H16.037V12.666a.917.917,0,0,0-.917-.917"
                                                transform="translate(7.252 7.498)" fill="#535353" />
                                        </g>
                                    </svg>
                                    <span class="ps-2">New Notifications</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="chat" id="chatt">
                        <div class="chat-header clearfix fixed-top" style="margin-left:321px; align-items: center;">
                            <div class="row">
                                <div class="col col-lg-6">
                                    <div class="d-flex p-2" style="align-items: center;">
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="chat-about my-auto ">
                                            <div class="my-auto">lorem Ipsum</div>
                                            <!-- <small>Last seen: 2 hours ago</small>   -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto my-auto">
                                    <div class="notify-page-button text-end pe-2">
                                        <button class="btn bg-white" style="font-weight: 500;"
                                            onclick="showNotifFunct()">
                                            Notifications
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" style="margin-bottom: 120px; bottom: 0; position: fixed;">
                            <div class="chat-history overflow-22"
                                style="overflow: auto; height: 90vh;padding-top: 120px;">
                                <ul class="m-b-0">
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex">
                                        <!-- <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div> -->
                                        <div class="col-auto mx-2"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #fff;border:1px #70707080 solid;">
                                        </div>
                                        <div class="col message my-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                    </li>
                                    <li class="py-1 d-flex justify-content-end">
                                        <div class="col message other-message my-1">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                            enim ad
                                            minim veniam, quis nostrud exerci tation
                                        </div>
                                        <div class="col-auto mx-2 mt-auto"
                                            style="width: 40px;height: 40px;border-radius: 50%;background-color: #0C71C3;">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-message fixed-bottom p-3">
                            <div class="row">
                                <div class="col">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="col-auto g-0">
                                    <button type="button" class="btn send-button px-2 py-2 px-md-5 mb-1 m-md-1 py-md-1 w-100">
                                        <span class="desktop-send">Send</span>
                                        <span class="mobile-send">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                                                class="bi bi-send" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <br>
                                    <button type="button" class="btn send-button px-2 py-2 px-md-3 m-md-1 py-md-1 w-100">
                                       
                                        <label for="file-inp-4">
                                           <span class="desktop-send">
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                                                class="bi bi-file-earmark-image" viewBox="0 0 16 16">
                                                <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                <path
                                                    d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z" />
                                            </svg>
                                        </span>
                                        <span class="mobile-send">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                                                class="bi bi-file-earmark-image" viewBox="0 0 16 16">
                                                <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                <path
                                                    d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z" />
                                            </svg>
                                        </span>
                                        </label>
                                        <input type="file" id="file-inp-4">
                                    </button>
                                </div>
                                <!-- <span class="form-control input-text-22" id="exampleFormControlTextarea1" contenteditable
                                    placeholder="Enter text here..." rows=" "></span> -->
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
  data() {
    return {
      messages: [],
      pag: 1,
      cnt: 0
    };
  },
  mounted() {
    // this.getmessages();
    // setInterval(() => {
    //   this.getmessages();
    // }, 330);
    // axios.get(this.url + 'getadmin').then((response) => { this.admin = response.data;});
  },
  methods: {
    sendmessage() {
      if(document.getElementById('file-input-0').value == '' || document.getElementById('file-input-0').value == null){
      axios
        .get(
          this.url +
            "sendmessage/" +
            this.u1 +
            "/" +
            this.u2 +
            "?text=" +
            document.getElementById("text").value
        )
        .then((document.getElementById("text").value = ""));
      }
      else{
        var formdata = new FormData();
        var file = document.getElementById('file-input-0').files[0];
        formdata.append('file',file);
        axios.post(this.url + 'sendmessage/' + this.u1 + '/' + this.u2,
        formdata,{
headers:{
       'Content-Type' : 'multipart/form-data'
}
        }).then((document.getElementById('file-input-0').value = ""));
      }

    },
    getmessages() {
      axios
        .get(
          this.url + "getchat/" + this.u1 + "/" + this.u2 + "?page=" + this.pag
        )
        .then((response) => {
          this.messages = [];
          this.cnt = response.data.total;
          var cntt = 0;

          // if(this.messages.length == 0){
          for (let i = 0; i < this.cnt; i++) {
            this.messages.push(response.data.data[i]);
            this.messages[i].created_at = new Date(this.messages[i].created_at);
          }
        });
    },
  },

  props: {
    u1: {
      default: () => window.data.u1,
    },
    u2: {
      default: () => window.data.u2,
    },
    url:
      {required:false}
      ,
      admin:{
       
      }
  },
 
};
</script>
