

<?php $__env->startSection('content'); ?>
    <h1>Tambah Anggota Anggota</h1>

    <form action="<?php echo e(route('anggota.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p>
            <label>Nama Anggota:</label><br>
            <input type="text" name="nama_anggota" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Organisasi:</label><br>
            <select name="organisasi_id" required>
                <option value="">-- Pilih Organisasi --</option>
                <?php $__currentLoopData = $organisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($org->id); ?>"><?php echo e($org->nama_organisasi); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p><a href="<?php echo e(route('anggota.index')); ?>">Kembali</a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\PraktikumPemWeb\231110155_UAS\manajemen-organisasi-mahasiswa\resources\views/anggota/create.blade.php ENDPATH**/ ?>