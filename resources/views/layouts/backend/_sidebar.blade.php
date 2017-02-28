<!-- Left Sidebar Start -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="">
                    <a href="javascript:void(0);"><i class="fa fa-list-alt"></i><span>訂單管理</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul style="">
                        <li>
                            <a href="/backend/orders"><span>所有訂單</span></a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:void(0);"><i class="fa fa-users"></i><span>會員管理</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul style="">
                        <li>
                            <a href="/backend/olists"><span>消費名單</span></a>
                        </li>
                    </ul>
                </li>
                                                  
            </ul>                    
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->           
<!-- Right Sidebar Start -->
<div class="right side-menu">
    <ul class="nav nav-tabs nav-justified" id="right-tabs">
      <li class="active"><a href="#feed" data-toggle="tab" title="Live Feed"><i class="icon-rss-2"></i></a></li>
      <!-- <li><a href="#connect" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li> -->
      <!-- <li><a href="#settings" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li> -->
    </ul>
    <div class="clearfix"></div>
    <div class="tab-content">
        <div class="tab-pane active" id="feed">
            <div class="tab-inner slimscroller">
                <div class="panel-group" id="collapse">
                  <div class="panel panel-default">
                    <div class="panel-heading bg-orange-1">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
                          <i class="icon-bell-2"></i> 專案服務
                        </a>
                      </h4>
                    </div>
                    <div id="rnotifications" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <ul class="list-unstyled" id="notification-list">
                            <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-video"></i></span>外包設計 <span class="muted">頁面素材、包裝與識別</span></a></li>
                            <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-users-1"></i></span>系統客製 <span class="muted">自架官網、手機APP開發</span></a></li>
                            <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-picture-1"></i></span> 銷售顧問 <span class="muted">媒體採購、合作與建議</span></a></li>
                        </ul>
                        <a class="btn btn-block btn-sm btn-info">聯絡我們</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        

        <!-- <div class="tab-pane" id="settings">
            <div class="tab-inner slimscroller">
                <div class="col-sm-12">
                    <h3>Preferences</h3>
                    <div class="row">
                        <div class="col-xs-8">
                            Live data updates
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Live feeds
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Sync data to cloud
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Keep activity record
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm" checked />
                        </div>
                    </div>
                    <h4>Other Settings</h4>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="checkboxw"><input type="checkbox" checked> Autosave settings</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="checkboxw"><input type="checkbox"> Always online</label>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>