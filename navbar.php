<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/
4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>


<header id="home" class="header">
    <nav  class="nav">
        <div id="nav" class="navigation container">
            <div class="logo">
                <h1>News</h1>
            </div>
            <div style="display:ruby;">
            <a href="home.php" class="nav-item prev dropdown"><span></span>Home</a>
            <div class="dropdown">
            <a class=" dropdown" href="#" id="navbarDropdown admin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Log IN</a>
                        <div class="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdown">
                            <a id="admin" class="dropdown-item" style="color:#009688;" href="admin.php">Admin Log In</a>
                            <a id="user" class="dropdown-item" style="color:#009688;" href="user.php">User logIn</a>
                            <div class="dropdown-divider"></div>
                            <a id="register" class="dropdown-item"style="color:#009688;" href="signup.php">user Register</a>
                        </div>
</div>
<form action="search.php" method="POST">
                            <div class="search-box" id="search">
                                <input type="text" name="search" class="search-txt" placeholder="Search">
                                <button class="search-btn" name="submit" type="submit"><span></span>Search</button>
                    
                            </div>
                        </form>
</div>
            <div class="menu show">
                
                <ul class="nav-list">
                    <li class="nav-item dropdown">
                        <a id="follow" href="#foll" class="nav-link">Follow Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


</html>