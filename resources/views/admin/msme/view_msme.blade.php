@extends('layouts.admin.head_foot')
@section('body')
<div class="row mx-5">
    <div class="col l12 s12 m12">
        <div class="col l12 s12 m12">
            <h5>Contact Details</h5>
            <div class="panel panel-default panel-custom">

                <table id="user_listing" class="display view_msme_table res_table">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Info</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $i=1;
            foreach($msme as $msme_get)
            {
              ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <p class="m-0">{{ $msme_get->name }}</p>
                                <p class="m-0">{{ $msme_get->company }}</p>
                                <p class="m-0">{{ $msme_get->contact }}</p>
                                <p class="m-0">{{ $msme_get->email }}</p>
                            </td>
                            <td>{{ @$msme_get->message }}</td>
                            <td>{{ @$msme_get->created_at }}</td>
                        </tr>
                        <?php
            }
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop