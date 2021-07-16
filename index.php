<!DOCTYPE html>
<html>

<head>
    <title>Game Warrior Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="flex">
            <div class="logo">
                <a href="#"><img src="https://onclickwebdesign.com/wp-content/uploads/game_warrior_logo.png" alt="Game Warrior Logo" /></a>
            </div>
            <nav>
                <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                <ul id="nav-menu-container">
                    <li><a href="#hero-image">Home</a></li>
                    <li><a href="#recent-games">Games</a></li>
                    <li><a href="#tournaments">Tournaments</a></li>
                    <!-- <li><a href="#">Forums</a></li> -->
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a href="#" id="login-register-button">Login / Register</a>
        </div>
    </header>

    <main>
        <section id="hero-image">
            <div class="hero-marketing-text">
                <h1>The Best <span>Games</span> Out There</h1>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </h5>
                <button>Read More</button>
            </div>
        </section>

        <section id="latest-news">
            <div class="flex">
                <h5>Latest News</h5>
                <div id="latest-news-container">
                    <div class="latest-news-item">
                        <span class="badge new">New</span>
                        <span class="latest-news-text">Lorem ipsum dolor sit amet, consectectur adipiscing elit ipsum.</span>
                    </div>
                </div>
            </div>
        </section>


        <!-- contact-------- -->
        <section id="contact" data-aos="fade-up">
            <form action="contact" data-aos="fade-up">
                <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>
                <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" required>
                <input type="email" name="email" id="email" placeholder="Example@gmail.com" required>
                <input type="text" name="Address" id="address" placeholder="Address" required>
                <!-- <textarea name="message" placeholder="Write Something........" required></textarea> -->
                <input type="submit" value="SEND" onclick="addRecord()" id="add_data">
                <!-- <button type="button" class="btn-save"  onclick="addRecord()" id="add_data">Send</button> -->
            </form>
        </section>


        <section id="recent-games">
            <h1>Recent Games</h1>
            <div class="flex">
                <div class="box">
                    <span class="badge new">New</span>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/recent_games_1.jpg" />
                    <div class="box-lower-section">
                        <h4>Suspendisse ut justo tem por, rutrum</h4>
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                        <a href="#" class="comments">3 Comments</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge racing">Racing</span>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/recent_games_2.jpg" />
                    <div class="box-lower-section">
                        <h4>Susce pulvinar metus nulla, vel facilisis sem</h4>
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                        <a href="#" class="comments">3 Comments</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge adventure">Adventure</span>
                    <img src="https://onclickwebdesign.com/wp-content/uploads/recent_games_3.jpg" />
                    <div class="box-lower-section">
                        <h4>Suspendisse ut justo tem por, rutrum</h4>
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing elit lorem ipsum dolor sit amet.</p>
                        <a href="#" class="comments">3 Comments</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="tournaments">
            <div class="flex">
                <span class="badge tournaments">Tournaments</span>
                <div class="box">
                    <span class="badge premium-tournament">Premium Tournament</span>
                    <div class="tournaments-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/tournaments_1.jpg" />
                    </div>
                    <div class="tournaments-content">
                        <h3>Starcraft 2</h3>
                        <div><label>Tournament Begins:</label> <strong>June 20, 2019</strong></div>
                        <div><label>Tournament Ends:</label> <strong>July 01, 2019</strong></div>
                        <div><label>Participants:</label> <strong>10 teams</strong></div>
                        <div><label>Tournament Organizer:</label> <strong>Admin</strong></div>
                        <div>
                            <label class="prizes">Prizes:</label> <label>1st place $2000, 2nd place: $1000, 3rd place: $500</label>
                        </div>

                    </div>
                    <div>
                        <a href="#" id="turnament-register">Register</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge premium-tournament">Premium Tournament</span>
                    <div class="tournaments-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/tournaments_2.jpg" />
                    </div>
                    <div class="tournaments-content">
                        <h3>World Of Warcraft</h3>
                        <div><label>Tournament Begins:</label> <strong>June 20, 2019</strong></div>
                        <div><label>Tournament Ends:</label> <strong>July 01, 2019</strong></div>
                        <div><label>Participants:</label> <strong>10 teams</strong></div>
                        <div><label>Tournament Organizer:</label> <strong>Admin</strong></div>
                        <div><label class="prizes">Prizes:</label> <label>1st place $2000, 2nd place: $1000, 3rd place: $500</label></div>
                    </div>
                    <div>
                        <a href="#" id="turnament-register">Register</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="recent-reviews">
            <h1>Recent Reviews</h1>
            <div class="flex">
                <div class="box">
                    <span class="rating-badge gold">9.3</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_1.jpg" />
                    </div>
                    <div>
                        <h4>Assasin's Creed</h4>
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge purple">9.5</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_2.jpg" />
                    </div>
                    <div>
                        <h4>Doom</h4>
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge green">9.1</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_3.jpg" />
                    </div>
                    <div>
                        <h4>Overwatch</h4>
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge violet">9.7</span>
                    <div class="recent-reviews-image">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/recent_reviews_4.jpg" />
                    </div>
                    <div>
                        <h4>GTA</h4>
                        <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="posts-comments">
            <div class="flex">
                <div class="game-warrior">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/footer_logo.png" />
                    <p>Lorem ipsum dolor sit amet, consectectur adipiscing ipsum dolor sit amet.</p>
                    <img class="footer-graphic" src="https://onclickwebdesign.com/wp-content/uploads/sword_lady_footer.png" />
                </div>

                <div class="posts-comments-box">
                    <h3>Latest Posts</h3>
                    <div class="post-item">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_1.jpg" />
                        <div>
                            <h5>June 21, 2019</h5>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                            <small>By: Admin</small>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_2.jpg" />
                        <div>
                            <h5>June 21, 2019</h5>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                            <small>By: Admin</small>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/latest_posts_3.jpg" />
                        <div>
                            <h5>June 21, 2019</h5>
                            <p>Lorem ipsum dolor sit amet, consectectur adipiscing.</p>
                            <small>By: Admin</small>
                        </div>
                    </div>
                </div>

                <div class="posts-comments-box">
                    <h3>Top Comments</h3>
                    <div class="comments-item">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_1.jpg" />
                        <div>
                            <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                            <h5>June 21, 2019</h5>
                        </div>
                    </div>

                    <div class="comments-item">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_2.jpg" />
                        <div>
                            <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                            <h5>June 21, 2019</h5>
                        </div>
                    </div>

                    <div class="comments-item">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_3.jpg" />
                        <div>
                            <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                            <h5>June 21, 2019</h5>
                        </div>
                    </div>

                    <div class="comments-item">
                        <img src="https://onclickwebdesign.com/wp-content/uploads/top_comments_4.jpg" />
                        <div>
                            <p><span class="author">James Smith</span> <span>on</span> Lorem ipsum dolor sit amet consectectur.</p>
                            <h5>June 21, 2019</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="flex">
            <small>Copyright &copy; 2020-2021 All rights reserved | This template is made with <span class="footer-heart">&#9829;</span> by <a href="#" target="_blank">CG_Gamers</a>.</small>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Games</a>
                </li>

                <li>
                    <a href="#">Blog</a>
                </li>

                <li>
                    <a href="#">Forums</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
    </footer>

    <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            let navMenu = document.getElementById('nav-menu-container');
            navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
        });




        function addRecord() {
            var firstname = $('#fullname').val();
            var lastname = $('#mobile').val();
            var email = $('#email').val();
            var mobile = $('#address').val();

            $.ajax({
                url: "insert.php",
                type: "POST",

                data: {

                    fullname: fullname,
                    mobile: mobile,
                    email: email,
                    address: address,

                },
                success: function(data, status) {
                    readRecord();
                }
            });

        }

    </script>
</body>

</html>