<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tampil Data Matakuliah</h1>
        </div>

        <div class="section-body">
            <center>
                <table>
                    <tr>
                        <th colspan="3">
                            Tampil Data Mata Kuliah
                        </th>
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
                            <?= $kode; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama MTK</td>
                        <td>:</td>
                        <td>
                            <?= $nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>SKS</td>
                        <td>:</td>
                        <td>
                            <?= $sks; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <a href="<?= base_url('dist/view_form_matakuliah'); ?>">Kembali</a>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>