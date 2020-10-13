<?php
    $list = array(
                array('judul'=>'Sherlock Holmes',
				  	  'pengarang'=>'Arthur Cona Doyle',
				  	  'harga'=>50000,
				  	  'stok'=>20),
				array('judul'=>'Arsene Lupin',
				  	  'pengarang'=>'Maurice LeBlanc',
				  	  'harga'=>250000,
				  	  'stok'=>50),
				array('judul'=>'Games Of Throne',
				  	  'pengarang'=>'George R.R.Martin',
				  	  'harga'=>125000,
				  	  'stok'=>60),
                 );
    
    echo "<table border='1' cellpadding='10'>";
    echo "<thead><th colspan='4'> <h3><b>Daftar Buku</b></h3> </th></thead>
          <th><b>Judul</b></th>
          <th><b>Pengarang</b></th>
          <th><b>Harga</b></th>
          <th><b>Stok</b></th>";
    
    for($x=0;$x<count($list);$x++){
        echo "<tr>";
        echo "<td>".$list[$x]['judul']."</td>";
        echo "<td>".$list[$x]['pengarang']."</td>";  
        echo "<td>".$list[$x]['harga']."</td>";  
        echo "<td>".$list[$x]['stok']."</td>";  
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<table border=0 cellpadding=10>
          <tr>
            <td></td>
          </tr>   
          </table>";

    $pembelian = array(
                    array('judul'=>'Sherlock Holmes',
                          'jumlah'=>5),
                    array('judul'=>'Arsene Lupin',
                          'jumlah'=>2),
                    array('judul'=>'Game Of Throne',
                          'jumlah'=>4),
                      );
    $total = 0;
    echo "<table border='1' cellpadding='10'>";
    echo "<thead><th colspan='3'> <h3><b>Daftar Pembelian</b></h3> </th></thead>
          <th><b>Judul</b></th>
          <th><b>Jumlah<b></th>
          <th><b>Harga</b></th>
          ";
          
    for($x=0;$x<count($pembelian);$x++){
        echo "<tr>";
        echo "<td>".$pembelian[$x]['judul']."</td>";
        echo "<td>".$pembelian[$x]['jumlah']."</td>";
        for($y=0;$y<count($list);$y++){
            if($pembelian[$x]['judul']==$list[$y]['judul']){
                $harga = $list[$y]['harga']*$pembelian[$x]['jumlah'];
                break;
            }
        } $total = $total + $harga;
          echo "<td>".$harga."</td>";  
          echo "</tr>";
    } echo "<tr>
      <td colspan='2'><b>Total Harga</b></td>
      <td>".$total."</td>
      </tr>";
      echo "</table>";
?>