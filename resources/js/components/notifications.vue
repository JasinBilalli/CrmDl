<template>
    <div class="mt-3 pe-4 mb-1">
        <button type="button" @click="openNotifyFunct(); readall();" class="btn btn-primary position-relative">
            <i class="far fa-bell"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
   <span style="font-size: 11px;"></span>
{{ notcnt }}
  </span>
        </button>
        <div class="btn-group dropdown dropdown-notifications sw-open" id="openNotification"
             style="position: absolute; display:none; right: 1rem; top: 3.2rem;">
            <div class="bg-white dropdown-container text-start" style="border: 1px solid black;border-radius: 8px; z-index: 150; min-width:368px;">
                <div class="dropdown-toolbar" style="z-index: 150">
                    <h3 class="dropdown-toolbar-title pt-2" style="padding-left:1rem; font-weight: 600">Aktuelle Meldungen</h3>
                    <hr class="m-0 g-0 p-0">
                    <div class="ms-3" style="z-index: 333; height: 42vh; overflow-y: scroll;">
                        <div class="notifications text-decoration-none coloriii" style="list-style:none;">
                            <div v-for="notification in notifications" v-html="notification.data"
                                 style="border-bottom: 1px solid #C8C8C8;" class="py-3">
                                {{ notification.time }}
                            </div>
                        </div>
                    </div>
                </div><!-- /dropdown-toolbar -->


            </div>
        </div>
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
    </div>
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
