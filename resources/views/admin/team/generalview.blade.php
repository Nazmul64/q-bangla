@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    #wrapper {
        width: 1100px;
        margin: 0px auto 0px auto;
    }

    #wrapper {
        width: 1100px;
        margin: 0px auto;
        overflow: auto !important;
    }

    table,
    div,
    p,
    a,
    input {
        font-size: 12px;
    }

    div {
        display: block;
        unicode-bidi: isolate;
    }

    td a,
    td a:link,
    td a:visited {
        color: #0D1666;
        text-decoration: none;
        line-height: 20px;
        justify-content: center;
        align-items: center;
        margin-left: 25px !important;
    }

    td {
        text-align: center;
        padding: 0px 0px;
    }

    td a,
    td a:link,
    td a:visited {
        color: #0D1666;
        text-decoration: none;
        line-height: 20px;
        margin-left: 99px;
    }

    td a,
    td a:link,
    td a:visited {
        color: #0D1666;
        text-decoration: none;
        line-height: 20px;
    }

    td a:hover {
        color: #000;
        text-decoration: none;
    }

    td img {
        z-index: 10000;
        border: none;
    }

    .tooltip {
        display: none;
        background: #0D1666;
        border: 1px solid #0D1666;
        font-size: 10px;
        height: 180px;
        width: 180px;
        padding: 10px;
        line-height: 20px;
    }


    .tooltip {
        color: #FFFFFF;
        margin: 50px 0px 0px 0px;
        -moz-border-radius: 15px;
        -webkit-border-radius: 15px;
        border-radius: 15px;
    }

    .tooltip b {
        font-size: 10px;
        display: inline-block;
        width: 100%;
    }

    td {
        text-align: center;
        padding: 0px 0px;
    }

    td a,
    td a:link,
    td a:visited {
        color: #0D1666;
        text-decoration: none;
        line-height: 20px;
    }

    td a:hover {
        color: #000;
        text-decoration: none;
    }

    td img {
        border: none;
    }

    .tooltip {
        display: none;
        background: #0D1666;
        border: 1px solid #0D1666;
        font-size: 10px;
        height: 180px;
        width: 180px;
        padding: 10px;
        line-height: 20px;
    }

    .tooltip {
        color: #FFFFFF;
        margin: 50px 0px 0px 0px;
        -moz-border-radius: 15px;
        -webkit-border-radius: 15px;
        border-radius: 15px;
    }

    .tooltip b {
        font-size: 10px;
        display: inline-block;
        width: 100%;
    }

    .tooltip b span {
        float: right;
    }

    #demo img {
        border: 0;
        cursor: pointer;
        margin: 0 8px;
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

    tbody {
        display: table-row-group;
        vertical-align: middle;
        unicode-bidi: isolate;
        border-color: inherit;
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

    th {
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        text-align: -internal-center;
        unicode-bidi: isolate;
    }

    table,
    div,
    p,
    a,
    input {
        font-size: 12px;
    }

    tr {
        display: table-row;
        vertical-align: inherit;
        unicode-bidi: isolate;
        border-color: inherit;
    }

    table[Attributes Style] {
        width: 100%;
        -webkit-border-horizontal-spacing: 0px;
        -webkit-border-vertical-spacing: 0px;
    }

    table {
        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;
        unicode-bidi: isolate;
        border-spacing: 2px;
        border-color: gray;
    }


    table {
        border-collapse: separate;
        text-indent: initial;
        border-spacing: 2px;
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

    .tooltip b span {
        float: right;
    }

    .main_bg {
        min-height: 390px;
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

    #main_member {
        padding: 10px 15px;
    }

    #main_member {
        padding: 10px 22px;
        min-height: 376px;
    }


    #demo img {
        border: 0;
        cursor: pointer;
        margin: 0 8px;
    }

    td a,
    td a:link,
    td a:visited {
        color: #0D1666;
        text-decoration: none;
        line-height: 15px;
        margin-right: 8px;
    }

    #wrapper {
        width: 100%;
        margin: 0px auto 0px auto;
    }

    .vertical-scroll {
        max-height: 700px;
        /* Set your desired height */
        margin-bottom: 50%;
        overflow-y: auto;
    }

    .parrent-partner{
        text-align: center;
        width: 100%;
        display: inline-flex;
        list-style: none;
        margin: 0px;
        padding: 0px;
    }
    .child-partner{
        width: 50%;

    }
    .parrent-partner .user-img{
        width: 12%;
        height: auto;
    }
    .parrent-partner .arrow_bellow_img{
        width: 52%;
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
                        <h2 id="heading">Genealogy View</h2>

                        <?php
                            $partners = [
                                [
                                    'name' => 'Dog 1',
                                    'childs' => [
                                        [
                                            'name' => 'Dog 1.1',
                                            'childs' => [
                                                [
                                                    'name' =>  'Dog 1.1.1',
                                                ],
                                                [
                                                    'name' =>  'Dog 1.1.2',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'name' => 'Dog 2',
                                    'childs' => [
                                        [
                                            'name' => 'Dog 2.1',
                                            'childs' => [
                                                [
                                                    'name' =>  'Dog 2.1.1',
                                                ],
                                                [
                                                    'name' =>  'Dog 2.1.2',
                                                ],
                                            ],
                                        ],
                                        [
                                            'name' => 'Dog 2.2',
                                        ],
                                    ],
                                ],
                            ];
                        ?>

                        <?php
                            function renderTree($userNmae) {
                                $leftPartner = DB::table('users')->select('id', 'name', 'user_name', 'position_set')->where('placement_id', $userNmae)->where('position_set', 'left')->first();
                                $ReftPartner = DB::table('users')->select('id', 'name', 'user_name', 'position_set')->where('placement_id', $userNmae)->where('position_set', 'right')->first();


                                    echo '<ul class="parrent-partner">';

                                        if($leftPartner?->id){
                                            echo '<li class="child-partner text-center '.$leftPartner?->position_set.'">';
                                            echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                            echo '<p class="name m-0 p-0"><strong>User ID:</strong> '.$leftPartner->user_name.'</p>';
                                            echo '<p class="name m-0 p-0"><strong>Full Name:</strong> '.$leftPartner->name.'</p>';
                                            echo '<img class="arrow_bellow_img" src="'.asset("dashboard/assets/images/arrow.png").'">';
                                            renderTree($leftPartner->user_name);
                                        }else{
                                            echo '<li class="child-partner text-center">';
                                            echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                            echo '<p class="name m-0 p-0"><a href="'.route('partnerAdd').'?position_set=left&placement_id='.$userNmae.'&sponsor_id='.$userNmae.'" class="name m-0 p-0">Register</a></p>';
                                            echo '</li>';
                                        }

                                        if($ReftPartner?->id){
                                            echo '<li class="child-partner text-center '.$ReftPartner?->position_set.'">';
                                            echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                            echo '<p class="name m-0 p-0"><strong>User ID:</strong> '.$ReftPartner->user_name.'</p>';
                                            echo '<p class="name m-0 p-0"><strong>Full Name:</strong> '.$ReftPartner->name.'</p>';
                                            echo '<img class="arrow_bellow_img" src="'.asset("dashboard/assets/images/arrow.png").'">';
                                            renderTree($ReftPartner->user_name);
                                            }else{
                                            echo '<li class="child-partner text-center">';
                                            echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                            echo '<p class="name m-0 p-0"><a href="'.route('partnerAdd').'?position_set=right&placement_id='.$userNmae.'&sponsor_id='.$userNmae.'" class="name m-0 p-0">Register</a></p>';
                                            echo '</li>';
                                        }

                                    echo '</ul>';

                                /*
                                echo '<ul class="parrent-partner">';
                                foreach ($partners as $partner) {
                                    echo '<li class="child-partner text-center">';
                                    echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                    echo '<p class="name m-0 p-0"><strong>User ID:</strong> '.$partner['name'].'</p>';
                                    echo '<p class="name m-0 p-0"><strong>Full Name:</strong> '.$partner['name'].'</p>';
                                    echo '<img class="arrow_bellow_img" src="'.asset("dashboard/assets/images/arrow.png").'">';


                                    if (false) {
                                        //renderTree($partner['childs']);
                                    }else{
                                        echo '<ul class="parrent-partner">';
                                        echo '<li class="child-partner text-center">';
                                        echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                        echo '<p class="name m-0 p-0"><a href="'.route('partnerAdd').'" class="name m-0 p-0">Register</a></p>';
                                        echo '</li>';

                                        echo '<li class="child-partner text-center">';
                                        echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                        echo '<p class="name m-0 p-0"><a href="'.route('partnerAdd').'" class="name m-0 p-0">Register</a></p>';
                                        echo '</li>';

                                        echo '</ul>';
                                    }
                                    echo '</li>';
                                }
                                echo '</ul>';
                                */
                            }
                        ?>

                        <ul class="parrent-partner" style="width: 100%;">
                            <li>
                                <img src="{{ asset("dashboard/assets/images/arrow_down.png") }}" style="width: 100px;">
                                <br>
                                <?php
                                    echo '<img class="user-img" src="'.asset("dashboard/assets/images/blank.png").'">';
                                    echo '<p class="name m-0 p-0"><strong>User ID:</strong> '.Auth::user()->user_name.'</p>';
                                    echo '<p class="name m-0 p-0"><strong>Full Name:</strong> '.Auth::user()->name.'</p>';
                                    echo '<img class="arrow_bellow_img" src="'.asset("dashboard/assets/images/arrow.png").'">';


                                    renderTree(Auth::user()->user_name);
                                ?>
                            </li>
                        </ul>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.etentvbd.net/reg/includes/js/jquery.tools.min.js"></script>
@endsection
