<?php include_once 'views/_admin/header_admin.php';?>

    <div id="wrapper">

        <!-- Menu and Navbar -->
        <?php include_once 'views/_admin/admin_menu.php';?>
        <!-- /Menu and Navbar -->

        <!-- Dashboard -->
        <?php include_once 'views/_admin/admin_roles_crud_template.php';?>
        <!-- /Dashboard -->


    </div>
    <!-- /#wrapper -->
<?php include_once 'views/_admin/footer_admin.php';?>
<script>
            jQuery( document ).ready(function() {
                /* ---/NavBar--- */

                    /* Language DataTable */
                    jQuery('#tableDataRole').dataTable({
                        "language": {
                            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
                        },

                        "order": [[ 0, "desc" ]]
                    });

                    /* Search input in DataTable */
                    jQuery('#tableDataRole tfoot th').each( function () {
                        var title = jQuery(this).text();
                        jQuery(this).html( '<input type="text" placeholder="Rechercher : '+title+'" />' );
                    } );

                    // DataTable variable
                    var table = jQuery('#tableDataRole').DataTable();

                    // Apply the search
                    table.columns().every( function () {
                        var that = this;

                        jQuery( 'input', this.footer() ).on( 'keyup change', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        });
                    });



                    });
        </script>