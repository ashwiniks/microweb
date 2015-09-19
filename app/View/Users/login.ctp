

    <div class="container">
        <div class="row">
<div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                          echo $this->Form->create('User', array(
                              'url' => array(
                                  'controller' => 'users',
                                  'action' => 'login'
                              )
                          ));
                        ?>
                            <fieldset>
                                <?php echo $this->Session->Flash(); ?>
                                <div class="form-group">
                                  
                                    <?php echo $this->Form->input('User.username',array('class'=>'form-control','label'=>false,'placeholder'=>'username')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->input('User.password',array('class'=>'form-control','label'=>false,'placeholder'=>'password')); ?>
                                   
                                </div>
                               <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                            
                               <?php  echo $this->Form->end('Login',array('class'=>'btn btn-lg btn-success btn-block')); ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>