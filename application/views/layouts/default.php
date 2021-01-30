<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title; ?></title>   
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">   
    <link rel="stylesheet" href="/public/vendor/toastr/css/toastr.min.css">
    <link href="/public/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="/public/images/logo.png" alt="">
                <img class="logo-compact" src="/public/images/logo-text.png" alt="">
                <img class="brand-title" src="/public/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown show">

                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link dz-fullscreen primary" href="#">
									<svg id="Capa_1" enable-background="new 0 0 482.239 482.239" height="22" viewBox="0 0 482.239 482.239" width="22" xmlns="http://www.w3.org/2000/svg"><path d="m0 17.223v120.56h34.446v-103.337h103.337v-34.446h-120.56c-9.52 0-17.223 7.703-17.223 17.223z" fill=""/><path d="m465.016 0h-120.56v34.446h103.337v103.337h34.446v-120.56c0-9.52-7.703-17.223-17.223-17.223z" fill=""/><path d="m447.793 447.793h-103.337v34.446h120.56c9.52 0 17.223-7.703 17.223-17.223v-120.56h-34.446z" fill="" /><path d="m34.446 344.456h-34.446v120.56c0 9.52 7.703 17.223 17.223 17.223h120.56v-34.446h-103.337z" fill=""/></svg>
                                </a>
							</li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<div class="header-info">
										<span>Добро пожаловать:</strong></span>
									</div>
                                    <img src="/public/images/profile/pic1.jpg" width="20" alt=""/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
                <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="/" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Список задач</span>
						</a>
					</li>
                    <li><a href="/formtasks" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Добавление задач</span>
                        </a>
                    </li>
                    <?php if($authorize == 0) :?>
                    <li><a href="/account/login" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Авторизация</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if($authorize == 1) :?>
                        <li><a href="/account/logout" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Выход</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
			</div>
        </div>

        <?php echo $content; ?>

        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2021</p>
            </div>
        </div>
        
    </div>

    <script src="/public/vendor/global/global.min.js"></script>
	<script src="/public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/public/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/public/js/custom.min.js"></script>
	<script src="/public/js/deznav-init.js"></script>

    <script src="/public/vendor/toastr/js/toastr.min.js"></script>
    <script src="/public/js/plugins-init/toastr-init.js"></script>

    <script src="/public/js/post.js"></script>

</body>

</html>