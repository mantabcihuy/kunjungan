<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tampil Data Mata Kuliah</h1>
        </div>

        <center>
            <table>
                <tr>
                    <th colspan="3"> Tampil Data Mata Kuliah </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td> <?= $kode; ?> </td>
                </tr>
                <tr>
                    <td>Nama MTK</td>
                    <td>:</td>
                    <td> <?= $nama; ?> </td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td>:</td>
                    <td> <?= $sks; ?> </td>
                </tr>
                <tr>
                    <td colspan="3" align="center"> <a href="<?= base_url('dist/view_form_matakuliah'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
                        <div class="section-body">
                        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>