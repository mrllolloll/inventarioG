@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="contenedor-login" >
            <div  class="panel panel-default" id="contenedor-login1">
               <div class="panel-heading" id="login">Login</div>
                <div class="panel-body" style="background-color:#f9fbff"> 
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" >
                            <label for="email" class="col-md-4 control-label" id="leyenda-login">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email"  type="email" class="form-control login-input" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label" id="leyenda-login">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control login-input" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-sm" id="login" >
                                    Login
                                </button>

                                <a class="btn btn-link" href="">
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
