# TUGAS II

Dokumentasi Selama Praktikum <br>

CRUD Menggunakan OOP PHP, Modal, Ajax

## Preview

![Preview](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/1.png)

## Running Program

![1](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/1.png)
Tampilan Awal Program <br>

![2](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/2.png)
Ketika Tombol `Add` diklik, dan muncul modal untuk mengisi data <br>

![3](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/3.png)
Data setelah diinputkan <br>

![4](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/4.png)
Ketika Tombol `Edit` diklik, dan muncul modal untuk mengedit data <br>

![5](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/5.png)
Data setelah diedit <br>

![6](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/6.png)
Ketika Tombol `Delete` diklik, dan muncul modal untuk konfirmasi menghapus data <br>

![7](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/TugasII/Screenshot/7.png)
Data setelah dihapus <br>


## Penjelasan

* [HTML](#HTML)
* [JavaScript](#JavaScript)
* [PHP](#PHP)

### HTML

Bagian untuk memuat tabel <br>
```html
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Baned</th>
                            <th>Login Time</th>
                            <th>Akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="userlist">
                        <?php
                        $i = 1;
                        foreach ($result as $value) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $value['id']; ?></td>
                                <td><?php echo $value['username']; ?></td>
                                <td><?php echo $value['fullname']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><?php echo $value['telp']; ?></td>
                                <td><?php echo $value['baned']; ?></td>
                                <td><?php echo $value['logintime']; ?></td>
                                <td><?php echo $value['akses']; ?></td>
                                <td nowrap>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-list"></i> Detail
                                    </button>
                                    <button type="button" onclick="showModalEdt(<?php echo $value['id']; ?>);" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <button type="button" onclick="showModalDel(<?php echo $value['id']; ?>,'<?php echo $value['fullname']; ?>');" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Del 
                                    </button>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
```

Modal untuk melakukan penginputan/mengedit data <br>
```html
            <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel01">
                                Input Data User
                            </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form-user">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!--label for="recipient-name" class="form-control-label">Recipient:</label-->
                                            <input type="hidden" name="usrid" id="idusr">
                                            <input type="hidden" name="proc" value="usrin">
                                            <input type="text" name="username" class="form-control" id="username" placeholder="user name">
                                        </div>                                    
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="recipient-name" placeholder="password">
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="full name">
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="email">
                                        </div>                                    
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <input type="number" name="telp" class="form-control" id="telp" placeholder="telephone">
                                        </div>                                    
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="rdbaned" class="form-control-label">Banned:</label>
                                            <div class="custom-control custom-radio" id="rdbaned">
                                                <input type="radio" id="customRadio1" name="baned" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="baned" value="N" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="cbaccess" class="form-control-label">Access:</label>
                                            <div class="custom-control custom-checkbox" id="cbaccess">
                                                <input type="checkbox" name="akses[]" value="1" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Administrator</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="akses[]" value="2" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Operator</label>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button onclick="insertUser();" class="btn btn-success" type="button" data-dismiss="modal">
                                <i class="fa fa-save"></i> Save
                            </button>
                            <button class="btn btn-primary" type="button" data-dismiss="modal">
                                <i class="fa fa-pencil"></i> Clear
                            </button>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">
                                <i class="fa fa-close"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
```

Modal untuk menghapus data <br>
```html
            <div class="modal fade" id="ModalDel" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-danger">
                            <h5 class="modal-title" id="ModalLabel01">
                                Hapus Data User
                            </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color: red; font-size: larger;text-align: center">Yakin menghapus data berikut..?</p>
                            <h3 id="nmusr" style="text-align: center; color: #d9534f"></h3>
                            <form id="form-userdel">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="usrid" id="usriddel">
                                            <input type="hidden" name="proc" value="usrdel">
                                        </div>                                    
                                    </div>
                                </div>        
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button onclick="deleteUser();" class="btn btn-danger" type="button" data-dismiss="modal">
                                <i class="fa fa-save"></i> Delete
                            </button>
                            <button class="btn btn-info" type="button" data-dismiss="modal">
                                <i class="fa fa-close"></i> Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
```

### JavaScript

Bagian untuk memanggil modal dan mengeksekusi program untuk pengisian data <br>

- Memanggil modal input data <br>
	```js
	function showModalKu() {
		$('#idusr').val(0);
		$('#username').val('');
		$('#fullname').val('');
		$('#email').val('');
		$('#telp').val('');
		$('#ModalKu').modal('show'); 
	} 
	```

- Memanggil modal edit data <br>
```js
            function showModalEdt(dt) {
                $.ajax({
                    type: "POST",
                    url: "execute.php",
                    data: "proc=usredt&usrid="+dt,
                    cache: false,
                    dataType: "json",
                    success: function (data) {
                        //console.log(data);
                        $('#idusr').val(data.id);
                        $('#username').val(data.username);
                        $('#fullname').val(data.fullname);
                        $('#email').val(data.email);
                        $('#telp').val(data.telp);
                        $('#ModalKu').modal('show');
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }
```

- Memanggil modal hapus data
```js
            function showModalDel(id,nm) {
                $('#usriddel').val(id);
                $('#nmusr').text(nm);
                $('#ModalDel').modal('show');                
            }
```

- Melakukan insert data dengan ajax
```js
            function insertUser() {
                $.ajax({
                    type: "POST",
                    url: "execute.php",
                    data: $("#form-user").serialize(),
                    cache: false,
                    dataType: "json",
                    success: function (data) {
                        //console.log(data);
                        if(data[0]==0){
                            alert(data[1]);
                        }else{
                            $("#userlist").html(data[1]);
                        }
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }
```

- Melakukan delete data dengan ajax
```js
            function deleteUser() {
                $.ajax({
                    type: "POST",
                    url: "execute.php",
                    data: $("#form-userdel").serialize(),
                    cache: false,
                    dataType: "json",
                    success: function (data) {
                        //console.log(data);
                        if(data[0]==0){
                            alert(data[1]);
                        }else{
                            $("#userlist").html(data[1]);
                        }
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }  
```

### PHP

- Config Database
```php
<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','proweb');

class Dbconfig {
    var $conn;
    function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            echo $this->conn->connect_error;
        }
    }
}
```

- Koneksi dengan database
```php
<?php

include_once 'dbconfig.php';
class Dao {
    var $link;
    public function __construct() {
        $this->link = new Dbconfig();
    }
    public function read() {
        $query = "SELECT * FROM users ORDER BY id ASC";
        return mysqli_query($this->link->conn, $query);
    }    
    public function execute($query) {
        $result = mysqli_query($this->link->conn, $query);
        if ($result) {
            return $result;
        }else {
            return mysqli_error($this->link->conn);
        }
         
    }
}
```

- Bagian melakukan insert, update, dan delete data <br>
```php
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include_once 'config/dao.php';
$dao = new Dao();
/* ================================================== */
$proc = $_POST['proc'];
$usrid = $_POST['usrid'];
if ($proc == "usrdel") {
    $query = "DELETE FROM users WHERE id=$usrid";
}elseif ($proc == "usrin" && $usrid == 0) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $baned = $_POST['baned'];
    $akses = $_POST['akses'];
    $aks = 0;
    for ($index = 0; $index < count($akses); $index++) {
        $aks = $aks + $_POST['akses'][$index];
    }
    //end for
    $query = "INSERT INTO users (username,fullname,password,email,telp,baned,akses) "
            . "VALUE ('$username','$fullname',"
            . "PASSWORD('$password'),'$email','$telp','$baned',$aks)";    
}elseif ($proc == "usredt" && $usrid > 0) {
    $query = "SELECT id,username,fullname,email,telp,baned,akses FROM users WHERE id=".$usrid;
    $result = $dao->execute($query);
    $list = mysqli_fetch_array($result);
    echo json_encode($list);
    exit();
}elseif ($proc == "usrin" && $usrid > 0) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $query = "UPDATE users SET username='$username',fullname='$fullname',email='$email',telp='$telp' WHERE id=".$usrid;    
}

$in = $dao->execute($query);

if (!$in) {
    $msg[0] = "0";
    $msg[1] = $in;
} else {
    $result = $dao->read();
    $i = 1;
    $userlist = "";
    $msg[0] = "1";
    foreach ($result as $value) {
        $userlist .= "<tr>
                <td>" . $i . "</td>
                <td>" . $value['id'] . "</td>
                <td>" . $value['username'] . "</td>
                <td>" . $value['fullname'] . "</td>
                <td>" . $value['email'] . "</td>
                <td>" . $value['telp'] . "</td>
                <td>" . $value['baned'] . "</td>
                <td>" . $value['logintime'] . "</td>
                <td>" . $value['akses'] . "</td>
                <td nowrap>
                    <button type=\"button\" class=\"btn btn-primary btn-sm\">
                        <i class=\"fa fa-list\"></i> Detail
                    </button>
                    <button type=\"button\" onclick=\"showModalEdt(".$value['id'].");\" class=\"btn btn-success btn-sm\">
                        <i class=\"fa fa-edit\"></i> Edit
                    </button>
                    <button type=\"button\" onclick=\"showModalDel(".$value['id'].",'".$value['fullname']."');\" class=\"btn btn-danger btn-sm\">
                        <i class=\"fa fa-trash\"></i> Del 
                    </button>
                </td>
            </tr>";
        $i++;
    }
    $msg[1] = $userlist;
}
/* ================================================== */
echo json_encode($msg);
```


Kumpulan Tugas-Tugas Pemrograman Web beserta dokumentasi : [Tugas Proweb](https://github.com/fikriomar16/tugasproweb/)