

<?php $__env->startSection('content'); ?>
    <h1>Data Organisasi Mahasiswa</h1>

    <a href="<?php echo e(route('organisasi.create')); ?>">Tambah Organisasi</a>

    <form action="<?php echo e(route('organisasi.index')); ?>" method="GET" style="margin-top: 15px; margin-bottom: 15px;">
        <input type="text" name="search" placeholder="Cari nama organisasi..." value="<?php echo e(request('search')); ?>">
        <button type="submit">Cari</button>
    </form>

    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Nama Organisasi</th>
            <th>Jenis</th>
            <th>Fakultas</th>
            <th>Tahun Berdiri</th>
            <th>Status</th>
            <th>Nomor Telepon</th>
            <th>Media Sosial</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($org->id); ?></td>
            <td><?php echo e($org->nama_organisasi); ?></td>
            <td><?php echo e($org->jenis_organisasi); ?></td>
            <td><?php echo e($org->fakultas); ?></td>
            <td><?php echo e($org->tahun_berdiri); ?></td>
            <td><?php echo e($org->status_aktif ? 'Aktif' : 'Tidak Aktif'); ?></td>
            <td><?php echo e($org->nomor_telepon); ?></td>
            <td><?php echo e($org->media_sosial); ?></td>
            <td>
                <a href="<?php echo e(route('organisasi.edit', $org->id)); ?>">Edit</a>
                <form action="<?php echo e(route('organisasi.destroy', $org->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 4\PraktikumPemWeb\231110155_UAS\manajemen-organisasi-mahasiswa\resources\views/organisasi/index.blade.php ENDPATH**/ ?>