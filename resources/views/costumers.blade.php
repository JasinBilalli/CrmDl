@extends('template.navbar')
@section('content')

    <body>
    <div class="desktop-kunden">
        <div class="suchen-div my-3 mx-4">
            <form method="post" action="{{route('search')}}">
                @csrf
                <div class="input-group">
                    <div class="suchen-style1 py-2 ps-4">
                        <svg id="Group_978" data-name="Group 978" xmlns="http://www.w3.org/2000/svg" width="28"
                             viewBox="0 0 32.504 28.358">
                            <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0)" fill="none" stroke="#000"
                               stroke-linecap="round" stroke-width="2">
                                <ellipse cx="12.438" cy="12.438" rx="12.438" ry="12.438" stroke="none"/>
                                <ellipse cx="12.438" cy="12.438" rx="11.438" ry="11.438" fill="none"/>
                            </g>
                            <line id="Line_4" data-name="Line 4" x2="8.532" y2="7.141"
                                  transform="translate(22.563 19.808)" fill="none" stroke="#000" stroke-linecap="round"
                                  stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="suchen-style2 py-2 pe-4">
                        <input type="text" class="ms-3 bg-transparent border-0 input-suchen" name="searchname"
                               placeholder="Suche (Kundenname, Vert )">

                    </div>
                </div>
            </form>
        </div>

        <div class="kunderportfolio-div mx-4 my-4">
            <div class="header kundenstyle1 px-3 py-3">
                <div class="d-flex justify-content-between ">
                    <span class="fs-5 fw-600">Kundenportfolio</span>
                    <div class="d-flex justify-content-end col my-auto input-group">
                        <a href="{{route('searchword')}}" style="text-decoration: none;color: #434343;cursor: pointer"
                           class="px-2 my-auto fw-600 border-0">

                            <svg xmlns="http://www.w3.org/2000/svg" width="23" fill="#000"
                                 class="bi bi-sort-down" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                            </svg>

                        </a>
                        <div class="dropdown  px-2 fw-600">
                            <button class="dropdown-toggle border-0 bg-transparent" type="button"
                                    id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.391" height="20.587"
                                 viewBox="0 0 28.391 27.587">
                                <g id="Group_980" data-name="Group 980" transform="translate(1.25)">
                                    <g id="Group_17" data-name="Group 17">
                                        <line id="Line_5" data-name="Line 5" x2="25.891" transform="translate(0 24.217)"
                                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
                                        <line id="Line_6" data-name="Line 6" x2="25.891" transform="translate(0 13.488)"
                                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
                                        <line id="Line_7" data-name="Line 7" x2="25.891" transform="translate(0 2.76)"
                                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5"/>
                                        <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(4.926 21.457)"
                                           stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none"/>
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none"/>
                                        </g>
                                        <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(16.186 10.728)"
                                           stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none"/>
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none"/>
                                        </g>
                                        <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)"
                                           stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none"/>
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>

                            </button>
                            <form method="post" action="{{route('search')}}" class="dropdown-menu px-2"
                                  aria-labelledby="dropdownMenuButton1">
                                @csrf
                                <label for="from-date" class="fw-600">Von</label>
                                <input type="date" class="dropdown-item" name="searchdate1">
                                <label for="to-date" class="fw-600">Zu</label>
                                <input type="date" class="dropdown-item" name="searchdate2">
                                <input type="submit"
                                       class="border-0 bg-secondary text-light fw-600 my-2 text-center rounded dropdown-item"
                                       value="Submit">
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="content kundenstyle2 px-3">
                <div class="table-responsive ovrflw " style="overflow: auto; height: 62vh;">
                    <table class="table table-borderless bg-white">
                        <thead style="border-bottom: 4px solid #fff !important;">
                        <tr class="bg-color1" style="border: none; border-bottom: 2px #fff solid !important;">
                            <th scope="col" class="header-styling">ID</th>
                            <th scope="col" class="header-styling">Vorname</th>
                            <th scope="col" class="header-styling">Nachname</th>
                            <th scope="col" class="header-styling">Mandatiert</th>
                            <th scope="col" class="header-styling">Abschlusse</th>
                            <th scope="col" class="header-styling">Pramiee</th>
                            <th scope="col" class="header-styling">Status</th>
                        </tr>
                        </thead>
                        <tbody id="body-table-edit"
                               style="cursor: pointer; border: none;border-bottom: 12px #fff solid;border-top: 5px #fff solid; border-radius: 30px !important;">
                        @if(!$data == [])
                            @for($i = 0; $i < count($data); $i++)
                                @php $leadss=$data[$i]->id * 1244;
                                $datId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                @endphp
                                @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                                    @if($family_person[$i]->kundportfolio == 0)
                                        <th data-bs-toggle="modal" data-bs-target="#rejectmodal" scope="row"
                                            class="fw-bold" style="font-weight: 400 !important;">{{$data[$i]->id}}</th>
                                        <td data-bs-toggle="modal" data-bs-target="#rejectmodal"
                                            class="fw-bold">{{$data[$i]->first_name}}</td>
                                        <td data-bs-toggle="modal" data-bs-target="#rejectmodal"
                                            class="fw-bold">{{$data[$i]->last_name}}</td>
                                    @else
                                        <tr onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <th scope="row" class="fw-bold"
                                                style="font-weight: 400 !important;">{{$data[$i]->id}}</th>
                                            <td class="fw-bold">{{$data[$i]->first_name}}</td>
                                            <td class="fw-bold">{{$data[$i]->last_name}}</td>
                                    @endif
                                @else
                                    @if($family_person[$i]->kundportfolio == 0)
                                        <tr onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <th scope="row" class="fw-bold"
                                                style="font-weight: 400 !important;">{{$data[$i]->id}}</th>
                                            <td class="fw-bold">{{$data[$i]->first_name}}</td>
                                            <td class="fw-bold">{{$data[$i]->last_name}}</td>
                                    @else
                                        <tr onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <th scope="row" class="fw-bold"
                                                style="font-weight: 400 !important;">{{$data[$i]->id}}</th>
                                            <td class="fw-bold">{{$data[$i]->first_name}}</td>
                                            <td class="fw-bold">{{$data[$i]->last_name}}</td>
                                            @endif
                                            @endif
                                            @if($mandatiert[$i]['mandatiert'])
                                                <td><span class="fw-bold">Ja</span></td>

                                            @else
                                                <td><span class="fw-bold">Nein</span></td>
                                            @endif


                                            @if(!empty($grundversicherungP[$i]))
                                                @if($grundversicherungP[$i]->status_PG == 'notselected')
                                                    <td class="py-5"></td>
                                                @else

                                                    <td class="fw-bold">
                                                        Grundversicherung @if($totaliGegen[$i]['totali'] > 1)
                                                            ({{$totaliGegen[$i]['totali']}})@endif</td>
                                                    <td class=""
                                                        style="color: #037241; font-weight: 900 !important;">{{$sumGegen[$i]['grsum']}}
                                                        CHF
                                                    </td>
                                                    @if($totaliGegen[$i]['totali'] > 1)
                                                    @php $offen= 0; @endphp
                                                    @foreach($statusGegen[$i]['statusGegen'] as $status)
                                                        @if($status->status_PG != 'Provisionert')
                                                            @php $offen++; break; @endphp
                                                          @endif
                                                    @endforeach
                                                    @if($offen > 0)
                                                            <td class="status1 border-0 fw-600 bg-warning"
                                                                style="padding:1px;"
                                                                id="status">OFFEN</td>
                                                        @else
                                                            <td class="status1 border-0 fw-600 bg-success"
                                                                style="padding:1px;"
                                                                id="status">PROVISIONERT</td>
                                                        @endif
                                                    @else


                                                    @if($grundversicherungP[$i]->status_PG == 'Aufgenomen')
                                                        <td class="status1 border-0 fw-600 greencol" id="status"
                                                            style="padding:1px;">
                                                            {{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                                    @endif
                                                    @if($grundversicherungP[$i]->status_PG == 'Offen')
                                                        <td class="status1 border-0 fw-600 bg-warning"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                                    @endif
                                                    @if($grundversicherungP[$i]->status_PG == 'Provisionert')
                                                        <td class="status1 border-0 fw-600 bg-success"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                                    @endif
                                                    @if($grundversicherungP[$i]->status_PG == 'Zuruckgezogen')
                                                        <td class="status1 border-0 fw-600 bg-secondary"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                                    @endif
                                                    @if($grundversicherungP[$i]->status_PG == 'Abgelehnt')
                                                        <td class="status1 border-0 fw-600 bg-danger"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                                    @endif
                                                        @endif
                                                @endif
                                            @endif
                                        </tr>
                                        <tr id="table-row-edit"
                                            onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            @if(!empty($retchsschutzP[$i]))
                                                @if($retchsschutzP[$i]->status_PR == 'notselected')
                                                @else
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fw-bold">Rechtsschutz</td>
                                                    <td style="color: #037241; font-weight: 900 !important;">{{$retchsschutzP[$i]->total_commisions_PR}}
                                                        CHF
                                                    </td>

                                                    @if($retchsschutzP[$i]->status_PR == 'Aufgenomen')
                                                        <td class="status1 greencol border-0 fw-600"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                                    @endif
                                                    @if($retchsschutzP[$i]->status_PR == 'Offen')
                                                        <td class="status1 border-0 fw-600 bg-warning"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                                    @endif
                                                    @if($retchsschutzP[$i]->status_PR == 'Provisionert')
                                                        <td class="status1 border-0 fw-600 bg-success"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                                    @endif
                                                    @if($retchsschutzP[$i]->status_PR == 'Zuruckgezogen')
                                                        <td class="status1 border-0 fw-600 bg-secondary"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                                    @endif
                                                    @if($retchsschutzP[$i]->status_PR == 'Abgelehnt')
                                                        <td class="status1 border-0 fw-600 bg-danger"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                                    @endif
                                                @endif
                                            @endif
                                        </tr>
                                        <tr id="table-row-edit"
                                            onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            @if(!empty($vorsorgeP[$i]))
                                                @if($vorsorgeP[$i]->status_PV == 'notselected')
                                                @else
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fw-bold">Vorsorge</td>
                                                    <td style="color: #037241; font-weight: 900 !important;">{{$vorsorgeP[$i]->total_commisions_PV}}
                                                        CHF
                                                    </td>
                                                    @if($vorsorgeP[$i]->status_PV == 'Aufgenomen')
                                                        <td class="status1 greencol border-0 fw-600"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                                    @endif
                                                    @if($vorsorgeP[$i]->status_PV == 'Offen')
                                                        <td class="status1 border-0 fw-600 bg-warning"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                                    @endif
                                                    @if($vorsorgeP[$i]->status_PV == 'Provisionert')
                                                        <td class="status1 border-0 fw-600 bg-success"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                                    @endif
                                                    @if($vorsorgeP[$i]->status_PV == 'Zuruckgezogen')
                                                        <td class="status1 border-0 fw-600 bg-secondary"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                                    @endif
                                                    @if($vorsorgeP[$i]->status_PV == 'Abgelehnt')
                                                        <td class="status1 border-0 fw-600 bg-danger"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                                    @endif
                                                @endif
                                            @endif
                                        </tr>
                                        <tr id="table-row-edit"
                                            onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            @if(!empty($zusatzversicherungP[$i]))
                                                @if($zusatzversicherungP[$i]->status_PZ == 'notselected')
                                                @else
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fw-bold">
                                                        Zusatzversicherung @if($totaliNeuen[$i]['netotali'] > 1)
                                                            ({{$totaliNeuen[$i]['netotali']}})@endif</td>
                                                    <td style="color: #037241; font-weight: 900 !important;">{{$sumNeuen[$i]['nesum']}}
                                                        CHF
                                                    </td>
                                                    @if($totaliNeuen[$i]['netotali'] > 1)
                                                        @php $offen= 0; @endphp
                                                        @foreach($statusNeuen[$i]['statusNeuen'] as $status)
                                                            @if($status->status_PZ != 'Provisionert')
                                                                @php $offen++; break; @endphp
                                                            @endif
                                                        @endforeach
                                                        @if($offen > 0)
                                                            <td class="status1 border-0 fw-600 bg-warning"
                                                                style="padding:1px;"
                                                                id="status">OFFEN</td>
                                                        @else
                                                            <td class="status1 border-0 fw-600 bg-success"
                                                                style="padding:1px;"
                                                                id="status">PROVISIONERT</td>
                                                        @endif
                                                    @else
                                                    @if($zusatzversicherungP[$i]->status_PZ == 'Aufgenomen')
                                                        <td class="status1 greencol border-0 fw-600"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                                    @endif
                                                    @if($zusatzversicherungP[$i]->status_PZ == 'Offen')
                                                        <td class="status1 border-0 fw-600 bg-warning"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                                    @endif
                                                    @if($zusatzversicherungP[$i]->status_PZ == 'Provisionert')
                                                        <td class="status1 border-0 fw-600 bg-success"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                                    @endif
                                                    @if($zusatzversicherungP[$i]->status_PZ == 'Zuruckgezogen')
                                                        <td class="status1 border-0 fw-600 bg-secondary"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                                    @endif
                                                    @if($zusatzversicherungP[$i]->status_PZ == 'Abgelehnt')
                                                        <td class="status1 border-0 fw-600 bg-danger"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                                    @endif
                                                    @endif
                                                @endif
                                            @endif
                                        </tr>
                                        <tr id="table-row-edit"
                                            onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            @if(!empty($autoversicherungP[$i]))
                                                @if($autoversicherungP[$i]->status_PA == 'notselected')
                                                @else
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fw-bold">Autoversicherung</td>
                                                    <td style="color: #037241; font-weight: 900 !important;">{{$autoversicherungP[$i]->total_commisions_PA}}
                                                        CHF
                                                    </td>
                                                    @if($autoversicherungP[$i]->status_PA == 'Aufgenomen')
                                                        <td class="status1 greencol border-0 fw-600"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                                    @endif
                                                    @if($autoversicherungP[$i]->status_PA == 'Offen')
                                                        <td class="status1 border-0 fw-600 bg-warning"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                                    @endif
                                                    @if($autoversicherungP[$i]->status_PA == 'Provisionert')
                                                        <td class="status1 border-0 fw-600 bg-success"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                                    @endif
                                                    @if($autoversicherungP[$i]->status_PA == 'Zuruckgezogen')
                                                        <td class="status1 border-0 fw-600 bg-secondary"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                                    @endif
                                                    @if($autoversicherungP[$i]->status_PA == 'Abgelehnt')
                                                        <td class="status1 border-0 fw-600 bg-danger"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                                    @endif
                                                @endif
                                            @endif
                                        </tr>
                                        <tr style="border-bottom:0.5px black solid;" id="table-row-edit"
                                            onclick="window.location.href='{{route('costumer_form', $datId)}}'"
                                            style=" border: none;border-bottom: 12px #F0F0F0 solid;">
                                            @if(!empty($hausratP[$i]))
                                                @if($hausratP[$i]->status_PH == 'notselected')
                                                @else
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fw-bold">Hausrat</td>
                                                    <td style="color: #037241; font-weight: 900 !important;">{{$hausratP[$i]->total_commisions_PH}}
                                                        CHF
                                                    </td>
                                                    @if($hausratP[$i]->status_PH == 'Aufgenomen')
                                                        <td class="status1 greencol border-0 fw-600"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                                    @endif
                                                    @if($hausratP[$i]->status_PH == 'Offen')
                                                        <td class="status1 border-0 fw-600 bg-warning"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                                    @endif
                                                    @if($hausratP[$i]->status_PH == 'Provisionert')
                                                        <td class="status1 border-0 fw-600 bg-success"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                                    @endif
                                                    @if($hausratP[$i]->status_PH == 'Zuruckgezogen')
                                                        <td class="status1 border-0 fw-600 bg-secondary"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                                    @endif
                                                    @if($hausratP[$i]->status_PH == 'Abgelehnt')
                                                        <td class="status1 border-0 fw-600 bg-danger"
                                                            style="padding:1px;"
                                                            id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                                    @endif
                                                @endif
                                            @endif
                                        </tr>
                                        <div class="modal fade" id="rejectmodal" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content"
                                                     style="background: #f8f8f8; border-radius: 43px">
                                                    <div class="modal-body p-3">
                                                        <div class="row">
                                                    <span style="font-size: 19px;" class="text-center">
                                                        You cant enter right now!
                                                    </span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer text-center"
                                                         style="border-top: none !important; display: block;">
                                                        <button type="button" class="btn px-3"
                                                                style=" color: #ffffff !important; background-color: #6C757D !important;border-radius: 8px !important;"
                                                                data-bs-dismiss="modal"><b>Close</b></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endfor
                                    @endif

                        </tbody>

                    </table>

                </div>
                <div class="d-flex justify-content-end pt-3 pb-5" style="background-color: #fff;">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70"
                         height="34" viewBox="0 0 97 34">
                        <defs>
                            <filter id="Path_281" x="71.499" y="5.284" width="18.08" height="23.433"
                                    filterUnits="userSpaceOnUse">
                                <feOffset input="SourceAlpha"/>
                                <feGaussianBlur stdDeviation="1" result="blur"/>
                                <feFlood flood-opacity="0.161"/>
                                <feComposite operator="in" in2="blur"/>
                                <feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <g id="Group_981" data-name="Group 981" transform="translate(-0.094)">
                            <g id="Group_757" data-name="Group 757">
                                <path id="Path_281-2" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631"
                                      transform="translate(20.684 24.316) rotate(180)" fill="none" stroke="#000"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(0.094)" fill="none"
                                   stroke="#000" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none"/>
                                    <circle cx="17" cy="17" r="16" fill="none"/>
                                </g>
                            </g>
                            <g id="Group_758" data-name="Group 758" transform="translate(97 34) rotate(180)">
                                <g transform="matrix(-1, 0, 0, -1, 96.91, 34)">
                                    <path id="Path_281-3" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631"
                                          transform="translate(75.9 9.68)" fill="none" stroke="#000"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </g>
                                <g id="Ellipse_55-2" data-name="Ellipse 55" transform="translate(-0.094)" fill="none"
                                   stroke="#000" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none"/>
                                    <circle cx="17" cy="17" r="16" fill="none"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>


    {{--    mobile--}}

    <div class="mobile-kunden container-fluid px-2">
        <div class="header py-4 my-2 mx-3">
            <span class="fs-1 fw-bold" style="color:#535353;">Kundenportfolio</span>
        </div>
        <div class="filters mx-3">
            <div class="row">
                <div class="col-12  g-0" id="inputShow">
                    <form method="post" action="{{route('search')}}">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="searchname"
                                   placeholder="Suche (Kundenname, Vert )">
                        </div>
                    </form>
                </div>
                <div class="col-6 g-0 " id="inputPress" onclick="NaBleronit();">
                    <div class="search-filter  m-1 py-2 text-center">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="#C5C7CD" class="bi bi-search"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col g-0 " id="ascDscSort">

                        <a href="{{route('searchword')}}" style="text-decoration: none;color: #434343;cursor: pointer"
                           class="">
                            <div class="date-filter m-1 py-2  text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20"  fill="#C5C7CD" class="bi bi-sort-down" viewBox="0 0 16 16">
                                <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                            </svg>
                            </div>
                        </a>

                </div>
                <div class="col px-0" id="filterSort">
                    <div class="sort-filter  m-1 py-2 text-center">
                        <div class="dropdown ">
                            <button class="dropdown-toggle border-0 bg-transparent" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 28.391 27.587">
                                        <g id="Group_980" data-name="Group 980" transform="translate(1.25)">
                                            <g id="Group_17" data-name="Group 17">
                                                <line id="Line_5" data-name="Line 5" x2="25.891"
                                                      transform="translate(0 24.217)" fill="none" stroke="#C5C7CD"
                                                      stroke-linecap="round" stroke-width="2.5"></line>
                                                <line id="Line_6" data-name="Line 6" x2="25.891"
                                                      transform="translate(0 13.488)" fill="none" stroke="#C5C7CD"
                                                      stroke-linecap="round" stroke-width="2.5"></line>
                                                <line id="Line_7" data-name="Line 7" x2="25.891"
                                                      transform="translate(0 2.76)" fill="none" stroke="#C5C7CD"
                                                      stroke-linecap="round" stroke-width="2.5"></line>
                                                <g id="Ellipse_4" data-name="Ellipse 4"
                                                   transform="translate(4.926 21.457)" stroke="#C5C7CD"
                                                   stroke-width="1">
                                                    <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none">
                                                    </ellipse>
                                                    <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none">
                                                    </ellipse>
                                                </g>
                                                <g id="Ellipse_5" data-name="Ellipse 5"
                                                   transform="translate(16.186 10.728)" stroke="#C5C7CD"
                                                   stroke-width="1">
                                                    <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none">
                                                    </ellipse>
                                                    <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none">
                                                    </ellipse>
                                                </g>
                                                <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)"
                                                   stroke="#C5C7CD" stroke-width="1">
                                                    <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none">
                                                    </ellipse>
                                                    <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none">
                                                    </ellipse>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>

                            </button>
                            <form method="post" action="{{route('search')}}" class="dropdown-menu px-2"
                                  aria-labelledby="dropdownMenuButton1">
                                @csrf
                                <label for="from-date" class="fw-600">From</label>
                                <input type="date" class="dropdown-item form-control" name="searchdate1">
                                <label for="to-date" class="fw-600">To</label>
                                <input type="date" class="dropdown-item" name="searchdate2">
                                <input type="submit"
                                       class="border-0 bg-secondary text-light fw-600 my-2 text-center rounded dropdown-item form-control"
                                       value="Submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="text-black" style="color: #fff !important; height: 2px; opacity: 1;">
        </div>
        <div class="content">
            <div class="overflow-content">
                @if(!$data == [])
                    @for($i = 0; $i < count($data); $i++)
                        @php $leadss=$data[$i]->id * 1244;
                        $datId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                        @endphp

                        <div class="content-box my-2 mx-3 px-1 px-2 py-2">
                            <div class="top">
                                @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                                    @if($family_person[$i]->kundportfolio == 0)
                                        <div class="name-div">
                                            <span class="fs-6">{{$data[$i]->first_name}} {{$data[$i]->last_name}} ({{$data[$i]->birthdate}})</span>
                                        </div>
                                    @else
                                        <div class="name-div"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <span class="fs-6">{{$data[$i]->first_name}} {{$data[$i]->last_name}} ({{$data[$i]->birthdate}})</span>
                                        </div>
                                    @endif
                                @else
                                    @if($family_person[$i]->kundportfolio == 0)
                                        <div class="name-div"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <span class="fs-6">{{$data[$i]->first_name}} {{$data[$i]->last_name}} ({{$data[$i]->birthdate}})</span>
                                        </div>
                                    @else
                                        <div class="name-div"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <span class="fs-6">{{$data[$i]->first_name}} {{$data[$i]->last_name}} ({{$data[$i]->birthdate}})</span>
                                        </div>
                                    @endif
                                @endif
                                @if($mandatiert[$i]['mandatiert'])
                                    <div class="mandatiert-div">
                                        <span class="fw-bold">Mandatiert</span>
                                    </div>
                                @else

                                @endif
                            </div>
                            <div class="info-divider">
                                @if(!empty($grundversicherungP[$i]))
                                    @if($grundversicherungP[$i]->status_PG == 'notselected')
                                    @else
                                        <div class="row my-1"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <div class="col-6">
                                                <div class="title-status">
                                                    <span>Grundversicherung @if($totaliGegen[$i]['totali'] > 1)
                                                            ({{$totaliGegen[$i]['totali']}})@endif</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                @if($totaliGegen[$i]['totali'] > 1)
                                                    @php $offen= 0; @endphp
                                                    @foreach($statusGegen[$i]['statusGegen'] as $status)
                                                        @if($status->status_PG != 'Provisionert')
                                                            @php $offen++; break; @endphp
                                                        @endif
                                                    @endforeach
                                                    @if($offen > 0)
                                                        <div class="status-check bg-warning  py-1">
                                                            <span>OFFEN</span>
                                                        </div>
                                                    @else
                                                        <div class="status-check bg-success py-1">
                                                            <span>PROVISIONERT</span>
                                                        </div>
                                                    @endif
                                                @else

                                                @if($grundversicherungP[$i]->status_PG == 'Aufgenomen')
                                                    <div class="status-check greencol py-1">
                                                        <span>{{strtoupper($grundversicherungP[$i]->status_PG)}}</span>
                                                    </div>
                                                @endif
                                                @if($grundversicherungP[$i]->status_PG == 'Offen')
                                                    <div class="status-check bg-warning py-1">
                                                        <span>{{strtoupper($grundversicherungP[$i]->status_PG)}}</span>
                                                    </div>
                                                @endif
                                                @if($grundversicherungP[$i]->status_PG == 'Provisionert')
                                                    <div class="status-check bg-success py-1">
                                                        <span>{{strtoupper($grundversicherungP[$i]->status_PG)}}</span>
                                                    </div>
                                                @endif
                                                @if($grundversicherungP[$i]->status_PG == 'Zuruckgezogen')
                                                    <div class="status-check bg-secondary py-1">
                                                        <span>{{strtoupper($grundversicherungP[$i]->status_PG)}}</span>
                                                    </div>
                                                @endif
                                                @if($grundversicherungP[$i]->status_PG == 'Abgelehnt')
                                                    <div class="status-check bg-danger py-1">
                                                        <span>{{strtoupper($grundversicherungP[$i]->status_PG)}}</span>
                                                    </div>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @if(!empty($retchsschutzP[$i]))
                                    @if($retchsschutzP[$i]->status_PR == 'notselected')
                                    @else
                                        <div class="row my-1"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <div class="col-6">
                                                <div class="title-status">
                                                    <span>Rechtsschutz</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                @if($retchsschutzP[$i]->status_PR == 'Aufgenomen')
                                                    <div class="status-check greencol py-1">
                                                        <span>{{strtoupper($retchsschutzP[$i]->status_PR)}}</span></div>
                                                @endif
                                                @if($retchsschutzP[$i]->status_PR == 'Offen')
                                                    <div class="status-check bg-warning py-1">
                                                        <span>{{strtoupper($retchsschutzP[$i]->status_PR)}}</span></div>
                                                @endif
                                                @if($retchsschutzP[$i]->status_PR == 'Provisionert')
                                                    <div class="status-check bg-success py-1">
                                                        <span>{{strtoupper($retchsschutzP[$i]->status_PR)}}</span></div>
                                                @endif
                                                @if($retchsschutzP[$i]->status_PR == 'Zuruckgezogen')
                                                    <div class="status-check bg-secondary py-1">
                                                        <span>{{strtoupper($retchsschutzP[$i]->status_PR)}}</span></div>
                                                @endif
                                                @if($retchsschutzP[$i]->status_PR == 'Abgelehnt')
                                                    <div class="status-check bg-danger py-1">
                                                        <span>{{strtoupper($retchsschutzP[$i]->status_PR)}}</span></div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @if(!empty($vorsorgeP[$i]))
                                    @if($vorsorgeP[$i]->status_PV == 'notselected')
                                    @else
                                        <div class="row my-1"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <div class="col-6">
                                                <div class="title-status">
                                                    <span>Vorsorge</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                @if($vorsorgeP[$i]->status_PV == 'Aufgenomen')
                                                    <div class="status-check greencol py-1">
                                                        <span>{{strtoupper($vorsorgeP[$i]->status_PV)}}</span></div>
                                                @endif
                                                @if($vorsorgeP[$i]->status_PV == 'Offen')
                                                    <div class="status-check bg-warning py-1">
                                                        <span>{{strtoupper($vorsorgeP[$i]->status_PV)}}</span></div>
                                                @endif
                                                @if($vorsorgeP[$i]->status_PV == 'Provisionert')
                                                    <div class="status-check bg-success py-1">
                                                        <span>{{strtoupper($vorsorgeP[$i]->status_PV)}}</span></div>
                                                @endif
                                                @if($vorsorgeP[$i]->status_PV == 'Zuruckgezogen')
                                                    <div class="status-check bg-secondary py-1">
                                                        <span>{{strtoupper($vorsorgeP[$i]->status_PV)}}</span></div>
                                                @endif
                                                @if($vorsorgeP[$i]->status_PV == 'Abgelehnt')
                                                    <div class="status-check bg-danger py-1">
                                                        <span>{{strtoupper($vorsorgeP[$i]->status_PV)}}</span></div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @if(!empty($zusatzversicherungP[$i]))
                                    @if($zusatzversicherungP[$i]->status_PZ == 'notselected')
                                    @else
                                        <div class="row my-1"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <div class="col-6">
                                                <div class="title-status">
                                                    <span>Zusatzversicherung @if($totaliNeuen[$i]['netotali'] > 1)
                                                            ({{$totaliNeuen[$i]['netotali']}})@endif</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                @if($totaliNeuen[$i]['netotali'] > 1)
                                                    @php $offen= 0; @endphp
                                                    @foreach($statusNeuen[$i]['statusNeuen'] as $status)
                                                        @if($status->status_PZ != 'Provisionert')
                                                            @php $offen++; break; @endphp
                                                        @endif
                                                    @endforeach
                                                    @if($offen > 0)
                                                        <div class="status-check bg-warning py-1">
                                                            <span>OFFEN</span>
                                                        </div>
                                                    @else
                                                        <div class="status-check bg-success py-1">
                                                            <span>PROVISIONERT</span>
                                                        </div>
                                                    @endif
                                                @else
                                                @if($zusatzversicherungP[$i]->status_PZ == 'Aufgenomen')
                                                    <div class="status-check greencol py-1">
                                                        <span>{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</span>
                                                    </div>
                                                @endif
                                                @if($zusatzversicherungP[$i]->status_PZ == 'Offen')
                                                    <div class="status-check bg-warning py-1">
                                                        <span>{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</span>
                                                    </div>
                                                @endif
                                                @if($zusatzversicherungP[$i]->status_PZ == 'Provisionert')
                                                    <div class="status-check bg-success py-1">
                                                        <span>{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</span>
                                                    </div>
                                                @endif
                                                @if($zusatzversicherungP[$i]->status_PZ == 'Zuruckgezogen')
                                                    <div class="status-check bg-secondary py-1">
                                                        <span>{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</span>
                                                    </div>
                                                @endif
                                                @if($zusatzversicherungP[$i]->status_PZ == 'Abgelehnt')
                                                    <div class="status-check bg-danger py-1">
                                                        <span>{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</span>
                                                    </div>
                                                @endif
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @if(!empty($autoversicherungP[$i]))
                                    @if($autoversicherungP[$i]->status_PA == 'notselected')
                                    @else
                                        <div class="row my-1"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <div class="col-6">
                                                <div class="title-status">
                                                    <span>Autoversicherung</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                @if($autoversicherungP[$i]->status_PA == 'Aufgenomen')
                                                    <div class="status-check greencol py-1">
                                                        <span>{{strtoupper($autoversicherungP[$i]->status_PA)}}</span>
                                                    </div>
                                                @endif
                                                @if($autoversicherungP[$i]->status_PA == 'Offen')
                                                    <div class="status-check bg-warning py-1">
                                                        <span>{{strtoupper($autoversicherungP[$i]->status_PA)}}</span>
                                                    </div>
                                                @endif
                                                @if($autoversicherungP[$i]->status_PA == 'Provisionert')
                                                    <div class="status-check bg-success py-1">
                                                        <span>{{strtoupper($autoversicherungP[$i]->status_PA)}}</span>
                                                    </div>
                                                @endif
                                                @if($autoversicherungP[$i]->status_PA == 'Zuruckgezogen')
                                                    <div class="status-check bg-secondary py-1">
                                                        <span>{{strtoupper($autoversicherungP[$i]->status_PA)}}</span>
                                                    </div>
                                                @endif
                                                @if($autoversicherungP[$i]->status_PA == 'Abgelehnt')
                                                    <div class="status-check bg-danger py-1">
                                                        <span>{{strtoupper($autoversicherungP[$i]->status_PA)}}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endif
                                @if(!empty($hausratP[$i]))
                                    @if($hausratP[$i]->status_PH == 'notselected')
                                    @else
                                        <div class="row my-1"
                                             onclick="window.location.href='{{route('costumer_form', $datId)}}'">
                                            <div class="col-6">
                                                <div class="title-status">
                                                    <span>Hausrat</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                @if($hausratP[$i]->status_PH == 'Aufgenomen')
                                                    <div class="status-check greencol py-1">
                                                        <span>{{strtoupper($hausratP[$i]->status_PH)}}</span></div>
                                                @endif
                                                @if($hausratP[$i]->status_PH == 'Offen')
                                                    <div class="status-check bg-warning py-1">
                                                        <span>{{strtoupper($hausratP[$i]->status_PH)}}</span></div>
                                                @endif
                                                @if($hausratP[$i]->status_PH == 'Provisionert')
                                                    <div class="status-check bg-success py-1">
                                                        <span>{{strtoupper($hausratP[$i]->status_PH)}}</span></div>
                                                @endif
                                                @if($hausratP[$i]->status_PH == 'Zuruckgezogen')
                                                    <div class="status-check bg-secondary py-1">
                                                        <span>{{strtoupper($hausratP[$i]->status_PH)}}</span></div>
                                                @endif
                                                @if($hausratP[$i]->status_PH == 'Abgelehnt')
                                                    <div class="status-check bg-danger py-1">
                                                        <span>{{strtoupper($hausratP[$i]->status_PH)}}</span></div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>

    </div>


    

 

    </body>
@endsection
<script>
        function NaBleronit() {
            document.getElementById("inputPress").style.display = "none";
            document.getElementById("inputShow").style.display = "block";
            document.getElementById("ascDscSort").classList.remove('col');
            document.getElementById("ascDscSort").classList.remove('col');
            document.getElementById("ascDscSort").classList.add('col-6');
            document.getElementById("filterSort").classList.add('col-6');
        }
    </script>
<style>
    /* overflow 1 */
    .ovrflw::-webkit-scrollbar {
        width: 4px;
        height: 4px;
    }

    /* Track */
    .ovrflw::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .ovrflw::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .ovrflw::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }

    .input-suchen:focus-visible {
        outline: none;

    }

    .suchen-style1 {
        background-color: #fff;
        border-radius: 0px;
        border-bottom: 0.5px solid black;
    }

    .suchen-style2 {
        background-color: #fff;
        border-radius: 0px;
        border-bottom: 0.5px solid black;
    }

    .dropdown button:after {
        display: none;
    }

    .header-styling {
        font-weight: 500 !important;
        color: #767676 !important;
        position: sticky !important;
        top: 0;
        background-color: #fff !important;
    }

    .table {
        margin-bottom: 0 !important;
    }

    #body-table-edit td {
        margin-top: 0.3rem !important;
        margin-bottom: 0.3rem !important;

    }

    #status {
        margin-left: 0.5rem;
        margin-right: 0.5rem;
    }

    .status1 {

        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .status2 {
        /*background-color: #239654 !important;*/
        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .status3 {
        /*background-color: #F1CA4B !important;*/
        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    table tbody {
        border-top: 15px solid white;
    }

    .bg-color1 {
        background-color: #F0F0F0;
    }

    .kundenstyle1 {
        background-color: #fff;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border: 1px solid #434343;
        border-bottom: none;
    }

    .kundenstyle2 {
        background-color: #fff;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border: 1px solid #434343;
        border-top: none;
    }

    .greencol {
        background-color: rgb(100, 199, 100) !important;
    }

    .openbtn {
        background-color: #30a56e;
        color: #fff1ff;
        padding-left: 35px;
        padding-right: 35px;
        padding-top: 1px;
        padding-bottom: 1px;
        border-radius: 5px;
    }

    .rejectbtn {
        background-color: #fa3737;
        color: #fff1ff;
        padding-left: 22px;
        padding-right: 22px;
        padding-top: 1px;
        padding-bottom: 1px;
        border-radius: 5px;
    }

    #body-table-edit td {
        margin-top: 0.3rem !important;
        margin-bottom: 0.3rem !important;
    }
</style>

{{--test--}}

<style>

    .desktop-kunden {
        display: block;
    }

    #inputShow {
        display: none;
    }

    .mandatiert-div {
        color: #64D4A4;
    }

    .name-div {
        color: #535353;
        font-weight: bold;
    }

    .title-status {
        color: #88889D;
        font-weight: 600;
        font-size: 15px;
    }

    .status-check {
        color: #fff;
        font-size: 13px;
        font-weight: bold;
        text-align: center;
        border-radius: 33px;
    }
    @media (max-width: 575.98px) {
        .status-check {
            font-size: 11px;
        }
        .title-status {
            font-size: 13px;
        }
    }

    .aufg-s {
        background-color: #6FCF97;
    }

    .prov-s {
        background-color: #219653;
    }

    .offen-s {
        background-color: #F2C94C;
    }

    .content-box {
        background-color: #fff;
        border-radius: 15px;
    }


    .overflow-content {
        overflow-x: hidden;
        overflow-y: auto;
        height: 70vh;
    }

    .date-filter {
        background-color: #fff;
        border-radius: 8px;
    }

    .sort-filter {
        background-color: #fff;
        border-radius: 8px;
    }

    .search-filter {
        background-color: #fff;
        border-radius: 8px;
    }

    .sort-filter svg {
        fill: #C5C7CD;
        stroke: #C5C7CD;
    }

    .dropdown button:after {
        display: none;
    }

    .mobile-kunden {
        display: none;
    }

    @media (max-width: 575.99px) {
        .mobile-kunden {
            display: block;
        }

        .desktop-kunden {
            display: none;
        }

        body {
            background-color: #F0F0F0 !important;
        }
    }
</style>
<style>
    /*Per Notification */
    .coloriii a {
        color: black !important;
    }
</style>

