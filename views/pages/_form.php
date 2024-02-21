<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\system\models\Page $model */
/** @var yii\widgets\ActiveForm $form */
use app\modules\fronted\assets\AdminAsset;
AdminAsset::register($this);


// $this->registerCssFile("@app/modules/fronted/dist/grapesjs/dist/css/grapes.min.css");
// $this->registerCssFile(("@fronted_assets/grapesjs/css/grapes.min.css"));
// $this->registerCssFile("/modules/fronted/dist/grapesjs/dist/css/grapes.min.css");
// $this->registerJsFile("@app/modules/fronted/dist/grapesjs/dist/grapes.min.js");

// echo Yii::getAlias("@web/modules/fronted/dist/grapesjs/dist/css/grapes.min.css");

?>
<!-- <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
<!-- <script src="https://cdn.jsdelivr.net/npm/@schukai/grapesjs-blocks-bootstrap5@1.0.4/dist/@schukai/grapesjs-blocks-bootstrap5.min.js"></script> -->

<div class="page-form">
    <?php 
        /** 
        $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'parent_id')->textInput() ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'visible')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end();
        */
    ?>
    
<div id="gjs" style="height:0px; overflow:hidden">

<header class="header-banner">
    <div class="container-width" id="iagx">
      <div class="logo-container">
        <div class="logo">GrapesJS
        </div>
      </div>
      <nav class="menu">
        <div class="menu-item">BUILDER
        </div>
        <div class="menu-item">TEMPLATE
        </div>
        <div class="menu-item">WEB
        </div>
      </nav>
      <div class="clearfix">
      </div>
      <div class="gjs-row">
        <div class="gjs-cell">
        </div>
      </div>
      <div class="lead-title">Build your templates without coding
      </div>
      <div class="sub-lead-title">All text blocks could be edited easily with double clicking on it. You can create new text blocks with the command from the left panel
      </div>
      <div class="lead-btn">Hover me
      </div>
    </div>
  </header>
  <section class="flex-sect">
    <div class="container-width">
      <div class="flex-title">Flex is the new black
      </div>
      <div class="flex-desc">With flexbox system you're able to build complex layouts easily and with free responsivity
      </div>
      <div class="cards">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <div class="card-title">Title one
            </div>
            <div class="card-sub-title">Subtitle one
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch2">
          </div>
          <div class="card-body">
            <div class="card-title">Title two
            </div>
            <div class="card-sub-title">Subtitle two
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch3">
          </div>
          <div class="card-body">
            <div class="card-title">Title three
            </div>
            <div class="card-sub-title">Subtitle three
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch4">
          </div>
          <div class="card-body">
            <div class="card-title">Title four
            </div>
            <div class="card-sub-title">Subtitle four
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch5">
          </div>
          <div class="card-body">
            <div class="card-title">Title five
            </div>
            <div class="card-sub-title">Subtitle five
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ch6">
          </div>
          <div class="card-body">
            <div class="card-title">Title six
            </div>
            <div class="card-sub-title">Subtitle six
            </div>
            <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="am-sect">
    <div class="container-width">
      <div class="am-container">
        <img src="./img/phone-app.png" class="img-phone"/>
        <div class="am-content">
          <div class="am-pre">ASSET MANAGER
          </div>
          <div class="am-title">Manage your images with Asset Manager
          </div>
          <div class="am-desc">You can create image blocks with the command from the left panel and edit them with double click
          </div>
          <div class="am-post">Image uploading is not allowed in this demo
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blk-sect">
    <div class="container-width">
      <div class="blk-title">Blocks
      </div>
      <div class="blk-desc">Each element in HTML page could be seen as a block. On the left panel you could find different kind of blocks that you can create, move and style
      </div>
      <div class="price-cards">
        <div class="price-card-cont">
          <div class="price-card">
            <div class="pc-title">Starter
            </div>
            <div class="pc-desc">Some random list
            </div>
            <div class="pc-feature odd-feat">+ Starter feature 1
            </div>
            <div class="pc-feature">+ Starter feature 2
            </div>
            <div class="pc-feature odd-feat">+ Starter feature 3
            </div>
            <div class="pc-feature">+ Starter feature 4
            </div>
            <div class="pc-amount odd-feat">$ 9,90/mo
            </div>
          </div>
        </div>
        <div class="price-card-cont">
          <div class="price-card pc-regular">
            <div class="pc-title">Regular
            </div>
            <div class="pc-desc">Some random list
            </div>
            <div class="pc-feature odd-feat">+ Regular feature 1
            </div>
            <div class="pc-feature">+ Regular feature 2
            </div>
            <div class="pc-feature odd-feat">+ Regular feature 3
            </div>
            <div class="pc-feature">+ Regular feature 4
            </div>
            <div class="pc-amount odd-feat">$ 19,90/mo
            </div>
          </div>
        </div>
        <div class="price-card-cont">
          <div class="price-card pc-enterprise">
            <div class="pc-title">Enterprise
            </div>
            <div class="pc-desc">Some random list
            </div>
            <div class="pc-feature odd-feat">+ Enterprise feature 1
            </div>
            <div class="pc-feature">+ Enterprise feature 2
            </div>
            <div class="pc-feature odd-feat">+ Enterprise feature 3
            </div>
            <div class="pc-feature">+ Enterprise feature 4
            </div>
            <div class="pc-amount odd-feat">$ 29,90/mo
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bdg-sect">
    <div class="container-width">
      <h1 class="bdg-title">The team
      </h1>
      <div class="badges">
        <div class="badge">
          <div class="badge-header">
          </div>
          <img src="img/team1.jpg" class="badge-avatar"/>
          <div class="badge-body">
            <div class="badge-name">Adam Smith
            </div>
            <div class="badge-role">CEO
            </div>
            <div class="badge-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ipsum dolor sit
            </div>
          </div>
          <div class="badge-foot">
            <span class="badge-link">f</span>
            <span class="badge-link">t</span>
            <span class="badge-link">ln</span>
          </div>
        </div>
        <div class="badge">
          <div class="badge-header">
          </div>
          <img src="img/team2.jpg" class="badge-avatar"/>
          <div class="badge-body">
            <div class="badge-name">John Black
            </div>
            <div class="badge-role">Software Engineer
            </div>
            <div class="badge-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ipsum dolor sit
            </div>
          </div>
          <div class="badge-foot">
            <span class="badge-link">f</span>
            <span class="badge-link">t</span>
            <span class="badge-link">ln</span>
          </div>
        </div>
        <div class="badge">
          <div class="badge-header">
          </div>
          <img src="img/team3.jpg" class="badge-avatar"/>
          <div class="badge-body">
            <div class="badge-name">Jessica White
            </div>
            <div class="badge-role">Web Designer
            </div>
            <div class="badge-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ipsum dolor sit
            </div>
          </div>
          <div class="badge-foot">
            <span class="badge-link">f</span>
            <span class="badge-link">t</span>
            <span class="badge-link">ln</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-under">
    <div class="container-width">
      <div class="footer-container">
        <div class="foot-lists">
          <div class="foot-list">
            <div class="foot-list-title">About us
            </div>
            <div class="foot-list-item">Contact
            </div>
            <div class="foot-list-item">Events
            </div>
            <div class="foot-list-item">Company
            </div>
            <div class="foot-list-item">Jobs
            </div>
            <div class="foot-list-item">Blog
            </div>
          </div>
          <div class="foot-list">
            <div class="foot-list-title">Services
            </div>
            <div class="foot-list-item">Education
            </div>
            <div class="foot-list-item">Partner
            </div>
            <div class="foot-list-item">Community
            </div>
            <div class="foot-list-item">Forum
            </div>
            <div class="foot-list-item">Download
            </div>
            <div class="foot-list-item">Upgrade
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
        <div class="form-sub">
          <div class="foot-form-cont">
            <div class="foot-form-title">Subscribe
            </div>
            <div class="foot-form-desc">Subscribe to our newsletter to receive exclusive offers and the latest news
            </div>
            <input type="text" name="name" placeholder="Name" class="sub-input"/>
            <input type="text" name="email" placeholder="Email" class="sub-input"/>
            <button type="button" class="sub-btn">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container-width">
        <div class="made-with">
          made with GrapesJS
        </div>
        <div class="foot-social-btns">facebook twitter linkedin mail
        </div>
        <div class="clearfix">
        </div>
      </div>
    </div>
  </footer>
</div>
<style>
    * {
  box-sizing: border-box;
}
body {
  margin: 0;
}
.clearfix{
  clear:both;
}
.header-banner{
  padding-top:35px;
  padding-bottom:100px;
  color:#ffffff;
  font-family:Helvetica, serif;
  font-weight:100;
  background-image:url("https://grapesjs.com/img/bg-gr-v.png"), url("https://grapesjs.com/img/work-desk.jpg");
  background-attachment:scroll, scroll;
  background-position:left top, center center;
  background-repeat:repeat-y, no-repeat;
  background-size:contain, cover;
}
.container-width{
  width:90%;
  max-width:1150px;
  margin:0 auto;
}
.logo-container{
  float:left;
  width:50%;
}
.logo{
  background-color:#fff;
  border-radius:5px;
  width:130px;
  padding:10px;
  min-height:30px;
  text-align:center;
  line-height:30px;
  color:#4d114f;
  font-size:23px;
}
.menu{
  float:right;
  width:50%;
}
.menu-item{
  float:right;
  font-size:15px;
  color:#eee;
  width:130px;
  padding:10px;
  min-height:50px;
  text-align:center;
  line-height:30px;
  font-weight:400;
}
.lead-title{
  margin:150px 0 30px 0;
  font-size:40px;
}
.sub-lead-title{
  max-width:650px;
  line-height:30px;
  margin-bottom:30px;
  color:#c6c6c6;
}
.lead-btn{
  margin-top:15px;
  padding:10px;
  width:190px;
  min-height:30px;
  font-size:20px;
  text-align:center;
  letter-spacing:3px;
  line-height:30px;
  background-color:#d983a6;
  border-radius:5px;
  transition:all 0.5s ease;
  cursor:pointer;
}
.lead-btn:hover{
  background-color:#ffffff;
  color:#4c114e;
}
.lead-btn:active{
  background-color:#4d114f;
  color:#fff;
}
.flex-sect{
  background-color:#fafafa;
  padding:100px 0;
  font-family:Helvetica, serif;
}
.flex-title{
  margin-bottom:15px;
  font-size:2em;
  text-align:center;
  font-weight:700;
  color:#555;
  padding:5px;
}
.flex-desc{
  margin-bottom:55px;
  font-size:1em;
  color:rgba(0, 0, 0, 0.5);
  text-align:center;
  padding:5px;
}
.cards{
  padding:20px 0;
  display:flex;
  justify-content:space-around;
  flex-flow:wrap;
}
.card{
  background-color:white;
  height:300px;
  width:300px;
  margin-bottom:30px;
  box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.2);
  border-radius:2px;
  transition:all 0.5s ease;
  font-weight:100;
  overflow:hidden;
}
.card:hover{
  margin-top:-5px;
  box-shadow:0 20px 30px 0 rgba(0, 0, 0, 0.2);
}
.card-header{
  height:155px;
  background-image:url("https://via.placeholder.com/350x250/78c5d6/fff");
  background-size:cover;
  background-position:center center;
}
.card-header.ch2{
  background-image:url("https://via.placeholder.com/350x250/459ba8/fff");
}
.card-header.ch3{
  background-image:url("https://via.placeholder.com/350x250/79c267/fff");
}
.card-header.ch4{
  background-image:url("https://via.placeholder.com/350x250/c5d647/fff");
}
.card-header.ch5{
  background-image:url("https://via.placeholder.com/350x250/f28c33/fff");
}
.card-header.ch6{
  background-image:url("https://via.placeholder.com/350x250/e868a2/fff");
}
.card-body{
  padding:15px 15px 5px 15px;
  color:#555;
}
.card-title{
  font-size:1.4em;
  margin-bottom:5px;
}
.card-sub-title{
  color:#b3b3b3;
  font-size:1em;
  margin-bottom:15px;
}
.card-desc{
  font-size:0.85rem;
  line-height:17px;
}
.am-sect{
  padding-top:100px;
  padding-bottom:100px;
  font-family:Helvetica, serif;
}
.img-phone{
  float:left;
}
.am-container{
  display:flex;
  flex-wrap:wrap;
  align-items:center;
  justify-content:space-around;
}
.am-content{
  float:left;
  padding:7px;
  width:490px;
  color:#444;
  font-weight:100;
  margin-top:50px;
}
.am-pre{
  padding:7px;
  color:#b1b1b1;
  font-size:15px;
}
.am-title{
  padding:7px;
  font-size:25px;
  font-weight:400;
}
.am-desc{
  padding:7px;
  font-size:17px;
  line-height:25px;
}
.am-post{
  padding:7px;
  line-height:25px;
  font-size:13px;
}
.blk-sect{
  padding-top:100px;
  padding-bottom:100px;
  background-color:#222222;
  font-family:Helvetica, serif;
}
.blk-title{
  color:#fff;
  font-size:25px;
  text-align:center;
  margin-bottom:15px;
}
.blk-desc{
  color:#b1b1b1;
  font-size:15px;
  text-align:center;
  max-width:700px;
  margin:0 auto;
  font-weight:100;
}
.price-cards{
  margin-top:70px;
  display:flex;
  flex-wrap:wrap;
  align-items:center;
  justify-content:space-around;
}
.price-card-cont{
  width:300px;
  padding:7px;
  float:left;
}
.price-card{
  margin:0 auto;
  min-height:350px;
  background-color:#d983a6;
  border-radius:5px;
  font-weight:100;
  color:#fff;
  width:90%;
}
.pc-title{
  font-weight:100;
  letter-spacing:3px;
  text-align:center;
  font-size:25px;
  background-color:rgba(0, 0, 0, 0.1);
  padding:20px;
}
.pc-desc{
  padding:75px 0;
  text-align:center;
}
.pc-feature{
  color:rgba(255,255,255,0.5);
  background-color:rgba(0, 0, 0, 0.1);
  letter-spacing:2px;
  font-size:15px;
  padding:10px 20px;
}
.pc-feature:nth-of-type(2n){
  background-color:transparent;
}
.pc-amount{
  background-color:rgba(0, 0, 0, 0.1);
  font-size:35px;
  text-align:center;
  padding:35px 0;
}
.pc-regular{
  background-color:#da78a0;
}
.pc-enterprise{
  background-color:#d66a96;
}
.footer-under{
  background-color:#312833;
  padding-bottom:100px;
  padding-top:100px;
  min-height:500px;
  color:#eee;
  position:relative;
  font-weight:100;
  font-family:Helvetica,serif;
}
.copyright{
  background-color:rgba(0, 0, 0, 0.15);
  color:rgba(238, 238, 238, 0.5);
  bottom:0;
  padding:1em 0;
  position:absolute;
  width:100%;
  font-size:0.75em;
}
.made-with{
  float:left;
  width:50%;
  padding:5px 0;
}
.foot-social-btns{
  display:none;
  float:right;
  width:50%;
  text-align:right;
  padding:5px 0;
}
.footer-container{
  display:flex;
  flex-wrap:wrap;
  align-items:stretch;
  justify-content:space-around;
}
.foot-list{
  float:left;
  width:200px;
}
.foot-list-title{
  font-weight:400;
  margin-bottom:10px;
  padding:0.5em 0;
}
.foot-list-item{
  color:rgba(238, 238, 238, 0.8);
  font-size:0.8em;
  padding:0.5em 0;
}
.foot-list-item:hover{
  color:rgba(238, 238, 238, 1);
}
.foot-form-cont{
  width:300px;
  float:right;
}
.foot-form-title{
  color:rgba(255,255,255,0.75);
  font-weight:400;
  margin-bottom:10px;
  padding:0.5em 0;
  text-align:right;
  font-size:2em;
}
.foot-form-desc{
  font-size:0.8em;
  color:rgba(255,255,255,0.55);
  line-height:20px;
  text-align:right;
  margin-bottom:15px;
}
.sub-input{
  width:100%;
  margin-bottom:15px;
  padding:7px 10px;
  border-radius:2px;
  color:#fff;
  background-color:#554c57;
  border:none;
}
.sub-btn{
  width:100%;
  margin:15px 0;
  background-color:#785580;
  border:none;
  color:#fff;
  border-radius:2px;
  padding:7px 10px;
  font-size:1em;
  cursor:pointer;
}
.sub-btn:hover{
  background-color:#91699a;
}
.sub-btn:active{
  background-color:#573f5c;
}
.bdg-sect{
  padding-top:100px;
  padding-bottom:100px;
  font-family:Helvetica, serif;
  background-color:#fafafa;
}
.bdg-title{
  text-align:center;
  font-size:2em;
  margin-bottom:55px;
  color:#555555;
}
.badges{
  padding:20px;
  display:flex;
  justify-content:space-around;
  align-items:flex-start;
  flex-wrap:wrap;
}
.badge{
  width:290px;
  font-family:Helvetica, serif;
  background-color:white;
  margin-bottom:30px;
  box-shadow:0 2px 2px 0 rgba(0, 0, 0, 0.2);
  border-radius:3px;
  font-weight:100;
  overflow:hidden;
  text-align:center;
}
.badge-header{
  height:115px;
  background-image:url("https://grapesjs.com/img/bg-gr-v.png"), url("https://grapesjs.com/img/work-desk.jpg");
  background-position:left top, center center;
  background-attachment:scroll, fixed;
  overflow:hidden;
}
.badge-name{
  font-size:1.4em;
  margin-bottom:5px;
}
.badge-role{
  color:#777;
  font-size:1em;
  margin-bottom:25px;
}
.badge-desc{
  font-size:0.85rem;
  line-height:20px;
}
.badge-avatar{
  width:100px;
  height:100px;
  border-radius:100%;
  border:5px solid #fff;
  box-shadow:0 1px 1px 0 rgba(0, 0, 0, 0.2);
  margin-top:-75px;
  position:relative;
}
.badge-body{
  margin:35px 10px;
}
.badge-foot{
  color:#fff;
  background-color:#a290a5;
  padding-top:13px;
  padding-bottom:13px;
  display:flex;
  justify-content:center;
}
.badge-link{
  height:35px;
  width:35px;
  line-height:35px;
  font-weight:700;
  background-color:#fff;
  color:#a290a5;
  display:block;
  border-radius:100%;
  margin:0 10px;
}
.gjs-row{
  display:flex;
  justify-content:flex-start;
  align-items:stretch;
  flex-wrap:nowrap;
  padding:10px;
}
.gjs-cell{
  min-height:75px;
  flex-grow:1;
  flex-basis:100%;
}
@media (max-width: 768px){
  .foot-form-cont{
    width:400px;
  }
  .foot-form-title{
    width:autopx;
  }
  .gjs-row{
    flex-wrap:wrap;
  }
}
@media (max-width: 480px){
  .foot-lists{
    display:none;
  }
}

</style>
    </div>
</div>

<script type="text/javascript">
window.onload = () => {
    // window.editor = grapesjs.init({
    //     // height: '100%',
    //     showOffsets: true,
    //     noticeOnUnload: false,
    //     storageManager: false,
    //     container: '#gjs',
    //     fromElement: true,

    //     plugins: [
    //         // 'grapesjs-preset-webpage',
    //         'grapesjs-preset-newsletter',
    //         // 'grapesjs-blocks-bootstrap5',
    //     ],
    //     pluginsOpts: {
    //         // 'grapesjs-preset-webpage': {}
    //     },
    //     canvas: {
    //         styles: [
    //             'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css'
    //         ],
    //         scripts: [
    //             'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'
    //         ],
    //     }
    // });

    
    var lp = './img/';
      var plp = 'https://via.placeholder.com/350x250/';
      var images = [
        lp + 'team1.jpg',
        lp + 'team2.jpg',
        lp + 'team3.jpg',
        plp + '78c5d6/fff',
        plp + '459ba8/fff',
        plp + '79c267/fff',
        plp + 'c5d647/fff',
        plp + 'f28c33/fff',
        plp + 'e868a2/fff',
        plp + 'cc4360/fff',
        lp + 'work-desk.jpg',
        lp + 'phone-app.png',
        lp + 'bg-gr-v.png'
      ];

      var editor  = grapesjs.init({
        height: '100%',
        container : '#gjs',
        fromElement: true,
        showOffsets: true,
        assetManager: {
          embedAsBase64: true,
          assets: images
        },
        // selectorManager: { componentFirst: true },
        // styleManager: {
        //   sectors: [{
        //       name: 'General',
        //       properties:[
        //         {
        //           extend: 'float',
        //           type: 'radio',
        //           default: 'none',
        //           options: [
        //             { value: 'none', className: 'fa fa-times'},
        //             { value: 'left', className: 'fa fa-align-left'},
        //             { value: 'right', className: 'fa fa-align-right'}
        //           ],
        //         },
        //         'display',
        //         { extend: 'position', type: 'select' },
        //         'top',
        //         'right',
        //         'left',
        //         'bottom',
        //       ],
        //     }, {
        //         name: 'Dimension',
        //         open: false,
        //         properties: [
        //           'width',
        //           {
        //             id: 'flex-width',
        //             type: 'integer',
        //             name: 'Width',
        //             units: ['px', '%'],
        //             property: 'flex-basis',
        //             toRequire: 1,
        //           },
        //           'height',
        //           'max-width',
        //           'min-height',
        //           'margin',
        //           'padding'
        //         ],
        //       },{
        //         name: 'Typography',
        //         open: false,
        //         properties: [
        //             'font-family',
        //             'font-size',
        //             'font-weight',
        //             'letter-spacing',
        //             'color',
        //             'line-height',
        //             {
        //               extend: 'text-align',
        //               options: [
        //                 { id : 'left',  label : 'Left',    className: 'fa fa-align-left'},
        //                 { id : 'center',  label : 'Center',  className: 'fa fa-align-center' },
        //                 { id : 'right',   label : 'Right',   className: 'fa fa-align-right'},
        //                 { id : 'justify', label : 'Justify',   className: 'fa fa-align-justify'}
        //               ],
        //             },
        //             {
        //               property: 'text-decoration',
        //               type: 'radio',
        //               default: 'none',
        //               options: [
        //                 { id: 'none', label: 'None', className: 'fa fa-times'},
        //                 { id: 'underline', label: 'underline', className: 'fa fa-underline' },
        //                 { id: 'line-through', label: 'Line-through', className: 'fa fa-strikethrough'}
        //               ],
        //             },
        //             'text-shadow'
        //         ],
        //       },{
        //         name: 'Decorations',
        //         open: false,
        //         properties: [
        //           'opacity',
        //           'border-radius',
        //           'border',
        //           'box-shadow',
        //           'background', // { id: 'background-bg', property: 'background', type: 'bg' }
        //         ],
        //       },{
        //         name: 'Extra',
        //         open: false,
        //         buildProps: [
        //           'transition',
        //           'perspective',
        //           'transform'
        //         ],
        //       },{
        //         name: 'Flex',
        //         open: false,
        //         properties: [{
        //           name: 'Flex Container',
        //           property: 'display',
        //           type: 'select',
        //           defaults: 'block',
        //           list: [
        //             { value: 'block', name: 'Disable'},
        //             { value: 'flex', name: 'Enable'}
        //           ],
        //         },{
        //           name: 'Flex Parent',
        //           property: 'label-parent-flex',
        //           type: 'integer',
        //         },{
        //           name: 'Direction',
        //           property: 'flex-direction',
        //           type: 'radio',
        //           defaults: 'row',
        //           list: [{
        //             value: 'row',
        //             name: 'Row',
        //             className: 'icons-flex icon-dir-row',
        //             title: 'Row',
        //           },{
        //             value: 'row-reverse',
        //             name: 'Row reverse',
        //             className: 'icons-flex icon-dir-row-rev',
        //             title: 'Row reverse',
        //           },{
        //             value: 'column',
        //             name: 'Column',
        //             title: 'Column',
        //             className: 'icons-flex icon-dir-col',
        //           },{
        //             value: 'column-reverse',
        //             name: 'Column reverse',
        //             title: 'Column reverse',
        //             className: 'icons-flex icon-dir-col-rev',
        //           }],
        //         },{
        //           name: 'Justify',
        //           property: 'justify-content',
        //           type: 'radio',
        //           defaults: 'flex-start',
        //           list: [{
        //             value: 'flex-start',
        //             className: 'icons-flex icon-just-start',
        //             title: 'Start',
        //           },{
        //             value: 'flex-end',
        //             title: 'End',
        //             className: 'icons-flex icon-just-end',
        //           },{
        //             value: 'space-between',
        //             title: 'Space between',
        //             className: 'icons-flex icon-just-sp-bet',
        //           },{
        //             value: 'space-around',
        //             title: 'Space around',
        //             className: 'icons-flex icon-just-sp-ar',
        //           },{
        //             value: 'center',
        //             title: 'Center',
        //             className: 'icons-flex icon-just-sp-cent',
        //           }],
        //         },{
        //           name: 'Align',
        //           property: 'align-items',
        //           type: 'radio',
        //           defaults: 'center',
        //           list: [{
        //             value: 'flex-start',
        //             title: 'Start',
        //             className: 'icons-flex icon-al-start',
        //           },{
        //             value: 'flex-end',
        //             title: 'End',
        //             className: 'icons-flex icon-al-end',
        //           },{
        //             value: 'stretch',
        //             title: 'Stretch',
        //             className: 'icons-flex icon-al-str',
        //           },{
        //             value: 'center',
        //             title: 'Center',
        //             className: 'icons-flex icon-al-center',
        //           }],
        //         },{
        //           name: 'Flex Children',
        //           property: 'label-parent-flex',
        //           type: 'integer',
        //         },{
        //           name: 'Order',
        //           property: 'order',
        //           type: 'integer',
        //           defaults: 0,
        //           min: 0
        //         },{
        //           name: 'Flex',
        //           property: 'flex',
        //           type: 'composite',
        //           properties  : [{
        //             name: 'Grow',
        //             property: 'flex-grow',
        //             type: 'integer',
        //             defaults: 0,
        //             min: 0
        //           },{
        //             name: 'Shrink',
        //             property: 'flex-shrink',
        //             type: 'integer',
        //             defaults: 0,
        //             min: 0
        //           },{
        //             name: 'Basis',
        //             property: 'flex-basis',
        //             type: 'integer',
        //             units: ['px','%',''],
        //             unit: '',
        //             defaults: 'auto',
        //           }],
        //         },{
        //           name: 'Align',
        //           property: 'align-self',
        //           type: 'radio',
        //           defaults: 'auto',
        //           list: [{
        //             value: 'auto',
        //             name: 'Auto',
        //           },{
        //             value: 'flex-start',
        //             title: 'Start',
        //             className: 'icons-flex icon-al-start',
        //           },{
        //             value   : 'flex-end',
        //             title: 'End',
        //             className: 'icons-flex icon-al-end',
        //           },{
        //             value   : 'stretch',
        //             title: 'Stretch',
        //             className: 'icons-flex icon-al-str',
        //           },{
        //             value   : 'center',
        //             title: 'Center',
        //             className: 'icons-flex icon-al-center',
        //           }],
        //         }]
        //       }
        //     ],
        // },
        plugins: [
        //   'gjs-blocks-basic',
        //   'grapesjs-plugin-forms',
        //   'grapesjs-component-countdown',
        //   'grapesjs-plugin-export',
        //   'grapesjs-tabs',
        //   'grapesjs-custom-code',
        //   'grapesjs-touch',
        //   'grapesjs-parser-postcss',
        //   'grapesjs-tooltip',
        //   'grapesjs-tui-image-editor',
        //   'grapesjs-typed',
        //   'grapesjs-style-bg',
        //   'grapesjs-preset-webpage',
        ],
        pluginsOpts: {
        //   'gjs-blocks-basic': { flexGrid: true },
        //   'grapesjs-tui-image-editor': {
        //     script: [
        //       // 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js',
        //       'https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js',
        //       'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.js',
        //       'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.js'
        //     ],
        //     style: [
        //       'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.css',
        //       'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.css',
        //     ],
        //   },
        //   'grapesjs-tabs': {
        //     tabsBlock: { category: 'Extra' }
        //   },
        //   'grapesjs-typed': {
        //     block: {
        //       category: 'Extra',
        //       content: {
        //         type: 'typed',
        //         'type-speed': 40,
        //         strings: [
        //           'Text row one',
        //           'Text row two',
        //           'Text row three',
        //         ],
        //       }
        //     }
        //   },
        //   'grapesjs-preset-webpage': {
        //     modalImportTitle: 'Import Template',
        //     modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
        //     modalImportContent: function(editor) {
        //       return editor.getHtml() + '<style>'+editor.getCss()+'</style>'
        //     },
        //   },
        },
      });

    //   editor.I18n.addMessages({
    //     en: {
    //       styleManager: {
    //         properties: {
    //           'background-repeat': 'Repeat',
    //           'background-position': 'Position',
    //           'background-attachment': 'Attachment',
    //           'background-size': 'Size',
    //         }
    //       },
    //     }
    //   });

    //   var pn = editor.Panels;
    //   var modal = editor.Modal;
    //   var cmdm = editor.Commands;

    //   // Update canvas-clear command
    //   cmdm.add('canvas-clear', function() {
    //     if(confirm('Are you sure to clean the canvas?')) {
    //       editor.runCommand('core:canvas-clear')
    //       setTimeout(function(){ localStorage.clear()}, 0)
    //     }
    //   });

    //   // Add info command
    //   var mdlClass = 'gjs-mdl-dialog-sm';
    //   var infoContainer = document.getElementById('info-panel');

    //   cmdm.add('open-info', function() {
    //     var mdlDialog = document.querySelector('.gjs-mdl-dialog');
    //     mdlDialog.className += ' ' + mdlClass;
    //     infoContainer.style.display = 'block';
    //     modal.setTitle('About this demo');
    //     modal.setContent(infoContainer);
    //     modal.open();
    //     modal.getModel().once('change:open', function() {
    //       mdlDialog.className = mdlDialog.className.replace(mdlClass, '');
    //     })
    //   });

    //   pn.addButton('options', {
    //     id: 'open-info',
    //     className: 'fa fa-question-circle',
    //     command: function() { editor.runCommand('open-info') },
    //     attributes: {
    //       'title': 'About',
    //       'data-tooltip-pos': 'bottom',
    //     },
    //   });


    //   // Simple warn notifier
    //   var origWarn = console.warn;
    //   toastr.options = {
    //     closeButton: true,
    //     preventDuplicates: true,
    //     showDuration: 250,
    //     hideDuration: 150
    //   };
    //   console.warn = function (msg) {
    //     if (msg.indexOf('[undefined]') == -1) {
    //       toastr.warning(msg);
    //     }
    //     origWarn(msg);
    //   };


    //   // Add and beautify tooltips
    //   [['sw-visibility', 'Show Borders'], ['preview', 'Preview'], ['fullscreen', 'Fullscreen'],
    //    ['export-template', 'Export'], ['undo', 'Undo'], ['redo', 'Redo'],
    //    ['gjs-open-import-webpage', 'Import'], ['canvas-clear', 'Clear canvas']]
    //   .forEach(function(item) {
    //     pn.getButton('options', item[0]).set('attributes', {title: item[1], 'data-tooltip-pos': 'bottom'});
    //   });
    //   [['open-sm', 'Style Manager'], ['open-layers', 'Layers'], ['open-blocks', 'Blocks']]
    //   .forEach(function(item) {
    //     pn.getButton('views', item[0]).set('attributes', {title: item[1], 'data-tooltip-pos': 'bottom'});
    //   });
    //   var titles = document.querySelectorAll('*[title]');

    //   for (var i = 0; i < titles.length; i++) {
    //     var el = titles[i];
    //     var title = el.getAttribute('title');
    //     title = title ? title.trim(): '';
    //     if(!title)
    //       break;
    //     el.setAttribute('data-tooltip', title);
    //     el.setAttribute('title', '');
    //   }


    //   // Store and load events
    //   editor.on('storage:load', function(e) { console.log('Loaded ', e) });
    //   editor.on('storage:store', function(e) { console.log('Stored ', e) });


    //   // Do stuff on load
    //   editor.on('load', function() {
    //     var $ = grapesjs.$;

    //     // Show borders by default
    //     pn.getButton('options', 'sw-visibility').set('active', 1);

    //     // Show logo with the version
    //     var logoCont = document.querySelector('.gjs-logo-cont');
    //     document.querySelector('.gjs-logo-version').innerHTML = 'v' + grapesjs.version;
    //     var logoPanel = document.querySelector('.gjs-pn-commands');
    //     logoPanel.appendChild(logoCont);


    //     // Load and show settings and style manager
    //     var openTmBtn = pn.getButton('views', 'open-tm');
    //     openTmBtn && openTmBtn.set('active', 1);
    //     var openSm = pn.getButton('views', 'open-sm');
    //     openSm && openSm.set('active', 1);

    //     // Remove trait view
    //     pn.removeButton('views', 'open-tm');

    //     // Add Settings Sector
    //     var traitsSector = $('<div class="gjs-sm-sector no-select">'+
    //       '<div class="gjs-sm-sector-title"><span class="icon-settings fa fa-cog"></span> <span class="gjs-sm-sector-label">Settings</span></div>' +
    //       '<div class="gjs-sm-properties" style="display: none;"></div></div>');
    //     var traitsProps = traitsSector.find('.gjs-sm-properties');
    //     traitsProps.append($('.gjs-trt-traits'));
    //     $('.gjs-sm-sectors').before(traitsSector);
    //     traitsSector.find('.gjs-sm-sector-title').on('click', function(){
    //       var traitStyle = traitsProps.get(0).style;
    //       var hidden = traitStyle.display == 'none';
    //       if (hidden) {
    //         traitStyle.display = 'block';
    //       } else {
    //         traitStyle.display = 'none';
    //       }
    //     });

    //     // Open block manager
    //     var openBlocksBtn = editor.Panels.getButton('views', 'open-blocks');
    //     openBlocksBtn && openBlocksBtn.set('active', 1);

    //     // Move Ad
    //     $('#gjs').append($('.ad-cont'));
    //   });
};
</script>