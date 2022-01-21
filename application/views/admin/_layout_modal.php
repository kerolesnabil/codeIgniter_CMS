<?php $this->load->view('admin/components/page_head') ?>







<body style="background: #555;" >
    <div class="modal show" role="dialog" >

        <?php $this->load->view($subview); //Subview is set in controller  ?>

        <div class="modal-body"></div>
        <div class="modal-footer">
            &copy;<?=$meta_title;?>
        </div>

    </div>


<?php $this->load->view('admin/components/page_tail') ?>