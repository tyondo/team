@extends(config('tteam.views.layouts.master'))
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Team Details</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Team Details <small>Quick read</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="{{$team->team_image}}" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                                <h3>{{$team->name}}</h3>

                                <ul class="list-unstyled user_data">

                                    <li>
                                        <i class="fa fa-briefcase user-profile-icon"></i> {{$team->title}}
                                    </li>

                                    <li class="m-top-xs">
                                        <i class="fa fa-external-link user-profile-icon"></i>
                                        <a href="{{url('/')}}" target="_blank">Public Profile</a>
                                    </li>
                                </ul>

                                <a class="btn btn-success" href="{{route('tyondo.team.edit', $team->id)}}"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                                <br />
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                <div class="profile_title">
                                    <div class="col-md-6">
                                        <h2>Bio</h2>
                                    </div>

                                </div>
                                <div>
                                    {!! $team->bio !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

