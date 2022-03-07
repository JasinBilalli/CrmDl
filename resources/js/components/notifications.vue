<template>
    <div class="notification-divvv22" >
        <div class="hover-visible-div" id="hoverVisibleDiv">
            <div class="txt-notif fs-6">
                You have {{ notcnt }} new notifications
            </div>
        </div>
        <div class="btn-group dropup">
            <button type="button" class="rounded-notid-icon dropdown-toggle" data-bs-toggle="dropdown"
                    id="dropdownFunct" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" fill="currentColor" class="bi bi-bell"
                     viewBox="0 0 16 16">
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                </svg>
            </button>
            <ul class="dropdown-menu px-2" aria-labelledby="dropdownFunct">
                <div class="fw-bold fs-5 py-2">Recent Notifications</div>
                <hr class="my-1 g-0 p-0">
                <div class="overflow-div2212" >
                    <div class="nottif-item p-2 m-1 " v-for="notification in notifications" v-html="notification.data">
                        <div class="fw-bold">{{ notification.time }}</div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <!--    <div class="">-->
    <!--        <div type="button" class="notification-divvv22" @click="openNotifyFunct(); readall();">-->
    <!--            <div class="hover-visible-div" id="hoverVisibleDiv">-->
    <!--                <div class="txt-notif fs-6">-->
    <!--                    You have {{ notcnt }} new notifications-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="rounded-notid-icon">-->
    <!--                <svg xmlns="http://www.w3.org/2000/svg" width="36" fill="currentColor" class="bi bi-bell"-->
    <!--                     viewBox="0 0 16 16">-->
    <!--                    <path-->
    <!--                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />-->
    <!--                </svg>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="btn-group dropdown dropdown-notifications sw-open" id="openNotification"-->
    <!--             style="position: absolute; display:none; right: 1rem; top: 3.2rem;">-->
    <!--            <div class="bg-white dropdown-container text-start" style="border: 1px solid black;border-radius: 8px; z-index: 150; min-width:368px;">-->
    <!--                <div class="dropdown-toolbar" style="z-index: 150">-->
    <!--                    <h3 class="dropdown-toolbar-title pt-2" style="padding-left:1rem; font-weight: 600">Aktuelle Meldungen</h3>-->
    <!--                    <hr class="m-0 g-0 p-0">-->
    <!--                    <div class="ms-3" style="z-index: 333; height: 42vh; overflow-y: scroll;">-->
    <!--                        <div class="notifications text-decoration-none coloriii" style="list-style:none;">-->
    <!--                            <div v-for="notification in notifications" v-html="notification.data"-->
    <!--                                 style="border-bottom: 1px solid #C8C8C8;" class="py-3">-->
    <!--                                {{ notification.time }}-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; /dropdown-toolbar &ndash;&gt;-->


    <!--            </div>-->
    <!--        </div>-->




    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Notifications</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <div class="text-center" v-for="notification in notifications" @click="readthat(notification.id)" v-if="notification.read_at == null" v-html="notification.data" style="text-decoration:none !important; background: #CCCCFF;">
            </div>
            <div v-else class="text-center" v-for="notification in notifications" @click="readthat(notification.id)" v-if="notification.read_at != null" v-html="notification.data" style="text-decoration:none !important;">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" @click="closenot" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div> -->



    <!--    </div>-->
</template>

<script>
export default {
    mounted() {
        this.getnotifications();
        setInterval(() => {
            this.getnotifications()
        }, 350);
    },
    data() {
        return {
            notifications: null,
            notf: false,
            notcnt: 0
        }
    },
    methods: {
        readall() {
            axios.get(this.url + 'readnotifications');
        },
        getnotifications() {
            axios.get(this.url + 'getnotifications').then((response) => {
                this.notifications = [];
                this.notifications = response.data.notifications;
                this.notcnt = response.data.cnt;
            });
        },
        openNotifyFunct: function () {
            $('#openNotification').slideToggle();
        }
    },
    props:{
        url: {required: false}
    }
}
</script>
