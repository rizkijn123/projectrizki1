<?php

function mask ( $str, $start = 0, $length = null ) {
    $mask = preg_replace ( "/\S/", "*", $str );
    if( is_null ( $length )) {
        $mask = substr ( $mask, $start );
        $str = substr_replace ( $str, $mask, $start );
    }else{
        $mask = substr ( $mask, $start, $length );
        $str = substr_replace ( $str, $mask, $start, $length );
    }
    return $str;
}
?>
                    <div class="card">
                        <div class="header">
                            <h2>History Order</h2>

                        </div>
                        <div class="body">
				<div class="panel-body">
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                                    <th>Pembeli</th>
                                                    <th>Reseller</th>
                                                    <th>Email Pembeli</th>
                                                    <th>HDSN</th>
                                                    <th>Expired</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
$i=0;
$tampil = mysql_query("SELECT * FROM user WHERE username = '$username'");
$get = mysql_fetch_array($tampil);
$name = $get['nama'];
$tampil23 = mysql_query("SELECT * FROM member WHERE reseller = '$name'");

while($data = mysql_fetch_array($tampil23))
 {
 $i++;
 
echo "
<tr>
 <td>".$data[name]."</td>
 <td>".$data[reseller]."</td>
 <td>".$data[email]."</td>
 <td>".$data[username]."</td>
 <td>".$data[expired]."</td>
 <td>".$data[status]."</td>
</tr>";
}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                   </div>
                                   </div>
                                   </div>
