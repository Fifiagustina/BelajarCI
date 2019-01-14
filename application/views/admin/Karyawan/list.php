<table class="table table-hover" border="1px" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Telpon</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $karyawan->karyawan_id ?>
										</td>
										<td>
											<?php echo $karyawan->karyawan_name ?>
										</td>
                    <td>
											<?php echo $karyawan->karyawan_address ?>
										</td>
                    <td>
											<?php echo $karyawan->karyawan_telp ?>
										</td>

									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
