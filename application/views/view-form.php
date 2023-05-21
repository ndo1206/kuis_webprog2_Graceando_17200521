<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('data_siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('nama') ?>
                </td>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" value="<?= set_value('nis') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('nis') ?>
                </td>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas" value="<?= set_value('kelas') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('kelas') ?>
                </td>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('tanggal_lahir') ?>
                </td>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmpt_lahir" id="tmpt_lahir" value="<?= set_value('tmpt_lahir') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('tmpt_lahir') ?>
                </td>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('alamat') ?>
                </td>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jns_kelamin" id="jns_kelamin" value="laki-laki" <?php echo  set_radio('jns_kelamin', 'laki-laki'); ?> >
                        <label for="jns_kelamin">laki-laki</label>
                        <input type="radio" name="jns_kelamin" value="perempuan" <?php echo  set_radio('jns_kelamin', 'perempuan'); ?> >
                        <label for="jns_kelamin">perempuan</label>
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?= form_error('jns_kelamin') ?>
                </td>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="islam" <?php echo set_select('agama', 'islam') ?> >Islam</option>
                            <option value="kristen" <?php echo set_select('agama', 'kristen') ?>>Kristen</option>
                            <option value="katolik" <?php echo set_select('agama', 'katolik') ?>>Katolik</option>
                            <option value="hindu" <?php echo set_select('agama', 'hindu') ?>>Hindu</option>
                            <option value="budha" <?php echo set_select('agama', 'budha') ?>>Budha</option>
                            <option value="protestan" <?php echo set_select('agama', 'protestan') ?>>Protestan</option>
                            <option value="khonghucu" <?php echo set_select('agama', 'khonghucu') ?>>Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <td colspan="3" style="font-size: 10px; color:red; text-align:center;">
                    <?php echo form_error('agama');?>
                </td>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>