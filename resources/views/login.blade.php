<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="css/style_all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>{{config('app.name')}}</title>
  <style>
    .div_{
      width: 400px !important;
    }
  </style>
  <link rel="icon" type="image/png" href="img/Favicon.png">
</head>

<body>
  <section class="section_">
    <div class="my-auto p-5 div_">
      <div class="">
        <form action="{{route('trylogin')}}" method="post" class="form1">
          @csrf
          <div class="text-start my-3">
            <div class="">
              <span class="fw-bold fs-4 lh-1" id="span_hello_" style="font-family: 'Montserrat' !important;">
                Hallo!
              </span>
            </div>
            <div class="">
              <span class="fs-5 fw-light lh-1" id="span_meldedich_" style="font-family: 'Montserrat' !important;">
                Melde dich an
              </span>
            </div>
          </div>
          <div class="input-group mb-3">
            <i class="">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="42" viewBox="0 0 57 57">
                <defs>
                  <clipPath id="clip-path">
                    <rect id="Rectangle_211" data-name="Rectangle 211" width="30.549" height="22.154" fill="#ffc541" />
                  </clipPath>
                </defs>
                <rect id="Rectangle_212" data-name="Rectangle 212" width="57" height="57" rx="14" fill="#615b39" />
                <g id="Group_319" data-name="Group 319" transform="translate(13.405 17.244)">
                  <g id="Group_318" data-name="Group 318" transform="translate(0 0)" clip-path="url(#clip-path)">
                    <path id="Path_229" data-name="Path 229" d="M28.226,22.153H2.324C.442,21.4,0,20.739,0,18.656V3.179A2.85,2.85,0,0,1,3.187,0H27.1c2.019,0,2.748.49,3.446,2.32V19.834a3.1,3.1,0,0,1-2.323,2.32M2.318,1.433c.142.17.207.262.285.34q5.82,5.793,11.644,11.581a1.346,1.346,0,0,0,2.165-.1Q22.13,7.569,27.843,1.876c.115-.114.215-.244.389-.443ZM19.546,12.026c-.776.791-1.508,1.562-2.266,2.307a2.7,2.7,0,0,1-4.019-.008c-.756-.748-1.482-1.525-2.151-2.215L2.568,20.7H28.146l-8.6-8.67M1.431,2.627V19.544L9.816,11.1,1.431,2.627M29.111,19.478V2.579l-8.38,8.445,8.38,8.454" transform="translate(0 0)" fill="#ffc541" />
                  </g>
                </g>
              </svg>
            </i>
            <input type="email" id="typeEmailX-2" name="email" style="font-family: 'Montserrat' !important; left: 5%;" class="form-control form-control-sm" />
            <span class="input-group-text bg-white pw_div__" id="basic-addon1" style="border: none;border-bottom: 1px solid #D3CDCD; border-radius: 0;">
            </span>
          </div>
          <div class="input-group mb-3">
            <i class="">
              <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 57 57">
                <g id="Group_778" data-name="Group 778" transform="translate(-373 -692)">
                  <rect id="Rectangle_213" data-name="Rectangle 213" width="57" height="57" rx="14" transform="translate(373 692)" fill="#613942" />
                  <g id="Group_320" data-name="Group 320" transform="translate(-376.173 66.844)">
                    <g id="Rectangle_205" data-name="Rectangle 205" transform="translate(766.179 647.318)" fill="none" stroke="#fe575f" stroke-width="1.5">
                      <rect width="22.988" height="19.704" rx="3" stroke="none" />
                      <rect x="0.75" y="0.75" width="21.488" height="18.204" rx="2.25" fill="none" />
                    </g>
                    <g id="Path_225" data-name="Path 225" transform="translate(771.525 640.29)" fill="none">
                      <path d="M6.015,0A5.784,5.784,0,0,1,12.03,5.521V8.589H0V5.521A5.784,5.784,0,0,1,6.015,0Z" stroke="none" />
                      <path d="M 6.014877796173096 1.500003337860107 C 3.525367736816406 1.500003337860107 1.499998092651367 3.303933620452881 1.499998092651367 5.521263122558594 L 1.499998092651367 7.088623523712158 L 10.52975749969482 7.088623523712158 L 10.52975749969482 5.521263122558594 C 10.52975749969482 3.303933620452881 8.504387855529785 1.500003337860107 6.014877796173096 1.500003337860107 M 6.014877796173096 3.814697265625e-06 C 9.336807250976562 3.814697265625e-06 12.02975749969482 2.471953392028809 12.02975749969482 5.521263122558594 L 12.02975749969482 8.588623046875 L -1.9073486328125e-06 8.588623046875 L -1.9073486328125e-06 5.521263122558594 C -1.9073486328125e-06 2.471953392028809 2.692947387695312 3.814697265625e-06 6.014877796173096 3.814697265625e-06 Z" stroke="none" fill="#fe575f" />
                    </g>
                    <circle id="Ellipse_21" data-name="Ellipse 21" cx="2.737" cy="2.737" r="2.737" transform="translate(774.936 654.981)" fill="#fe575f" />
                  </g>
                </g>
              </svg>
            </i>
            <input type="password" id="typePasswordX-2" name="password" style="font-family: 'Montserrat' !important; left: 5%;" class="form-control form-control-sm" />
            <span class="input-group-text bg-white pw_div__" id="basic-addon1" style="border: none;border-bottom: 1px solid #D3CDCD; border-radius: 0;">
              <i onclick="showpw();return false;" class="far fa-eye mt-3 mx-1" style="cursor:pointer;" id="show"></i>
            </span>
          </div>
          <div class="mb-2 mt-2 form-check">
            <input type="checkbox" class="form-check-input" style="border: 1px solid rgba(0,0,0,.25) !important;" id="remember" name="remember">
            <label class="form-check-label" for="remember" style="font-family: 'Montserrat' !important;">Remember me</label>
          </div>
          <div class="pt-2">
            <button type="submit" class="py-2 w-100 border-0 fw-bold btn_anmelden__" style="font-family: 'Montserrat' !important;">
              Anmelden
              <span class="ps-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.238" height="11.043" viewBox="0 0 25.238 11.043">
                  <g id="Group_453" data-name="Group 453" transform="translate(-1024.49 -740.198)">
                    <line id="Line_16" data-name="Line 16" x2="21.533" y2="0.22" transform="translate(1024.5 745.5)" fill="none" stroke="#fff" stroke-width="2" />
                    <path id="Polygon_2" data-name="Polygon 2" d="M5.521,0l5.521,9.662H0Z" transform="translate(1049.728 740.198) rotate(90)" fill="#fff" />
                  </g>
                </svg>
              </span>
            </button>
          </div>
          <div class="text-center mt-2">
            <span class="forgot__" style="font-family: 'Montserrat' !important; font-weight: 500">
              Forgot password?
            </span>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    var cnt = 1;

    function showpw() {
      if (cnt % 2 == 1) {
        document.getElementsByName("password")[0].setAttribute('type', 'text');
      } else {
        document.getElementsByName("password")[0].setAttribute('type', 'password');
      }
      cnt++;
    }
  </script>
</body>

</html>
<style>
  body {
    padding: 0 !important;
  }
</style>