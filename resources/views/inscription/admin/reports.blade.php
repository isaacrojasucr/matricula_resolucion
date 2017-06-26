<html>
<head>
    <title></title>
</head>

<style>
    table {     font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 12px;    margin: 45px;     width: 480px; text-align: left;    border-collapse: collapse; }

    th {     font-size: 13px;     font-weight: normal;     padding: 8px;     background: #b9c9fe;
        border-top: 4px solid #aabcfe;    border-bottom: 1px solid #fff; color: #039; }

    td {    padding: 8px;     background: #e8edff;     border-bottom: 1px solid #fff;
        color: #669;    border-top: 1px solid transparent; }

    tr:hover td { background: #d0dafd; color: #339; }
</style>
<body>

<div class="container" id="content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group center">

                @for($i = 0; $i < count($central); $i++)

                    <div class="well center" style="background: white">
                        @if($id == 1)
                            <label>@lang('form.school')= "{{$careers[$i]->schools}}"</label>
                        @else
                            <label>@lang('form.carrer')= "{{$careers[$i]}}"</label>
                        @endif
                        <hr style="width:100%;">
                        </br>

                            <table >
                                <thead>
                                <tr style="font-weight: bold">
                                    <td>@lang('form.carne')</td>
                                    <td>@lang('form.name')</td>
                                    <td>@lang('form.average')</td>
                                    <td>@lang('form.course')</td>
                                    <td>@lang('form.group')</td>
                                    <td>@lang('form.timesAttended')</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($central[$i] as $item )
                                    <tr>
                                        <td>{{$item->carne}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->average}}</td>
                                        <td>{{$item->course}}</td>
                                        <td>{{$item->group}}</td>
                                        <td>{{$item->times}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                    </br>

                @endfor

                <div class="center">
                    <a class="btn btn-success col-md-6 col-md-offset-3" href="{{url('/pdf/sedes/'.$id)}}"> Exportar PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>