    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Авторизация в личном кабинете<br>
                                    </h4>
                                    <form action="/account/login" method="POST" id="avtoriz">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>login</strong></label>
                                            <input type="text" name="login" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Пароль</strong></label>
                                            <input type="password" name="password" class="form-control" minlength="2" required>                                            
                                        </div>                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">ВХОД</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>