

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flexslider.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chosen.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/color-01.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" integrity="sha512-WWc9iSr5tHo+AliwUnAQN1RfGK9AnpiOFbmboA0A0VJeooe69YR2rLgHw13KxF1bOSLmke+SNnLWxmZd8RTESQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="home-page home-01 ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item" >
                                    <a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu lang" >
                                        <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
                                        <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children parent" >
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency" >
                                        <li class="menu-item" >
                                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item" >
                                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item" >
                                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li>
                                <?php if(Route::has('login')): ?>
                                   <?php if(auth()->guard()->check()): ?>
                                      <?php if(Auth::user()->utype === 'ADM'): ?>
                                        <li class="menu-item menu-item-has-children parent" >
                                          <a title=">My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                          <ul class="submenu curency" >
                                             <li class="menu-item" >
                                                <a title="Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                                             </li>
                                             <li class="menu-item" >
                                                    <a title="Categories" href="<?php echo e(route('admin.categories')); ?>">Categories</a>
                                                </li>
                                                <li class="menu-item" >
                                                    <a title="Products" href="<?php echo e(route('admin.products')); ?>">All Products</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Manage Home Slider" href="<?php echo e(route('admin.homeslider')); ?>">Manage Home Slider</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Manage Home Categories" href="<?php echo e(route('admin.homecategories')); ?>">Manage Home Categories</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Sale Setting" href="<?php echo e(route('admin.sale')); ?>">Sale Setting</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="All Coupon" href="<?php echo e(route('admin.coupons')); ?>">All Coupon</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="All Orders" href="<?php echo e(route('admin.orders')); ?>">All Orders</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Contact Messages" href="<?php echo e(route('admin.contact')); ?>">Contact Messages</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a title="Settings" href="<?php echo e(route('admin.settings')); ?>">Settings</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                                    <?php echo csrf_field(); ?>

                                                </form>  
                                           </ul>
                                        </li>
                                      <?php else: ?>
                                       <li class="menu-item menu-item-has-children parent" >
                                          <a title=">My Account" href="#">My Account(<?php echo e(Auth::user()->name); ?>)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                          <ul class="submenu curency" >
                                             <li class="menu-item" >
                                                <a title="Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
                                             </li>
                                             <li class="menu-item" >
                                                <a title="My Orders" href="<?php echo e(route('user.orders')); ?>">My Orders</a>
                                             </li>
                                             <li class="menu-item" >
                                                <a title="Change Password" href="<?php echo e(route('user.changepassword')); ?>">Change Password</a>
                                             </li>
                                              <li class="menu-item">
                                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                                    <?php echo csrf_field(); ?>

                                                </form>
                                           </ul>
                                        </li>
                                      <?php endif; ?>

                                   <?php else: ?>
                                        <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('login')); ?>">Login</a></li>
                                        <li class="menu-item" ><a title="Register or Login" href="<?php echo e(route('register')); ?>">Register</a></li>
                                   <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="index.html" class="link-to-home"><img src="assets/images/logo-top-1.png" alt="mercado"></a>
                        </div>

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header-search-component')->html();
} elseif ($_instance->childHasBeenRendered('n938tZG')) {
    $componentId = $_instance->getRenderedChildComponentId('n938tZG');
    $componentTag = $_instance->getRenderedChildComponentTagName('n938tZG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('n938tZG');
} else {
    $response = \Livewire\Livewire::mount('header-search-component');
    $html = $response->html();
    $_instance->logRenderedChild('n938tZG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                        <div class="wrap-icon right-section">
                            
                           <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('wishlist-count-component')->html();
} elseif ($_instance->childHasBeenRendered('g1AcQCu')) {
    $componentId = $_instance->getRenderedChildComponentId('g1AcQCu');
    $componentTag = $_instance->getRenderedChildComponentTagName('g1AcQCu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('g1AcQCu');
} else {
    $response = \Livewire\Livewire::mount('wishlist-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('g1AcQCu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-count-component')->html();
} elseif ($_instance->childHasBeenRendered('yEj9XgL')) {
    $componentId = $_instance->getRenderedChildComponentId('yEj9XgL');
    $componentTag = $_instance->getRenderedChildComponentTagName('yEj9XgL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yEj9XgL');
} else {
    $response = \Livewire\Livewire::mount('cart-count-component');
    $html = $response->html();
    $_instance->logRenderedChild('yEj9XgL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="header-nav-section">
                        <div class="container">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                                <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                <li class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
                                </li>                                                                   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php echo e($slot); ?>


<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer-component')->html();
} elseif ($_instance->childHasBeenRendered('KPEsNWh')) {
    $componentId = $_instance->getRenderedChildComponentId('KPEsNWh');
    $componentTag = $_instance->getRenderedChildComponentTagName('KPEsNWh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KPEsNWh');
} else {
    $response = \Livewire\Livewire::mount('footer-component');
    $html = $response->html();
    $_instance->logRenderedChild('KPEsNWh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<script src="<?php echo e(asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.flexslider.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.js" integrity="sha512-ZKqmaRVpwWCw7S7mEjC89jDdWRD/oMS0mlfH96mO0u3wrPYoN+lXmqvyptH4P9mY6zkoPTSy5U2SwKVXRY5tYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.tiny.cloud/1/xqk0hplc45ryv0d2ez828u5jqu80tevbkqbgl2nq8yhs1vwl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<?php echo \Livewire\Livewire::scripts(); ?>


<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH F:\New folder\laravel8ecommerce\resources\views/layouts/base.blade.php ENDPATH**/ ?>