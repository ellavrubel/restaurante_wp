

<footer class="footer" style="background-image: url(<?php the_field('footer') ?>);">
    <div class="container">
        <div class="footer__info-wrap">
            <div class="footer__info d-flex flex-column flex-md-row justify-content-between">

                <div class="footer__instagram">
                    <p class="instagram__title">
                        Instagram</p>
                    <div class="instagram__photo d-flex flex-wrap">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/footer/inst1.jpg" alt="" class="instagram__photo-item">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/footer/inst2.jpg" alt="" class="instagram__photo-item">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/footer/inst3.jpg" alt="" class="instagram__photo-item">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/footer/inst4.jpg" alt="" class="instagram__photo-item">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/footer/inst5.jpg" alt="" class="instagram__photo-item">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/footer/inst6.jpg" alt="" class="instagram__photo-item">
                    </div>
                    <div class="footer__social d-flex">
                        <i class="icon fa fa-facebook"></i>
                        <i class="icon fa fa-twitter"></i>
                        <i class="icon fa fa-linkedin"></i>
                        <i class="icon fa fa-google-plus-square"></i>
                        <i class="fa fa-pinterest-square"></i>
                    </div>
                </div>

                <div class="footer__intro">
                    <img class="footer__logo" src="<?php bloginfo( 'template_url' ); ?>/assets/img/Logot.png"  alt="logo">
                    <p class="instagram__title intro__title">Introduction</p>
                    <p class="intro__text">In Western countries, most mid- to high-range restaurants serve alcoholic
                        beverages such as beer and wine. Some restaurants serve all the major meals, such as breakfast, lunch, and dinner. </p>
                </div>

                <div class="footer__tag">
                    <p class="instagram__title tag__title">Tag</p>
                    <div class="footer__tag-items d-flex flex-wrap">
                        <div class="footer__tag-item footer__tag-item1">
                            Food
                        </div>
                        <div class="footer__tag-item footer__tag-item2">
                            Restaurant
                        </div>
                        <div class="footer__tag-item footer__tag-item3">
                            Food Menu
                        </div>
                        <div class="footer__tag-item footer__tag-item4">
                            RestaurantBD
                        </div>
                        <div class="footer__tag-item footer__tag-item5">
                            Dish
                        </div>
                        <div class="footer__tag-item footer__tag-item6">
                            Drink
                        </div>
                        <div class="footer__tag-item footer__tag-item7">
                            Eatining
                        </div>
                    </div>
                    <div class="footer__search">
                        <div class="footer__input">
                            <label for="search"></label>
                            <input type="search" id="search" placeholder="Search Here">
                            <div class="search__photo">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/search__footer.png" alt="search">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer__link d-md-flex justify-content-end">
                <a href="/"><span class="usefull__link">USEFULL LINKS:</span></a>
                <a class="footer__link-item" href="/">HOME</a>
                <a class="footer__link-item" href="/">ABOUT</a>
                <a class="footer__link-item" href="/">PAGE</a>
                <a class="footer__link-item" href="/">MENU</a>
                <a class="footer__link-item" href="/">GALLERY</a>
                <a class="footer__link-item" href="/">BLOG</a>
                <a class="footer__link-item" href="/">SHOPS</a>
                <a class="footer__link-item" href="/">CONTACT</a>
            </div>

        </div>
    </div>
    <div class="footer__gamb">
        <a class="footer__toggle" href="/"><i class="fa fa-bars"></i></a>
    </div>
</footer>

<a id="button"></a>










<!--Modal Windows-->

<!--LOG IN-->
<div class="popup" id="modalLogin">
    <div class="popup__overlay">
        <div class="popup__body">
            <a class="popup__close" href="#"><i class="fa fa-times-circle"></i></a>
            <h3 class="title title__login">Welcome to RestorantBD</h3>
            <div class="container">
                <div class="form-wrapper d-flex justify-content-around">
                    <div class="register-form-wrapper">
                        <h5 class="login__title">Register</h5>
                        <form class="register-form" action="#" method="post">

                            <label for="inputEmail4">Email<span class="star">*</span> </label>
                            <input type="email" class="form-control" id="inputEmail6" placeholder="Email" required>

                            <label for="inputPassword4">Password<span class="star">*</span></label>
                            <input type="password" class="form-control" id="inputPassword6" placeholder="Password">

                            <label for="inputPassword5">Password Repeat<span class="star">*</span></label>
                            <input type="password" class="form-control" id="inputPassword5" placeholder="Password" required>
                            <button type="button" class="btn btn-secondary btn-sm btn-block login-btn">Register</button>

                        </form>
                    </div>
                    <div class="register-form-wrapper">
                        <h5 class="login__title">Log in</h5>
                        <form class="login-form" action="#" method="post">

                            <label for="inputEmail4">Email<span class="star">*</span> </label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>

                            <label for="inputPassword4">Password<span class="star">*</span></label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            <div class="form-check mb-2 checkbox-wrapper">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label" for="autoSizingCheck">
                                    Remember me
                                </label>
                            </div>

                            <button type="button" class="btn btn-secondary btn-sm btn-block login-btn">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------------->

<!--SHOP CART-->
<div class="popup" id="modalShop">
    <div class="popup__overlay">
        <div class="popup__body">
            <a class="popup__close" href="#"><i class="fa fa-times-circle"></i></a>
            <form name="ShoppingList">
                <fieldset>
                    <legend>Shopping cart</legend>
                    <label>Item: <input type="text" name="name"></label>
                    <label>Quantity: <input type="text" name="data"></label>

                    <input type="button" value="Save"   onclick="SaveItem()">
                    <input type="button" value="Update" onclick="ModifyItem()">
                    <input type="button" value="Delete" onclick="RemoveItem()">
                </fieldset>
                <div id="items_table">
                    <h2>Shopping List</h2>
                    <table id="list"></table>
                    <label><input type="button" value="Clear" onclick="ClearAll()">
                        * Delete all items</label>
                </div>
            </form>
        </div>
    </div>
</div>
<!------------------>

<!--RESERVATION-->
<div class="popup" id="modalReservation">
    <div class="popup__overlay">
        <div class="popup__body">
            <a class="popup__close" href="#"><i class="fa fa-times-circle"></i></a>
            <div class="register-form-wrapper">
                <h3 class="title reserv_title">Table Reservation</h3>
                <form class="login-form" action="#" method="post">

                    <label for="registrationName">One of the guest's name<span class="star">*</span></label>
                    <input type="text" class="form-control" id="registrationName" name="guestName">

                    <label for="reservationData">Choose the date<span class="star">*</span> </label>
                    <input type="date" class="form-control" id="reservationData" name="date">
                    <label for="reservationTime">Choose convenient time<span class="star">*</span> </label>
                    <input type="time" class="form-control" id="reservationTime" name="time">
                    <button type="button" class="btn btn-secondary btn-sm btn-block login-btn">Reserve</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!------------------>

<?php wp_footer(); ?>

</body>
</html>
