<div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#">Eartistic System</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                                                <?php /*?><form class="navbar-search pull-left input-append" action="../search_results.php" method="POST">
                        <input type="text" class="span3" placeholder="Search for product....." name="product" required>
                        <button class="btn" type="submit">
                            <i class="icon-search"></i>
                        </button>
                        </form><?php */?>
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php
							if ($SEshoplogo == null) {
								print '<img src="../images/shop.png" class="nav-avatar" />';
							}else{
						      print '<img src="data:image/jpeg;base64,'.base64_encode($SEshoplogo ).'"  class="nav-avatar"/>';
							}
							?>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="account_settings.php">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                
                </div>