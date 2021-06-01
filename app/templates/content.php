<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'pegawai':
			require_once 'app/pegawai/views/index.php';
			break;
		case 'tambah-pegawai':
			require_once 'app/pegawai/views/create.php';
			break;
		case 'edit-pegawai':
			require_once 'app/pegawai/views/edit.php';
			break;
		case 'hapus-pegawai':
			require_once 'app/pegawai/proses/delete.php';
			break;
		case 'pasien':
			require_once 'app/pasien/views/index.php';
			break;
		case 'tambah-pasien':
			require_once 'app/pasien/views/create.php';
			break;
		case 'edit-pasien':
			require_once 'app/pasien/views/edit.php';
			break;
		case 'hapus-pasien':
			require_once 'app/pasien/proses/delete.php';
			break;
		case 'obat':
			require_once 'app/obat/views/index.php';
			break;
		case 'tambah-obat':
			require_once 'app/obat/views/create.php';
			break;
		case 'edit-obat':
			require_once 'app/obat/views/edit.php';
			break;
		case 'hapus-obat':
			require_once 'app/obat/proses/delete.php';
			break;
		case 'tindakan':
			require_once 'app/tindakan/views/index.php';
			break;
		case 'tambah-tindakan':
			require_once 'app/tindakan/views/create.php';
			break;
		case 'hapus-tindakan':
			require_once 'app/tindakan/proses/delete.php';
			break;
		case 'lap-tindakan':
			require_once 'app/laporan/views/tindakan.php';
			break;
		case 'wilayah':
			require_once 'app/wilayah/views/index.php';
			break;
		case 'tambah-wilayah':
			require_once 'app/wilayah/views/create.php';
			break;
		case 'edit-wilayah':
			require_once 'app/wilayah/views/edit.php';
			break;
		case 'hapus-wilayah':
			require_once 'app/wilayah/proses/delete.php';
			break;
		case 'user':
			require_once 'app/user/views/index.php';
			break;
		case 'tambah-user':
			require_once 'app/user/views/create.php';
			break;
		case 'edit-user':
			require_once 'app/user/views/edit.php';
			break;
		case 'hapus-user':
			require_once 'app/user/proses/delete.php';
			break;
		case 'tagihan':
			require_once 'app/tagihan/views/index.php';
			break;
	}
} else {
	require_once 'app/dashboard/views/index.php';
}
