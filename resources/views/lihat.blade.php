<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>UMKM</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                
                <a href="http://127.0.0.1:8000/" class="logo">
                    <img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages                                    
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="../assets/img/profile4.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Farid Majid</span>
                                                    <span class="block">
                                                        Hai Iqbal ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="../assets/img/profile4.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Dewi Dian</span>
                                                    <span class="block">
                                                        Ok, Terima Kasih !
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="../assets/img/profile4.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Wiliam Aryanda</span>
                                                    <span class="block">
                                                        Pesan apa bal ?
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="../assets/img/profile4.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Wulan Fitri Anjaswati</span>
                                                    <span class="block">
                                                        Hi, Apa Kabar Iqbal ?
                                                    </span>
                                                    <span class="time">17 minutes ago</span> 
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Ada pesan belum terbaca
                                                    </span>
                                                    <span class="time">5 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad menggirim pesan untuk kamu
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="../assets/img/profile4.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza menggirim pesan untuk kamu
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Farrah menggirim pesan untuk kamu
                                                    </span>
                                                    <span class="time">17 minutes ago</span> 
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="../assets/img/profile4.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/profile4.jpg" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>M Iqbal</h4>
                                                <p class="text-muted">iqbal.syam12@gmail.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">My Balance</a>
                                        <a class="dropdown-item" href="#">Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">           
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/profile4.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    M Iqbal
                                    <span class="user-level">User</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>HALAMAN UTAMA</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Komponen</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Pilihan Barang</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a class="nav-link" href="http://127.0.0.1:8000/makananberat">
                                            <span class="sub-item">Makanan Berat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://127.0.0.1:8000/makananringan">
                                            <span class="sub-item">Makanan Ringan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://127.0.0.1:8000/minuman">
                                            <span class="sub-item">Minuman</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://127.0.0.1:8000/kerajinan">
                                            <span class="sub-item">Kerajinan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://127.0.0.1:8000/lainlain">
                                            <span class="sub-item">Lain - lain</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#forms">
                                <i class="fas fa-pen-square"></i>
                                <p>Edukasi</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a class="nav-link" href="https://www.youtube.com/watch?v=HRVlfz2MSVY">
                                            <span class="sub-item">Edukasi Video</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forms/forms.html">
                                            <span class="sub-item">Edukasi Seminar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#tables">
                                <i class="fas fa-table"></i>
                                <p>Sosmed Promosi</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a class="nav-link" href="https://www.instagram.com/wiliam_aryanda">
                                            <span class="sub-item">Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100004740226308">
                                            <span class="sub-item">Facebook</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#maps">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Maps</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a class="nav-link" href="https://www.google.co.id/maps/place/Kota+Samarinda,+Kalimantan+Timur/@-0.5096845,117.0354397,11z/data=!3m1!4b1!4m5!3m4!1s0x2df5d57d33074935:0xef64e9b06c7ad3e7!8m2!3d-0.5016166!4d117.1264753?hl=id">
                                            <span class="sub-item">Google Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#submenu">
                                <i class="fas fa-bars"></i>
                                <p>About</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="submenu">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="../assets/html/CS.html">
                                            <span class="sub-item">Customer Service</span>
                                        </a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Halaman Utama</h2>
                                <h5 class="text-white op-7 mb-2">Pilih Yang Anda Inginkan :)</h5>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                                <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="c-panel__body">
<div class="o-layout o-layout--responsive">
<div class="o-layout__item o-layout__item--empty u-4of12 u-position-relative">
<div class="c-product-image-gallery js-product-image-gallery js-variant-detail-element js-variant-image-" rel="0">
<nav class="c-product-image-gallery__thumbnails js-product-image-gallery__thumbnails--top u-hidden">
<a class="c-product-image-gallery__image js-product-image-gallery__image qa-pd-image" rel="0" href="https://s1.bukalapak.com/img/6908466533/w-1000/Kacang_Mix_Nut_Dua_Kelinci_150_gr.jpg"><picture><source srcset="https://s1.bukalapak.com/img/6908466533/w-300/Kacang_Mix_Nut_Dua_Kelinci_150_gr.jpg.webp" type="image/webp"><source srcset="https://s1.bukalapak.com/img/6908466533/w-300/Kacang_Mix_Nut_Dua_Kelinci_150_gr.jpg" type="image/jpg"><img alt="Kacang Mix Nut Dua Kelinci 150 gr" src="https://s1.bukalapak.com/img/6908466533/w-300/Kacang_Mix_Nut_Dua_Kelinci_150_gr.jpg" width="300" height="300"></picture>
</div>
<div class="c-modal__footer js-product-image-gallery__actions u-hidden">
<div class="u-clearfix">
<form class="js-express-checkout-form u-width-1of3 u-float-left" novalidate="novalidate" data-no-turbolink="true" action="/cart/carts/add_product?button_type=direct_checkout&amp;express_checkout=true&amp;referrer=pdp&amp;referrer_event=product_detail%2Fbeli" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="BFAF0JKEa+RGnEgrTfJmf1HcG1BtHOoePRrzuNpytQ0=">
<input value="1237388447" type="hidden" name="item[product_id]">
<input value="1235590432" type="hidden" name="item[product_sku_id]">
<input value="1" class="js-express-checkout-quantity js-qty-follower" type="hidden" name="item[quantity]">
<button class="c-btn c-btn--green c-btn--large c-btn--block qa-pd-image-buy-btn js-track-atc-catalog js-image-gallery-buy-btn">
Beli
</button>
</form>
<form class="js-add-item-to-cart-form u-width-2of3 u-pad-left--2 u-float-left" novalidate="novalidate" action="/cart/carts/add_product?button_type=detail_buy&amp;from=homepage&amp;referrer=pdp&amp;reskin=1&amp;type=popular-products-Section-4" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input value="1237388447" type="hidden" name="item[product_id]">
<input value="1235590432" type="hidden" name="item[product_sku_id]">
<input type="hidden" name="authenticity_token" value="BFAF0JKEa+RGnEgrTfJmf1HcG1BtHOoePRrzuNpytQ0=">
<input value="1" class="js-express-checkout-quantity js-qty-follower" type="hidden" name="item[quantity]">
<input type="hidden" name="from" value="homepage"><input type="hidden" name="type" value="popular-products-Section-4"></form>
</div>
</div>

<div class="js-variant-badge- js-variant-detail-element qa-pd-discount-badge u-mrgn-left--5 u-mrgn-top--1 u-position--top-left u-position-absolute">
</div>
</div>
<div class="o-layout__item u-8of12 u-position-relative">
<div class="c-product-detail__actions">
<div class="c-product-detail__action" data-insert-inside-url="/products/1237388447/admin_link"></div>
</div>
<h1 class="c-product-detail__name qa-pd-name">Kacang Mix Nut Dua Kelinci 150 gr</h1>
<div class="c-product-rating u-mrgn-top--1" data-target-id="product-detail-product-review" data-type="go-to-click">
<div class="c-product-rating__visual c-rating" title="92.0"><div class="c-rating c-rating--medium qa-product-review-icon"><div class="c-rating__bg"><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span></div><div class="c-rating__fg" style="width: 92.0%"><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span><span class="c-icon c-icon--star c-rating__unit"></span></div></div></div>
</div>
<hr class="u-hr--small">
<div class="js-product-detail-price js-variant-detail-element js-variant-price- qa-pd-price u-mrgn-bottom--3 u-position-relative">
<div class="js-gvoucher-disable">
<div class="c-product-detail-price" data-referrer="show" data-reduced-price="22500" data-installment="false"><span class="c-product-detail-price__original"><span class="currency positive">Rp</span><span class="amount positive">25.000</span></span>
<div class="gmc-wrap-col">
</div>
</div>
<script>
  document.getElementById('gmc-voucher-copy').onclick = function() {
    document.getElementById('gmc-voucher-input').select();
    document.execCommand('copy');
  }
</script>
<style>
  .gmc-wrap {
    border-radius: 4px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.08), 0 0 1px 0 #bbbbbb;
    margin-top: 12px;
    font-size: 0;
  }
  
  .gmc-wrap-col {
    display: inline-block;
    font-size: 14px;
    padding: 14px;
    vertical-align: top;
    width: 32%;
  }
  
  .gmc-wrap-icon {
    padding: 14px 0 14px 14px;
    width: 8%;
  }
  
  .gmc-wrap-text {
    width: 60%;
  }
  
  .gmc-voucher {
    position: relative;
  }
  
  .gmc-voucher input {
    border: 0;
    border-radius: 2px;
    background-color: #f5f5f5;
    color: #333;
    pointer-events: none;
  }
  
  #gmc-voucher-copy {
    cursor: pointer;
    display: inline-block;
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    z-index: 10;
  }
</style>

</div>
<div class="u-clearfix u-mrgn-top--3 u-mrgn-bottom--3 js-product-buy">
<form class="js-add-item-to-cart-form js-one-click-payment-form" novalidate="novalidate" action="/cart/carts/add_product?button_type=detail_buy&amp;from=homepage&amp;referrer=pdp&amp;referrer_event=product_detail%2Fbeli&amp;reskin=1&amp;search_sort_default=false&amp;type=popular-products-Section-4" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input value="1237388447" type="hidden" name="item[product_id]">
<input value="1235590432" type="hidden" name="item[product_sku_id]">
<input type="hidden" name="authenticity_token" value="BFAF0JKEa+RGnEgrTfJmf1HcG1BtHOoePRrzuNpytQ0=">
<div class="js-variant-detail-element js-variant-stock-" data-sku-class="">
<div class="u-txt--small qa-pd-stock">
<strong class="u-fg--black">
Tersedia
<span class="u-fg--green-super-dark">
&gt; 200 stok
</span>
barang
</strong>
</div>
<div class="o-layout o-layout--responsive u-mrgn-bottom--2">
<div class="o-layout__item">
<label class="u-mrgn-bottom--1 u-txt--small">
Masukkan jumlah yang diinginkan
</label>
<div class="o-layout o-layout--tiny">
<div class="o-layout__item u-4of12 js-qty-field">
<div class="c-inp-grp-table">
<div class="c-inp__btn">
<button class="c-btn c-btn--narrow js-qty-field__btn-dec qa-pd-decrease-qty-btn" type="button">-</button>
</div>
<input value="1" data-track-id="1237388447" data-track-identity="0d2b6d069412e7df426828ea428226f7" data-track-cid="466" data-bukapengadaan-threshold="null" data-max-value="385" data-min-value="1" class="string optional js-qty-field__input c-inp u-align-center js-qty-leader" id="product-detail-quantity" type="text" name="item[quantity]">
<div class="c-inp__btn">
<button class="c-btn c-btn--narrow js-qty-field__btn-inc qa-pd-increase-qty-btn" type="button">+</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="js-buy-button o-layout o-layout--tiny u-mrgn-bottom--1">
<div class="o-layout__item">
<button class="c-btn c-btn--green c-btn--large c-btn--block js-express-checkout-trigger qa-pd-button-buy qa-button-buy js-pdp-buy-btn js-track-atc-reco js-track-atc-catalog" type="button">
Beli Sekarang
</button>
</div>
</div>
</div>
</div>
            </div>
                
        <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Al-Khawarizmi Team
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../assets/html/CS.html">
                                    Help
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2019, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">Al-Khawarizmi Team</a>
                    </div>              
                </div>
            </footer>
        </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="../assets/js/atlantis.min.js"></script>
</body>
</html>