        <div class="content-body">
            <div class="container-fluid">
                <div class="row">


					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title"><?php echo $title;?></h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">                                    
                                    <form action="/edittasks" method="POST">                                        
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Текст задачи</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" minlength="3" name="tasks" required><? echo $list[0]['tasks'];?></textarea>
                                                <input type="hidden" name="id" value="<? echo $list[0]['id'];?>">                                              
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php $chek = ''; if($list[0]['status'] == 1) $chek = 'checked'; ?>
                                                    <input <?= $chek; ?> name="status" value="1" type="checkbox" class="custom-control-input" id="customCheckBox1">
                                                    <label class="custom-control-label" for="customCheckBox1">выполнено</label>
                                                </div>                                               
                                            </div>
                                        </div>                                 
                                            
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Сохранить</button>
                                            </div>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
					</div>                 


                </div>
            </div>
        </div>