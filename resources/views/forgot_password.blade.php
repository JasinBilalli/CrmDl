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
<section class="section_">
    <div class="my-auto p-5 div_">
        <div class="">
            <form action="{{route('forgot_password')}}" method="post" class="form1">
                @csrf
                <div class="text-center my-3">
                    <span class="fs-5 fw-light lh-1" id="span_meldedich_" style="font-family: 'Montserrat' !important;">
                        Passwort vergessen
                    </span>
                </div>
                @if(Illuminate\Support\Facades\Session::has('message'))
                    <div class="text-center">
                        <span  style="color: red; font-size: 14px;">**{!! Illuminate\Support\Facades\Session::get('message') !!}!</span>
                    </div>
                @endif
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
                    <input placeholder="Email" type="email" id="typeEmailX-2" name="email" style="font-family: 'Montserrat' !important; left: 5%;" class="form-control form-control-sm" />
                    <span class="input-group-text bg-white pw_div__" id="basic-addon1" style="border: none;border-bottom: 1px solid #D3CDCD; border-radius: 0;">
                    </span>
                </div>
                <div class="pt-2">
                    <button type="submit" class="py-2 w-100 border-0 fw-bold btn_anmelden__" style="font-family: 'Montserrat' !important;">
                        Senden
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
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
