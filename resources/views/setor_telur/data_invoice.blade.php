<div class="row mt-2">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table class="table" id="list_orderan_table">
                    <thead>
                        <th>No</th>
                        <th>No Nota</th>
                        <th>Akun</th>
                        <th style="text-align: right">Total RP</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                        @php
                        $l=1;
                        @endphp
                        @foreach ($invoice as $i)
                        <tr>
                            <td>{{$l++}}</td>
                            <td><a href="" class="detail_nota" data-toggle="modal" data-target="#detail_invoice"
                                    nota="{{$i->nota_setor}}">{{$i->nota_setor}}</a></td>
                            <td>{{$i->nm_akun}}</td>
                            <td style="text-align: right">{{number_format($i->debit,0)}}</td>
                            <td>{{$i->setuju == 'Y' ? 'Sudah Setor' : 'Perencanaan'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
    $(function() {
        $("#list_orderan_table").DataTable({
            // "paging": true,
            "bSort": true,
            "paging": true,
            "stateSave": true,
            "scrollCollapse": true,
            // "order": [[ 1, 'desc' ]],
            "fixedHeader": true,
        });
     });
</script>