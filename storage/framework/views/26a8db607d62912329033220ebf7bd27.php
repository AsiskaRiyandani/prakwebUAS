

<?php $__env->startSection('content'); ?>
    <h1>Tambah Organisasi Mahasiswa</h1>

    <form action="<?php echo e(route('organisasi.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p>
            <label>Nama Organisasi:</label><br>
            <input type="text" name="nama_organisasi" required>
        </p>
        <p>
            <label>Jenis Organisasi:</label><br>
            <input type="text" name="jenis_organisasi" placeholder="Contoh: UKM, HMJ, BEM" required>
        </p>
        <p>
            <label>Fakultas:</label><br>
            <input type="text" name="fakultas" required>
        </p>
        <p>
            <label>Tahun Berdiri:</label><br>
            <input type="number" name="tahun_berdiri" min="1900" max="<?php echo e(date('Y')); ?>">
        </p>
        <p>
            <label>Status Aktif:</label><br>
            <select name="status_aktif">
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
        </p>
        <p>
            <label>Nomor Telepon:</label><br>
            <input type="text" name="nomor_telepon">
        </p>
        <p>
            <label>Media Sosial:</label><br>
            <textarea name="media_sosial" rows="3"></textarea>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p>
        <a href="<?php echo e(route('organisasi.index')); ?>">Kembali</a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\PraktikumPemWeb\231110155_UAS\manajemen-organisasi-mahasiswa\resources\views/organisasi/create.blade.php ENDPATH**/ ?>