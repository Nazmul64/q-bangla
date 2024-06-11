@extends('layouts.app')
<style>
    #wrapper {
        width: 1100px;
        margin: 0px auto 0px auto;
    }

    #wrapper {
        width: 1100px;
        margin: 0px auto;
    }

    div {
        display: block;
        unicode-bidi: isolate;
    }

    .mid_image {
        padding: 0px;
        width: 1100px;
    }

    .mid_image {
        width: 1080px;
        padding: 0px 10px;
        background: #FFFFFF;
    }


    div {
        display: block;
        unicode-bidi: isolate;
    }

    h2 {
        font-size: 24px;
        margin: 0 0 15px;
        padding: 10px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #333;
        font-weight: normal;
    }

    h2 {
        display: block;
        font-size: 1.5em;
        margin-block-start: 0.83em;
        margin-block-end: 0.83em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: bold;
        unicode-bidi: isolate;
    }

    table,
    div,
    p,
    a,
    input {
        font-size: 12px;
    }

    form {
        display: block;
        margin-top: 0em;
        unicode-bidi: isolate;
    }

    .input_field,
    input[type="text"],
    input[type="number"],
    input[type="password"] {
        width: 180px;
        padding: 4px 7px;
        background: #FAFAFA;
        border: 1px solid #AAA;
    }

    user agent stylesheet input[type="text" i] {
        padding-block: 1px;
        padding-inline: 2px;
    }


    .submit_btn,
    input[type="button"],
    input[type="submit"] {
        padding: 2px 5px;
        margin: 0px;
        background: #fff;
        border: 1px solid #AAA;
    }

    input[type="submit" i] {
        appearance: auto;
        user-select: none;
        align-items: flex-start;
        text-align: center;
        cursor: default;
        box-sizing: border-box;
        background-color: buttonface;
        color: buttontext;
        white-space: pre;
        padding-block: 1px;
        padding-inline: 6px;
        border-width: 2px;
        border-style: outset;
        border-color: buttonborder;
        border-image: initial;
    }

    input:not([type="file" i],
    [type="image" i],
    [type="checkbox" i],
    [type="radio" i]) {}

    input {
        font-style: ;
        font-variant-ligatures: ;
        font-variant-caps: ;
        font-variant-numeric: ;
        font-variant-east-asian: ;
        font-variant-alternates: ;
        font-variant-position: ;
        font-weight: ;
        font-stretch: ;
        font-size: ;
        font-family: ;
        font-optical-sizing: ;
        font-kerning: ;
        font-feature-settings: ;
        font-variation-settings: ;
        text-rendering: auto;
        color: fieldtext;
        letter-spacing: normal;
        word-spacing: normal;
        line-height: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        appearance: auto;
        -webkit-rtl-ordering: logical;
        cursor: text;
        background-color: field;
        margin: 0em;
        padding: 1px 0px;
        border-width: 2px;
        border-style: inset;
        border-color: light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        border-image: initial;
        padding-block: 1px;
        padding-inline: 2px;
    }

    table,
    div,
    p,
    a,
    input {
        font-size: 12px;
    }

    table[Attributes Style] {
        width: 100%;
        -webkit-border-horizontal-spacing: 5px;
        -webkit-border-vertical-spacing: 5px;
    }

    user agent stylesheet table {
        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;
        unicode-bidi: isolate;
        border-spacing: 2px;
        border-color: gray;
    }


    .table th,
    .table td {
        text-align: Center;
    }

    th {
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        text-align: -internal-center;
        unicode-bidi: isolate;
    }

    .table {
        border-top: 0;
        border-collapse: collapse;
    }

    table,
    div,
    p,
    a,
    input {
        font-size: 12px;
    }

    table {
        border-collapse: separate;
        text-indent: initial;
        border-spacing: 2px;
    }

    tr {
        display: table-row;
        vertical-align: inherit;
        unicode-bidi: isolate;
        border-color: inherit;
    }
</style>
@section('breadcrumb')
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('profile') }}">Profile</a></li>
            <li class="breadcrumb-item active">Starter</li>
        </ol>
    </div>
    <h4 class="page-title">Starter page</h4>
@endsection

@section('content')
    <div class="container-fluid">
        <div id="wrapper">
                    <div class="mid_image">
                        <div id="main_member">
                            <div class="main_bg about">
                                <h2 id="heading">Parent Team</h2>
                                <div>
                                    <form action="/reg/member/team_view.php" style="text-align:left;" method="post">
                                        <input type="text" name="user_id" value="">
                                        <input type="submit" value="View tree" id="submit">
                                    </form>
                                </div>
                                <br>
                                <table class="table table-responsive" width="100%" cellspacing="5" cellpadding="0">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Sponsor</th>
                                            <th>Designation</th>
                                            <th>Place</th>
                                            <th>Direct</th>
                                            <th>Members</th>
                                            <th>Trade Total</th>
                                            <th>Left Total</th>
                                            <th>Right Total</th>
                                            <th>Matched Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teams as $key => $team)
                                            <tr>
                                                <td><a href="{{ route('partnerTeam').'?mem_id='.$team->id }}" style="color: #0577B5">{{  $team->user_name }}</a></td>
                                                <td>{{  $team->sponsor_id }}</td>
                                                <td></td>
                                                <td>{{  $team->position_set }}</td>
                                                <td></td>
                                                <td></td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <script>
                                $("#demo img[title]").tooltip();
                            </script>

                        </div>
                    </div>
                </div>
    </div>
    <script src="https://www.etentvbd.net/reg/includes/js/jquery.tools.min.js"></script>
@endsection
