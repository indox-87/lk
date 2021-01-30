        <div class="content-body">
            <div class="container-fluid">
                <div class="row">


					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Добавление задачи</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

                                    <form action="/addtasks" method="POST" id="form">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Имя пользователя</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>                                       
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email"  required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Текст задачи</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="tasks" required></textarea>                                               
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