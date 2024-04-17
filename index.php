<?php
$nameArray = [
    'd52e32f3a96a64786814ae9b5279fbe5' => ', James'
];
if(!isset($_GET['n']) || array_key_exists($_GET['n'], $nameArray) === false) {
    die('Invalid name');
}
$name = $nameArray[$_GET['n']];
?>

<link rel="stylesheet" href="/_assets/style.css">
<title>Welcome to The Company!</title>
<meta name="description" content="">

<div class="container">
    <div class="slides">
        <div class="pagination">
            <a class="dot active"></a>
            <a class="dot"></a>
            <a class="dot"></a>
            <a class="dot"></a>
        </div>
        <div class="slide active">
            <div class="slide__container">
                <img src="/_assets/header-logo.svg" alt="" style="margin-top:20px;text-align:center;">
                <h1>Welcome<?= $name; ?></h1>
                <p>We're thrilled to have you as part the team!</p>
                <p>In the next couple of slides, we're going to cover a few of the basics and hopefully answer a couple of those first day questions that you might have.</p>
            </div>
        </div>
        <div class="slide">
            <div class="slide__container">
                <h1>A day at The Company</h1>
                <p>Working here, you've got a bit of flexability when it comes to your start time.  Our standard workday is <strong>8 hours</strong>, including a 45-minute lunchbreak.  You can start your workday between 8:30 and 9:00, and finish between 16:30 and 17:00.</p>
                <p>We have a set lunch break from 12:45-13:30.</p>
                <p>Our office is located in the heart of Newcastle-under-Lyme, just a short walk from the town centre.  We've got a few parking spaces available, but if you're not driving, we're just a short walk from the bus station.</p>
                <p>Paid parking is available around the office but some of the team park behind The Rigger just up the road which is free</p>

                <h2>Getting in</h2>
                <p>When you arrive, one of the team will have opened the office at 8:30 but should you need to open any of the doors with a code on them, this is <code>ABC123</code></p>
            </div>
        </div>
        <div class="slide">
            <div class="slide__container">
                <h1>Your Team</h1>
                <p>You'll primarily be working with 3 people<?=$name;?> & a couple of other key individuals you'll see around the office.</p>
                <p>Here's a quick overview of the team:</p>
                <div class="teamrow">
                    <img src="/_assets/staff.jpg" alt="">
                    <div>
                        <h2>James Lancaster</h2>
                        <i>Developer</i>
                        <p>Having been with The Company for almost 3 years, James has worked with almost every single one of our clients!</p>
                    </div>
                </div>
                <div class="teamrow">
                    <img src="/_assets/staff.jpg" alt="">
                    <div>
                        <h2>Joe Bloggs</h2>
                        <i>Lead Designer</i>
                        <p>Our lead designer and pro-photoshoper, Joe works with our account managers and schedules work to keep us on track.</p>
                    </div>
                </div>
                <div class="teamrow">
                    <img src="/_assets/staff.jpg" alt="">
                    <div>
                        <h2>Jane Doe</h2>
                        <i>Hosting Manager</i>
                        <p>The top-teir server tech, Jane, is the font of knowledge for all things server related.</p>
                    </div>
                </div>

                <h2>Other people of note</h2>

                <div class="teamrow">
                    <img src="/_assets/staff.jpg" alt="">
                    <div>
                        <h2>Stuart Barns</h2>
                        <i>Manager Director</i>
                        <p>Stuart is the MD of The Company. He's been with us for a fair few years and is the current scoreboard leader for Tetris!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide__container">
                <h1>Your Role</h1>
                <p>As a developer, you'll be working on a variety of projects, from small business websites to large e-commerce stores.  You'll be working with a variety of technologies, including:</p>
                <ul>
                    <li>WordPress / WooCommerce</li>
                    <li>Magento</li>
                </ul>

                <p>Our development team is a close-knit group, and we're always looking for ways to improve our processes and the way we work.  We're always open to new ideas and ways of working, so if you've got any suggestions, we're all ears!</p>

                <h2>Getting setup</h2>
                <p>As there can be what feels like a lot to remember when you get started, we've got our developers guide to The Company.  It's got some useful tips, starting points and handy reference material for whenever you need it!</p>

                <a href="https://google.com" class="button">See guide</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <button class="prev-slide">Back</button>
        <button class="next-slide active">Next</button>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/_assets/script.js"></script>
