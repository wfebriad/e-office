<?php
//cek session
if(!empty($_SESSION['admin'])){
    $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
    while($data = mysqli_fetch_array($query)){
        echo '
        <div class="col s12" id="header-instansi">
        <div class="card blue-grey white-text">
        <div class="card-content">';
        if(!empty($data['logo'])){
            echo '<div class="circle left"><img class="logo" src="./upload/'.$data['logo'].'"/></div>';
        } else {
            echo '<div class="circle left"><img class="logo" src="./asset/img/logo.png"/></div>';
        }
        
        if(!empty($data['nama'])){
            echo '<h5 class="ins">'.$data['nama'].'</h5>';
        } else {
            echo '<h5 class="ins">DISTRIK NAVIGASI KELAS 1 TANJUNGPINANG</h5>';
        }
        
        if(!empty($data['alamat'])){
            echo '<p><i class="material-icons">place</i>'.$data['alamat'].'</p>';
        } else {
            echo '<p class="almt">Jl. Sei Walang Kijang Kepulauan Riau 29151</p><br/>';
        }
        if(!empty($data['website'])){
            echo '<p><i class="material-icons">public</i> '.substr($data['website'],7,50).'</p>';
        } else {
            echo '<p class="description-side">disnavtanjungpinang.id</p>';
        }
        if(!empty($data['email'])){
            echo '<p><i class="material-icons">mail_outline</i> '.$data['email'].'</p>';
        } else {
            echo '<p class="description-side">disnavtanjungpinang@dephub.go.id</p>';
        }
        echo '
        </div>
        </div>
        </div>';
    }
} else {
    header("Location: ../");
    die();
}
?>