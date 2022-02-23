<template>
  <html>
    <body>
        <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <!-- <div id="plist" class="people-list">
                      <div class="pb-4" style="border-bottom: 2px solid #fff">
                        <div class="input-group">
                            <div class="my-auto btn send-file px-3" style="background-color: #d6d6d6;">
                                <span class="">
                                    <i class="fa fa-search text-white"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                      </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0" style="overflow: auto; height: 77vh;">
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Vincent Porter</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
                                </div>
                            </li>
                            <li class="clearfix active">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Aiden Chavez</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Mike Thomas</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Christian Kelly</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Monica Ward</div>
                                    <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Dean Henry</div>
                                    <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                    <div class="chat-about my-auto MT">
                                        <h5 class="m-b-0">Markus Jurgen</h5>
                                        <!-- <small>Last seen: 2 hours ago</small> -->
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 d-sm-none d-md-block text-end">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i
                                            class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                            class="fa fa-image"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-info"><i
                                            class="fa fa-cogs"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-warning"><i
                                            class="fa fa-question"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="chat-history" style="overflow: auto; height: 70vh;">
                            <ul class="m-b-0">
                                <li class="my-1" v-for="notification in messages">
                                    <div class="message other-message float-right my-1"> Hi Aiden, how are you? How is the
                                        project coming along? </div>
                                </li>
                                <li class="my-1">
                                    <div class="message-data">
                                        <!-- <span class="message-data-time">10:12 AM, Today</span> -->
                                    </div>
                                    <div class="message my-message my-1">Are we meeting today?</div>
                                </li>
                                
                                
                            </ul>
                        </div>
                      <div class="chat-message ">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" id="text" v-on:keyup.enter="sendmessage" placeholder="Enter text here...">
                                <div class="my-auto btn  px-3" style="background-color: #d6d6d6;" @click="sendmessage">
                                    <span class=" p">
                                        <i class="fa fa-send" style="font-size: 23px;"></i>
                                    </span>
                                </div>
                                <div class="my-auto btn send-file px-3"
                                    style="background-color: #d6d6d6;border-left:2px #f1f1f1 solid">
                                    <label for="file-input-0">
                                        <i class="fa fa-image" style="font-size: 23px;"></i>
                                    </label>
                                    <input type="file" id="file-input-0" class="svg-div w-100 border-0  g-0">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    </body>
  </html>
</template>
<script>
export default {
  data() {
    return {
      messages: [],
      pag: 1,
      url: "https://crm.kutiza.com/public/",
      cnt: 0,
        admin: null
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
  },
};
</script>
