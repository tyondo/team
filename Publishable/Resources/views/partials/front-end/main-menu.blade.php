<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="main-logo">
                    <a href="{{url('/')}}"><img src="{{asset('vendor/musoni/images/logo/m-logo1.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-md-8 menu-column">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            {!! GenerateMenu::generateMenu(config('musoni-website-v5.menu'),config('musoni-website-v5.views.partials.navigation.links')) !!}
                        </ul>
                        <ul class="mobile-menu clearfix">
                            {!! GenerateMenu::generateMenu(config('musoni-website-v5.menu'),config('musoni-website-v5.views.partials.navigation.links')) !!}
                        </ul>
                    </div>
                </nav> <!-- End of #main_menu -->
            </div>
            {{--<div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content">
                        <div class="search_option">
                            <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>--}}
        </div>
    </div> <!-- End of .conatiner -->
</section>