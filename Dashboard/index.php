<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-cale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
       <link rel="stylesheet" type="text/css" href="../Dashboard/styles4.css">
    </head>
    <body>
        <div class="container">
            <div class="navigation">
                <ul>
                    
                    <li>
                        <a href="#">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <span class="title">Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Vendors/index.html">
                            <span class="icon" ><i class="fa fa-users" aria-hidden="true" ></i></span>
                            <span class="title">Vendors</span>
                         </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-utensils fa-lg"></i></span> 
                            <span class="title">Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                            <span class="title">Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                            <span class="title">Help</span>
                         </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                            <span class="title">Settings </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            <span class="title">Password </span>
                         </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                            <span class="title">Sign out </span>
                         </a>
                    </li>
                </ul>
            </div>

            <div class="main">
                <div class="topbar">
                    <div class="las la-bars fa-2x" onclick="toogleMenu();"></div>
                    <label>
                    <input class="text" placeholder="search here">
                </label>
                   
                      
                           
                        
                
                    <div class="user">
                        <!-- <img src="../images1/b6.jpg" style="height: 60px; width: 60px; margin-left: 900px;"> -->
                    </div>
                </div>

                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers">1,455</div>
                            <div class="cardName">Daily views</div>
                        </div>
                        <div class="iconBox">
                            <i class="fas fa-eye fa-lg" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">80</div>
                            <div class="cardName">Sales</div>
                        </div>
                        <div class="iconBox">
                            <i class="fas fa-shopping-cart fa-lg" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">200</div>
                            <div class="cardName">Comments</div>
                        </div>
                        <div class="iconBox">
                            <i class="fas fa-comments fa-lg" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">2,444</div>
                            <div class="cardName">Earnings</div>
                        </div>
                        <div class="iconBox">
                            <i class="fas fa-eye fa-lg" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent Orders</h2>
                            <a href="#" class="btn">View All</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Price</td>
                                    <td>Payment</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shawarma</td>
                                    <td>$12,000</td>
                                    <td>Paid</td>
                                    <td><span class=" Delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>cheesy italino</td>
                                    <td>$9,000</td>
                                    <td>Due</td>
                                    <td><span class="Pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>chessy grilled</td>
                                    <td>$1,000</td>
                                    <td>Due</td>
                                    <td><span class="Return">Return</span></td>
                                </tr>
                                <tr>
                                    <td>spicy panner</td>
                                    <td>$700</td>
                                    <td>Paid</td>
                                    <td><span class="inprogress">Processing</span></td>
                                </tr>
                                <tr>
                                    <td>chicken lollipop</td>
                                    <td>$100</td>
                                    <td>Due</td>
                                    <td><span class="Return">Return</span></td>
                                </tr>
                                <tr>
                                    <td>chicken panner</td>
                                    <td>$500</td>
                                    <td>Paid</td>
                                    <td><span class="Delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>crispy panner</td>
                                    <td>$750</td>
                                    <td>Due</td>
                                    <td><span class="inprogress">Processing</span></td>
                                </tr>
                                <tr>
                                    <td>crispy tenders</td>
                                    <td>$900</td>
                                    <td>Due</td>
                                    <td><span class="Return">Return</span></td>
                                </tr>   
                                <tr>
                                    <td>spicy panner</td>
                                    <td>$200</td>
                                    <td>Paid</td>
                                    <td><span class="Delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>cheesy italino</td>
                                    <td>$500</td>
                                    <td>Paid</td>
                                    <td><span class="inprogress">Processing</span></td>
                                </tr>
                                <tr>
                                    <td>shawarma</td>
                                    <td>$1,300</td>
                                    <td>Due</td>
                                    <td><span class="Return">Return</span></td>
                                </tr>
                                <tr>
                                    <td>shushi</td>
                                    <td>$1,500</td>
                                    <td>Paid</td>
                                    <td><span class="Delivered">Delivered</span></td>
                                </tr>  <tr>
                                    <td>spicy tenders</td>
                                    <td>$2,000</td>
                                    <td>Paid</td>
                                    <td><span class="inprogress">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Recent Customers</h2>
                        </div>
                        <table>
                            <tr>
                                <td width="60px"><div class="image"><img src="../images1/b3.jpg"></div></td>
                                <td><h4>Nonso<br><span>Italy</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="image"><img src="../images1/b3.jpg"></div></td>
                                <td><h4>Joshua<br><span>Italy</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="image"><img src="../images1/b3.jpg"></div></td>
                                <td><h4>Peter<br><span>Italy</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="image"><img src="../images1/b3.jpg"></div></td>
                                <td><h4>Joshua<br><span>Italy</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="image"><img src="../images1/b3.jpg"></div></td>
                                <td><h4>David<br><span>Italy</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="image"><img src="../images1/b3.jpg"></div></td>
                                <td><h4>Paul<br><span>Italy</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="image"><img src="../images1/b3.jpg"></div></td>
                                <td><h4>Collins<br><span>Italy</span></h4></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        

        <script>
            function toogleMenu(){
                let toogle = document.querySelector('.toogle');
                let navigation = document.querySelector('.navigation');
                toogle.classList.toggle('active')
                navigation.classList.toggle('active')
            }
        </script>

    </body>
</html>
