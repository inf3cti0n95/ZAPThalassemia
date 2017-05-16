 <!--header start-->
        <header id="header" class="tt-nav transparent-header">

            <div class="header-sticky light-header">

                <div class="container">

                    <div class="search-wrapper">
                        <!--<div class="search-trigger pull-right">
                            <div class='search-btn'></div>
                            <i class="material-icons">&#xE8B6;</i>
                        </div>-->

                        <!-- Modal Search Form -->
                        <i class="search-close material-icons">&#xE5CD;</i>
                        <div class="search-form-wrapper">
                            <form action="#" class="white-form">
                                <div class="input-field">
                                    <input type="text" name="search" id="search">
                                    <label for="search" class="">Search Here...</label>
                                </div>
                                <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>
                                
                            </form>
                        </div>
                    </div>
                    <!-- /.search-wrapper -->
                
                    <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="index.php" class="logo-brand">
                            <img src="assets/img/logo.png" alt=""/>
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">
                            <li class="<?php if($page == "home")echo "active"; ?>"><a href="index.php">Home</a></li>
                            <li class="<?php if($page == "story")echo "active"; ?>" ><a href="stories.php">Stories</a></li>
                            <li class="<?php if($page == "report")echo "active"; ?>" ><a href="graph.php">Reports</a></li>


                            <?php 
                                $lgn = "";
                                $sgn="";
                                $prf="";
                                if($page == "login")
                                    $lgn="active";
                                elseif($page == "signup")
                                    $sgn = "active";
                                elseif($page == "profile")
                                    $prf = "active";

                                if(!$login) 
                                    echo "<li class='$lgn'><a href='login.php'>Login</a></li>
                                    <li  class='$sgn'><a href='signup.php'>SignUp</a></li>";
                                else{
                                    echo ' 

                                          <li class='.$prf.'><a href="#">Hello, '.$name.'</a>
                                        <ul class="dropdown">
                                          <li ><a href="profile.php">Profile</a></li>
                                          <li ><a href="addstory.php">Add Story</a></li>
                                          <li ><a href="addtip.php">Add Tip</a></li> ';
                                          
                                          if($isDoctor)
                                            echo '<li ><a href="adddata.php">Upload Patient Data</a></li>';
                                          
                                          echo '<li ><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                    ';
                                    }
                            ?>
                            
                            

                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>
        </header>
        <!--header end-->
