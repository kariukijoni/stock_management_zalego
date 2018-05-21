<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            <i class="fa fa-list">Stock Management</i>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header">
                    Stock Listing
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover" id="stock_listing">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        <?php
                        if (!empty($stock_list)) {
                            foreach ($stock_list as $list) {
                                ?>
                                <tr>
                                    <td><?php echo $list->item_id ?></td>
                                    <td><?php echo $list->item_name ?></td>
                                    <td><?php echo $list->item_qty ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info" href="<?php echo base_url() . 'stock/edit_stock/' . $list->item_id; ?>"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-sm btn-danger delete_stock" href="#" data-item_id="<?php echo $list->item_id; ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </table>

                </div><!-- /.box-body -->
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $('#stock_listing').DataTable();
    });
</script>