@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Conversations, {{Auth::user()->name}}</div>

                    <div class="panel-body">
                        <?php
                            echo '<div><table>';
                            for($i = 0; $i < sizeOf($conversation); $i++){
                                echo '<tr>';
                                echo '<td>'.$conversation[$i]->sender->name.':</td>
                                    <td>'.$conversation[$i]->message.' </td>';
                                echo '</tr>';
                            }
                            echo '</table></div>';

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
