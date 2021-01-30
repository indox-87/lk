        <div class="content-body">
            <div class="container-fluid">



<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Список задач</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>                                                                                               
                                                <th><strong id="1" class="sort_click">Имя пользователя</strong></th>
                                                <th><strong id="2" class="sort_click">Email</strong></th>
                                                <th><strong>Текст задачи</strong></th>
                                                <th><strong id="3" class="sort_click">Статус</strong></th>
                                                <th><strong>Edit</strong></th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                            <?php foreach ($list as $key => $value): ?>                           
                                       <tr>                                               
                                                <td><?= $value['fio']; ?></td>
                                                <td><?= $value['email']; ?></td>
                                                <td><?= $value['tasks']; ?></td>
                                                <td><span class="badge light badge-success">
                                                    <?php 
                                                    $status = $value['status'] == 1 ? 'Выполнено' : 'None';
                                                    $edit = $value['admin_edit'] == 1 ? 'отредактировано администратором' : ''; 
                                                    echo $status;
                                                    ?>
                                                        
                                                    </span> <br /><?= $edit ?></td>
                                                <td> 
                                                    <?php if($authorize == 1): ?><a href="/edit/<?php echo $value['id'];?>"> Edit</a>
                                                <?php else :?>-
                                                <?php endif; ?>                                                   

                                                </td>                                                
                                            </tr> 
                                            <?php endforeach; ?>                                                                                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <?php echo $pagination ?>
                    </div>
