

<?php $__env->startSection('content'); ?>
    <h1>Tambah Kegiatan</h1>

    <form action="<?php echo e(route('kegiatan.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p>
            <label>Organisasi:</label><br>
            <select name="organisasi_id" required>
                <?php $__currentLoopData = $organisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($org->id); ?>"><?php echo e($org->nama_organisasi); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </p>
        <p>
            <label>Nama Kegiatan:</label><br>
            <input type="text" name="nama_kegiatan" required>
        </p>
        <p>
            <label>Tanggal Kegiatan:</label><br>
            <input type="date" name="tanggal_kegiatan" required>
        </p>
        <p>
            <label>Lokasi:</label><br>
            <input type="text" name="lokasi">
        </p>
        <p>
            <label>Deskripsi:</label><br>
            <textarea name="deskripsi" rows="4" cols="40"></textarea>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p><a href="<?php echo e(route('kegiatan.index')); ?>">Kembali</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\PraktikumPemWeb\231110155_UAS\manajemen-organisasi-mahasiswa\resources\views/kegiatan/create.blade.php ENDPATH**/ ?>