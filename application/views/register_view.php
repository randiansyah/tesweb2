<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran User</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class='container' style='margin-top: 40px;'>
        <div class='row'>
            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
                <div class='panel panel-default'>
                    <div class='panel-body'>
                        <!-- validation message for a successful registration -->
                        <?php if ($this->session->flashdata('success')) {?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                          <?php  } ?>

                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>

                        <?php echo form_open_multipart('Register/registerUser') ?>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="fname">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="contact">No Telp</label>
                                <input type="text" class="form-control" name="noTelp" id="noTelp" placeholder="No Telp">
                            </div>
                            <div class="form-group">
						
                                <label for="jeniskelamin">Jenis Kelamin</label>
                <div class="radio">
          <label><input type="radio" name="jeniskelamin" id="jeniskelamin"value='Pria'>Pria</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="jeniskelamin" id="jeniskelamin" value="Wanita">Wanita </label>
        </div>
                            </div>
							  <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                              <select multiple="multiple" name="pekerjaan[]" id="pekerjaan" class="form-control form-control-sm">
  <option>Pilih</option>
  <option value="Karyawan Swasta">Karyawan Swasta</option>
  <option value="Pegawai Negri">Pegawai Negri</option>
  <option value="Belum Bekerja">Belum Berkerja</option>
</select>
                            </div>
							 <div class="form-group">
                                <label for="photo">Upload Photo</label>
                              <input name="userfile" id="userfile" type="file" class="form-control">
 
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" id="password" placeholder="Ulangi Password">
                            </div>
                            <button class="btn btn-primary" name='reg'>Daftar</button>
                            <a href="<?php echo site_url('Home/Login') ?>" class="btn btn-link">Masuk</a>

                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
