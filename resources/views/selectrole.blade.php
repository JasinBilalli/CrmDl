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
    <link rel="icon" type="image/png" href="{{config('app.url')}}imgs/Favicon.png">
</head>



<body>
<div class="container-fluid col-12 col-sm-10 g-0" id="app">
    @if(Illuminate\Support\Facades\Session::has('msg'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            <strong>{!! Illuminate\Support\Facades\Session::get('msg') !!}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(Illuminate\Support\Facades\Session::has('fail'))
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
            <strong>{!! Illuminate\Support\Facades\Session::get('fail') !!}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

</div>
<section class="section_">
    <div class="my-auto p-5 div_">
        <div class="">
            <form action="{{route('loginas')}}" method="post" class="form1">
                @csrf
                <div class="text-start my-3">
                    <div class="">

              <span class="fw-bold fs-4 lh-1 text-center" id="span_hello_" style="font-family: 'Montserrat' !important;">
                Rolle auswählen
              </span>

                    </div>


                </div>


<select name="role" class="form-control">
    @foreach($roles as $role)
        <option value="{{$role}}">{{$role}}</option>
    @endforeach
</select>

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
    @media (max-width: 575.98px) {
        .div_ {
            box-shadow:none;
        }
    }
</style>
