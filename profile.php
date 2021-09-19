<?php require 'includes/header.php'?>

    <div class="header">
        <div class="hdr"><a class="navbar-brand" href="index.php"><i class="fas fa-laptop-house"></i> Arab Freelancers #</a></div>
        <div class="hdrlist">   
            <ul>
                <li> <a href="#p">Portfolio</a> </li>
                <li> <a href="#about">About</a> </li>
                <li> <a href="#c">Contact</a> </li>
                <li> <a href="Admin/signout.php">Sign Out <i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="profile-pic">
        <img src="Images/profile-pic.jpg" alt="Ronaldo">
        
    </div>

    
    <div class="content">
        <h2>Ahmad Tarek Ebn Zeyad</h2>
        <h3>Full-Stack Web Developer</h3>
       <a href="https://www.facebook.com/" target="blank"><i class="fab fa-facebook" fa-4x style="color: #4267B3;font-size:20px"></i></a>
       <a href="https://twitter.com/" target="blank"><i class="fab fa-twitter" fa-4x style="color: #1DA1F2;font-size:20px"></i></a>
        <a href="https://www.youtube.com/" target="blank"><i class="fab fa-youtube" fa-4x style="color: #FF0000;font-size:20px"></i></a>

        <div id="p" class="portfolio">
            <h1>Portfolio</h1>
            <div>
                <img src="images/meeting.png">
                

            </div>

        </div>

        <div id="about" class="about">
                <h1 >About</h1>
                <p>Writing well designed, testable, efficient code by using best software development practices.
                     Creating website layout/user interfaces by using standard HTML/CSS practices
                    . Integrating data from various back-end services and databases.
                </p>

        </div>

        <div>
            <img src="images/profile.png" width="60%" height="500px"> 
        </div>

        <div id="c" class="contact">
                <h1>Contact</h1> 
            <div>       
                <form>
                    <input type="name" class="form-control" autofocus placeholder="Enter Your name">
                    <input type="password" required class="form-control" placeholder="Enter Your password">
                    <input type="email" required class="form-control" placeholder="Enter Your email">
                    <textarea name="message" class="form-control" placeholder="Enter Your message"></textarea>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>

<?php include'includes/footer.php'?>
    

    