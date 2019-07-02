@extends('backend.layout')
@section('title', 'Cài đặt')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Cài đặt</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Cài đặt</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">Important!</h4>
                <p>This section is available in Pike Admin PRO version.</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <form action="#" metthod="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <h3><i class="fa fa-file-text-o"></i> General settings</h3>
                            </div>
                            <!-- end card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Site Title</label>
                                    <input class="form-control" name="cfg_site_title" type="text" value="Pike PHP">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>SEO meta title</label>
                                        <input type="text" class="form-control" name="cfg_site_meta_title" value="Pike PHP - Web Development">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>SEO meta description</label>
                                        <input type="text" class="form-control" name="cfg_site_meta_description" value="Pike Admin - Free Bootstrap 4 Admin Theme">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>SEO meta keywords</label>
                                        <input type="text" class="form-control" name="cfg_site_meta_keywords" value="pike admin, bootstrap 4, free theme, free template">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>SEO meta author</label>
                                        <input type="text" class="form-control" name="cfg_site_meta_author" value="Pike Web Development">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Homepage content</label>
                                    <textarea rows="3" class="form-control editor" name="cfg_homepage_content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget placerat purus, et luctus velit. Donec eget risus et nunc fringilla sagittis non vel justo. Curabitur aliquet rhoncus magna, id pretium mi faucibus in. Phasellus venenatis erat quam, vitae tincidunt libero facilisis ac.</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">Change settings</button>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </form>
                    </div>
                    <!-- end card -->

                    <div class="card mb-3">
                            <form action="#" metthod="post" enctype="multipart/form-data">
                                <div class="card-header">
                                    <h3><i class="fa fa-file-text-o"></i> General settings</h3>
                                </div>
                                <!-- end card-header -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Footer HTML content</label>
                                        <textarea rows="3" class="form-control editor" name="cfg_footer_content">(c) Copyright 2017 Pike Web Development</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Analytics code</label>
                                        <textarea rows="4" class="form-control" name="cfg_analytics_code"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Facebook page</label>
                                            <input type="text" class="form-control" name="cfg_facebook_page" value="https://www.facebook.com/pikeweb">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Twitter page</label>
                                            <input type="text" class="form-control" name="cfg_twitter_page" value="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Google Maps API KEY</label>
                                            <input type="password" class="form-control" name="cfg_google_maps_api_key" value="xxxxxxxxxxxxxx>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Change logo image</label><br />
                                        <input type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary">Change settings</button>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </form>
                        </div>
                        <!-- end card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-envelope-o"></i> Test email settings</h3>
                            Send a test email using your settings
                        </div>
                        <!-- end card-header -->
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="form-group form-inline">
                                    <input type="text" class="form-control" name="test_email" placeholder="Input email">
                                    <button type="button" class="btn btn-primary">Send test email</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- END container-fluid -->
    </div>
@endsection