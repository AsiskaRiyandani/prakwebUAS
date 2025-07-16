

<?php $__env->startSection('content'); ?>
    <h1>Edit Organisasi Mahasiswa</h1>

    <form action="<?php echo e(route('organisasi.update', $data->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <p>
            <label>Nama Organisasi:</label><br>
            <input type="text" name="nama_organisasi" value="<?php echo e($data->nama_organisasi); ?>" required>
        </p>
        <p>
            <label>Jenis Organisasi:</label><br>
            <input type="text" name="jenis_organisasi" value="<?php echo e($data->jenis_organisasi); ?>" required>
        </p>
        <p>
            <label>Fakultas:</label><br>
            <input type="text" name="fakultas" value="<?php echo e($data->fakultas); ?>" required>
        </p>
        <p>
            <label>Tahun Berdiri:</label><br>
            <input type="number" name="tahun_berdiri" value="<?php echo e($data->tahun_berdiri); ?>" min="1900" max="<?php echo e(date('Y')); ?>">
        </p>
        <p>
            <label>Status Aktif:</label><br>
            <select name="status_aktif">
                <option value="1" <?php echo e($data->status_aktif ? 'selected' : ''); ?>>Aktif</option>
                <option value="0" <?php echo e(!$data->status_aktif ? 'selected' : ''); ?>>Tidak Aktif</option>
            </select>
        </p>
        <p>
            <label>Nomor Telepon:</label><br>
            <input type="text" name="nomor_telepon" value="<?php echo e($data->nomor_telepon); ?>">
        </p>
        <p>
            <label>Media Sosial:</label><br>
            <textarea name="media_sosial" rows="3"><?php echo e($data->media_sosial); ?></textarea>
        </p>
        <p>
            <button type="submit">Update</button>
        </p>
    </form>

    <p>
        <a href="<?php echo e(route('organisasi.index')); ?>">Kembali</a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\PraktikumPemWeb\231110155_UAS\manajemen-organisasi-mahasiswa\resources\views/organisasi/edit.blade.php ENDPATH**/ ?>