<div class="container">
	<center>
		<table>
			<tr>
				<td>
					<div class="table-responsive full-width">
						<table class="table table-bordered table-striped table-hover" id="table-datatable">
							<tr>
								<th>No</th>
								<th>Buku</th>
								<th>Penulis</th>
								<th>Penerbit</th>
								<th>Tahun</th>
								<th>Pilihan</th>
							</tr>
							<?php 
							$no=1;
							foreach ($temp as $t) {
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td>
									<img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" width="10%">

								</td>
								<td nowrap><?php echo $t['penulis']; ?></td>
								<td nowrap><?php echo $t['penerbit']; ?></td>
								<td nowrap><?php echo $t['tahun_terbit']; ?></td>
								<td nowrap>
									<a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']);?>" 
										onclick="return confirm('Yakin tidak jadi booking <?=$judul.' ' . $t['judul_buku'];?> ?');">
										<i class="btn btn-sm btn-outline-danger fas fw fa-trash"></i></a>
								</td>
							</tr>
						<?php $no++;
						} ?>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>"><span class="fas fw fa-play"></span>Lanjutkan Booking Buku</a><a class="btn btn-sm btn-outline-success" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>"><span class="fas fw fa-stop"></span>Selesai Booking</a>
				</td>
			</tr>
		</table>
	</center>
</div>