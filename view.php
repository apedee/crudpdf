<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>
			<th>NAMA</th>
			<th>TANGGAL LAHIR</th>
			<th>TEMPAT LAHIR</th>
			<th>JENIS KELAMIN</th>
			<th>NO.HP PRIBADI</th>
			<th>ALAMAT</th>
			<th>NAMA AYAH</th>
			<th>NO.HP AYAH</th>
			<th>NAMA IBU</th>
			<th>NO.HP IBU</th>
			<th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
		</tr>
		<?php
        $no = 1;
		foreach($model as $data){
		?>
		
			<tr>
				<td class="align-middle text-center"><?php echo $no; ?></td>
				<td class="align-middle"><?php echo $data->nama; ?></td>
				<td class="align-middle"><?php echo $data->tgl; ?></td>
				<td class="align-middle"><?php echo $data->tempat; ?></td>
				<td class="align-middle"><?php echo $data->jenis_kelamin; ?></td>
				<td class="align-middle"><?php echo $data->telp; ?></td>
				<td class="align-middle"><?php echo $data->alamat; ?></td>
				<td class="align-middle"><?php echo $data->ayah; ?></td>
				<td class="align-middle"><?php echo $data->nohpayah; ?></td>
				<td class="align-middle"><?php echo $data->ibu; ?></td>
				<td class="align-middle"><?php echo $data->nohpibu; ?></td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-default btn-form-ubah"><span class="glyphicon glyphicon-pencil"></span></a>

                    <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
        			<input type="hidden" class="nama-value" value="<?php echo $data->nama; ?>">
        			<input type="hidden" class="tgl-value" value="<?php echo $data->tgl; ?>">
        			<input type="hidden" class="tempat-value" value="<?php echo $data->tempat; ?>">
        			<input type="hidden" class="jeniskelamin-value" value="<?php echo $data->jenis_kelamin; ?>">
        			<input type="hidden" class="telp-value" value="<?php echo $data->telp; ?>">
        			<input type="hidden" class="alamat-value" value="<?php echo $data->alamat; ?>">
        			<input type="hidden" class="ayah-value" value="<?php echo $data->ayah; ?>">
        			<input type="hidden" class="nohpayahh-value" value="<?php echo $data->nohpayah; ?>">
        			<input type="hidden" class="ibu-value" value="<?php echo $data->ibu; ?>">
        			<input type="hidden" class="nohpibu-value" value="<?php echo $data->nohpibu; ?>">
				</td>
				<td class="align-middle text-center">
					<a href="javascript:void();" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus"><span class="glyphicon glyphicon-erase"></span></a>
				</td>
			</tr>
		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
	</table>
</div>
