<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Demo</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

<style>
    .sidebar{
    background: #191919;
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    height: 100%;
    padding: 20px 0;
    transition: all 0.5s ease;
    
    }
    .wrapper .sidebar .profile{
    margin-bottom: 30px;
    text-align: center;
}

.wrapper .sidebar .profile img{
    display: block;
    width: 310px;
    height: 80px;
    border-radius: 50%;
    margin: 0 auto;
}

.wrapper .sidebar .profile h3{
    color: #ffffff;
    margin: 10px 0 5px;
}

.wrapper .sidebar .profile p{
    color: rgb(206, 240, 253);
    font-size: 14px;
}
.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color: black;

    background: #fed758;
    border-right: 2px solid rgb(5, 68, 104);
    border-radius:15px;
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
    color: black;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
    display: block;
}
.wrapper .sidebar ul li a{
    display: block;
    padding: 13px 30px;
   
    color: rgb(241, 237, 237);
    font-size: 16px;
    position: relative;
}

.wrapper .sidebar ul li a .icon{
    color: #dee4ec;
    width: 30px;
    display: inline-block;
}

    </style>
</head>
<body class="bg-gray-100">
<div class="wrapper">
 <div class="sidebar" >
 <div class="profile">
                <img src="https://imagizer.imageshack.com/img922/4742/8UCmY5.png" alt="profile_picture">
               
               
            </div>
 <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fa fa-dashboard"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                        <span class="item">Calender</span>
                    </a>
                </li>
                <h5 style="color:#f9f9f9;padding:5%"> RECRUITMENT</h5>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-briefcase"></i></span>
                        <span class="item">Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Candidates</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-clone"></i></span>
                        <span class="item">My Referrals</span>
                    </a>
                </li>
                <h5 style="color:#f9f9f9;padding:5%"> ORGANIZATION</h5>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="item">Employee</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-sitemap"></i></span>
                        <span class="item">Structure</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
            </ul>
            

        </div>
        
        </div>
 </div>

</div>        


         @yield('content')




</body>
</html>