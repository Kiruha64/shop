<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <? $this->Html->css('default.css') ?>

    <!--    --><?//= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<style>
    body {
        position: relative;
        overflow-x: hidden;
    }
    body,
    html { height: 100%;}
    .nav .open > a,
    .nav .open > a:hover,
    .nav .open > a:focus {background-color: transparent;}
    /* Wrappers */
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #wrapper.toggled {
        padding-left: 220px;
    }
    #sidebar-wrapper {
        z-index: 1000;
        left: 220px;
        width: 0;
        height: 100%;
        margin-left: -220px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #1a1a1a;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    #sidebar-wrapper::-webkit-scrollbar {
        display: none;
    }
    #wrapper.toggled #sidebar-wrapper {
        width: 220px;
    }
    #page-content-wrapper {
        width: 100%;
        padding-top: 70px;
    }
    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -220px;
    }
    /* Sidebar nav styles */
    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 220px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .sidebar-nav li {
        position: relative;
        line-height: 20px;
        display: inline-block;
        width: 100%;
    }
    .sidebar-nav li:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        height: 100%;
        width: 3px;
        background-color: #1c1c1c;
        -webkit-transition: width .2s ease-in;
        -moz-transition: width .2s ease-in;
        -ms-transition: width .2s ease-in;
        transition: width .2s ease-in;

    }
    .sidebar-nav li:first-child a {
        color: #fff;
        background-color: #1a1a1a;
    }
    .sidebar-nav li:nth-child(2):before {
        background-color: #ec1b5a;
    }
    .sidebar-nav li:nth-child(3):before {
        background-color: #79aefe;
    }
    .sidebar-nav li:nth-child(4):before {
        background-color: #314190;
    }
    .sidebar-nav li:nth-child(5):before {
        background-color: #279636;
    }
    .sidebar-nav li:nth-child(6):before {
        background-color: #7d5d81;
    }
    .sidebar-nav li:nth-child(7):before {
        background-color: #ead24c;
    }
    .sidebar-nav li:nth-child(8):before {
        background-color: #2d2366;
    }
    .sidebar-nav li:nth-child(9):before {
        background-color: #35acdf;
    }
    .sidebar-nav li:hover:before,
    .sidebar-nav li.open:hover:before {
        width: 100%;
        -webkit-transition: width .2s ease-in;
        -moz-transition: width .2s ease-in;
        -ms-transition: width .2s ease-in;
        transition: width .2s ease-in;

    }
    .sidebar-nav li a {
        display: block;
        color: #ddd;
        text-decoration: none;
        padding: 10px 15px 10px 30px;
    }
    .sidebar-nav li a:hover,
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus,
    .sidebar-nav li.open a:hover,
    .sidebar-nav li.open a:active,
    .sidebar-nav li.open a:focus{
        color: #fff;
        text-decoration: none;
        background-color: transparent;
    }
    .sidebar-nav > .sidebar-brand {
        height: 65px;
        font-size: 20px;
        line-height: 44px;
    }
    .sidebar-nav .dropdown-menu {
        position: relative;
        width: 100%;
        padding: 0;
        margin: 0;
        border-radius: 0;
        border: none;
        background-color: #222;
        box-shadow: none;
    }
    /* Hamburger-Cross */
    .hamburger {
        position: fixed;
        top: 20px;
        z-index: 999;
        display: block;
        width: 32px;
        height: 32px;
        margin-left: 15px;
        background: transparent;
        border: none;
    }
    .hamburger:hover,
    .hamburger:focus,
    .hamburger:active {
        outline: none;
    }
    .hamburger.is-closed:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom,
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        position: absolute;
        left: 0;
        height: 4px;
        width: 100%;
    }
    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom {
        background-color: #1a1a1a;
    }
    .hamburger.is-closed .hamb-top {
        top: 5px;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed .hamb-middle {
        top: 50%;
        margin-top: -2px;
    }
    .hamburger.is-closed .hamb-bottom {
        bottom: 5px;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed:hover .hamb-top {
        top: 0;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed:hover .hamb-bottom {
        bottom: 0;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        background-color: #1a1a1a;
    }
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-bottom {
        top: 50%;
        margin-top: -2px;
    }
    .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    }
    .hamburger.is-open .hamb-middle { display: none; }
    .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    }
    .hamburger.is-open:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-open:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    /* Overlay */
    .overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(250,250,250,.8);
        z-index: 1;
    }

    #admin-header{
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .container-fluid{
        max-width: 1280px!important;
    }

    table>tbody>tr>td{
        max-width: 150px!important;
        overflow: auto!important;
    }
    .actions {
        width: 220px!important;
    }
    .typecategories-select{
        display: none;
    }
    iframe {
        display: none;
    }

</style>

<?// if ($user_role == 'user'):?>

<div id="wrapper"style="padding-bottom: 30px">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Admin Panel
                </a>
            </li>
            <li>
                <?= $this->Html->link('Shifts',['controller'=>'Shifts','action'=>'index'])?>
            </li>
            <li>
                <?= $this->Html->link('Products',['controller'=>'Products','action'=>'index'])?>
            </li>
            <li>
                <?= $this->Html->link('Categories',['controller'=>'Categories','action'=>'index'])?>
            </li>
            <li>
                <?= $this->Html->link('Type Categories',['controller'=>'Typecategories','action'=>'index'])?>
            </li>

            <? if ($user_role == 'owner'):?>
            <li>
                <?= $this->Html->link('Users',['controller'=>'Users','action'=>'index'])?>
            </li>
            <? endif; ?>

            <li>
                <?= $this->Html->link('Teams',['controller'=>'Teams','action'=>'index'])?>
            </li>

<!--            <li class="dropdown">-->
<!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>-->
<!--                <ul class="dropdown-menu" role="menu">-->
<!--                    <li class="dropdown-header">Dropdown heading</li>-->
<!--                    <li><a href="#">Action</a></li>-->
<!--                    <li><a href="#">Another action</a></li>-->
<!--                    <li><a href="#">Something else here</a></li>-->
<!--                    <li><a href="#">Separated link</a></li>-->
<!--                    <li><a href="#">One more separated link</a></li>-->
<!--                </ul>-->
<!--            </li>-->
            <li>
                <?= $this->Html->link('Back to site',['controller'=>'Home','action'=>'index','plugin'=>false])?>

            </li>

        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container-fluid">
            <div class="col-md-3">
                <h3><?=  $title ?></h3>
<!--                --><?// if ($this->request->getParam('action') != 'index'):?>
<!--                <h6>--><?//= $this->Html->link($title.' list',['controller'=>$title,'action'=>'index'])?><!--</h6>-->
<!--                <h6>--><?//= $this->Html->link('Add '.$title,['controller'=>$title,'action'=>'add'])?><!--</h6>-->
<!--                --><?//endif;?>

            </div>
            <?= $this->Flash->render() ?>
            <div class="container-fluid clearfix" style="padding-top: 10px">
                <?= $this->fetch('content') ?>
            </div>
            <footer>
            </footer>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->


<?// endif;?>
</body>

<?= $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') ?>
<?= $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') ?>

<script>


    // console.log('asd')
    // $('#category_id').change(function(){
    //     $('.city-select').fadeIn('slow');
    //     $.ajax({
    //         url:"",
    //         method:'post',
    //         data: {category_id: $(this).val()},
    //         success: function(data){
    //             console.log()
    //         }
    //     })
    //
    // });

    //var targetUrlOnCountryChange = <?//= Router::url(["controller"=>"homes","action"=>"getStates"]); ?>




    $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });


</script>

<script src="../../../webroot/js/ajax.js"></script>


<script>
    $(document).ready(function () {
        alert(localStorage.getItem('seconds'));
        var sec = localStorage.getItem('seconds');
        function counter() {
            $("#seconds").html(pad(++sec % 60));
            $("#minutes").html(pad(parseInt(sec / 60, 10)));
            $("#hours").html(pad(parseInt(sec / 3600, 10)));
            localStorage.setItem('seconds',sec);
        }
        function pad(val) {
            return val > 9 ? val : +val;
        }

        <? if (isset($status) && $status == 0):?>
        $('#stop').fadeIn('slow');
        timer = setInterval(counter, 1000);
        $('#finish').fadeIn('slow');
        $('#start_block').fadeOut('slow');
        <? endif;?>


        // var timer;

        $('#start').click(function () {
            $.ajax({
                type: "post",
                url: "<?= $this->Url->build(["controller" => "Shifts", "action" => "start", 'plugin' => 'admin']); ?>",
                data: 1,
                success: function () {
                },
                error: function () {
                    alert('AjaX Failed')
                }
            });
            location.reload();


        });
        $('#finish').click(function () {
            clearInterval(timer);
            var hours = $('#hours').html();
            var minutes = $('#minutes').html();
            var seconds = $('#seconds').html()
            var alltime = (seconds / 3600) + (minutes / 60) + hours;
            console.log(alltime);

            $('#stop').removeClass('stopped');

            sec = 0;
            counter();


            $('#stop').fadeOut('slow');
            $('#finish').fadeOut('slow');
            $('#start_block').fadeIn('slow');

            SendTime(alltime);

            function SendTime(time) {
                var data = alltime;
                $.ajax({
                    type: "post",
                    url: "<?= $this->Url->build(["controller" => "Shifts", "action" => "finish", 'plugin' => 'admin']); ?>",
                    data: {time: data},
                    success: function () {
                    },
                    error: function () {
                        alert('AjaX Failed')
                    }
                });
            };
            location.reload();


        });
    });

</script>

</html>
