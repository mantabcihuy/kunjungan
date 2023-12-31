<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Input Matakuliah</h1>
        </div>

        <div class="section-body">
            <center>
                <form action="<?= base_url('dist/cetak'); ?>" method="post">
                    <table>
                        <tr>
                            <th colspan="3">Form Input Data Mata Kuliah</th>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th>Kode MTK</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="kode" id="kode">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <?= form_error('kode'); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama MTK</th>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama" id="nama">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <?= form_error('nama'); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>SKS</th>
                            <td>:</td>
                            <td>
                                <select name="sks" id="sks">
                                    <option value="">Pilih SKS</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>