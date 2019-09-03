@extends('backend.layout')
@section('title', 'Tài khoản')
@section('main')
	<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Tài khoản</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Trang chủ</li>
                            <li class="breadcrumb-item active">Tài khoản</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            @if(session('message'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Important!</h4>
                    <p>This section is available in Pike Admin PRO version.</p>
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="pull-right"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-user-plus" aria-hidden="true"></i> Add new user</button></span>
                            <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new user</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Full name (required)</label>
                                                            <input class="form-control" name="name" type="text" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Valid Email (required)</label>
                                                            <input class="form-control" name="email" type="email" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Password (required)</label>
                                                            <input class="form-control" name="password" type="text" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Role</label>
                                                            <select name="role_id" class="form-control" required>
                                                                <option value="">- select -</option>
                                                                <optgroup label="Staff member">
                                                                    <option value="1">Administrator</option>
                                                                    <option value="2">Manager</option>
                                                                    <option value="3">Author</option>
                                                                </optgroup>
                                                                <optgroup label="Registered member">
                                                                    <option value="4">User</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Skype (optional)</label>
                                                            <input class="form-control" name="skype" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Email verified</label>
                                                            <select name="email_verified" class="form-control">
                                                                <option value="1">YES</option>
                                                                <option value="0">NO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Active</label>
                                                            <select name="active" class="form-control">
                                                                <option value="1">YES</option>
                                                                <option value="0">NO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Avatar image (optional):</label> <br />
                                                    <input type="file" name="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">Add user</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <h3><i class="fa fa-user"></i> All users (4 users)</h3>
                        </div>
                        <!-- end card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:50px">ID</th>
                                            <th>User details</th>
                                            <th style="width:130px">Role</th>
                                            <th style="width:150px">Articles</th>
                                            <th style="width:120px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key=>$dat)
                                            <tr>
                                                <th>{{++$key}}</th>
                                                <td>
                                                    <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="{{url('pike')}}/assets/images/avatars/avatar1.png" /></span>
                                                    <strong>{{!empty($dat->name)?$dat->name:''}}</strong> <br />
                                                    <small>{{$dat->email}}</small>
                                                </td>
                                                <td>Author</td>
                                                <td>0</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_5"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="javascript:deleteRecord_5('5');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    <script>
                                                        function deleteRecord_5(RecordId)
                                                    {
                                                        if (confirm('Confirm delete')) {
                                                            window.location.href = '#';
                                                        }
                                                    }
                                                    </script>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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