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
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="card mb-3">
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
                        </div>
                        <!-- end card -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-file-text-o"></i> Registration settings</h3>
                            </div>
                            <!-- end card-header -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Public registration</label>
                                        <select name="cfg_registration_enabled" class="form-control">
                                            <option value="0">Registration disabled</option>
                                            <option value="1">Registration enabled</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>User role for registered users</label>
                                        <select name="cfg_registration_user_role" class="form-control">
                                            <option value="">- select -</option>
                                            <option value="a">Administrator</option>
                                            <option value="ed">Editor</option>
                                            <option value="au">Author</option>
                                            <option value="u">User</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Users must confirm email address</label>
                                        <select name="cfg_registration_email_verification_enabled" class="form-control">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">Change settings</button>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-file-text-o"></i> Antispam settings</h3>
                                You can get an Google reCAPTCHA Site key and Secret key here: <a target="_blank" href="https://www.google.com/recaptcha/">https://www.google.com/recaptcha/</a>
                            </div>
                            <!-- end card-header -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>reCAPTCHA on register page</label>
                                        <select name="cfg_google_recaptcha_registration_enabled" class="form-control">
                                            <option value="0">Disabled</option>
                                            <option value="1">Enabled</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>reCAPTCHA on contact page form</label>
                                        <select name="cfg_google_recaptcha_contact_enabled" class="form-control">
                                            <option value="0">Disabled</option>
                                            <option value="1">Enabled</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Google reCAPTCHA Site key</label>
                                        <input type="password" class="form-control" name="cfg_google_recaptcha_site_key" value="xxxxxxxxxxxxxx">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Google reCAPTCHA Secret key</label>
                                        <input type="password" class="form-control" name="cfg_google_recaptcha_secret_key" value="xxxxxxxxxxxxxxx">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">Change settings</button>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-file-text-o"></i> Email settings</h3>
                            </div>
                            <!-- end card-header -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Site email address (From: email)</label>
                                        <input class="form-control" name="cfg_site_email" type="text" value="office@website.com">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Email name (From: name)</label>
                                        <input type="text" class="form-control" name="cfg_site_email_name" value="Office">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label>Mail sending option</label>
                                        <select name="cfg_mail_sending_option" class="form-control">
                                            <option value="php">PHP mailer (NOT recomended)</option>
                                            <option value="smtp">SMTP mailer (recomended)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>SMTP server</label>
                                        <input type="text" class="form-control" name="cfg_mail_smtp_server" value="smtp server">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>SMTP user</label>
                                        <input type="text" class="form-control" name="cfg_mail_smtp_user" value="username">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>SMTP password</label>
                                        <input type="password" class="form-control" name="cfg_mail_smtp_password" value="xxxxxxxxxx">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>SMTP port</label>
                                        <input type="text" class="form-control" name="cfg_mail_smtp_port" value="587">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>SMTP encryption</label>
                                        <select name="cfg_mail_smtp_encryption" class="form-control">
                                            <option value="tls">TLS</option>
                                            <option value="ssl">SSL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">Change settings</button>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </form>
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