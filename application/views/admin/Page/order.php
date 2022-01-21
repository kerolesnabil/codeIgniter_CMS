

<section>
    <h2>Order pages</h2>
    <p class="alert alert-info">Drag to order pages and then click  'save' </p>

    <div id="orderResult"></div>

    <script>
        $(function () {
            $.post( '<?php echo site_url('admin/Page/order_ajax') ?>' , {} ,function (data) {
                $('#orderResult').html(data)
            } )
        });
    </script>

</section>