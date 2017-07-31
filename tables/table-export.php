		<!-- TABLE EXPORT MENU -->

                <div id='open-export' class='text-right'>
                    <button class='btn btn-danger toggle' onclick='changeView()'>Export Table</button>
                </div>

                <div id='close-export' class='text-right hidden'>
                    <button id='cancel' class='btn btn-danger toggle' onclick='changeViewBack()'> X </button>
                </div>

                <div id='export-table' class='panel panel-default hidden'>
                    <div class='panel-body'>
                        <div class='row'>
                            <div class='col-md-3'>
                                <div class='list-group border-bottom'>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'json',escape:'false'});"><img src='img/export-icons/json.png' width='24'/> JSON</a>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'json',escape:'false'});"><img src='img/export-icons/json.png' width='24'/> JSON (ignoreColumn)</a>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'json',escape:'true'});"><img src='img/export-icons/json.png' width='24'/> JSON (with Escape)</a>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <div class='list-group border-bottom'>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'xml',escape:'false'});"><img src='img/export-icons/xml.png' width='24'/> XML</a>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'sql'});"><img src='img/export-icons/sql.png' width='24'/> SQL</a>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <div class='list-group border-bottom'>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'csv',escape:'false'});"><img src='img/export-icons/csv.png' width='24'/> CSV</a>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'txt',escape:'false'});"><img src='img/export-icons/txt.png' width='24'/> TXT</a>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class='list-group border-bottom'>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'excel',escape:'false'});"><img src='img/export-icons/xls.png' width='24'/> XLS</a>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'doc',escape:'false'});"><img src='img/export-icons/word.png' width='24'/> Word</a>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'powerpoint',escape:'false'});"><img src='img/export-icons/ppt.png' width='24'/> PowerPoint</a>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <div class='list-group border-bottom'>
                                    <a href='#' class='list-group-item' onClick ="$('#table-lectures').tableExport({type:'png',escape:'false'});"><img src='img/export-icons/png.png' width='24'/> PNG</a>
                                    <a href='#' class='list-group-item' onClick ="print();"><img src='img/export-icons/pdf.png' width='24'/> PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- switches views for export munu -->
                <script>
                    function changeView()
                    {
                        /* global $ */
                        $('#open-export').addClass('hidden');
                        $('#close-export').removeClass('hidden');
                        $('#export-table').removeClass('hidden');
                    }
                    function changeViewBack()
                    {
                        /* global $ */
                        $('#open-export').removeClass('hidden');
                        $('#close-export').addClass('hidden');
                        $('#export-table').addClass('hidden');
                    }
                </script>
                <!-- END OF TABLE EXPORT MENU -->
