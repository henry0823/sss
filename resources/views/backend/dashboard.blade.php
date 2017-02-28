@extends('layouts/backend/template')

@section('main')

    <div class="profile-banner" style="background-image: url(https://scontent-tpe1-1.xx.fbcdn.net/v/t31.0-8/14882166_544343382438082_237764570842686193_o.jpg?oh=58a04e97fb5d071d67264a7489876fcb&oe=5936DC5F);">
        <div class="col-sm-3 avatar-container">
            <img src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/13938570_513749082164179_6810749639334050696_n.jpg?oh=b78aeaa5f17df5a7e5cbb1d6ca2b8094&oe=59731641" class="img-circle profile-avatar" alt="User avatar">
        </div>
        <div class="col-sm-12 profile-actions text-right">
            <!-- <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i> 申請開店</button> -->
            
            <a href="{{ url('backend/stores/create')}}" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i> 申請開店</a>
            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-ellipsis-v"></i></button>
        </div>
    </div>
    <p>
    <div class="row">
        <div class="col-sm-3">
            <!-- Begin user profile -->
            <div class="text-center user-profile-2">
                <br><br>
                <div class="widget">
                <div class="widget-content">

                </div>
            </div><!-- End div .box-info -->
                    
            </div><!-- End div .box-info -->
            <!-- Begin user profile -->
        </div><!-- End div .col-sm-4 -->
        <div class="col-sm-9">
            <div class="widget">
                <div class="widget-header">
                    <h2> <strong>方案</strong> 基本 <strong>到期日</strong> 1989/01/01</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                          <a class="hidden" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-cogs"></i>
                          </a>
                          <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                         <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <p>
                        商店名稱(domain)                        
                        O. 營業額
                        O. 總單量
                        O. 總客數
                    </p>
                </div>
                <div class="widget-footer">
                    <i class="fa fa-cogs"></i>
                    <button type="button" class="btn btn-success btn-sm pull-right">管理商店</button>   
                </div>                    
            </div>
        </div>            
        
    </div>
@stop
