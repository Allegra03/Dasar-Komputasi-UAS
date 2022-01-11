<!DOCTYPE html>
<html>
    <head>
        <title>.:Dinus Student Blog:.</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style-buku-tamu.css">
    </head>
    <!--Body-->
    <body>
         <!--Navbar-->
		<h1>--Buku Tamu</h1>
		<div class="nav-container">
			<div class="navcontent">
				<ul>
					<li><a href="Beranda.html">Home</a></li>
					<li><a href="Profil.html">About</a></li>
					<li><a href="Artikel.html">Blog</a></li>
					<li><a href="#">Buku Tamu</a></li>
				</ul>
			</div>
		</div>
    	<!--Akhir Navbar-->

        <div class="konten">
                <h2>Form Buku Tamu</h2> 
                <div class="form-border">
                    <div class="form">
                        <form action="<?php echo $_SERVER ['PHP_SELF']?>" method="POST" on submit="validasi()">
                            Nama Lengkap : <br>
                            <input type="text" name="Nama_Lengkap" size="55" class="input-text" id="name"><br><br>
                            Jenis Kelamin : <br>
                            <input type="radio" name="Jenis_Kelamin" value="L" class="radio" id="gender">Laki Laki
                            <input type="radio" name="Jenis_Kelamin" value="P" class="radio" id="gender">Perempuan
                            <br><br>
                            Alamat Tinggal : <br>
                            <textarea name="Pesan" cols="71" rows="5" id="alamat"></textarea><br><br>
                            Email : <br>
                            <input type="email" name="Email" size="55" class="input-text" id="email"><br><br>
                            Aktif Pada Sosial Media : <br>
                            <input type="checkbox" name="Facebook" value="Ya" class="radio" id="sosmed">Facebook
                            <input type="checkbox" name="Twitter" value="Ya" class="radio" id="sosmed">Twitter
                            <input type="checkbox" name="Instagram" value="Ya" class="radio" id="sosmed">Instagram
                            <input type="checkbox" name="Path" value="Ya" class="radio" id="sosmed">Path
                            <br><br>
                            Mengetahui Web ini dari : <br>
                            <select name="Info" class="select" id="info">
                                <option selected="select">-=Pilih=-</option>
                                <option value="web_udinus">Web Udinus</option>
                                <option value="surat_kabar">Surat Kabar</option>
                                <option value="teman">Teman</option>
                                <option value="browsing">Browsing</option>
                            </select>
                            <br><br>
                            Pesan : <br>
                            <textarea name="Pesan" cols="71" rows="5" id="pesan"></textarea>
                            <br><br>
                            <input type="submit" value="Kirim" class="button-send">
                            <input type="reset" value="Reset" class="button-reset">
                        </form>
                    </div>
                </div>
            </div>

            <script>
                function validasi() {
                    var name = document.getElementById("name").value;
                    var gender = document.getElementById("gender").value;
                    var alamat = document.getElementById("alamat").value;
                    var email = document.getElementById("email").value; 
                    var sosmed = document.getElementById("sosmed").value;
                    var info = document.getElementById("info").value;
                    var pesan = document.getElementById("pesan").value;
                    
                    if (name == "" || gender == "" || alamat == "" || email == "" || sosmed == "" || info == "" || pesan == "") {
                        alert ("Silahkan mengisi data dengan lengkap!")
                    } else {
                    return true
                    }
                }
            </script>

            <br>
            <div>
                <?php
                    echo $_POST['name'];

                     if(isset($_POST['name'])){
                        $name = $_POST['name'];
                        $gender = $_POST['gender'];
                        $alamat = $_POST['alamat'];
                        $email = $_POST['email'];
                        $sosmed = $_POST['sosmed'];
                        $info = $_POST['info'];
                        $pesan = $_POST['pesan'];
        
                    echo"
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Sosmed</th>
                                <th>Info</th>
                                <th>Pesan</th>
                            </tr>
                            <tr>
                                <td>$nama</td>
                                <td>$gender</td>                            
                                <td>$alamat</td>
                                <td>$email</td>
                                <td>$sosmed</td>                            
                                <td>$info</td>
                                <td>$pesan</td>
                            </tr>
                        </table>";
                    }
                ?>
            </div>
    </body>
</html>