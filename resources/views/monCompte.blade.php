<head>
    <title>Ushare-account</title>
    <meta content="">
    <link rel="stylesheet" href="css/compte.css">
    <style>
    html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif;}
    .w3-sidenav a {padding:16px;}
    <?php
        session_start();
    ?>
    </style>
  </head>
@extends('layout2')

@section('contenu')   
    {{ csrf_field() }}

<!--Cette partie sera la page vers où l'abonné recevra toutes les messages de notifications
lui indiquants que ses questions ont été résolues -->
  <div class="inbox-message">
                <div class= "col-lg-9 col-md-3">
                <div class="inbox-text-list sm-res-mg-t-30">
                    <div class="form-group">
                        <div class="nk-int-st search-input search-overt">
                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search email..." />
                            <button class="btn search-ib">Search</button>
                        </div>
                    </div>
                </div>
                <div class="inbox-btn-st-ls btn-toolbar">
                                    <div class="btn-group ib-btn-gp active-hook nk-email-inbox">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Refresh</button>                
                                        <button class="btn btn-default btn-sm"><i class="fa fa-arrow-down"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <div class="btn-group ib-btn-gp active-hook nk-act nk-email-inbox">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i></button>
                                        <button class="btn btn-default btn-sm"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>    
                <div class="table-responsive">
                    <table class="table table-hover table-inbox" id="myTable" >
                                
                        <tbody>
                            <tr class="header">
                                    <th >Name</th>
                                    <th >Message</th>
                            </tr>
                                
                            <tr class="unread">
                               <!-- <td class="">
                                    <label><input type="checkbox" checked="" class="i-checks"></label>
                                </td> -->
                                <td>Jeremy Massey</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                <td><i class="fa fa-paperclip"></i></td>
                                <td class="text-right message-date">Tue, Nov 25</td>
                            </tr>
                                
                             <tr class="active">
                                <!-- <td class="">
                                    <label><input type="checkbox" class="i-checks"></label>
                                </td> -->
                                <td>Marshall Horne</td>
                                <td>Praesent nec nisl sed neque ornare maximus at ac enim.
                                <td></td>
                                <td class="text-right message-date">Wed, Jan 13</td>
                            </tr>
                            <tr>
                               <!-- <td class="">
                                    <label><input type="checkbox" class="i-checks"></label>
                                </td>-->
                                <td>Grant Franco<span class="label label-warning">Finance</span></td>
                                <td>Etiam maximus tellus a turpis tempor mollis.</td>
                                <td></td>
                                <td class="text-right message-date">Mon, Oct 19</td>
                            </tr>
                            <tr class="unread active">
                                <!--<td class="">
                                    <label><input type="checkbox" class="i-checks"></label>
                                </td> -->
                                <td>Ferdinand Meadows</td>
                                <td>Aenean hendrerit ligula eget augue gravida semper.</td>
                                <td><i class="fa fa-paperclip"></i></td>
                                <td class="text-right message-date">Sat, Aug 29</td>
                            </tr>
                            <tr>
                               <!-- <td class="">
                                    <label><input type="checkbox" checked="" class="i-checks"></label>
                                </td> -->
                                <td>Ivor Rios <span class="label label-info">Social</span>
                                </td>
                                <td>Sed quis augue in nunc venenatis finibus</td>
                                <td><i class="fa fa-paperclip"></i></td>
                                <td class="text-right message-date">Sat, Dec 12</td>
                            </tr>
                            <tr>
                                <!--<td class="">
                                    <label><input type="checkbox" class="i-checks"></label>
                                </td> -->
                                <td>Maxwell Murphy</td>
                                <td>Quisque eu tortor quis justo viverra cursus.</td>
                                <td></td>
                                <td class="text-right message-date">Sun, May 17</td>
                            </tr>    
                        </tbody>
                    </table>
                    <div class="pagination-inbox">
                        <ul class="wizard-nav-ac">
                            <li><a class="btn" href="#"><i class="fa fa-arrow-left"></i></a></li>
                            <li class="active"><a class="btn" href="#">1</a></li>
                            <li><a class="btn" href="#">2</a></li>
                            <li><a class="btn" href="#">3</a></li>
                            <li><a class="btn" href="#"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>    
                </div>    
            </div>      
  </div>  
  <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

@endsection        