
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar Riwayat Hidup</h3>
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
                        <h2>Profile <small></small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                    <img style="width: 250px; height: 200; border-radius: 80%;" class="img-responsive avatar-view" src="{{ asset('assets_admin/images/img.jpg') }}" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{ Auth::user()->name }}</h3>

                            <ul>
                                <li>No KTP</li> 1771078000087
                                <li>Email</li> {{ Auth::user()->email }}
                                <li>No Hp</li> 082188889292
                                <li>Tempat Lahir</li> Tanjung Barulak
                                <li>Tanggal Lahir</li> 09-05-1996
                            </ul>

                            {{--
                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                                </li>
                            </ul> --}}

                            <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br />

                            <!-- start skills -->
                            <h4>Skills</h4>
                            <ul class="list-unstyled user_data">
                                <li>
                                    <p>Web Applications</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Website Design</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>Automation & Testing</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>UI / UX</p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end of skills -->

                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>{{ Auth::user()->name }}</h2>
                                    <h2>{{ Auth::user()->email }}</h2>
                                </div>
                                {{--
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- start of user-activity-graph -->
                            <div id="graph_bar" style="width:10%; height:35px;"></div>
                            <!-- end of user-activity-graph -->

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <!-- <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Alamat</a>
                                    </li> -->
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Alamat</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Alamat Domisili</a>
                                    </li>
                                    {{--
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                                    </li> --}}
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    {{--
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                        <!-- start recent activity -->
                                        <ul class="messages">
                                            <li>
                                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-info">24</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Desmond Davison</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-error">21</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Brian Michaels</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                        <a href="#" data-original-title="">Download</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-info">24</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Desmond Davison</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="images/img.jpg" class="avatar" alt="Avatar">
                                                <div class="message_date">
                                                    <h3 class="date text-error">21</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Brian Michaels</h4>
                                                    <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                        <a href="#" data-original-title="">Download</a>
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>
                                        <!-- end recent activity -->

                                    </div> --}}
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                        <!-- start user projects -->
                                        <table class="data table table-striped no-margin">
                                            <thead>
                                                <tr>
                                                    <td class="fa fa-book"><b> Alamat KTP</b></td>
                                                    <tr>
                                                        <tr>

                                                            <th>Alamat Ktp</th>
                                                            <th>Provinsi</th>
                                                            <th>Kota/Kabupaten</th>
                                                            <th>Kecamatan</th>
                                                            <th>Kode Pos</th>
                                                        </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>duo koto malalo</td>
                                                    <td>sumatra barat</td>
                                                    </td>
                                                    <td>tanah datar</td>
                                                    </td>
                                                    <td>batipuh selatan</td>
                                                    </td>
                                                    <td>27266</td>
                                                </tr>
                                            </tbody>

                                            {{-- pendidikan --}}
                                            <thead>
                                                <tr>
                                                    <td class="fa fa-book"><b> Pendiidkan</b></td>
                                                    <tr>
                                                        <tr>

                                                            <th>SD</th>
                                                            <th>SMP/MTS</th>
                                                            <th>SMA/SMK/MA</th>

                                                        </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>03 pasar malalo</td>
                                                    <td>smp4 batipuh selatan</td>
                                                    </td>
                                                    <td>sma1 padang panjang</td>
                                                    </td>

                                                </tr>



                                            </tbody>
                                        </table>
                                        <!-- end user projects -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">

                                        <!-- start user projects -->
                                        <table class="data table table-striped no-margin">
                                            <thead>
                                                <tr>
                                                    <!-- <th>#</th> -->
                                                    <th>Alamat Domisili</th>
                                                    <th>Provinsi</th>
                                                    <th>Kota/Kabupaten</th>
                                                    <th>Kecamatan</th>
                                                    <th>Kode Pos</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td>#</td> -->
                                                    <td>padang</td>
                                                    <td>sumatra barat</td>
                                                    </td>
                                                    <td>tanah datar</td>
                                                    </td>
                                                    <td>batipuh selatan</td>
                                                    </td>
                                                    <td>27266</td>

                                                </tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end user projects -->

                                    </div>
                                    {{--
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
                                            beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk </p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
