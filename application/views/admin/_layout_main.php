<?php $this->load->view('admin/components/page_head') ?>
    <body>
        <div class="navbar navbar-static-top navbar-inverse " >
            <div class="navbar-inner">
                <a class="brand" href="<?= site_url('admin/Dashboard'); ?>"><?=$meta_title;?></a>
                <ul class="nav">
                    <li class="active"><a href="<?= site_url('admin/Dashboard') ?>"> Dashboard </a></li>
                    <li><?= anchor('admin/Page','pages'); ?></li>
                    <li><?= anchor('admin/Page/order','order pages'); ?></li>
                    <li><?= anchor('admin/Article','news articles'); ?></li>
                    <li><?= anchor('admin/User/login','users'); ?></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row  ">

                <!-- Main column  -->
                <div class="span9">

                    <section>
                        <?php $this->load->view($subview); ?>
                    </section>

                </div>

                <!--  Sidebar  -->
                <div class="span3">
                    <section>
                        <?=mailto('keroles.nabil.official@gmail.com', '<i class="icon-user" ></i>keroles@codeigniter.tv');?> <br>
                        <?=anchor('admin/user/logout','<i class="icon-off"></i>logout');?>
                    </section>
                </div>
            </div>
        </div>

<?php $this->load->view('admin/components/page_tail') ?>