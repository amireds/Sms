<div id="page-content">
    <!-- Quick Stats -->
    <div class="row text-center">
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong><?php echo $this->lang->line('dashboard1'); ?></strong>SMS</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen">0</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong><?php echo $this->lang->line('dashboard2'); ?></strong> SMS</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">24500</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-4">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong><?php echo $this->lang->line('dashboard3'); ?></strong> Left</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">1000</span></div>
            </a>
        </div>
    </div>
    <!-- END Quick Stats -->

    <!-- Overview Block -->
    <div class="block full">
        <!-- Overview Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle" data-toggle="dropdown">Lifetime <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="active">
                            <a href="javascript:void(0)">Lifetime</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">This Year</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">This Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">This Week</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Today</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h2><strong>Transaction</strong> Overview</h2>
        </div>
        <!-- END Overview Title -->

        <!-- Overview Content -->
        <div class="row">
            <div class="col-lg-12">
            	<div class="col-sm-6 col-lg-6 text-center">
                    <h3><strong class="animation-fadeInQuick">&#8358;73,500</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Spent</a></small></h3>
                </div>
                <div class="col-sm-6 col-lg-6 text-center">
                    <h3><strong class="animation-fadeInQuick">&#8358;3,000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Balance</a></small></h3>
                </div>
            </div>
            
            <div class="col-lg-12">
                <div id="chart-overview" style="height: 280px;"></div>
            </div>
        </div>
        <!-- END Overview Content -->
    </div>
    <!-- END Overview Block -->
</div>